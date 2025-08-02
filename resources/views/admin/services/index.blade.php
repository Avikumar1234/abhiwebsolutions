@extends('layouts.app')

@section('title', 'Manage Services')

@section('content')
<div class="py-16 px-4 bg-gradient-to-br from-indigo-100 via-purple-100 to-blue-100 min-h-screen">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-extrabold mb-8 text-center text-blue-700">📋 Manage Services</h2>

        <!-- Add Service Button -->
        <div class="text-center mb-8">
            <a href="{{ route('admin.services.create') }}"
               class="inline-block bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-3 px-6 rounded-xl shadow-md hover:shadow-xl transition duration-300">
                ➕ Add New Service
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-6 py-4 rounded-xl mb-6 text-center shadow-md">
                {{ session('success') }}
            </div>
        @endif

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white border border-blue-200 rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                             class="h-48 w-full object-cover">
                    @endif
                    <div class="p-5">
                        <h3 class="text-xl font-bold text-indigo-800 mb-2">{{ $service->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($service->description, 100) }}</p>

                        <div class="flex justify-between items-center">
                            <a href="{{ route('admin.services.edit', $service->id) }}"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-semibold transition duration-200">
                                ✏️ Edit
                            </a>

                            <a href="{{ route('admin.services.confirmDelete', $service->id) }}"
                               class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition duration-200">
                                🗑 Delete
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-10 text-center">
            {{ $services->links() }}
        </div>
    </div>
</div>
@endsection
