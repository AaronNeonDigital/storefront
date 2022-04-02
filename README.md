# Storefront
`Aaron\Storefront` is a service that provides a `GetCandy2` Storefront to a fresh application in laravel.
We use a variety of packages, but this is a `GetCandy2` addon, and wont work with any other e-commerce platform.

`Tailwind`, `AlpineJS`, `GetCandy2` are some of the packages required to install this application.

# Storefront publishables
`Aaron\Storefront` has publishables, which allow you to easily change and update files at your own leisure. By entering the command below, you can publish these files.
```bash
php artisan vendor:publish --tag=public
```

# Config options
`Aaron\Storefront` has config options which once published, you can change area's of the application to help suit your needs. 

`home_key_word` is the default word/slug you wish to display products for.
If you would like to display sale items by default, setting this to `Sale` will display products with the `Sale` collection attribute to it.
This can be changed and edited within the `config/storefront.php` file.
```php
'home_key_word' => 'Sale'
```
