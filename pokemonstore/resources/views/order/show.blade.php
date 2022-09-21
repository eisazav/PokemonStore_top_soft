@extends('layout.app')
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
        id: {{ $viewData["order"]->getId() }}
        </h5>
        <p class="card-text">status: {{ $viewData["order"]->getStatus() }}</p>
        <p class="card-text">dateOrder: {{ $viewData["order"]->getDateOrder() }}</p>
        <p class="card-text">dateDelivery: {{ $viewData["order"]->getDateDelivery() }}</p>
        <p class="card-text">paymentMethod: {{ $viewData["order"]->getpayMentMethod() }}</p>
      </div>
    </div>
  </div>
</div>
@endsection