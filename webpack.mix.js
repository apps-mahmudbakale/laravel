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
    'public/assets/css/bootstrap.min.css',
    'public/assets/css/animate.min.css',
    'public/assets/css/meanmenu.css',
    'public/assets/css/boxicons.min.css',
    'public/assets/css/magnific-popup.min.css',
    'public/assets/css/owl.carousel.min.css',
    'public/assets/css/flaticon.css',
    'public/assets/css/odometer.min.css',
    'public/assets/css/slick.min.css',
    'public/assets/css/style.css',
    'public/assets/css/responsive.css',
    'public/assets/css/dark-color/dark-style.css'
    ], 'public/css/app.css');

    mix.scripts([
        'public/assets/js/jquery.min.js',
        'public/assets/js/bootstrap.bundle.min.js',
        'public/assets/js/meanmenu.min.js',
        'public/assets/js/wow.min.js',
        'public/assets/js/magnific-popup.min.js',
        'public/assets/js/appear.min.js',
      //   'public/assets/js/odometer.min.js',
      //   'public/assets/js/slick.min.js',
        'public/assets/js/imagesloaded.pkgd.min.js',
        'public/assets/js/isotope.pkgd.min.js',
        'public/assets/js/owl.carousel.min.js',
        'public/assets/js/feather.min.js',
        'public/assets/js/form-validator.min.js',
        'public/assets/js/contact-form-script.js',
        'public/assets/js/main.js'
     ], 'public/js/app.js');
  
