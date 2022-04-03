<?php

namespace Aaron\Storefront\Http\Livewire\Settings;

use Aaron\Storefront\Models\Settings;
use GetCandy\Hub\Http\Livewire\Traits\Notifies;
use GetCandy\Models\Collection;
use Livewire\Component;

class SearchCollections extends Component
{
    use Notifies;

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
            
            $this->notify('Feature keyword was created!', null);
        }

        else if($currentCollection->home_key_word != $item)
        {
            /**
             * We'll update the row, with the new selection, and save it.
             */
            $currentCollection->home_key_word = $item;
            $currentCollection->save();

            $this->notify('Feature keyword has been updated.', null);
        }
        else
        {
            /**
             * Unknown error
             */
            $this->notify($item.' was already the keyword, nothing has been changed', null, [], 'error');
        }
        /**
         * Make an emit, to change the current variable, on parent livewire component.
         */
        $this->emit('keywordChanged');
    }
    public function render()
    {
        //$this->emit('keywordChanged');
        return view('storefront::livewire/settings/search-collections');
    }
}