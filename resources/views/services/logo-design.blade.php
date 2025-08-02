@extends('layouts.app')

@section('content')

<section class="py-16 bg-gray-100 px-4">
    <div class="max-w-7xl mx-auto">

        <!-- Stylish Heading -->
        <h2 class="text-4xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-500 to-pink-500 mb-4 drop-shadow-md">
            Logo Design Gallery
        </h2>
        <p class="text-center text-gray-600 mb-12 text-lg">Explore our latest creative and professional logo designs</p>
        <div class="w-32 h-1 bg-blue-500 mx-auto rounded-full animate-pulse mb-8"></div>

        @php
            $logoTitles = [
                'Creative Logo Gallery',
                'Explore Our Logo Design',
                'Sample Logo Concept',
                'Branding Logo Inspiration',
                'Logo Design Showcase',
                'Our Logo Portfolio',
                'Diverse Logo Style',
                'Professional and Trendy Logos',
                'Logo Design for Every Need',
                'Modern and Custom Logo Samples'
            ];

            $logoDescriptions = [
                'Explore a wide collection of creative and impactful logos built for brand identity.',
                'Discover professionally crafted logos that represent your unique business style.',
                'Browse through innovative logo concepts that spark visual creativity.',
                'Inspiring branding-focused logos made to boost your company image.',
                'Showcasing versatile designs perfect for digital and print branding.',
                'A portfolio of handcrafted logo designs made for different industries.',
                'Explore different styles, from minimalist to bold, for your brand.',
                'Modern and trendy logos that match your business personality.',
                'Find logos tailored to every industry and business type.',
                'Check out custom-made logos built for modern digital brands.'
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @for ($i = 1; $i <= 10; $i++)
                <div class="bg-gradient-to-br from-white via-gray-50 to-blue-50 border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/logo' . $i . '.png') }}" alt="{{ $logoTitles[$i - 1] }}"
                             class="w-full h-44 object-contain p-4 group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="px-4 pb-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $logoTitles[$i - 1] }}</h3>
                        <p class="text-gray-600 text-sm truncate description-{{ $i }}">{{ Str::limit($logoDescriptions[$i - 1], 50) }}</p>
                        <p class="text-gray-600 text-sm hidden full-description-{{ $i }}">{{ $logoDescriptions[$i - 1] }}</p>
                        <button onclick="toggleDescription({{ $i }})"
                                class="mt-2 text-sm text-blue-700 hover:text-blue-900 font-medium focus:outline-none">
                            More
                        </button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<script>
    function toggleDescription(index) {
        const shortDesc = document.querySelector(`.description-${index}`);
        const fullDesc = document.querySelector(`.full-description-${index}`);

        if (shortDesc && fullDesc) {
            const isHidden = fullDesc.classList.contains('hidden');
            shortDesc.classList.toggle('hidden', isHidden);
            fullDesc.classList.toggle('hidden', !isHidden);
        }
    }
</script>

@endsection
