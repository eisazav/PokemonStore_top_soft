@extends('layouts.admin')

@section('content')
  <div class="bg-white">
  <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-2xl font-bold tracking-tight text-gray-900">Users</h1>
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach ($viewData['users'] as $user)
          <div class="group relative">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $user->getName() }}
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ $user->getEmail() }}</p>
              </div>
              <p class="text-sm font-medium text-gray-900">{{ $user->getType() }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-2xl font-bold tracking-tight text-gray-900">Orders</h1>
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach ($viewData['orders'] as $order)
          <div class="group relative">
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="{{ route('orders.show', $order->getId()) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $order->getStatus() }}
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ $order->getUser() }}</p>
              </div>
              <p class="text-sm font-medium text-gray-900">${{ $order->getTotal() }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-2xl font-bold tracking-tight text-gray-900">Pokemons</h1>
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach ($viewData['pokemons'] as $pokemon)
          <div class="group relative">
            <div class="w-full min-h-80 bg-gray-100 aspect-w-1 aspect-h-1 rounded-lg overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
              <img src="{{ $pokemon->getImage() }}" alt="" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="{{ route('admin.pokemons.show', $pokemon->getId()) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $pokemon->getName() }}
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ $pokemon->getType() }}</p>
              </div>
              <p class="text-sm font-medium text-gray-900">${{ $pokemon->getCost() }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-2xl font-bold tracking-tight text-gray-900">Boxes</h1>
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach ($viewData['boxes'] as $box)
          <div class="group relative">
            <div class="w-full min-h-80 bg-gray-100 aspect-w-1 aspect-h-1 rounded-lg overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
              <img src="{{ $box->getImage() }}" alt="" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="{{ route('box.show', $box->getId()) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $box->getName() }}
                  </a>
                </h3>
              </div>
              <p class="text-sm font-medium text-gray-900">${{ $box->getCost() }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection