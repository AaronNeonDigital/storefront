<?php

namespace Aaron\Storefront\Http\Livewire\Settings;

use Livewire\Component;

class SettingsIndex extends Component
{
    public function render()
    {
        return view('storefront::livewire/settings/settings-index')->layout('adminhub::layouts.app', [
            'title' => 'Storefront settings',
        ]);
    }
}