<?php

namespace Aaron\Storefront\Http\Livewire;

use GetCandy\Models\Collection;
use Livewire\Component;
use GetCandy\Models\Url;
use Kalnoy\Nestedset\NestedSet;

class MegaMenu extends Component
{
    /**
     * Return a random collection.
     *
     * @return void
     */
    public function getAllCollectionProperty()
    {
        //return Url::whereElementType(Collection::class)->get()->toTree();
        return Collection::get()->toTree();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('storefront::livewire.mega-menu');
    }
}