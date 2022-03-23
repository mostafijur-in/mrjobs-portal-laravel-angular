let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

// Custom css
mix.styles('resources/assets/css/custom.css', 'public/css/custom.css')
    .styles('resources/assets/css/responsive.css', 'public/css/responsive.css');

// Copy images
mix.copyDirectory('resources/assets/img', 'public/img');