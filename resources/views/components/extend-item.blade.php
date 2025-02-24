@props(['title' => 'title', 'description' => 'description'])
<div x-data="{ open: false }" class="w-full max-w-md mx-auto">

    <button @click="open = !open"
        class="w-full bg-gray-200 mt-5 text-gray-700 text-left px-4 py-3 text-lg font-semibold cursor-pointer focus:outline-none hover:bg-gray-300 flex justify-between items-center"
        :class="{ 'bg-gray-300': open }">
        <span>{{ $title }}</span>
        <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform duration-300" fill="none"
            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    <div x-show="open" x-collapse class="p-4 bg-gray-100 transition-all duration-300 ease-in-out"
        x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0"
        x-transition:leave="transition-opacity duration-300" x-transition:leave-end="opacity-0">
        <p>{{ $description }}</p>
    </div>
</div>
