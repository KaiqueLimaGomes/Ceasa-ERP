const mix = require("laravel-mix");

mix
    .sass('node_modules/bootstrap/scss/bootstrap.scss','public/site/bootstrap.css')    
.scripts('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/site/bootstrap.bundle.js') 
    .js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps();

