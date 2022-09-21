@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresa</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('orders.save') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="status">Status</label>
                        <input type="text" class="form-control mb-2" name="status" value="{{ old('status') }}" />
                        <label for="dateOrder">Order date</label>
                        <input type="date" class="form-control mb-2" name="dateOrder" value="{{ old('dateOrder') }}" />
                        <label for="dateDelivery">Delivery date</label>
                        <input type="date" class="form-control mb-2" name="dateDelivery" value="{{ old('dateDelivery') }}" />
                        <label for="paymentMethod">Payment Method</label>
                        <input type="text" class="form-control mb-2" name="paymentMethod" value="{{ old('paymentMethod') }}" />
                        <input type="submit"  value="Create" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection