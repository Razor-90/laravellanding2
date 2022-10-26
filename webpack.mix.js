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
mix.styles([
    'resources/assets/front/css/bootstrap.min.css',
    'resources/assets/front/css/animate.css',
    'resources/assets/front/css/LineIcons.css',
    'resources/assets/front/css/owl.carousel.css',
    'resources/assets/front/css/owl.theme.css',
    'resources/assets/front/css/magnific-popup.css',
    'resources/assets/front/css/nivo-lightbox.css',
    'resources/assets/front/css/main.css',
    'resources/assets/front/css/responsive.css',
], 'public/css/front.css');

mix.scripts([
    'resources/assets/front/js/jquery-min.js',
    'resources/assets/front/js/popper.min.js',
    'resources/assets/front/js/bootstrap.min.js',
    'resources/assets/front/js/owl.carousel.js',
    'resources/assets/front/js/jquery.nav.js',
    'resources/assets/front/js/scrolling-nav.js',
    'resources/assets/front/js/jquery.easing.min.js',
    'resources/assets/front/js/nivo-lightbox.js',
    'resources/assets/front/js/jquery.magnific-popup.min.js',
    'resources/assets/front/js/main.js',
], 'public/js/front.js');

mix.copy('resources/assets/front/fonts', 'public/fonts');
mix.copy('resources/assets/front/img', 'public/img');
