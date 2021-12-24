const mix = require('laravel-mix');
const glob = require('glob');


glob.sync('resources/sass/*.scss').map(function(file) {
    mix.sass(file, 'public/css').options({
        processCssUrls: false,
    });
});

mix.browserSync({
    proxy: {
        target: "http://127.0.0.1",
    },
    files: [
        'resources/views/*.blade.php',
        'resources/views/**/**/*.blade.php',
        'resources/sass/*.scss',
        'resources/sass/import/*.scss',
        'resources/js/app.js',
    ],
});
