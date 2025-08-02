
@extends('layouts.app')

@section('content')
<!-- 🔹 Hero Section -->
<section class="bg-gradient-to-r from-green-50 via-green-100 to-green-50 py-10 px-4">
    <div class="max-w-7xl mx-auto">

        <!-- ✅ Top Center Heading -->
        <div class="text-center mb-8">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-green-700 animate-bounce">
                👨‍💻 We Build Digital Dreams
            </h1>
        </div>
<div class="mb-4">
    <p class="text-xl sm:text-2xl text-blue-600 font-bold flex items-center justify-center md:justify-start">
        Hi There!
<span class="ml-2 animate-waving-hand text-2xl">🙋‍♂️</span> <!-- Man raising hand -->


    </p>
    <h1 class="text-3xl sm:text-4xl font-extrabold text-pink-600 mt-1">
        I’M Abhi
    </h1>
</div>

        <!-- ✅ Left Text & Right Image -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">

            <!-- ✅ Left Side -->
            
            <div class="md:w-1/2 text-center md:text-left">
                <!-- Typing Text Bigger -->
                <p id="typed-text" class="text-2xl sm:text-3xl font-semibold text-gray-800 animate-pulse mb-3">
                    Fullstack Developer | Freelancer | Software Developer
                </p>

                <!-- Experience Line -->
                <p class="text-md sm:text-lg text-green-700 font-medium">
                    1 Year as Freelancer | 4+ Years Industry Experience
                </p>
                <!-- ✅ Explore Info Button -->
<a href="/contact"
   class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow-md transition duration-300">
   Explore Info
</a>

            </div>

            <!-- ✅ Right Side Image -->
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="{{ asset('images/about.png') }}" alt="Developer"
                     class="w-56 h-56 sm:w-64 sm:h-64 object-cover rounded-full shadow-lg border-4 border-green-200 hover:scale-105 transition duration-300">
            </div>

        </div>
    </div>
</section>

<!-- 🔹 Our Services -->
@php
    $services = \App\Models\Service::latest()->get();
@endphp

<section class="py-16 bg-white px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-10">Our Services</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @forelse ($services as $service)
                <div class="bg-blue-50 hover:shadow-xl transition rounded-lg p-5 text-center border border-blue-200">
                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" class="h-24 w-24 mx-auto mb-4 object-cover rounded-full" alt="{{ $service->title }}">
                    @endif
                    <h3 class="text-lg font-bold text-blue-800">{{ $service->title }}</h3>
                    <p class="text-sm text-gray-600 mt-2">{{ Str::limit($service->description, 80) }}</p>
                </div>
            @empty
                <p class="text-center text-gray-500">No services available right now.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- 🔹 Projects -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-gray-200 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-800 mb-10">Our Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Project 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md text-left hover:shadow-xl transition">
                <h3 class="text-xl font-semibold text-green-700">🛒 E-commerce Website</h3>
                <p class="text-gray-600 mt-2">A fully responsive online shopping platform built with Laravel, MySQL & Tailwind.</p>
            </div>

            <!-- Project 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md text-left hover:shadow-xl transition">
                <h3 class="text-xl font-semibold text-green-700">💼 Personal Portfolio</h3>
                <p class="text-gray-600 mt-2">A dynamic personal branding site using Laravel, showcasing my work, resume & contact form.</p>
            </div>
        </div>
    </div>
</section>

@endsection
