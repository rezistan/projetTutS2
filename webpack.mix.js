const { mix } = require('laravel-mix');

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

mix.copy('resources/assets/semantic/dist/themes', 'public/css/themes', false)
   .copy('node_modules/ckeditor', 'public/libs/ckeditor', false)
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copy('resources/assets/semantic/dist/semantic.css', 'public/css/semantic.css')
   .js('resources/assets/js/app.js', 'public/js');
