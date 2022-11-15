@extends('layouts.admin') 
@section('title', $viewData["title"]) 
@section('content')
<div class="card mb-5">
    <div class="card-header"> 
        Administration Panel - Pokemon Store
    </div>
    <div class="card-body">
        Welcome to the Admin Panel, use the sidebar to navigate between the different options. 
    </div>
</div> 
<div class="card">
    <div class="card-header"> 
    Pokemon Store Data
    </div>
    <div class="card-body">
         <p>{{ $viewData["acumValue"] }}</p>
    </div>
</div> 
@endsection
