@props([
    'title',
    'title2',
    'url_img',
])
<div class="flex items-center space-x-4 mb-2j border-b border-gray-200 py-6 px-5">
    <img src="img/{{ $url_img }}" alt="" class="w-24">
    <div class="text-lg font-light">
        <p>{{ $title }}</p>
        <p class="text-gray-600">{{ $title2 }}</p>
    </div>
</div>
