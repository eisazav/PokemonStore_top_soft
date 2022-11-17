@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Carrito</h1>
    <ul>
        @if (!is_null($viewData) && isset($viewData['pokemons']))
        @foreach($viewData["pokemons"] as $key => $pokemon)
        <li>
            <div class="row justify-content-center">
                <p>
                    ID: {{ $pokemon->getId() }} -
                    Nombre: {{ $pokemon->getName() }} -
                    Precio: {{ $pokemon->getCost() }}
                    <a class="btn bg-danger text-white" href="{{ route('cart.remove', ['id'=> $pokemon->getId()]) }}">X</a>
                </p>
            </div>
        </li>
        @endforeach
        @endif
    </ul>
    <h3>
        Precio total: {{$viewData["total"]}}
    </h3>
    <a class="mt-2 btn bg-danger text-white" href="{{ route('cart.removeAll') }}">Vaciar carrito</a>
    <form method="POST" action="{{ route('cart.purchase') }}" enctype="multipart/form-data">
        @csrf
        <label for="paymentMethod">Metodo de pago:</label>
        <select name="paymentMethod" id="paymentMethod">
            <option value="Efectivo">Efectivo</option>
            <option value="Tarjeta">Tarjeta</option>
            <option value="Paypal">Paypal</option>
        </select>
        <input type="submit" class="mt-2 btn bg-primary text-black" value="Comprar" />
    </form>
</div>
@endsection