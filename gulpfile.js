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
}


elixir(function(mix) {
    mix.copy("./vendor/jquery/dist/jquery.js", "public/js/jquery.js")
       .copy("./vendor/bootstrap/dist/js/bootstrap.js", "public/js/bootstrap.js")
        .copy("./vendor/bootstrap/dist/css/bootstrap.css", "public/css/bootstrap.css")
        .copy("./vendor/bootstrap/dist/fonts/**", "public/fonts/")
        .scripts([
            "public/js/jquery.js",
            "public/js/bootstrap.js"
        ]);
});
