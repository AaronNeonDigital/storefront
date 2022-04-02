
<a class="wrapper bg-gray-200 antialiased text-gray-900" href="{{ route('product.view', $product->defaultUrl->slug) }}">
    <div>
        @if ($product->thumbnail)
            <img class="w-full object-cover object-center rounded-lg shadow-md"
                src="{{ $product->thumbnail->getUrl('large') }}" alt="{{ $product->translateAttribute('name') }}"
                loading="lazy" />
        @endif

        <div class="relative px-4 -mt-16  ">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-baseline">
                    <span class="bg-teal-200 text-teal-800 text-xs m-1 px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                        New
                    </span>
                    <span class="bg-teal-200 text-teal-800 text-xs m-1 px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
                        Android
                    </span>
                    {{-- <div class="ml-2 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                        2 baths &bull; 3 rooms
                    </div> --}}
                </div>

                <h4 class="mt-1 text-xl font-semibold uppercase leading-tight truncate">{{ $product->translateAttribute('name') }}</h4>
                
                <div class="mt-1">
                    @livewire('product-price', ['product' => $product])
                    {{-- <span class="text-gray-600 text-sm"> /wk</span> --}}
                </div>
                <div class="mt-4">
                    <span class="text-teal-600 text-md font-semibold">Maybe ratings? Meeeeh </span>
                    {{-- <span class="text-sm text-gray-600">(based on 234 ratings)</span> --}}
                </div>
            </div>
        </div>

    </div>
</a>

{{-- <a class="block group rounded-lg shadow-lg" href="{{ route('product.view', $product->defaultUrl->slug) }}">
    <div class="overflow-hidden rounded-lg aspect-w-1 aspect-h-1">
        @if ($product->thumbnail)
        <img class="object-cover transition-transform duration-300 group-hover:scale-105"
            src="{{ $product->thumbnail->getUrl('medium') }}" alt="{{ $product->translateAttribute('name') }}"
            loading="lazy" />
        @endif
    </div>

    <h5 class="mt-2 text-sm font-medium">
        {{ $product->translateAttribute('name') }}
    </h5>

    <p class="mt-1 text-sm text-gray-600">
        <span class="sr-only">
            Price
        </span>

        @livewire('product-price', ['product' => $product])

    </p>
</a> --}}