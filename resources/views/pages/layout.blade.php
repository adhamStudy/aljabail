@props(['title' => 'null'])
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <script src="//unpkg.com/alpinejs" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title ?? ' ' }}</title>
</head>

<body class="m-0 p-0">

    <x-header />

    <main>
        {{ $slot }}




    </main>
    <a href="https://wa.me/yourwhatsappphone" target="_blank"
        class="fixed bottom-4 left-4 z-50 w-16 h-16 bg-green-500 rounded-full shadow-lg flex items-center justify-center hover:bg-green-600 transition">
        <i class="fab fa-whatsapp text-white text-4xl"></i>
    </a>


    <x-footer />
</body>
