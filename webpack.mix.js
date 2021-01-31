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

mix.js('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.js')
    .js('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/bootstrap.css')
    .sass('node_modules/font-awesome/scss/font-awesome.scss', 'public/css/font-awesome.css')
