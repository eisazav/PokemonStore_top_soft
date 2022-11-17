@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

<div class="card mb-4">
    <div class="card-header text-center">
        <h2>Create Users</h2>
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
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
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Email:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Password:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="password" value="{{ old('password') }}" type="password" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Admin:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="admin" value="{{ old('admin') }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </div>
        </form>

    </div>
</div>

<div class="card">
    <div class="card-header text-center">
        <h2>Manage Users</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["users"] as $user)
                <tr>
                    <td>{{ $user->getId() }}</td>
                    <td>{{ $user->getName() }}</td>
                    <td>{{ $user->getEmail() }}</td>
                    <td>{{ $user->getType() }}</td>
                    
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.user.edit', ['id'=> $user->getId()])}}">Edit</a>
                            <i class="bi-pencil"></i>
                    </td>
                    <td>
                        <form action="{{ route('admin.user.delete', $user->getId())}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Delete
                                <i class="bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class=" text-center">
            <a class="btn btn-outline-danger" href="{{route('admin.user.pdf')}}">Create PDF Report</a>
            <a class="btn btn-outline-success" href="{{route('admin.user.excel')}}">Create Excel Report</a>
        </div>
    </div>
</div>
@endsection