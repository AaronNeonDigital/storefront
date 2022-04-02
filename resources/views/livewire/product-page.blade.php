<section>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row gap-11 py-10 px-5 bg-white rounded-md shadow-lg w-3/4 md:max-w-2xl">
            <div class="text-indigo-500 flex flex-col justify-between">
                @if ($this->image)
                    <img class="rounded-xl" src="{{ $this->image->getUrl('small') }}"
                        alt="{{ $this->product->translateAttribute('name') }}" />
                @endif
                <div>
                    <form class="mt-8">
                        @foreach ($this->productOptions as $option)
                        <fieldset>
                            <legend class="text-sm font-medium">
                                {{ $option['option']->translate('name') }}
                            </legend>
    
                            <div class="flex flex-wrap gap-2 mt-4 text-[10px] uppercase tracking-wide" x-data="{
                                        selectedOption: @entangle('selectedOptionValues'),
                                        selectedValue: '',
                                    }" x-init="
                                        selectedValue = Object.values(selectedOption)[0];
                                        $watch('selectedOption', value => selectedValue = Object.values(selectedOption)[0])
                                    ">
                                @foreach ($option['values'] as $value)
                                <button class="px-5 py-3 font-medium border rounded-lg focus:outline-none focus:ring"
                                    type="button" wire:click="
                                                $set('selectedOptionValues.{{ $option['option']->id }}', {{ $value->id }})
                                            " :class="{
                                                'bg-blue-600 border-blue-600 text-white hover:bg-blue-700' : selectedValue == {{ $value->id }},
                                                'hover:bg-gray-100': selectedValue != {{ $value->id }}
                                            }">
                                    {{ $value->translate('name') }}
                                </button>
                                @endforeach
                            </div>
                        </fieldset>
                        @endforeach
    
                        {{-- <div class="mt-8">
                            @livewire('components.add-to-cart', [
                            'purchasable' => $this->variant,
                            ], key($this->variant->id))
                        </div> --}}
                    </form>
                </div>
            </div>
            <div class="text-indigo-500">
                <small class="uppercase">{{ $this->product->translateAttribute('name') }}</small>
                <h3 class="uppercase text-black text-2xl font-medium">{{ $this->product->translateAttribute('name') }}</h3>
                <h3 class="text-2xl font-semibold mb-7">@livewire('product-price', ['variant' => $this->variant])</h3>
                <small class="text-black">{!! $this->product->translateAttribute('description') !!}</small>
                <div class="flex gap-0.5 mt-4">
                    <button id="addToCartButton"
                        class="bg-indigo-600 hover:bg-indigo-500 focus:outline-none transition text-white uppercase px-8 py-3">add
                        to cart</button>
                    <button id="likeButton"
                        class="bg-indigo-600 hover:bg-indigo-500 focus:outline-none transition text-white uppercase p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                            class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                            <path
                                d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-12">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-1 md:col-span-7">
                @if ($this->image)
                <div class="aspect-w-1 aspect-h-1">
                    <img class="object-cover rounded-xl" src="{{ $this->image->getUrl('large') }}"
                        alt="{{ $this->product->translateAttribute('name') }}" />
                </div>
                @endif

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                    @foreach ($this->images as $image)
                    <div class="aspect-w-1 aspect-h-1" wire:key="image_{{ $image->id }}">
                        <img class="object-cover rounded-xl" src="{{ $image->getUrl('small') }}"
                            alt="{{ $this->product->translateAttribute('name') }}" />
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="md:col-span-5 md:py-12 md:sticky md:top-0">
                <div class="flex justify-between">
                    <div class="max-w-xs">
                        <h1 class="text-3xl font-bold">
                            {{ $this->product->translateAttribute('name') }}
                        </h1>

                        <p class="mt-1 text-sm text-gray-500">
                            {{ $this->variant->sku }}
                        </p>
                    </div>
                    @livewire('product-price', ['variant' => $this->variant])
                </div>

                <article class="mt-4">
                    {!! $this->product->translateAttribute('description') !!}
                </article>

                <form class="mt-8">
                    @foreach ($this->productOptions as $option)
                    <fieldset>
                        <legend class="text-sm font-medium">
                            {{ $option['option']->translate('name') }}
                        </legend>

                        <div class="flex flex-wrap gap-2 mt-4 text-[10px] uppercase tracking-wide" x-data="{
                                    selectedOption: @entangle('selectedOptionValues'),
                                    selectedValue: '',
                                }" x-init="
                                    selectedValue = Object.values(selectedOption)[0];
                                    $watch('selectedOption', value => selectedValue = Object.values(selectedOption)[0])
                                ">
                            @foreach ($option['values'] as $value)
                            <button class="px-5 py-3 font-medium border rounded-lg focus:outline-none focus:ring"
                                type="button" wire:click="
                                            $set('selectedOptionValues.{{ $option['option']->id }}', {{ $value->id }})
                                        " :class="{
                                            'bg-blue-600 border-blue-600 text-white hover:bg-blue-700' : selectedValue == {{ $value->id }},
                                            'hover:bg-gray-100': selectedValue != {{ $value->id }}
                                        }">
                                {{ $value->translate('name') }}
                            </button>
                            @endforeach
                        </div>
                    </fieldset>
                    @endforeach

                    {{-- <div class="mt-8">
                        @livewire('components.add-to-cart', [
                        'purchasable' => $this->variant,
                        ], key($this->variant->id))
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> --}}