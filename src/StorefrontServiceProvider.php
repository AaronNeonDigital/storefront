<?php

namespace Aaron\Storefront;

use Aaron\Storefront\Http\Livewire\Cart;
use Aaron\Storefront\Http\Livewire\CollectionPage;
use Aaron\Storefront\Http\Livewire\Dashboard;
use Aaron\Storefront\Http\Livewire\Header;
use Aaron\Storefront\Http\Livewire\ProductPrice;
use Aaron\Storefront\Http\Livewire\ProductCard;
use Aaron\Storefront\Http\Livewire\ProductPage;
use Aaron\Storefront\Http\Livewire\MegaMenu;
use Aaron\Storefront\Http\Livewire\MegaMenuSub;
use Illuminate\Support\ServiceProvider;
use GetCandy\Hub\Facades\Menu;
use Livewire\Livewire;
use Illuminate\Support\Facades\Blade;

class StorefrontServiceProvider extends ServiceProvider
{
    protected $configFiles = ['storefront'];

    protected $root = __DIR__ . '/..';

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'storefront');

        $this->registerLivewireComponents();

        //Publishing
        if ($this->app->runningInConsole()) {
            collect($this->configFiles)->each(function ($config) {
                $this->publishes([
                    "{$this->root}/config/$config.php" => config_path("storefront/$config.php"),
                ], 'storefront');
            });

            //Publish the views
            $this->publishes([
                __DIR__ . '/resources/views' => resource_path('views/vendor/storefront'),
            ], 'views');

            // // Publish view components
            $this->publishes([
                __DIR__ . '/src/View/Components/' => app_path('View/Components'),
                __DIR__ . '/resources/views/components/' => resource_path('views/components'),
            ], 'view-components');

            $this->publishes([
                __DIR__ . '/../public' => public_path('vendor/aaron/storefront'),
            ], 'public');
        }
    }
    protected function registerLivewireComponents()
    {
        Livewire::component('dashboard', Dashboard::class);
        Livewire::component('header', Header::class);
        Livewire::component('product-price', ProductPrice::class);
        Livewire::component('product-card', ProductCard::class);
        Livewire::component('product-page', ProductPage::class);
        Livewire::component('mega-menu', MegaMenu::class);
        Livewire::component('cart', Cart::class);
        Livewire::component('mega-menu-sub', MegaMenuSub::class);
        Livewire::component('collection-page', CollectionPage::class);

        // Blade Components
        Blade::componentNamespace('Aaron\\Storefront\\Views\\Components', 'storefront');
    }

    public function register()
    {
        collect($this->configFiles)->each(function ($config) {
            $this->mergeConfigFrom("{$this->root}/config/$config.php", "storefront.$config");
        });

        /**
         * Adding setting page to the hub sidebar.
         */
        $slot = Menu::slot('sidebar');

        $slot->addItem(function ($item) {
            $item->name('Storefront Settings')
                ->route('storefront.settings.view')
                ->icon('cog');
        });

        $slot = Menu::slot('sidebar');

        $slot->addItem(function ($item) {
            $item->name('Back to store')
                ->route('storefront.index')
                ->icon('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" stroke-width="1.5" stroke="#9A9AA9" fill="#9A9AA9" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 512 512">
                    <path d="M9.375 233.4l128-128c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H480c17.69 0 32 14.31 
                    32 32s-14.31 32-32 32H109.3l73.38 73.38c12.5 12.5 12.5 32.75 0 45.25c-12.49 12.49-32.74 12.51-45.25 0l-128-128C-3.125 266.1-3.125 245.9 9.375 233.4z"/></svg>');
        });
    }
}
