@extends('layouts.app')
@section('content')
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ __('Id') }}: {{ $viewData["order"]->getId() }}</h5>
          <p class="card-text">{{ __('Status') }}: {{ $viewData["order"]->getStatus() }}</p>
          <p class="card-text">{{ __('Date of Order') }}r: {{ $viewData["order"]->getDateOrder() }}</p>
          <p class="card-text">{{ __('Date of Delivery') }}: {{ $viewData["order"]->getDateDelivery() }}</p>
          <p class="card-text">{{ __('Payment Method') }}: {{ $viewData["order"]->getpayMentMethod() }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
