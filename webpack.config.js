var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/web')
    .addEntry('app', './assets/js/app.js')
    .addEntry('style', './assets/scss/main.scss')
    .addEntry('header', './assets/scss/header.scss')
    .addEntry('entreprise', './assets/scss/entreprise.scss')
    .addEntry('login', './assets/scss/login.scss')
    .addEntry('main_admin', './assets/scss/main_admin.scss')
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSassLoader();

module.exports = Encore.getWebpackConfig();

