@props(['services' => []])

<div class="flex justify-center w-full px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6 max-w-7xl w-full">
        @foreach ($services as $service)
            <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                <img src="{{ $service['image'] }}" alt="{{ $service['label'] }}"
                    class="w-full h-52 object-cover rounded-lg">
                <h3 class="text-2xl font-bold text-blue-700 mt-4 text-center">{{ $service['label'] }}</h3>

                <div class="mt-4 space-y-3">
                    @foreach ($service['items'] as $title => $description)
                        <div x-data="{ open: false }" class="border border-gray-300 rounded-lg shadow-sm">
                            <button @click="open = !open"
                                class="w-full flex justify-between items-center p-4 bg-gray-100 hover:bg-gray-200 rounded-lg transition-all">
                                <span class="text-lg font-semibold">{{ $title }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 transition-transform duration-300 ease-in-out"
                                    :class="{ 'rotate-180': open }" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div x-show="open" x-collapse class="p-4 text-gray-700 bg-white border-t">
                                {{ $description }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
