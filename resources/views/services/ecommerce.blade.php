@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-14 px-6">
    <div class="text-center mb-14">
        <h2 class="text-4xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-500 to-pink-500 mb-4 drop-shadow-md">
            <i class="fas fa-shopping-cart mr-2"></i>Explore Our eCommerce Website Types
        </h2>
        <p class="text-gray-600 mt-4 text-sm sm:text-base">Professional, modern and responsive websites for every business</p>
    </div>

    <div class="w-32 h-1 bg-blue-500 mx-auto rounded-full animate-pulse mb-8"></div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-10 max-w-7xl mx-auto">
        @php
            $products = [
                ['image' => 'buss1.jpg', 'title' => 'Fashion eCommerce Website', 'description' => 'Fully responsive fashion website with cart, product filter, and payment integration.'],
                ['image' => 'buss2.jpg', 'title' => 'Grocery eCommerce Website', 'description' => 'Smart grocery website for daily needs. Includes stock management, offers, and delivery tracking.'],
                ['image' => 'buss3.jpg', 'title' => 'Electronics eCommerce Website', 'description' => 'Showcase gadgets, appliances, reviews and secure payment options in a sleek UI.'],
                ['image' => 'buss4.jpg', 'title' => 'Furniture eCommerce Website', 'description' => 'Furniture listing, room preview, wishlist, and quote features included.'],
                ['image' => 'buss5.jpg', 'title' => 'Pharmacy eCommerce Website', 'description' => 'Medical store with prescription upload, order status, and reminders.'],
                ['image' => 'buss6.jpg', 'title' => 'Food Delivery eCommerce Website', 'description' => 'Menu browsing, order tracking, payment gateway, and live chat integration.'],
                ['image' => 'buss7.jpg', 'title' => 'Jewelry eCommerce Website', 'description' => 'High-end jewelry store with zoom, compare, and appointment booking features.'],
                ['image' => 'buss8.jpg', 'title' => 'Book Store eCommerce Website', 'description' => 'Online bookstore with category filters, author profiles, and wishlists.'],
            ];
        @endphp

        @foreach ($products as $index => $product)
            <div class="bg-white rounded-2xl shadow hover:shadow-lg overflow-hidden transform transition-all hover:scale-105">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/' . $product['image']) }}"
                         alt="{{ $product['title'] }}"
                         class="h-52 w-full object-cover transition-transform duration-300 hover:scale-110" />
                </div>

                <div class="p-5">
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1">{{ $product['title'] }}</h3>
                    <p class="text-gray-500 text-sm mb-4">Modern, mobile-friendly & SEO optimized.</p>
                    <button onclick="openModal({{ $index }})" class="bg-blue-600 text-white px-4 py-1.5 rounded-lg text-sm hover:bg-blue-700 transition-all">
                        View More
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div id="modal-{{ $index }}" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
                <div class="bg-white rounded-xl max-w-md w-full p-6 relative">
                    <button onclick="closeModal({{ $index }})" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-lg">&times;</button>
                    <h2 class="text-xl font-bold mb-3">{{ $product['title'] }}</h2>
                    <p class="text-gray-600">{{ $product['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Modal Scripts -->
<script>
    function openModal(index) {
        document.getElementById('modal-' + index).classList.remove('hidden');
        document.getElementById('modal-' + index).classList.add('flex');
    }

    function closeModal(index) {
        document.getElementById('modal-' + index).classList.add('hidden');
        document.getElementById('modal-' + index).classList.remove('flex');
    }
</script>
@endsection
