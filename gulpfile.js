var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
 'jquery': './vendor/jquery/dist/',
 'bootstrap': './vendor/bootstrap/dist/'
};


elixir(function(mix) {
    mix.copy("./vendor/jquery/dist/**", "public/js/")
       .copy("./vendor/bootstrap/dist/js/**", "public/js/")
        .copy("./vendor/bootstrap-sidebar/dist/**", "public/")
        .copy("./vendor/bootstrap/dist/css/**", "public/css/")
        .copy("./vendor/bootstrap/dist/fonts/**", "public/fonts/")
        .scripts([
            "public/js/jquery.js",
            "public/js/bootstrap.js"
        ]);
});
