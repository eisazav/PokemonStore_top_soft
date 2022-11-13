@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Product
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        @csrf
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="name" value="{{ $viewData['product']->getName() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Brand:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="brand" value="{{ $viewData['product']->getBrand() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Category:</label>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <input name="category" value="{{ $viewData['product']->getCategory() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Weight:</label>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <input name="weight" value="{{ $viewData['product']->getWeight() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Current Price:</label>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <input name="price" value="{{ $viewData['product']->getPrice() }}" type="number" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header"> 
        History Product
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Price</th>
                    <th scope="col">Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["history"] as $history)
                <tr>
                    <td>{{ $history->getId() }}</td>
                    <td>{{ $history->getPrice() }}</td>
                    <td>{{ $history->getUpdatedAt() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection