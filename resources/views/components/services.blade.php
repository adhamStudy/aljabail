@props(['items' => []])

<div id="servicesLink" class="flex justify-center flex-col items-center mt-3 mx-3">
    <h3 class="text-blue-700 text-2xl">التشطيبات</h3>

    @foreach ($items as $title => $description)
        <x-service-card title="{{ $title }}" description="{{ $description }}" />
    @endforeach
</div>
