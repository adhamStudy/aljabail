<footer class="bg-gradient-to-r from-gray-700 via-gray-900 to-gray-700 text-white py-6 mt-10 shadow-lg">
    <div
        class="container mx-auto flex flex-col md:flex-row justify-between items-center px-6 rtl:flex-row-reverse text-right">
        <!-- عن المطور -->
        <div class="text-center md:text-right mb-4 md:mb-0">
            <h2 class="text-2xl font-bold">تم التطوير بواسطة <span class="text-yellow-400">المهندس: أدهم الصلاحي</span>
            </h2>
            {{-- <p class="text-gray-400 mt-1">مطوّر ويب شغوف | مهتم بلغة Laravel و Tailwind</p> --}}
        </div>

        <!-- روابط التواصل الاجتماعي -->
        <div class="flex gap-6 rtl:flex-row-reverse">
            <a href="https://x.com/adhm0e6w?t=EvdP4C8x4XuxTimolQoUbw&s=09" target="_blank"
                class="text-gray-400 hover:text-blue-400 transition text-2xl">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/adhm.slahi.5" target="_blank"
                class="text-gray-400 hover:text-blue-600 transition text-2xl">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://wa.me/00966599805306" target="_blank"
                class="text-gray-400 hover:text-green-500 transition text-2xl">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>

    <!-- حقوق النشر -->
    <div class="text-center text-gray-500 text-sm mt-4">
        © {{ date('Y') }} جميع الحقوق محفوظة. تم التصميم بكل ❤️ بواسطة <span class="text-yellow-400">أدهم
            الصلاحي</span>
    </div>
</footer>
