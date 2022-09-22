@php
    $arrs = ["fa-brands fa-square-facebook","fa-brands fa-instagram", "fa-brands fa-square-snapchat",
    "fa-brands fa-twitter", "fa-brands fa-linkedin-in",
    ]
@endphp
<x-card.card-right title="Follow Me">
    <div class="bg-white p-5 flex  space-x-2 text-3xl text-gray-600">
        @foreach($arrs as $arr )
            <i class="{{ $arr }}"></i>
        @endforeach
    </div>
</x-card.card-right>
