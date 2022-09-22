@php
    $arrs = ['jeans.jpeg', 'avatar_hat.jpeg', 'team1.jpeg', 'team4.jpeg']
@endphp
<x-card.card-right title="Inspiration">
    <div class="bg-white p-5 grid grid-cols-2 gap-4">
        @foreach($arrs as $arr )
            <img src="img/{{ $arr }}" alt="">
        @endforeach
    </div>

</x-card.card-right>
