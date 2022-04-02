<?php

use Aaron\Storefront\Http\Livewire\CollectionPage;
use Illuminate\Support\Facades\Route;
use Aaron\Storefront\Http\Livewire\Dashboard;

App::booted(function() {
    app('router')->get('dashboard', Dashboard::class)->name('storefront.index');
    app('router')->get('/', Dashboard::class)->name('storefront.index');
});

Route::get('/collections/{slug}', CollectionPage::class)->name('collection.view');
