let mix = require('laravel-mix');

// Konfigurasi untuk file JS dan Vue
mix.js('resources/js/app.js', 'public/js')
   .vue()  // Menyediakan dukungan untuk Vue 3
   .sass('resources/sass/app.scss', 'public/css');  // Optional jika Anda menggunakan SCSS
