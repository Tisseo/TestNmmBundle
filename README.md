# TestBundle

## Generations des assets du bundle

* Dans le répertoire du bundle
```bash
> npm init
> npm install
> npm run build|dev|dev-watch
```

- build : génération des assets pour la production.
- dev :  génération des assets pour le developpement.
- dev-watch : "surveillance" des fichiers pour générer les assets à la volée.
- sass-watch : "surveillance" des fichiers sass pour générer les css.

La commande **npn run [build|dev|dev-watch]** lance la generation des assets et les stocks dans
**./Resources/public/dist** (s'assurer au préalable d'avoir généré les css à partir des sass **sass-watch**)


## A la racine du projet 
* Créer un alias vers les assets du bundle dans le fichier **webpack.config.js**
```js
//...
var config = Encore.getWebpackConfig();

config.resolve.alias = {
    //...
    'tisseo/test-bundle':  path.resolve(__dirname, 'web/bundles/tisseotest/dist/test-bundle'),
    //...
};

// export the final configuration
module.exports = config;
```

* Toujours dans le fichier **webpack.config.js**, ajouter l'alias dans les vendors.
```js
//...
.createSharedEntry('vendor', [
    '...',
    'tisseo/test-bundle',
    '...'
])
//...
```

* S'assurer que les assets sont biens à jour et compiler
```bash
> bin/console assets:install --symlink
> ./node_modules/.bin/encore dev
```
