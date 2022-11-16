@extends('layouts.app')
@section('title', 'Register')
@section('content')
  <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">{{ __('Register') }}</h1>

    <form class="mt-4" method="POST" action="">
      @csrf
      <input type="text" placeholder="{{ __('Name') }}" id="name" name="name" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
      @error('name')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
      @enderror
      <input type="email" placeholder="{{ __('Email') }}" id="email" name="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
      @error('email')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
      @enderror
      <input type="password" placeholder="{{ __('Password') }}" id="password" name="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
      @error('password')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
      @enderror
      <input type="password" placeholder="{{ __('Confirm Password') }}" id="password_confirmation" name="password_confirmation" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
      <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">{{ __('Register') }}</button>
    </form>
  </div>
@endsection
