var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix
        .sass('app.scss', 'resources/assets/css')
        .copy('resources/assets/js/app.js','public/js')
        .styles([
            'app.css',
            '../vendor/dropzone/dist/dropzone.css'
        ], 'public/css/app.css')
        .scripts([
            '../vendor/dropzone/dist/dropzone.js',
            'app.js',
            '../vendor/jquery/dist/jquery.js',
            '../vendor/bootstrap-sass/assets/javascripts/bootstrap.js',
            'app.js'
        ], 'public/js/app.js')
        .version([
            'css/app.css',
            'js/app.js'
        ])
        .copy("resources/assets/vendor/font-awesome/fonts", "public/build/fonts");
});
