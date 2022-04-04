<?php

namespace Aaronneondigital\Storefront\Http\Livewire;

use Livewire\Component;
use GetCandy\Models\ProductType;

class Header extends Component
{
    public $cart = 0;
    public $productTypes;

    public function mount()
    {
        $this->productTypes = ProductType::get();
    }
    public function render()
    {
        return view('storefront::livewire.header');
    }
}