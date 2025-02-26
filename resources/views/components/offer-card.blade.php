@props([
    'title' => 'العرض الاول',
    'image' => '/storage/images/hero.jpg',
    'description' => 'This is a collapsible section containing an image, paragraph, and a button.',
])

<div x-data="{ open: false }" class="mt-5 w-full bg-white shadow-lg rounded-xl">
    <!-- Collapsible Button -->
    <button @click="open = !open"
        class="w-full rounded-lg text-left px-6 py-4 bg-gradient-to-r from-blue-300 via-blue-500 to-blue-500 text-white font-semibold text-lg flex justify-between items-center">
        <span>{{ $title }}</span>
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform duration-300"
            viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform duration-300"
            viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 11-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <!-- Collapsible Content -->
    <div x-show="open" x-transition class="p-6 space-y-4 border-t bg-gray-50">
        <p class="text-gray-700 text-xl text-center mb-4">
            {{ $description }}
        </p>

        <div class="flex justify-center">
            <img src="{{ url($image) }}" alt="Example Image"
                class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2 h-auto object-cover rounded-lg shadow-md">
        </div>

        <div class="flex justify-center">
            <a href="https://wa.me/+966507854326" target="_blank"
                class="border border-black px-6 py-2 text-black font-semibold rounded-full transition hover:bg-black hover:text-white">
                احجز الان
            </a>
        </div>
    </div>
</div>
