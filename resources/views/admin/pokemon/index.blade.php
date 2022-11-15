@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header"> 
        Create Pokemons
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('admin.pokemon.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Type:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="type" value="{{ old('type') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Weakness:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="weakness" value="{{ old('weakness') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Ability:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="ability" value="{{ old('ability') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Height:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="height" value="{{ old('height') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Weight:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="weight" value="{{ old('weight') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Cost:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="cost" value="{{ old('cost') }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                </div>
                <div class="col"> 
                    &nbsp;
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<div class="card">
    <div class="card-header"> 
        Manage Pokemons
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">History</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["pokemons"] as $product)
                <tr>
                    <td>{{ $pokemon->getId() }}</td>
                    <td>{{ $pokemon->getName() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.pokemon.edit', ['id'=> $pokemon->getId()])}}">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.pokemon.delete', $pokemon->getId())}}" method="POST"> 
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"> <i class="bi-trash"></i>
                            </button> 
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.historyPokemon.index', ['id'=> $pokemon->getId()])}}">
                            <i class="bi bi-clipboard"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection