const elixir = require('laravel-elixir');
require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
  mix.sass('app.scss')
    .sass('welcome.scss')
    .sass('passport.scss');

  mix.webpack('app.js');

  mix.copy('vendor/bower_components/fonts-raleway/fonts/fonts-raleway/**/*.ttf', 'public/fonts/fonts-raleway');
});
