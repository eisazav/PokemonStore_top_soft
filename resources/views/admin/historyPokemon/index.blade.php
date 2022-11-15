@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Pokemon
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
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Type:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="type" value="{{ $viewData['pokemon']->getType() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Weakness:</label>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <input name="weakness" value="{{ $viewData['pokemon']->getWeakness() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Ability:</label>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <input name="ability" value="{{ $viewData['pokemon']->getAbility() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Height:</label>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <input name="height" value="{{ $viewData['pokemon']->getHeight() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Weight:</label>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <input name="weight" value="{{ $viewData['pokemon']->getWeight() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Cost:</label>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <input name="cost" value="{{ $viewData['pokemon']->getCost() }}" type="number" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header"> 
        History Pokemon
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["history"] as $history)
                <tr>
                    <td>{{ $history->getId() }}</td>
                    <td>{{ $history->getCost() }}</td>
                    <td>{{ $history->getUpdatedAt() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection