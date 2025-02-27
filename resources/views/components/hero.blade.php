<div class="relative w-full h-[600px] md:h-[700px] bg-cover bg-center flex justify-center items-center text-center px-6"
    style="background-image: url('{{ asset('images/hero.jpg') }}'); background-size: cover; background-position: center;"
    <!-- Dark overlay for readability -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <div class="relative flex flex-col items-center text-white space-y-5 max-w-3xl w-full">
        <!-- Logo -->
        <div class="w-24 h-24 rounded-full bg-white shadow-lg flex justify-center items-center overflow-hidden">
            <img src="images/w logo.png" alt="Logo" class="w-full h-full object-cover">
        </div>

        <!-- Title -->
        <h1 class="text-yellow-400 font-bold text-4xl md:text-5xl drop-shadow-lg">
            مؤسسة أمانة الجبيل العقارية
        </h1>

        <!-- Subtitle -->
        <h3 class="text-white text-lg md:text-2xl max-w-xl leading-relaxed">
            Struct bones - Clean - Foundation - Painting - All Structural Services
        </h3>

        <!-- Buttons -->
        <div class="flex flex-wrap gap-4 justify-center">
            <button
                class="bg-yellow-500 text-black font-semibold rounded-full px-6 py-3 shadow-md transition duration-300 hover:bg-yellow-600">
                <a href="/#servicesLink">الخدمات </a>
            </button>
            <button
                class="bg-white text-black font-semibold rounded-full px-6 py-3 shadow-md transition duration-300 hover:bg-gray-200">
                <a href="{{ route('gallery') }}">المعرض</a>
            </button>
            <button
                class="bg-white text-black font-semibold rounded-full px-6 py-3 shadow-md transition duration-300 hover:bg-gray-200">
                <a href="/#offersLink">العروض</a>
            </button>
        </div>

        <!-- Supervisor Name -->
        <h3 class="text-gray-300 text-lg font-semibold mt-4">Supervised by Abdullah Ali Alshehri</h3>

        <!-- Contact Button -->
        <div class="bg-yellow-500 rounded-full shadow-lg mt-4">
            <a href="https://wa.me/+966507854326" target="_blank"
                class="block px-6 py-3 text-black font-bold transition hover:bg-yellow-600">
                📞 0533680027 - 0533680027
            </a>
        </div>
    </div>
</div>
