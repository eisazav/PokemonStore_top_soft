@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="container py-5" style="margin-top: 150px;">
    <div class="card">
        <div class="card-header"> {{$viewData['new']['source']['name']}} </div>
        <img class="card-img-top" src="{{$viewData['new']['urlToImage']}}" alt="news image" style="width: 100%; height: 15vw; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title">{{$viewData['new']['title']}}</h5>
            <p class="card-text"><small class="text-muted">{{$viewData['new']['author']}}</small></p>
            <p class="card-text">{{$viewData['new']['description']}}</p>
            <a href="{{$viewData['new']['url']}}" class="btn btn-primary stretched-link" target="_blank">Ver noticia</a>
            <p class="card-text"><small class="text-muted">{{$viewData['new']['publishedAt']}}</small></p>
        </div>
    </div>
</div>

@endsection