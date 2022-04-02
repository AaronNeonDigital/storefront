<?php

namespace Aaron\Storefront\Http\Livewire;

use Livewire\Component;
use GetCandy\Models\Collection;
use GetCandy\Models\Url;

class Cart extends Component
{
    public function render()
    {
        return view('storefront::livewire.cart');
    }
}