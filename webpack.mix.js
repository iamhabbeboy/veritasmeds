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
mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/sass/app.scss', 'public/css');

mix.combine([
    'public/css/app.css',
    'public/admin/css/bootstrap-extend.css',
    'public/admin/css/master_style.css',
    'public/admin/css/skins/_all-skins.css'
], 'public/admin/css/all.bundle.css');

mix.combine([
    'public/js/app.js',
    'public/admin/js/template.js',
], 'public/js/all.bundle.js');
