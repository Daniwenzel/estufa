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
    .js('resources/js/off-canvas.js', 'public/js')
    .js('resources/js/misc.js', 'public/js')
    .copy('resources/js/mqtt-client.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/paho-mqtt/paho-mqtt.js', 'public/js/paho-mqtt.js')
    .copy('resources/images', 'public/images')
    .copy('vendor/css/vendor.bundle.base.css', 'public/css')
    .copy('vendor/css/vendor.bundle.addons.css', 'public/css')
    .copy('vendor/iconfonts/mdi/css/materialdesignicons.min.css', 'public/css')
    .copy('resources/fonts', 'public/fonts');