<header class="bg-gradient-to-r from-blue-500 via-blue-700 to-blue-800 text-white p-4 shadow-lg" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <h1 class="text-3xl font-semibold">
            <a href="/" class="hover:text-yellow-400 transition duration-300">الجبيل</a>
        </h1>

        <!-- Desktop Navigation (RTL Support) -->
        <nav class="hidden md:flex items-center">
            <a href="/"
                class="{{ Request::is('/') ? 'font-bold text-yellow-400 text-xl' : 'text-white' }} hover:text-yellow-300 transition ms-4">Home</a>
            <a href="{{ route('gallery') }}"
                class="{{ Request::is('gallery') ? 'font-bold text-yellow-400 text-xl' : 'text-white' }} hover:text-yellow-300 transition ms-4">Gallery</a>
            <a href="/#servicesLink"
                class="{{ Request::is('/services') ? 'font-bold text-yellow-400 text-xl' : 'text-white' }} hover:text-yellow-300 transition ms-4">Services</a>

            <a href="{{ route('about') }}"
                class="{{ Request::is('about') ? 'font-bold text-yellow-400 text-xl' : 'text-white' }} hover:text-yellow-300 transition ms-4">About</a>
            <a href="{{ route('contact') }}"
                class="{{ Request::is('contact') ? 'font-bold text-yellow-400 text-xl' : 'text-white' }} hover:text-yellow-300 transition ms-4">Contact
                Us</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button @click="open = !open" class="text-white md:hidden">
            <i :class="open ? 'fa fa-times' : 'fa fa-bars'" class="text-2xl"></i>
        </button>
    </div>

    <!-- Mobile Menu (Slide Down) -->
    <nav x-show="open" x-transition class="md:hidden bg-blue-700 text-white p-4 mt-2 rounded-lg shadow-md">
        <a href="/" class="block py-2 hover:bg-blue-800 rounded transition">Home</a>
        <a href="{{ route('gallery') }}" class="block py-2 hover:bg-blue-800 rounded transition">Gallery</a>
        <a href="{{ route('services') }}" class="block py-2 hover:bg-blue-800 rounded transition">Services</a>
        <a href="{{ route('about') }}" class="block py-2 hover:bg-blue-800 rounded transition">About</a>
        <a href="{{ route('contact') }}" class="block py-2 hover:bg-blue-800 rounded transition">Contact Us</a>
    </nav>
</header>
