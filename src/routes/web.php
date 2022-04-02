<?php

use Aaron\Storefront\Http\Livewire\CollectionPage;
use Aaron\Storefront\Http\Livewire\ProductPage;
use Aaron\Storefront\Http\Livewire\Settings\SettingsIndex;
use Illuminate\Support\Facades\Route;
use Aaron\Storefront\Http\Livewire\Dashboard;
use GetCandy\Hub\Http\Middleware\Authenticate;

App::booted(function() {
    app('router')->get('dashboard', Dashboard::class)->name('storefront.index');
    app('router')->get('/', Dashboard::class)->name('storefront.index');
});

Route::get('/collections/{slug}', CollectionPage::class)->name('collection.view');
Route::get('/product/{slug}', ProductPage::class)->name('product.view');

Route::group([
    'prefix'     => config('getcandy-hub.system.path', 'hub'),
    'middleware' => ['web'],
], function () {
    Route::group([
        'middleware' => [
            Authenticate::class,
        ],
    ], function ($router) {
        Route::group([
            'prefix' => 'storefront'
        ], function ($router) {
            // Route::group([
            //     'middleware' => 'can:settings:core',
            // ], function () {
                Route::get('/settings/index', SettingsIndex::class)->name('storefront.settings.view');
            // });
        });
    });
});

// Route::group([
//     'middleware' => 'can:settings:core',
// ], function () {
//     Route::get('/settings/index', SettingsIndex::class)->name('settings.view');
// });
