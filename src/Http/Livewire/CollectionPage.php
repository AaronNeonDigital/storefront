<?php

namespace Aaronneondigital\Storefront\Http\Livewire;

use GetCandy\Models\Collection;
use Aaronneondigital\Storefront\Http\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;

class CollectionPage extends Component
{
    use PerformsRedirects, FetchesUrls;

    /**
     * {@inheritDoc}
     *
     * @param  string  $slug
     * @return void
     *
     * @throws \Http\Client\Exception\HttpException
     */
    public function mount($slug)
    {
        $this->url = $this->fetchUrl(
            $slug,
            Collection::class,
            [
                'element.thumbnail',
                'element.products.variants.basePrices',
                'element.products.defaultUrl',
            ]
        );

        if (! $this->url) {
            abort(404);
        }
    }

    /**
     * Computed property to return the collection.
     *
     * @return \GetCandy\Models\Collection
     */
    public function getCollectionProperty()
    {
        return $this->url->element;
    }
    public function render()
    {
        return view('storefront::livewire.collection-page')->layout('storefront::layouts.app');
    }
}