<?php

namespace Aaron\Storefront;

use Aaron\Storefront\Http\Livewire\Cart;
use Aaron\Storefront\Http\Livewire\CollectionPage;
use Aaron\Storefront\Http\Livewire\Dashboard;
use Aaron\Storefront\Http\Livewire\Header;
use Aaron\Storefront\Http\Livewire\ProductPrice;
use Aaron\Storefront\Http\Livewire\ProductCard;
use Aaron\Storefront\Http\Livewire\MegaMenu;
use Aaron\Storefront\Http\Livewire\MegaMenuSub;
use Illuminate\Support\ServiceProvider;
use GetCandy\Hub\Facades\Menu;
use Livewire\Livewire;
use Illuminate\Support\Facades\Blade;

class StorefrontServiceProvider extends ServiceProvider 
{
    protected $configFiles = ['storefront'];

    protected $root = __DIR__.'/..';

    public function boot ()
    {     

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'storefront');

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
              __DIR__.'/resources/views' => resource_path('views/vendor/storefront'),
            ], 'views');

            // // Publish view components
            $this->publishes([
                __DIR__.'/src/View/Components/' => app_path('View/Components'),
                __DIR__.'/resources/views/components/' => resource_path('views/components'),
            ], 'view-components'); 
            
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/aaron/storefront'),
            ], 'public');
        }

    }
    protected function registerLivewireComponents()
    {
        Livewire::component('dashboard', Dashboard::class);
        Livewire::component('header', Header::class);
        Livewire::component('product-price', ProductPrice::class);
        Livewire::component('product-card', ProductCard::class);
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
    }
}
