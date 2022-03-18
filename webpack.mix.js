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

 mix
 .sass('resources/views/scss/style.scss','public/site/style.css')
 .scripts('node_modules/jquery/dist/jquery.js','public/site/jquey.js')
 .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/site/bootstrap.js')
 .copyDirectory('resources/img', 'public/site/img')
 .js('resources/js/app.js', 'public/site/js')
 .postCss('resources/css/app.css', 'public/site/css',
 [require('postcss-import'), require('tailwindcss'),require('autoprefixer')]);