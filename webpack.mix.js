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
mix.sourceMaps();

mix.combine(['resources/assets/semantic/dist/semantic.css'], 'public/css/libs.css') // fusionner deux fichiers
    .copy('resources/assets/semantic/dist/themes', 'public/css/themes', false) // copier un répertoire dans le répertoire public
    .sass('resources/assets/sass/app.scss', 'public/css') // décompiler sass
    .js('resources/assets/js/app.js', 'public/js'); // décompiler js