const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps(true, 'source-map');

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync({
    proxy: {
        target: 'http://127.0.0.1:8000'
    },
    files: [
        './resources/**/*',
        './app/**/*',
        './config/**/*',
        './routes/**/*',
        './public/**/*'
    ],
    open: false,
    reloadOnRestart: true
})
