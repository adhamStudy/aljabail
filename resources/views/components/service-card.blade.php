@props(['title' => '', 'description' => ''])
<div class="rounded-lg drop-shadow-md bg-gray-100  p-2  w-full mt-4 flex flex-col items-center justify-center">
    <h2 class="font-bold text-xl">{{ $title }}</h2>
    <p>{{ $description }}</p>
</div>
