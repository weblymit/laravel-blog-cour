@php
    $arrs = ['Fashion', 'New York', 'London', 'Hats', 'Norway', 'Sweaters', 'Ideas', 'Deals', 'News', 'Clothing',
    'Shopping', 'Jeans', 'Trends']
@endphp
<x-card.card-right title="Tags">
    <div class="bg-white p-5 flex flex-wrap justify-between space-x-5d">
        @foreach($arrs as $arr )
            <span class="bg-gray-200 px-4 py-2 mb-2 hover:bg-gray-800 hover:text-gray-50">{{ $arr }}</span>
        @endforeach
    </div>
</x-card.card-right>
