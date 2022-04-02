<?php

namespace Aaron\Storefront\Http\Livewire\Settings;

use Aaron\Storefront\Models\Settings;
use Livewire\Component;

class SettingsIndex extends Component
{
    public function render()
    {
        return view('storefront::livewire/settings/settings-index',[
            'settings' => Settings::first()
        ])->layout('adminhub::layouts.app', [
            'title' => 'Storefront settings',
        ]);
    }
}