import mix from "laravel-mix";

mix.js("resources/js/back/app.js", "public/js/back.js")
    .sass("resources/sass/back/app.scss", "public/css/back.css")
    .options({
        processCssUrls: false,
    });
