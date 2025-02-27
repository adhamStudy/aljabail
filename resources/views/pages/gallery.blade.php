@props(['active' => '1', 'test' => []])
<script>
    var app = {{ Js::from($heroData) }};
    var pathes = {{ Js::from($pathes) }};
    var indexes = {{ Js::from($arrayOfIndexes) }};
</script>
<x-layout title="Gallery">
    <div x-data="{
        active: {{ $active }},
        heroData: app,
        pathes: pathes,
        indexes: indexes,
        imagePath: 'images/gallery/' + {{ $active }} + '.jpg',
    
    
    }">
        <div class="flex items-center justify-evenly my-2 w-full">
            <button :class="active === 1 ? 'bg-blue-600 text-white' : 'bg-yellow-500'"
                @click="active = 1; imagePath = '/storage/images/gallery/1.jpg'"
                class="rounded-lg shadow-sm py-2 px-2 m-3 hover:bg-blue-600 hover:text-white">
                Struct
            </button>
            <button :class="active === 2 ? 'bg-blue-600 text-white' : 'bg-yellow-400'"
                @click="active = 2; imagePath = '/storage/images/gallery/2.jpg'"
                class="rounded-lg shadow-sm py-2 px-2 m-3 hover:bg-blue-600 hover:text-white">
                Foundation
            </button>
            <button :class="active === 3 ? 'bg-blue-600 text-white' : 'bg-yellow-400'"
                @click="active = 3; imagePath = '/storage/images/gallery/3.jpg'"
                class="rounded-lg shadow-sm py-2 px-2 m-3 hover:bg-blue-600 hover:text-white">
                Construct
            </button>
            <button :class="active === 4 ? 'bg-blue-600 text-white' : 'bg-yellow-400'"
                @click="active = 4; imagePath = '/storage/images/gallery/4.jpg'"
                class="rounded-lg shadow-sm py-2 px-2 m-3 hover:bg-blue-600 hover:text-white">
                Paint
            </button>
        </div>
        <div class="w-full h-[500px] bg-cover bg-center" :style="{ backgroundImage: `url(${imagePath})` }">

            <div>
                <h3 class="text-3xl pt-10 font-bold text-yellow-400 text-center" x-text="app[active]['title']"></h3>
                <h5 class="text-2xl pt-10  text-white text-center" x-text="app[active]['description']"> Struct bones -
                    Clean - Foundation - Painting - All
                    Structural Services</h5>

            </div>
        </div>



        <h3 class="text-center text-3xl text-blue-600 font-bold mt-10 mb-5">
            تصفح أعمالنا
        </h3>

        <div x-data="{ selectedImage: '', isOpen: false }">
            <!-- Gallery Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 p-4">
                <template x-for="index in indexes[active]" :key="index">
                    <div class="relative">
                        <img :src="`/storage/images/gallery/${pathes[active]}/${pathes[active]}${index-1}.jpg`"
                            @click="selectedImage = `/storage/images/gallery/${pathes[active]}/${pathes[active]}${index-1}.jpg`; isOpen = true"
                            class="w-full aspect-square object-cover rounded-lg shadow-md cursor-pointer 
                               hover:scale-105 hover:opacity-90 transition-transform duration-200"
                            alt="Gallery Image">
                    </div>
                </template>
            </div>

            <!-- Image Modal -->
            <div x-show="isOpen" x-transition
                class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center p-4"
                @click.away="isOpen = false">
                <div class="relative max-w-3xl w-full">
                    <button @click="isOpen = false"
                        class="absolute top-2 right-2 bg-white text-black px-3 py-1 rounded-full shadow-md">
                        ✕
                    </button>
                    <img :src="selectedImage" class="w-full max-h-[80vh] object-contain rounded-lg shadow-lg">
                </div>
            </div>
        </div>




    </div>
</x-layout>
