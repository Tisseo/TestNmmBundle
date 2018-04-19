Package.onUse(function (api) {
    api.versionsFrom('1.0.0');
    api.addFiles([
        'Resources/public/dist/test-bundle.js',
        'Resources/public/dist/test-bundle.css',
    ], 'client');
});