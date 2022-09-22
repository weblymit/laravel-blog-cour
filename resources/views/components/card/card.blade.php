@props([
    'url_img',
    'title'
])

<div class="bg-gray-50 mb-5">
    <div class="p-5">
        <div class="text-center pt-5 pb-7">
            <h2 class="text-2xl font-semibold pb-3">{{ $title }}</h2>
            <p>Title description, <span class="text-gray-500">May 2, 2016</span></p>
        </div>
        <img src="img/{{ $url_img }}" alt="">
        <div class="py-6">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sed ex culpa nostrum excepturi aliquam
                maxime
                facere dignissimos minima. A, minus doloribus. Neque ea quis voluptate blanditiis, cum, voluptates
                aperiam
                laborum debitis sapiente fugiat recusandae, nemo consectetur hic doloribus quae voluptas exercitationem?
                Eum
                ea
                consequatur, explicabo perspiciatis vitae ipsa voluptatibus culpa. Non molestiae vero, tempore minima
                harum
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam magnam nesciunt esse reprehenderit iste
                possimus,
                dolorum eveniet vel reiciendis optio nam cum, veniam atque aperiam quibusdam delectus debitis ducimus
                ea?
            </p>
        </div>
        <div class="flex justify-between items-center">
            <x-btn-like />
            <x-btn-replies />
        </div>
        <div class="">
            {{ $slot }}
        </div>
    </div>
</div>
