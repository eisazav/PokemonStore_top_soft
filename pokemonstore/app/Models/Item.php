<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pokemon;
use App\Models\Box;
use App\Models\Order;

class Item extends Model
{
    /**
     * ITEM ATTRIBUTES
     * $this->attributes['id'] - int - contains the item primary key (id)
     * $this->attributes['quantity'] - int - contains the items quantity
     * $this->order - order - contains the associated order
     * $this->pokemon - pokemon - contains the associated pokemons
     * $this->box - box - contains the associated boxes
     */

    public static function validate($request)
    {
        $request->validate([
            "quantity" => "required|numeric|gte:0",
        ]);
    }

    protected $fillable = ['quantity'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function setOrder($order)
    {
        $this->order = $order;
    }

    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }

    public function setOrderId($order_id)
    {
        $this->attributes['order_id'] = $order_id;
    }

    public function pokemon()
    {
        return $this->hasMany(Pokemon::class);
    }

    public function getPokemon()
    {
        return $this->pokemon;
    }

    public function setPokemon($pokemon)
    {
        $this->pokemon = $pokemon;
    }

    public function getPokemonId()
    {
        return $this->attributes['pokemon_id'];
    }

    public function setPokemonId($pokemon_id)
    {
        $this->attributes['pokemon_id'] = $pokemon_id;
    }

    public function box()
    {
        return $this->hasMany(Box::class);
    }

    public function getBox()
    {
        return $this->box;
    }

    public function setBox($box)
    {
        $this->box = $box;
    }

    public function getBoxId()
    {
        return $this->attributes['box_id'];
    }

    public function setBoxId($box_id)
    {
        $this->attributes['box_id'] = $box_id;
    }

}
