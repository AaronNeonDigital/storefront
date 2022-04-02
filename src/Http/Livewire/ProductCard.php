<?php

namespace Aaron\Storefront\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $product;
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('storefront::livewire.product-card');
    }
}