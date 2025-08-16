{{-- resources/views/contact.blade.php --}}

@extends('layouts.app')

@section('title', 'Contact Us - Abhiwebsolutions')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        <p class="text-lg mb-6">We’d love to hear from you. Get in touch with us through the details below:</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
        <!-- Email Card -->
        <div class="bg-white shadow-lg rounded-2xl p-6 text-center">
            <h2 class="text-xl font-semibold mb-2">Email</h2>
            <p class="text-blue-600 font-medium">
                <a href="mailto:abhiwebsln@outlook.com">abhiwebsln@outlook.com</a>
            </p>
        </div>

        <!-- Phone Card -->
        <div class="bg-white shadow-lg rounded-2xl p-6 text-center">
            <h2 class="text-xl font-semibold mb-2">Phone</h2>
            <p class="text-green-600 font-medium">
                <a href="tel:+917379210635">+91 7379210635</a>
            </p>
        </div>
    </div>
</div>
@endsection
