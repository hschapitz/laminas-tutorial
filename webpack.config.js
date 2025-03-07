const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .enableVueLoader()
    .enableSassLoader()  // Optional, wenn du Sass verwendest
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enableSingleRuntimeChunk();  // Füge diese Zeile hinzu

module.exports = Encore.getWebpackConfig();
