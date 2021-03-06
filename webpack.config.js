var Encore = require('@symfony/webpack-encore');
//var path = require('path');

Encore
    .setOutputPath('Resources/public/dist') // directory where all compiled assets will be stored
    .setPublicPath('/bundles/tisseotest/dist') // what's the public path to this directory (relative to your project's document root dir)
    .setManifestKeyPrefix('')
    .cleanupOutputBeforeBuild()// empty the outputPath dir before each build
    .enableSassLoader(function(sassOptions) {}, { // allow sass/scss files to be processed
        resolveUrlLoader: false
    })
    .addEntry('test-bundle', './Resources/src/js/index.ts')
    .enableTypeScriptLoader()
    .enableSourceMaps(!Encore.isProduction())
;

var config = Encore.getWebpackConfig();
// export the final configuration
module.exports = config;