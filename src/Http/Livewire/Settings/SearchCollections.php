<?php

namespace Aaron\Storefront\Http\Livewire\Settings;

use Aaron\Storefront\Models\Settings;
use GetCandy\Models\Collection;
use Livewire\Component;

class SearchCollections extends Component
{
    public function getAllCollectionsProperty()
    {
        /**
         * Create an array of collection parents, using toTree() so we get the hierachy of collections only.
         */
        $collectionsArray = [];
        $collections = Collection::get()->toTree();
        foreach($collections as $collection){
            array_push($collectionsArray, $collection->translateAttribute('name'));
        }
        return collect($collectionsArray);
    }

    public function selectCollection($item)
    {
        $currentCollection = Settings::first();
        
        if(!$currentCollection)
        {
            /**
             * Create a new row, if there currently is no settings!
             */
            Settings::create([
                'home_key_word' => $item
            ]);
        }

        else if($currentCollection->home_key_word != $item)
        {
            /**
             * We'll update the row, with the new selection, and save it.
             */
            $currentCollection->home_key_word = $item;
            $currentCollection->save();
        }
    }
    public function render()
    {
        return view('storefront::livewire/settings/search-collections');
    }
}