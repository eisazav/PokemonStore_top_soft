<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Order;
use App\Models\Item;
use App\Models\Pokemon;
use App\Models\Box;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add($id, Request $request)
    {
        $pokemons = $request->session()->get("pokemons");
        $pokemons[$id] = $id;
        $request->session()->put('pokemons', $pokemons);
        return redirect()->route('pokemons.list');
    }

    public function removeAll(Request $request)
    {
        $request->session()->forget('pokemons');
        return back();
    }

    public function remove($id, Request $request)
    {
        $pokemons = $request->session()->get("pokemons");
        unset($pokemons[$id]);
        $request->session()->put('pokemons', $pokemons);
        return back();
    }

    public function index(Request $request)
    {
        $cart = ["total" => 0, "pokemons" => []];
        $pokemons = $request->session()->get('pokemons');
        if (!is_null($pokemons)) {
            foreach ($pokemons as $id) {
                $pokemon = Pokemon::findOrFail($id);
                $cart["pokemons"][$id] = $pokemon;
                $cart["total"] += $pokemon->getCost();
            }
        }

        return view('cart.index')->with("viewData", $cart);
    }

    public function purchase(Request $request)
    {
        $pokemonsIds = $request->session()->get("pokemons");

        if (!is_null($pokemonsIds)) {
            $order = new Order();
            $order->setTotal(0);
            $order->setPaymentMethod($request->get('paymentMethod'));
            $order->setDateOrder(Carbon::now());
            $order->setDateDelivery(Carbon::now()->add(10, 'day'));
            $order->save();
            if (Auth::check()) {
                $order->setUserId(auth()->user()->id);
            } else {
                return redirect()->back();
            }
            $total = 0;
            $pokemons = Pokemon::find(array_values($pokemonsIds));
            foreach ($pokemons as $pokemon) {
                $item = new Item();
                $item->setOrderId($order->getId());
                $item->setPokemonId($pokemon->getId());
                $item->setQuantity(2);
                $total += $pokemon->getCost();
                $item->save();
            }
            $order->setTotal($total);
            $order->save();
            return redirect()->route('orders.show', ['id' => $order->getId()]);
        } else {
            return redirect()->back();
        }
    }
}

