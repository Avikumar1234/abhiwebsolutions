@extends('layouts.app')

@section('content')

<!-- 🔹 Hero Section -->
<section class="py-10 px-4 bg-white">

    <div class="max-w-7xl mx-auto">

        <!-- ✅ Left Text & Right Image -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 mt-6">
            
            <!-- ✅ Left Side -->
            <div class="md:w-1/2 text-center md:text-left">
                <div class="mb-4">
                    <p class="text-xl sm:text-2xl text-blue-600 font-bold flex items-center justify-center md:justify-start">
                        Hi There!
                        <span class="ml-2 animate-waving-hand text-2xl">🙋‍♂️</span>
                    </p>
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-pink-600 mt-1">
                        I’M Abhi
                    </h1>
                </div>

                <p id="typed-text" class="text-xl sm:text-2xl md:text-3xl font-semibold text-gray-800 animate-pulse mb-3">
                    Fullstack Developer | Freelancer | Software Developer
                </p>

                <p class="text-base sm:text-lg text-gray-700 leading-relaxed text-justify">
                    <strong>Abhi Web Solution</strong> is a freelance platform based in <strong>Gurgaon, India</strong>, 
                    specializing in <strong>Web Design</strong> and <strong>Web Development</strong>.
                </p>

                <p class="text-base sm:text-lg text-gray-700 leading-relaxed mt-4">
                    AbhiWebSolutions is one of the best affordable web design platforms for small to large companies and businessmen.
                    We provide end-to-end web solutions. Our motto is:
                    <span class="italic text-blue-600 font-semibold">"Keep it easy!"</span>
                </p>

                <ul class="mt-6 space-y-3 text-gray-700 text-sm sm:text-base font-medium">
                    <li class="flex items-start gap-2">— Website and Development</li>
                    <li class="flex items-start gap-2">— Hardworking and Honest Freelancers</li>
                    <li class="flex items-start gap-2">— We Make Websites for All Types of Businesses at Affordable Prices</li>
                </ul>

                <a href="/contact"
                class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-lg shadow-md transition duration-300">
                Explore Info
                </a>
            </div>

            <!-- ✅ Right Side (Image + Badge) -->
            <div class="md:w-1/2 flex flex-col items-center md:items-end gap-4">
                <!-- Badge -->
                <div class="w-full flex justify-center md:justify-end mb-3">
                    <span class="inline-block bg-gradient-to-r from-green-400 to-blue-500 text-white text-sm sm:text-base font-semibold px-4 sm:px-6 py-1.5 rounded-full shadow hover:scale-105 transition duration-300">
                        Best Web Developer in Gurgaon, Delhi.
                    </span>
                </div>

                <!-- Image -->
                <div class="w-full flex justify-center md:justify-end">
                    <img src="{{ asset('images/backgroundch5.png') }}" alt="Developer"
                        class="w-11/12 md:w-4/5 object-cover rounded-xl shadow-xl border-4 border-white transition-transform duration-1000 opacity-0 animate-slideIn">
                </div>
            </div>
        </div>

        <style>
        @keyframes slideIn {
          from {
            transform: translateX(40px);
            opacity: 0;
          }
          to {
            transform: translateX(0);
            opacity: 1;
          }
        }
        .animate-slideIn {
          animation: slideIn 1s ease-out forwards;
        }
        </style>

    </div>
</section>

<!-- 🔹 Compact Hero Banner Section -->
<section class="max-w-7xl mx-auto px-6 py-10">
  <div class="bg-gradient-to-r from-green-400 to-blue-500 rounded-lg shadow-xl p-8 text-center text-white">
    <h2 class="text-2xl sm:text-4xl font-extrabold mb-3 animate-bounce">
      👨‍💻 We Build Digital Dreams
    </h2>
    <p class="text-sm sm:text-lg font-semibold max-w-xl mx-auto">
      Delivering innovative web solutions with passion and precision.<br>
      Let's build your digital future together.
    </p>
  </div>
</section>

<!-- 🔹 Services Section -->
<section class="py-16 bg-white px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-blue-700 mb-10">Our Services</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @php
                $services = [
                    ['title' => 'Creative Logo Design', 'desc' => 'Memorable logos that represent your brand with a professional touch.'],
                    ['title' => 'Modern Website Design', 'desc' => 'Responsive and attractive website UI/UX that impresses visitors.'],
                    ['title' => 'Custom Web Development', 'desc' => 'Dynamic websites using Laravel, React, or Django tailored to your business.'],
                    ['title' => 'Social Media Poster Design', 'desc' => 'Eye-catching social media posts that grow your online presence.'],
                    ['title' => 'Reminder & Invite Cards', 'desc' => 'Beautiful reminder and invitation cards for events and promotions.'],
                    ['title' => 'Business Portfolio Websites', 'desc' => 'Professional websites to showcase your work and services online.'],
                ];
            @endphp

            @foreach ($services as $index => $service)
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-2xl transition duration-300 group">
                    <img src="{{ asset('images/abhi' . ($index + 1) . '.png') }}" alt="{{ $service['title'] }}"
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    
                    <div class="p-4 text-center">
                        <h3 class="text-lg sm:text-xl font-semibold text-blue-800 mb-2">{{ $service['title'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $service['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</section>

<!-- 🔹 Projects -->
<section class="py-20 bg-gradient-to-br from-orange-50 to-orange-200 px-4">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-2xl sm:text-4xl font-extrabold text-blue-800 mb-12">Our Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Project 1 -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border hover:shadow-2xl transition duration-300 group">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-3xl">🛒</span>
                    <h3 class="text-xl sm:text-2xl font-bold text-green-700 group-hover:underline">
                        E-commerce Website
                    </h3>
                </div>
                <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                    A fully responsive and modern online shopping platform built using <span class="font-semibold text-indigo-600">Laravel</span>, <span class="font-semibold text-indigo-600">MySQL</span>, and <span class="font-semibold text-indigo-600">Tailwind CSS</span>.
                </p>
                <div class="mt-4 inline-block bg-green-100 text-green-700 text-xs sm:text-sm font-semibold px-4 py-1 rounded-full shadow-sm">
                    Live Project | Custom Backend
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border hover:shadow-2xl transition duration-300 group">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-3xl">💼</span>
                    <h3 class="text-xl sm:text-2xl font-bold text-green-700 group-hover:underline">
                        Personal Portfolio
                    </h3>
                </div>
                <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                    A powerful personal branding site using <span class="font-semibold text-indigo-600">Laravel</span> to showcase projects, resume, and a contact form. Clean, minimal, and highly optimized.
                </p>
                <div class="mt-4 inline-block bg-blue-100 text-blue-700 text-xs sm:text-sm font-semibold px-4 py-1 rounded-full shadow-sm">
                    Portfolio | Freelance Branding
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 Why Choose Us -->
<section class="py-16 bg-white px-4">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-2xl sm:text-3xl font-bold text-indigo-700 mb-8">Why Choose Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-6 rounded-lg shadow bg-yellow-100 text-yellow-900">
                <h3 class="text-lg sm:text-xl font-semibold text-blue-700">💼 Experience</h3>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">4+ Years of professional experience in web development.</p>
            </div>
            <div class="p-6 rounded-lg shadow bg-green-50">
                <h3 class="text-lg sm:text-xl font-semibold text-green-700">🧠 Expertise</h3>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">Laravel, React, Django, MySQL, TailwindCSS, and more.</p>
            </div>
            <div class="p-6 rounded-lg shadow bg-yellow-50">
                <h3 class="text-lg sm:text-xl font-semibold text-yellow-700">🤝 Support</h3>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">Quick response & after-project support guaranteed.</p>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 Final CTA -->
<section class="py-10 bg-gradient-to-r from-pink-100 via-pink-200 to-pink-100 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl sm:text-4xl font-extrabold text-indigo-700 mb-4">Ready to Take Your Brand Online?</h2>
        <p class="text-gray-700 text-base sm:text-lg mb-6">Let’s build something amazing together. Contact us today!</p>
        <a href="/contact" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">
            📞 Get in Touch
        </a>
    </div>
</section>

@endsection
