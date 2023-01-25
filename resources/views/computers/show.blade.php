@extends('layout')

@section('content')
  <div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-3xl font-medium text-gray-900">One Product Page</h2>
    <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      {{-- <div class="relative">
      <img src="{{ $computer['image'] }}" alt="{{ $computer['name'] }}" class="object-cover rounded-lg h-48 w-full">
    </div> --}}
      <div class="p-4">
        <p class="text-lg font-medium text-gray-900">From: {{ $computer['origin'] }}</p>
        <p class="text-lg font-medium text-gray-900">Type: {{ $computer['name'] }}</p>
        <p class="text-lg font-medium text-gray-900">Price: {{ $computer['price'] }}$</p>
        <p class="text-lg text-gray-700">{{ $computer['description'] }}</p>
      </div>

    </div>
    <div class="mt-4">
      <a href="{{ route('computers.edit', $computer['id']) }}" class="primary-btn">Edit</a>
    </div>
    <div class="mt-4">
      <form action="{{ route('computers.destroy', $computer['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete-btn">Delete</button>
      </form>
    </div>
  </div>
@endsection
@section('title', 'computer show')
