@extends('layouts.app')

@section('title', 'Add New Service')

@section('content')
<div class="flex justify-center items-center py-12 px-4 bg-gradient-to-br from-blue-100 via-indigo-100 to-purple-100 min-h-screen">

    <div class="bg-white/80 w-full max-w-2xl p-10 rounded-3xl shadow-xl border border-blue-200 backdrop-blur-md">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-blue-700 mb-8">
            🛠️ Add New Service
        </h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6 shadow">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Title -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Service Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @error('title')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Description</label>
                <textarea name="description" rows="4"
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Upload Image</label>
                <input type="file" name="image"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm file:bg-blue-600 file:text-white file:font-semibold file:border-none file:px-4 file:py-2 file:rounded file:cursor-pointer">
                @error('image')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <div class="text-center pt-4">
                <button type="submit"
                        class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold px-8 py-3 rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                    ✅ Save Service
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
