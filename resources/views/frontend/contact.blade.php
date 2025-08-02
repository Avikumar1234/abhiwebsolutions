@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-bold text-blue-800 mb-6">Contact Us</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-5">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <input type="text" name="name" placeholder="Your Name" class="w-full mb-4 px-4 py-2 border rounded" required>
        <input type="email" name="email" placeholder="Your Email" class="w-full mb-4 px-4 py-2 border rounded" required>
        <textarea name="message" rows="5" placeholder="Your Message" class="w-full mb-4 px-4 py-2 border rounded" required></textarea>
        <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Send Message</button>
    </form>
</div>
<section class="py-16 bg-white px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-extrabold text-indigo-700 mb-4">Ready to Take Your Brand Online?</h2>
        <p class="text-gray-700 text-lg mb-6">Let’s build something amazing together. Contact us today!</p>
        <a href="/contact" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">
            📞 Get in Touch
        </a>
    </div>
</section>

@endsection
