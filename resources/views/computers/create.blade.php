@extends('layout')

@section('content')
  <div class="bg-white">
    <h2 class="text-center pt-4  text-gray-700 text-xl font-bold ">Create New Computer </h2>
    <div class="mx-auto max-w-2xl py-4 px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <form action="{{ route('computers.store') }}" method="POST">
        @csrf
        <div class="mb-2">
          <label class="block text-gray-700 font-medium mb-2" for="name">
            Name
          </label>
          <input class="custom-input" type="text" name="name" id="name" value="{{ old('name') }}">
          @error('name')
            <p class="text-red-400 text-xs mt-2 " class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-2">
          <label class="block text-gray-700 font-medium mb-2" for="price">
            Price
          </label>
          <input class="custom-input" name="price" id="price" value="{{ old('price') }}">
          @error('price')
            <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-2">
          <label class="block text-gray-700 font-medium mb-2" for="origin">
            Origin
          </label>
          <input class="custom-input" type="text" name="origin" id="origin" value="{{ old('origin') }}">
          @error('origin')
            <p class="text-red-400 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div class="text-center">
          <button class="rimary-btn" type="submit">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
@section('title', 'create computer ')
