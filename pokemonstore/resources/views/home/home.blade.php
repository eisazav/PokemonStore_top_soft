@extends('layouts.app')
@section('content')
<div class="text-center">
  <h1>{{__('welcome')}}</h1>
</div>
  @foreach ($viewData["orders"] as $order)
  <div class="col-md-4 col-lg-3 mb-3">
    <div class="card">
      <div class="card-body text-center">
        <p>
            {{$order->getId()}}
        </p>
        <a href="{{ route('orders.show', ['id'=> $order->getId()]) }}"
          class="mt-2 btn bg-primary text-white"> status:{{ $order->getStatus()}} id:{{ $order->getId()}}</a>
      </div>
    </div>
  </div>
@endforeach
@endsection