
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!-- inside <head> -->
<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
<title>Abhiwebsolutions</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
@keyframes wave {
  0% { transform: rotate(0deg); }
  10% { transform: rotate(14deg); }
  20% { transform: rotate(-8deg); }
  30% { transform: rotate(14deg); }
  40% { transform: rotate(-4deg); }
  50% { transform: rotate(10deg); }
  60% { transform: rotate(0deg); }
  100% { transform: rotate(0deg); }
}

.animate-waving-hand {
  display: inline-block;
  animation: wave 2s infinite;
  transform-origin: 70% 70%;
}
</style>

</head>

<body class="bg-green-100 text-black">


<nav class="bg-gradient-to-r from-pink-100 via-pink-200 to-pink-100 shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center relative">
        <!-- 🔸 Logo -->
        <a href="/" class="flex items-center gap-3 group">
            <img src="{{ asset('images/logo.png') }}" alt="Abhiwebsolutions Logo"
                class="h-12 max-w-[150px] object-contain transition-transform duration-300 group-hover:scale-105 group-hover:drop-shadow-md">
            <span class="text-2xl sm:text-3xl font-extrabold text-blue-800 tracking-wide transition-all duration-300 group-hover:text-blue-600">
                Abhiweb<span class="text-orange-500">solutions</span>
            </span>
        </a>

        <!-- 🔸 Desktop Menu -->
        <div class="hidden md:flex space-x-6 items-center font-medium text-black">
            <a href="/" class="hover:text-blue-600 transition-colors duration-300">Home</a>
            <a href="/about" class="hover:text-blue-600 transition-colors duration-300">About</a>

            <!-- 🔸 Services Dropdown -->
            <div class="relative group">
                <button onclick="toggleDropdown()" class="px-4 py-2 hover:text-blue-600 flex items-center transition-colors duration-300">
                    Services
                    <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5.5 7l4.5 4.5L14.5 7z" />
                    </svg>
                </button>
                <div class="absolute hidden group-hover:block bg-white shadow-md rounded-md mt-2 w-48 z-50">
                    <a href="/services/logo-design" class="block px-4 py-2 text-blue-700 hover:bg-pink-100">Logo Design</a>
                    <a href="/services/website-design" class="block px-4 py-2 text-blue-700 hover:bg-pink-100">Website Design</a>
                    <a href="/services/social" class="block px-4 py-2 text-blue-700 hover:bg-pink-100">Social Media Poster</a>
                    <a href="/services/ecommerce" class="block px-4 py-2 text-blue-700 hover:bg-pink-100">eCommerce Site</a>
                </div>
            </div>

            <a href="/contact" class="hover:text-blue-600 transition-colors duration-300">Contact</a>
        </div>

        <!-- 🔸 Hamburger Icon (Right) -->
        <div class="md:hidden relative">
            <button id="menu-btn" class="focus:outline-none">
                <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- 🔸 Mobile Dropdown Menu -->
            <div id="mobile-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden z-50">
                <a href="/" class="block px-4 py-2 text-blue-700 hover:bg-pink-100">Home</a>
                <a href="/about" class="block px-4 py-2 text-blue-700 hover:bg-pink-100">About</a>

                <!-- Mobile Services Dropdown -->
<div class="block px-4 py-2 text-blue-700 hover:bg-pink-100">
    <a href="/services/logo-design" class="block px-4 py-2 hover:bg-pink-100">Logo Design</a>
    <a href="/services/website-design" class="block px-4 py-2 hover:bg-pink-100">Website Design</a>
    <a href="/services/social" class="block px-4 py-2 hover:bg-pink-100">Social Media Poster</a>
    <a href="/services/ecommerce" class="block px-4 py-2 hover:bg-pink-100">eCommerce Site</a>
</div>

                <a href="/contact" class="block px-4 py-2 text-blue-700 hover:bg-pink-100">Contact</a>
            </div>
        </div>
    </div>
</nav>

<!-- ✅ Right Side Social Icons (Only Icons, Small, Stylish) -->
<div class="fixed top-1/3 right-0 z-50 space-y-2 pr-1">
    <!-- Instagram -->
    <a href="https://www.instagram.com/abhiwebsolutions" target="_blank"
       class="bg-pink-600 hover:bg-pink-700 text-white p-2 rounded-l-md shadow-md block">
        <i data-feather="instagram" class="w-4 h-4"></i>
        <!-- Instagram -->
<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 448 512">
    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9S160.5 370.8 224.1 370.8 339 319.5 
    339 255.9 287.7 141 224.1 141zm0 186.6c-39.5 0-71.6-32.1-71.6-71.6s32.1-71.6 
    71.6-71.6 71.6 32.1 71.6 71.6-32 71.6-71.6 71.6zm146.4-194.3c0 14.9-12 
    26.9-26.9 26.9s-26.9-12-26.9-26.9 12-26.9 
    26.9-26.9 26.9 12 26.9 26.9zm76.1 
    27.2c-.5-35.3-9.9-66.7-36.2-92.9S388.4 
    48.5 353.1 48c-35.3-.5-141.2-.5-176.5 
    0-35.3.5-66.7 9.9-92.9 36.2S48.5 123.6 
    48 158.9c-.5 35.3-.5 141.2 
    0 176.5.5 35.3 9.9 66.7 36.2 
    92.9s57.6 35.7 92.9 36.2c35.3.5 141.2.5 
    176.5 0 35.3-.5 66.7-9.9 92.9-36.2s35.7-57.6 
    36.2-92.9c.5-35.3.5-141.1 
    0-176.4zm-48.4 218c-7.8 19.6-23.1 
    35-42.6 42.6-29.5 11.7-99.5 9-132.5 
    9s-103 .6-132.5-9c-19.6-7.8-35-23.1-42.6-42.6-11.7-29.5-9-99.5-9-132.5s-.6-103 
    9-132.5c7.8-19.6 23.1-35 42.6-42.6 
    29.5-11.7 99.5-9 132.5-9s103-.6 
    132.5 9c19.6 7.8 35 23.1 42.6 
    42.6 11.7 29.5 9 99.5 9 
    132.5s2.6 103-9.1 
    132.5z"/>
</svg>

    </a>

    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/in/abhishek-kumar-224585203" target="_blank"
       class="bg-blue-700 hover:bg-blue-800 text-white p-2 rounded-l-md shadow-md block">
        <i data-feather="linkedin" class="w-4 h-4"></i>
    <!-- LinkedIn -->
<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 448 512">
    <path d="M100.28 448H7.4V148.9h92.88zM53.79 
    108.1C24.09 108.1 0 83.53 0 53.79 0 24.5 
    24.5 0 53.79 0s53.79 24.5 53.79 53.79c0 
    29.74-24.09 54.31-53.79 
    54.31zM447.9 448h-92.4V302.4c0-34.7-.7-79.3-48.3-79.3-48.3 
    0-55.7 37.7-55.7 76.7V448h-92.6V148.9h88.9v40.8h1.3c12.4-23.5 
    42.6-48.3 87.7-48.3 93.7 0 111 61.7 111 
    141.9V448z"/>
</svg>



    </a>

    <!-- Facebook -->
    <a href="https://www.facebook.com/profile.php?id=100068591042748" target="_blank"
       class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-l-md shadow-md block">
        <i data-feather="facebook" class="w-4 h-4"></i>
        <!-- Facebook -->
<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 320 512">
    <path d="M279.14 288l14.22-92.66h-88.91V129.1c0-25.35 
    12.42-50.06 52.24-50.06h40.42V6.26S260.43 
    0 225.36 0C141.09 0 89.53 54.42 89.53 
    153.12v68.22H0v92.66h89.53V512h107.77V288z"/>
</svg>

    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/917379210635" target="_blank"
       class="bg-green-600 hover:bg-green-700 text-white p-2 rounded-l-md shadow-md block">
        <i data-feather="message-circle" class="w-4 h-4"></i>
        <!-- WhatsApp -->
<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 448 512">
    <path d="M380.9 97.1C339-6.7 230.2-31.7 
    137.8 18.8 58.2 61.2 22.3 
    155.5 45.9 244.8L0 
    448l207.7-43.5c83.1 
    22.5 169.7-20.2 
    202.2-96.1 35.8-83.6-1.5-176.6-29-211.3zM227.4 
    388.3c-30.5 
    0-60.7-8.9-86.6-25.7l-6.2-3.9-63.3 
    13.3 13.2-61.7-4-6.3c-26-41.1-32.3-93.2-17-139.6 
    18-56.5 70.8-94.9 130.3-94.9 
    12.2 0 24.5 1.6 36.4 4.8 38.8 10.4 71.2 
    37.2 87.7 73.2 16.3 35.6 
    16.5 76.5.5 112.2-15.8 35.2-46.3 62.1-83.8 
    73.2-10.9 3.1-22.4 4.7-33.9 
    4.7zm101.8-138.4c-5.5-2.8-32.4-15.9-37.4-17.7-5-1.9-8.6-2.8-12.3 
    2.8s-14.1 17.7-17.3 21.3c-3.1 3.6-6.3 4.1-11.8 
    1.4-32.2-16.1-53.2-28.9-74.3-65.3-5.6-9.6 5.6-8.9 
    16.1-29.6 1.8-3.6.9-6.7-.5-9.6s-12.3-30.1-16.9-41.2c-4.5-10.8-9.1-9.4-12.3-9.6-3.2-.2-6.9-.2-10.6-.2-3.7 
    0-9.6 1.4-14.6 6.7-5 5.5-19.1 18.7-19.1 45.7 0 26.9 19.6 52.9 
    22.3 56.6 2.7 3.6 38.6 59.1 93.7 82.9 13.1 
    5.6 23.3 8.9 31.2 11.4 13.1 4.2 25 
    3.6 34.4 2.2 10.5-1.6 32.4-13.2 37-25.9 
    4.6-12.7 4.6-23.5 3.2-25.8-1.3-2.3-5-3.7-10.5-6.4z"/>
</svg>

    </a>

    <!-- YouTube (custom SVG icon) -->
    <a href="https://youtube.com/@abhiwebsolutions?si=_vOUs_PnYXvYMPIQ" target="_blank"
       class="bg-red-600 hover:bg-red-700 text-white p-2 rounded-l-md shadow-md block">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current" viewBox="0 0 576 512">
            <path d="M549.7 124.1c-6.3-23.7-24.9-42.3-48.5-48.5C458.2 64 288 64 288 64S117.8 64 
            74.8 75.6c-23.7 6.3-42.3 24.9-48.5 48.5C16 167.1 16 256 
            16 256s0 88.9 10.3 131.9c6.3 23.7 24.9 42.3 
            48.5 48.5C117.8 448 288 448 288 448s170.2 
            0 213.2-11.6c23.7-6.3 42.3-24.9 
            48.5-48.5C560 344.9 560 256 
            560 256s0-88.9-10.3-131.9zM232 
            336V176l142 80-142 80z"/>
        </svg>
    </a>
</div>

    <!-- ✅ Page Content -->
    <main>
        @yield('content')
    </main>

    {{-- projcets --}}

<!-- ✅ Footer with Social Icons -->
    <section class="py-2 bg-blue-200 px-2">


    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-4 text-center text-gray-800 gap-6">
            <div>
                <div class="text-4xl font-extrabold counter" data-target="20">0</div>
                <div class="mt-1 font-medium">🏆 Awards Won</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold counter" data-target="30">0</div>
                <div class="mt-1 font-medium">💼 Projects Done</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold counter" data-target="40">0</div>
                <div class="mt-1 font-medium">😊 Satisfied Clients</div>
            </div>
            <div>
                <div class="text-4xl font-extrabold counter" data-target="59">0</div>
                <div class="mt-1 font-medium">🚧 Running Projects</div>
            </div>
        </div>
    </div>
</section>

<script>
    const counters = document.querySelectorAll('.counter');
    const speed = 100;

    const startCounting = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = Math.ceil(target / speed);

                if (count < target) {
                    counter.innerText = count + inc;
                    setTimeout(updateCount, 30);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    const section = document.querySelector('.counter').closest('section');
    let started = false;
    window.addEventListener('scroll', () => {
        const top = section.getBoundingClientRect().top;
        if (!started && top < window.innerHeight) {
            startCounting();
            started = true;
        }
    });
</script>

<footer class="bg-black text-white py-8 mt-0">

    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
        <p class="text-sm mb-4 md:mb-0">&copy; {{ date('Y') }} Abhiwebsolutions. All rights reserved.</p>
                <p class="text-sm mb-2 md:mb-0 text-pink-400 font-semibold">Designed & Developed by Er Abhi</p>

        <div class="flex space-x-4">
            <!-- Instagram -->
            <a href="https://www.instagram.com/abhiwebsolutions" target="_blank" class="hover:text-pink-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 448 512">
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9S160.5 370.8 224.1 370.8 339 319.5 339 255.9 287.7 141 224.1 141zm0 186.6c-39.5 0-71.6-32.1-71.6-71.6s32.1-71.6 71.6-71.6 71.6 32.1 71.6 71.6-32 71.6-71.6 71.6zm146.4-194.3c0 14.9-12 26.9-26.9 26.9s-26.9-12-26.9-26.9 12-26.9 26.9-26.9 26.9 12 26.9 26.9zm76.1 27.2c-.5-35.3-9.9-66.7-36.2-92.9S388.4 48.5 353.1 48c-35.3-.5-141.2-.5-176.5 0-35.3.5-66.7 9.9-92.9 36.2S48.5 123.6 48 158.9c-.5 35.3-.5 141.2 0 176.5.5 35.3 9.9 66.7 36.2 92.9s57.6 35.7 92.9 36.2c35.3.5 141.2.5 176.5 0 35.3-.5 66.7-9.9 92.9-36.2s35.7-57.6 36.2-92.9c.5-35.3.5-141.1 0-176.4zm-48.4 218c-7.8 19.6-23.1 35-42.6 42.6-29.5 11.7-99.5 9-132.5 9s-103 .6-132.5-9c-19.6-7.8-35-23.1-42.6-42.6-11.7-29.5-9-99.5-9-132.5s-.6-103 9-132.5c7.8-19.6 23.1-35 42.6-42.6 29.5-11.7 99.5-9 132.5-9s103-.6 132.5 9c19.6 7.8 35 23.1 42.6 42.6 11.7 29.5 9 99.5 9 132.5s2.6 103-9.1 132.5z"/>
                </svg>
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/abhishek-kumar-224585203" target="_blank" class="hover:text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 448 512">
                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.53 0 53.79 0 24.5 24.5 0 53.79 0s53.79 24.5 53.79 53.79c0 29.74-24.09 54.31-53.79 54.31zM447.9 448h-92.4V302.4c0-34.7-.7-79.3-48.3-79.3-48.3 0-55.7 37.7-55.7 76.7V448h-92.6V148.9h88.9v40.8h1.3c12.4-23.5 42.6-48.3 87.7-48.3 93.7 0 111 61.7 111 141.9V448z"/>
                </svg>
            </a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/profile.php?id=100068591042748" target="_blank" class="hover:text-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 320 512">
                    <path d="M279.14 288l14.22-92.66h-88.91V129.1c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0C141.09 0 89.53 54.42 89.53 153.12v68.22H0v92.66h89.53V512h107.77V288z"/>
                </svg>
            </a>

            <!-- WhatsApp -->
            <a href="https://wa.me/917379210635" target="_blank" class="hover:text-green-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 448 512">
                    <path d="M380.9 97.1C339-6.7 230.2-31.7 137.8 18.8 58.2 61.2 22.3 155.5 45.9 244.8L0 448l207.7-43.5c83.1 22.5 169.7-20.2 202.2-96.1 35.8-83.6-1.5-176.6-29-211.3zM227.4 388.3c-30.5 0-60.7-8.9-86.6-25.7l-6.2-3.9-63.3 13.3 13.2-61.7-4-6.3c-26-41.1-32.3-93.2-17-139.6 18-56.5 70.8-94.9 130.3-94.9 12.2 0 24.5 1.6 36.4 4.8 38.8 10.4 71.2 37.2 87.7 73.2 16.3 35.6 16.5 76.5.5 112.2-15.8 35.2-46.3 62.1-83.8 73.2-10.9 3.1-22.4 4.7-33.9 4.7zm101.8-138.4c-5.5-2.8-32.4-15.9-37.4-17.7-5-1.9-8.6-2.8-12.3 2.8s-14.1 17.7-17.3 21.3c-3.1 3.6-6.3 4.1-11.8 1.4-32.2-16.1-53.2-28.9-74.3-65.3-5.6-9.6 5.6-8.9 16.1-29.6 1.8-3.6.9-6.7-.5-9.6s-12.3-30.1-16.9-41.2c-4.5-10.8-9.1-9.4-12.3-9.6-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.6 1.4-14.6 6.7-5 5.5-19.1 18.7-19.1 45.7 0 26.9 19.6 52.9 22.3 56.6 2.7 3.6 38.6 59.1 93.7 82.9 13.1 5.6 23.3 8.9 31.2 11.4 13.1 4.2 25 3.6 34.4 2.2 10.5-1.6 32.4-13.2 37-25.9 4.6-12.7 4.6-23.5 3.2-25.8-1.3-2.3-5-3.7-10.5-6.4z"/>
                </svg>
            </a>

            <!-- YouTube -->
            <a href="https://youtube.com/@abhiwebsolutions?si=_vOUs_PnYXvYMPIQ" target="_blank" class="hover:text-red-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 576 512">
                    <path d="M549.7 124.1c-6.3-23.7-24.9-42.3-48.5-48.5C458.2 64 288 64 288 64S117.8 64 74.8 75.6c-23.7 6.3-42.3 24.9-48.5 48.5C16 167.1 16 256 16 256s0 88.9 10.3 131.9c6.3 23.7 24.9 42.3 48.5 48.5C117.8 448 288 448 288 448s170.2 0 213.2-11.6c23.7-6.3 42.3-24.9 48.5-48.5C560 344.9 560 256 560 256s0-88.9-10.3-131.9zM232 336V176l142 80-142 80z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>

    <!-- Feather Icons Init -->
    <script>
        feather.replace({
            'youtube': '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path fill="currentColor" d="M10 15l5.19-3L10 9v6z" /><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
        });
        feather.replace();
    </script>
<script>
    const texts = ["Fullstack Developer", "Freelancer", "Software Developer"];
    let count = 0;
    let index = 0;
    let currentText = '';
    let letter = '';

    function type() {
        if (count === texts.length) count = 0;
        currentText = texts[count];
        letter = currentText.slice(0, ++index);

        document.getElementById('typed-text').textContent = letter;

        if (letter.length === currentText.length) {
            setTimeout(() => {
                index = 0;
                count++;
                setTimeout(type, 500);
            }, 1500);
        } else {
            setTimeout(type, 100);
        }
    }

    document.addEventListener("DOMContentLoaded", type);
</script>
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

{{-- ynha se  --}}
<!-- 🔵 Floating Assistant Icon -->
<div id="chatbot-icon"
     class="fixed bottom-6 right-6 z-50 flex flex-col items-center space-y-2">

    <!-- Text Bubble -->
    <div class="bg-white text-sm font-medium text-gray-700 px-4 py-2 rounded-full shadow-md animate-bounce transition duration-300">
        We are here to help you
    </div>

    <!-- Icon Button -->
    <div class="bg-white p-2 rounded-full shadow-lg cursor-pointer hover:scale-105 transition">
        <img src="{{ asset('images/download.png') }}"
             alt="Help"
             class="h-14 w-14 object-contain rounded-full transition-transform duration-300 hover:scale-110" />
    </div>
</div>



<div id="chatbot-box"
     class="fixed bottom-20 right-6 w-72 h-[400px] bg-white border border-gray-300 rounded-xl shadow-xl hidden flex flex-col z-50">
    
    <!-- Header -->
    <div class="bg-indigo-600 text-white font-semibold text-sm px-4 py-2 rounded-t-xl flex justify-between items-center">
        <span>💬 Ask Abhiwebsolutions</span>
        <button onclick="document.getElementById('chatbot-box').classList.add('hidden')">✖️</button>
    </div>

    <!-- Messages -->
    <div id="chat-messages" class="flex-1 overflow-y-auto p-3 text-sm space-y-2 bg-gray-50">
        <div class="text-left text-gray-700">🤖: Hi! I'm here to help you about our services. Ask me anything!</div>
    </div>

    <!-- Input -->
    <form id="chat-form" class="flex items-center border-t border-gray-300 bg-white p-2">
        <input type="text" id="chat-input" placeholder="Type a message..."
               class="flex-1 px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none" />
        <button type="submit"
                class="ml-2 px-3 py-1 bg-indigo-600 text-white rounded hover:bg-indigo-700 text-sm">Send</button>
    </form>
</div>

<script>
    const icon = document.getElementById('chatbot-icon');
    const box = document.getElementById('chatbot-box');
    const form = document.getElementById('chat-form');
    const input = document.getElementById('chat-input');
    const messages = document.getElementById('chat-messages');

    let clearTimer;

    // Open chatbot on icon click
    icon.addEventListener('click', () => {
        box.classList.remove('hidden');
        resetClearTimer();
    });

    // Clear chat after 5 minutes
    const resetClearTimer = () => {
        clearTimeout(clearTimer);
        clearTimer = setTimeout(() => {
            messages.innerHTML = `<div class="text-left text-gray-700">🤖: Hi! I'm here to help you about our services. Ask me anything!</div>`;
        }, 300000); // 5 min = 300000 ms
    };

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const msg = input.value.trim();
        if (!msg) return;

        messages.innerHTML += `<div class="text-right text-blue-700">You: ${msg}</div>`;
        input.value = '';
        messages.scrollTop = messages.scrollHeight;

        let reply = "🤖: Sorry, I didn't understand that.";

        // Simple rule-based chatbot
        if (msg.toLowerCase().includes('service')) {
            reply = "🤖: We offer services like Logo Design, Website Design, Social Media Posters, and Reminder Cards.";
        } else if (msg.toLowerCase().includes('email')) {
            reply = "🤖: You can reach us at 📧 abhiwebsln@outlook.com";
        } else if (msg.toLowerCase().includes('phone') || msg.toLowerCase().includes('contact')) {
            reply = "🤖: You can call us at 📞 7379210635";
        } else if (msg.toLowerCase().includes('hello') || msg.toLowerCase().includes('hi')) {
            reply = "🤖: Hello! How can I help you today?";

            
        } else if (msg.toLowerCase().includes('bye')) {
            reply = "🤖: Goodbye! Feel free to ask anytime.";
        }

        setTimeout(() => {
            messages.innerHTML += `<div class="text-left text-gray-700">${reply}</div>`;
            messages.scrollTop = messages.scrollHeight;
        }, 400);

        resetClearTimer();
    });
</script>

</body>
</html>
