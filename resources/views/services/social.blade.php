@extends('layouts.app')

@section('content')

<section class="py-16 bg-gray-100 px-4">
    <div class="max-w-7xl mx-auto">

        <!-- Stylish Heading -->
        <h2 class="text-4xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 mb-4 drop-shadow-md">
            Social Media Poster Gallery
        </h2>
        <p class="text-center text-gray-600 mb-12 text-lg">Catchy and creative social media designs for digital promotions</p>
        <div class="w-32 h-1 bg-pink-500 mx-auto rounded-full animate-pulse mb-8"></div>

        @php
            $posterTitles = [
                'Promo Poster', 'Festival Design', 'New Product Launch', 'Offer Blast',
                'Sale Alert', 'Event Invite', 'Celebration Vibes', 'Custom Poster',
                'Business Banner', 'Creative Design', 'Anniversary Poster', 'Social Buzz',
                'Story Design', 'Promo Graphics', 'Holiday Special', 'Engagement Boost',
                'Ad Campaign', 'Digital Impact', 'Colorful Ad', 'Viral Visual'
            ];

            $posterDescriptions = [
                'Grab attention with eye-catching poster designs perfect for promotions.',
                'Celebrate festivals with attractive poster graphics made for social feeds.',
                'Introduce your new products with bold and engaging social visuals.',
                'Announce deals with stunning visuals that customers can’t ignore.',
                'Drive traffic with dynamic sale banners designed for impact.',
                'Engage your followers with unique event-specific poster designs.',
                'Bring festive energy to your brand through colorful visuals.',
                'Make custom tailored posters to match your brand vibe and theme.',
                'Attract new clients with elegant and professional poster styles.',
                'Let your brand speak creatively with design-rich poster graphics.',
                'Celebrate milestones with personalized, attractive posters.',
                'Boost your social presence with high-quality, engaging images.',
                'Design stories that are built to hook and convert viewers.',
                'Level up promotions with bold and vibrant graphic creatives.',
                'Bring holiday cheer with seasonal-themed poster creativity.',
                'Increase post engagement with well-crafted visuals.',
                'Get noticed through well-designed campaign posters.',
                'Make an impact with minimal yet powerful design language.',
                'Use bright and vibrant posters to stand out in feeds.',
                'Craft viral visuals made to trend and get shared fast.'
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 20; $i++)
                <div class="bg-white border border-gray-200 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden group">
                    <div class="overflow-hidden">
                        <img src="{{ asset('images/post' . $i . '.png') }}" alt="{{ $posterTitles[$i - 1] }}"
                             class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="px-4 pb-4 text-center">
                        <h3 class="text-lg font-semibold text-gray-800 mt-2">{{ $posterTitles[$i - 1] }}</h3>

                        <p class="text-gray-600 text-sm truncate description-{{ $i }}">{{ Str::limit($posterDescriptions[$i - 1], 60) }}</p>
                        <p class="text-gray-600 text-sm hidden full-description-{{ $i }}">{{ $posterDescriptions[$i - 1] }}</p>

                        <button onclick="toggleDescription({{ $i }})"
                                class="mt-2 text-sm bg-blue-500 text-white px-4 py-1 rounded-full hover:bg-blue-600 transition duration-300">
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
