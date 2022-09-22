@props([
    'title'
])

<div class="my-8 bg-gray-50">
    <div class="bg-gray-800 text-gray-50 p-5">
        <p class="text-2xl font-bold">{{ $title }}</p>
    </div>
    <div class="contenu">
        {{ $slot }}
    </div>
</div>
