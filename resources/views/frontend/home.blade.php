@extends('layouts.app')

@section('content')
    <!-- About Me Section -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-700 mb-10 break-words tracking-wide">About Me</h2>
            <p class="text-gray-600 text-lg leading-relaxed break-words">
                I am Abhishek Kumar, a passionate web developer specializing in Laravel and full-stack development.
                I love building professional websites that turn digital dreams into reality.
            </p>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-700 mb-10 break-words tracking-wide">Our Services</h2>
            <div class="overflow-x-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($services as $service)
                        <div class="bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105">
                            <h3 class="text-xl font-semibold text-blue-800 mb-2 break-words tracking-wide">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed break-words">{{ $service['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-blue-800 mb-12 break-words tracking-wide">Our Projects</h2>
            <div class="overflow-x-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md text-left">
                        <h3 class="text-2xl font-bold text-blue-700 mb-2 break-words tracking-wide">Ecommerce Website</h3>
                        <p class="text-gray-700 text-base leading-relaxed">
                            A fully responsive and modern online shopping platform built using Laravel, MySQL, and Tailwind CSS.
                        </p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md text-left">
                        <h3 class="text-2xl font-bold text-blue-700 mb-2 break-words tracking-wide">Portfolio Website</h3>
                        <p class="text-gray-700 text-base leading-relaxed">
                            A powerful personal branding site using Laravel to showcase projects, resume, and a contact form.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-indigo-700 mb-8 break-words tracking-wide">Why Choose Us</h2>
            <div class="overflow-x-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mt-2 leading-relaxed">4+ Years of professional experience in web development.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mt-2 leading-relaxed">Laravel, React, Django, MySQL, TailwindCSS, and more.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <p class="text-gray-600 mt-2 leading-relaxed">Quick response & after-project support guaranteed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-indigo-50 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-indigo-700 mb-4 break-words tracking-wide">
                Ready to Take Your Brand Online?
            </h2>
            <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                Let's build a digital solution that drives results. Contact us now to get started!
            </p>
            <a href="/contact"
               class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300 tracking-wide">
                📞 Get in Touch
            </a>
        </div>
    </section>
@endsection
