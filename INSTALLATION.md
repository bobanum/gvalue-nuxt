# Installation

## Pour le développement de RestInPeace
1. Cloner "gvalue-nuxt"
2. `npm install`
3. Dans `composer.json`, supprimer l'élément "repositories"
4. `composer update`
5. Sortir le dossier `restinpeace` du dossier vendor (ou du projet)
6. Remettre "repositories" et ajuster le chemin.
7. `composer update`
8. Modifier `.gtignore` au besoin
9.  Créer, copier ou linker le dossier database `ln -s restinpeace/database/ database`
10. Ajouter le `.env` 


```bash
git clone "https://github.com/bobanum/gvalue-nuxt.git
cd gvalue-nuxt
npm install
sed -i -e 's/"repositories"/"ZZZ"/g' composer.json
composer update
mv vendor/bobanum/restinpeace ./restinpeace
sed -i -e 's/"ZZZ"/"repositories"/g' composer.json
sed -i -e 's/"url": ".*RestInPeace"/"url": "RestInPeace"/g' composer.json
composer update
ln -s restinpeace/database/ database
cp restinpeace/.env.example .env

```



