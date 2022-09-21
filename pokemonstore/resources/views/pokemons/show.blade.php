@extends('layouts.app')

@section('content')
  <div class="bg-white">
    <div class="pt-6">
      <!-- Product info -->
      <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <div class="pb-8">
            <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden rounded-lg lg:block">
              <img src="{{ $viewData['pokemon']->getImage() }}" alt="{{ $viewData['pokemon']->getName() }}" class="h-full w-full object-cover object-center">
            </div>
          </div>
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $viewData['pokemon']->getName() }}</h1>
        </div>

        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
          <h2>Product information</h2>
          <p class="text-3xl tracking-tight text-gray-900">${{ $viewData['pokemon']->getCost() }}</p>

          <div class="mt-10">
            <h3 class="text-sm font-medium text-gray-900">Highlights</h3>
            <div class="mt-4">
              <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                <li class="text-gray-500">Type: {{ $viewData['pokemon']->getType() }}</li>
                <li class="text-gray-500">Height: {{ $viewData['pokemon']->getHeight() }}</li>
                <li class="text-gray-500">Weight: {{ $viewData['pokemon']->getWeight() }}</li>
                <li class="text-gray-500">Evolution: {{ $viewData['pokemon']->getEvolution() }}</li>
              </ul>
            </div>
          </div>

          <div class="mt-10">
            <h3 class="text-sm font-medium text-gray-900">Stats</h3>
            <div class="mt-4">
              <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                <li class="text-gray-500">HP: {{ $viewData['pokemon']->getStatHp() }}</li>
                <li class="text-gray-500">Attack: {{ $viewData['pokemon']->getStatAttack() }}</li>
                <li class="text-gray-500">Defense: {{ $viewData['pokemon']->getStatDefense() }}</li>
                <li class="text-gray-500">Special Attack: {{ $viewData['pokemon']->getStatSpecialAttack() }}</li>
                <li class="text-gray-500">Special Defense: {{ $viewData['pokemon']->getStatSpecialDefense() }}</li>
                <li class="text-gray-500">Speed: {{ $viewData['pokemon']->getStatSpeed() }}</li>
              </ul>
            </div>
          </div>

          <div class="rounded-md shadow pt-8">
            <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg">Buy</a>
          </div>
        </div>

        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
          <!-- Description and details -->
          <div>
            <h3 class="sr-only">Description</h3>

            <div class="space-y-6">
              <p class="text-base text-gray-900">{{ $viewData['pokemon']->getDescription() }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
