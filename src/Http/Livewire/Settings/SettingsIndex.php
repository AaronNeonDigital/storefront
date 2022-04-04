<?php

namespace Aaronneondigital\Storefront\Http\Livewire\Settings;

use Aaronneondigital\Storefront\Models\Settings;
use Livewire\Component;

class SettingsIndex extends Component
{
    public $keyword;

    protected $listeners = ['keywordChanged'];

    public function keywordChanged()
    {
        /**
         * Update the keyword to the current keyword stored in settings.
         */
        $this->keyword = Settings::first()['home_key_word'];
    }

    public function mount()
    {
        /**
         * On render update the keyword variable.
         */
        $this->keywordChanged();
    }

    public function render()
    {
        return view('storefront::livewire/settings/settings-index')->layout('adminhub::layouts.app', [
            'title' => 'Storefront settings',
        ]);
    }
}