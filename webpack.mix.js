const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
// mix.copy('node_modules/')
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.sass('resources/sass/main.scss', 'public/css/main.css');
mix.sass('resources/sass/index.scss', 'public/css/index.css');
mix.sass('resources/sass/product.scss', 'public/css/product.css');
