@extends('layouts.app')

@section('content')

<!-- 🔹 About Us Banner -->
{{-- <img src="{{ asset('images/backgroundch1.png') }}" alt="" style="width:150%; height:auto;"> --}}
<section class="bg-gradient-to-r from-indigo-100 via-purple-100 to-blue-100 py-14 px-4">
    <div class="max-w-7xl mx-auto text-center space-y-6">

        <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 tracking-tight hover:text-indigo-600 transition duration-500">
            Welcome to <span class="text-indigo-600">Abhiwebsolutions</span> Freelancing Team
        </h2>

        <p class="text-lg sm:text-xl text-gray-700 max-w-3xl mx-auto hover:text-gray-900 transition duration-300">
            A budget-friendly freelancing team crafting professional websites for small businesses, startups, and large enterprises.
        </p>

    </div>
</section>

<!-- 🔹 Who Are We -->
<section class="py-16 px-4 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl font-bold text-indigo-700 mb-4">Who Are We?</h2>
            <p class="text-gray-700 leading-relaxed">
                We are a passionate freelancing team specialized in designing and developing cost-effective, modern, and responsive websites tailored to the unique needs of small businesses, startups, and large companies. Our goal is to help you establish a strong online presence without breaking your budget.
            </p>
        </div>
        <img src="{{ asset('images/about.png') }}" alt="Team Work"
             class="rounded-xl shadow-lg w-full h-auto object-cover max-h-96">
    </div>
</section>

<!-- 🔹 Our Mission -->
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-800 mb-4">Our Mission</h2>
        <p class="text-gray-700 max-w-4xl mx-auto leading-relaxed">
            To empower businesses of all sizes by providing customized website solutions that drive growth, improve user experience, and showcase your brand with a professional touch — all at affordable prices.
        </p>
    </div>
</section>

<!-- 🔹 What We Do -->
<section class="py-16 px-4 bg-white">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-indigo-800 mb-8">What We Do</h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-2 gap-6 text-left">
            <div class="bg-indigo-50 p-6 rounded-xl shadow hover:shadow-md transition border border-indigo-200">
                <h3 class="text-xl font-semibold text-indigo-700 mb-2">💻 Website Design & Development</h3>
                <p class="text-gray-700">We create modern, mobile-friendly, and SEO-optimized websites tailored to your business needs.</p>
            </div>

            <div class="bg-indigo-50 p-6 rounded-xl shadow hover:shadow-md transition border border-indigo-200">
                <h3 class="text-xl font-semibold text-indigo-700 mb-2">🚀 Startup & Small Business Solutions</h3>
                <p class="text-gray-700">Affordable web solutions designed specifically to help startups and small businesses grow online.</p>
            </div>
        </div>
    </div>
</section>

<!-- 🔹 Why Choose Us -->
<section class="py-16 px-4 bg-gray-100">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-green-700 mb-4">Why Choose Our Freelance Team?</h2>
        <p class="text-gray-700 max-w-4xl mx-auto leading-relaxed">
            We combine affordability with quality, delivering customized websites with quick turnaround times and ongoing support — perfect for businesses that want professional results without large agency costs.
        </p>
    </div>
</section>

<!-- 🔹 Call To Action -->
<section class="py-16 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white px-4">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Get Your Website?</h2>
        <p class="mb-6 text-lg">Contact us today to discuss your project and get a free quote.</p>
        <a href="{{ route('contact') }}"
           class="inline-block bg-white text-blue-700 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100 transition duration-300">
           📞 Contact Us Now
        </a>

        <div class="mt-6 text-sm">
            📧 Email: <a href="mailto:abhiwebsln@outlook.com" class="underline hover:text-blue-300">abhiwebsln@outlook.com</a><br>
            📱 Phone: <a href="tel:7379210635" class="underline hover:text-blue-300">7379210635</a>
        </div>
    </div>
</section>

@endsection
