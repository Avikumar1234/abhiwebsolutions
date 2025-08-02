@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-100 px-4">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-blue-700 mb-6">Available Services</h2>
        <p class="text-gray-600 text-lg mb-10">
            Explore the creative services offered by 
            <span class="font-semibold text-blue-600">Abhiwebsolutions</span>
        </p>

        @if($services->count())
        <div class="overflow-hidden relative">
            <div class="animate-marquee-right flex space-x-6 items-start">
                {{-- First loop --}}
                @foreach ($services as $service)
                    <div class="min-w-[300px] max-w-[300px] bg-white rounded-xl shadow-lg border overflow-hidden flex flex-col">
                        @if($service->image)
                            <div class="w-full h-52 bg-gray-100 flex items-center justify-center">
                                <img src="{{ asset('storage/' . $service->image) }}"
                                     alt="{{ $service->title }}"
                                     class="max-h-full max-w-full object-contain" />
                            </div>
                        @else
                            <div class="w-full h-52 bg-gray-100 flex items-center justify-center">
                                <img src="{{ asset('images/default.png') }}"
                                     alt="No Image"
                                     class="max-h-full max-w-full object-contain" />
                            </div>
                        @endif
                        <div class="p-4 text-left">
                            <h3 class="text-lg font-semibold text-blue-800">{{ $service->title }}</h3>
                            <p class="text-gray-600 text-sm mt-1">{{ Str::limit($service->description, 80) }}</p>
                        </div>
                    </div>
                @endforeach

                {{-- Second loop (duplicate for seamless effect) --}}
                @foreach ($services as $service)
                    <div class="min-w-[300px] max-w-[300px] bg-white rounded-xl shadow-lg border overflow-hidden flex flex-col">
                        @if($service->image)
                            <div class="w-full h-52 bg-gray-100 flex items-center justify-center">
                                <img src="{{ asset('storage/' . $service->image) }}"
                                     alt="{{ $service->title }}"
                                     class="max-h-full max-w-full object-contain" />
                            </div>
                        @else
                            <div class="w-full h-52 bg-gray-100 flex items-center justify-center">
                                <img src="{{ asset('images/default.png') }}"
                                     alt="No Image"
                                     class="max-h-full max-w-full object-contain" />
                            </div>
                        @endif
                        <div class="p-4 text-left">
                            <h3 class="text-lg font-semibold text-blue-800">{{ $service->title }}</h3>
                            <p class="text-gray-600 text-sm mt-1">{{ Str::limit($service->description, 80) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @else
            <p class="text-center text-gray-500 text-lg mt-12">No services available right now.</p>
        @endif
    </div>
</section>

{{-- Left-to-Right Marquee CSS --}}
<style>
@keyframes marquee-right {
  0%   { transform: translateX(-100%); }
  100% { transform: translateX(100%); }
}
.animate-marquee-right {
  animation: marquee-right 20s linear infinite;
  will-change: transform;
}
.animate-marquee-right:hover {
  animation-play-state: paused; /* Optional: pause on hover */
}
</style>
@endsection
