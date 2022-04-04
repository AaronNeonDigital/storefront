# Storefront
`Aaronneondigital\Storefront` is a service that provides a [GetCandy2](https://getcandy.io/) Storefront to a fresh application in laravel.
We use a variety of packages, but this is a `GetCandy2` addon, and wont work with any other e-commerce platform.

`Tailwind`, `AlpineJS`, `Livewire` [GetCandy2](https://getcandy.io/) are some of the packages required to install this application.
# GetCandy
GetCandy have awesome documentations which can be viewed at: [GetCandy Documentation](https://docs.getcandy.io/)
GetCandy provides a explicit framework aimed and building e-commerce applications, it utilises laravel to get the best results whilst doing most of the work for you.

# Storefront publishables
`Aaronneondigital\Storefront` has publishables, which allow you to easily change and update files at your own leisure. By entering the command below, you can publish the public files.
```bash
php artisan vendor:publish --tag=storefront-public
```
Publish Views
```bash
php artisan vendor:publish --tag=storefront-views
```
Publish components
```bash
php artisan vendor:publish --tag=storefront-view-components
```
# Feature home page
The feature home page displays particular collection items, these collections are selected in `storefront settings` located on the GetCandy hub.
at first, no collections will be available upon installing `GetCandy` and collections must be added, via `<your-site>/hub/collection-groups` and product must then be associated to those collections.
# Settings options

