@extends('layouts.app')

@section('content')
  <div class="bg-white">
    <div class="pt-6">
      <!-- Product info -->
      <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <div class="pb-8">
            <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden rounded-lg lg:block">
              <img src="{{ $viewData['box']->getImage() }}" alt="{{ $viewData['box']->getName() }}" class="h-full w-full object-cover object-center">
            </div>
          </div>
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $viewData['box']->getName() }}</h1>
        </div>

        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
          <h2>{{ __('Product information') }}</h2>
          <p class="text-3xl tracking-tight text-gray-900">${{ $viewData['box']->getCost() }}</p>

          <div class="mt-10">
            <h3 class="text-sm font-medium text-gray-900">{{ __('Pokemons Included') }}</h3>
            <div class="mt-4">
              <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                @foreach ($viewData['pokemons'] as $pokemon)
                  <li class="text-gray-500">
                    <a href="{{ route('pokemons.show', $pokemon->getId()) }}">
                      {{ $pokemon->getName() }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="rounded-md shadow pt-8">
            <a href="#" class="flex w-full pokemons-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg">{{ __('Buy') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
