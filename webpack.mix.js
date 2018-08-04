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

mix.styles([
    'public/assets/css/page.min.css',
    'public/assets/css/style.css'
], 'public/assets/css/compiled.css');
mix.js([
    'public/assets/js/page.min.js',
    'public/assets/js/script.js',
], 'public/assets/js/compiled.js');