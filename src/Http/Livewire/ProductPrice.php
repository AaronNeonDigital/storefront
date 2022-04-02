<?php

namespace Aaron\Storefront\Http\Livewire;

use Livewire\Component;
use GetCandy\Facades\Pricing;
use GetCandy\Models\Price;
use GetCandy\Models\ProductVariant;
use GetCandy\Models\Product;

class ProductPrice extends Component
{
    public Product $product;

    public ?Price $price = null;

    public ?ProductVariant $variant = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public function mount()
    {
        $this->price = Pricing::for(
            $this->variant ?: $this->product->variants->first()
        )->matched;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('storefront::livewire.product-price');
    }
}