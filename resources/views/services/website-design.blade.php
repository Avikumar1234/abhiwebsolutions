@extends('layouts.app')

@section('content')

<section class="py-16 bg-white px-4">
    <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <h2 class="text-4xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mb-4 drop-shadow-md">
            Website Design Gallery
        </h2>
        <p class="text-center text-gray-700 mb-12 text-lg">Explore our professional and modern website designs crafted for all industries</p>
        <div class="w-32 h-1 bg-yellow-500 mx-auto rounded-full animate-pulse mb-8"></div>

        @php
            $webTitles = [
                'Modern Website Design',
                'Creative Web Layouts',
                'Business Web Interface',
                'Clean UI Showcase',
                'Responsive Website Demo',
                'Elegant Web Design',
                'Startup Web Presentation',
                'Dynamic Website Look',
                'Professional Web Portfolio',
                'Custom Design Experience'
            ];

            $webDescriptions = [
                'Showcasing sleek and modern websites built for user experience.',
                'Creative and interactive web layouts to engage your audience.',
                'Professional designs perfect for any business or service.',
                'Minimal and clean user interface for smooth navigation.',
                'Fully responsive web designs for mobile and desktop.',
                'Elegant layouts combining beauty and usability.',
                'Tailored designs for startups and growing businesses.',
                'Dynamic websites with animations and effects.',
                'A portfolio of premium website designs.',
                'Custom designs crafted to reflect your brand identity.'
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
            @for ($i = 1; $i <= 10; $i++)
                <div class="bg-gradient-to-br from-white via-gray-50 to-pink-50 border border-pink-100 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/web' . $i . '.jpg') }}" alt="{{ $webTitles[$i - 1] }}"
                             class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="px-4 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $webTitles[$i - 1] }}</h3>
                        <p class="text-gray-600 text-sm truncate">{{ Str::limit($webDescriptions[$i - 1], 60) }}</p>
                        <button 
                            onclick="openPopup('{{ addslashes($webTitles[$i - 1]) }}', '{{ addslashes($webDescriptions[$i - 1]) }}')"
                            class="mt-2 text-sm text-pink-700 hover:text-pink-900 font-medium focus:outline-none">
                            View More
                        </button>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-12">
            <a href="{{ route('contact') }}" 
               class="inline-block bg-pink-600 text-white px-8 py-3 rounded-full shadow hover:bg-pink-700 transition duration-300 font-semibold text-lg">
                Get Your Website Designed
            </a>
        </div>

        <!-- Popup Modal -->
        <div id="popupModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-lg max-w-lg w-full p-6 relative shadow-lg">
                <button onclick="closePopup()" class="absolute top-2 right-3 text-gray-500 hover:text-red-600 text-xl">&times;</button>
                <h3 id="popupTitle" class="text-xl font-bold text-gray-800 mb-3"></h3>
                <p id="popupDescription" class="text-gray-700 text-base"></p>
            </div>
        </div>

    </div>
</section>

<script>
    function openPopup(title, description) {
        document.getElementById('popupTitle').innerText = title;
        document.getElementById('popupDescription').innerText = description;
        document.getElementById('popupModal').classList.remove('hidden');
        document.getElementById('popupModal').classList.add('flex');
    }

    function closePopup() {
        document.getElementById('popupModal').classList.add('hidden');
        document.getElementById('popupModal').classList.remove('flex');
    }
</script>

@endsection
