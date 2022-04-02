<?php

namespace Aaron\Storefront\Http\Livewire;

use GetCandy\Models\Collection;
use GetCandy\Models\Url;
use Livewire\Component;

class Dashboard extends Component
{
    /**
     * Return the sale collection.
     *
     * @return void
     */
    public function getSaleCollectionProperty()
    {
        return Url::whereElementType(Collection::class)->whereSlug(config('storefront')['home_key_word'])->first()?->element;
    }

    /**
     * Return a random collection.
     *
     * @return void
     */
    public function getRandomCollectionProperty()
    {
        return Collection::inRandomOrder()->first();
    }

    public function render()
    {
        return view('storefront::livewire.dashboard')->layout('storefront::layouts.app');
    }
}