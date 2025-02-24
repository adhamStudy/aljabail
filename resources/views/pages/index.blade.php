<x-layout title="This is aljabail">
    @if (Request::is('/'))
        <x-hero />
    @endif
    <x-offers />
    <x-services :items="$items" />

    <h3 class="text-3xl text-center text-blue-600 mt-5">Services</h3>
    <h5 class="text-xl text-center text-black mt-2">المؤسسة الرائدة في عالم المقاولات العامة لتقديم أفضل الخدمات
        بأفضل جودة</h5>




    <x-service-item :services="$services" />


    <x-contact />

</x-layout>
