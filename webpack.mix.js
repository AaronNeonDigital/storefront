// webpack.mix.js

let mix = require('laravel-mix');

mix
    .postCss("resources/assets/storefront.css", "public/app.css", [
        require("tailwindcss"),
    ])
    .js("resources/assets/storefront.js", "public/app.js");