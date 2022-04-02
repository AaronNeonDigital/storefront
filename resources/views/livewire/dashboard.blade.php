<div>
    <div class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="#">
				        Store
			        </a>

                    <div class="flex items-center" id="store-nav-content">

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                            </svg>
                        </a>

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                            </svg>
                        </a>

                    </div>
              </div>
            </nav>
            <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
                @if ($this->saleCollection)
                    <a
                        class="relative block"
                        href="#"
                        {{-- href="{{ route('collection.view', $this->saleCollection->defaultUrl->slug) }}" --}}
                    >
                        <figure>
                            <img src="{{ $this->saleCollection->thumbnail->getUrl() }}" />
                        </figure>
            
                        <div class="absolute bottom-0 p-6 text-white">
                            <strong class="text-6xl shadow">foo
                                {{ $this->saleCollection->translateAttribute('name') }}
                            </strong>
            
                            <p class="text-xl shadow">
                                {{ $this->saleCollection->translateAttribute('description') }}
                            </p>
                        </div>
                    </a>
                @endif
            
                @if ($this->randomCollection)
                    <section>
                        <h2 class="text-3xl font-bold">
                            foo
                            {{ $this->randomCollection->translateAttribute('name') }}
                        </h2>
            
                        <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
                            @foreach ($this->randomCollection->products as $product)
                                @livewire('product-card', ['product' => $product])
                                {{-- <x-product-card :product="$product" /> --}}
                            @endforeach
                        </div>
                    </section>
                @endif
            </div>

            

        </div>

    </div>
</div>