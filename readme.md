## A propos du projet

Etudiants: Julien REYNAUD, Thomas BOFFY, Marine MOLLIER, Sichialun KOUSONSAVATH & Régis BADIANE, de l’IUT Lyon 1, dans le cadre du DUT Informatique.

L’objectif de ce projet tuteuré est de créer une application Web permettant de gérer les plannings d’activités dans un service médical.

Ce planning présentera à termes les fonctionnalités suivantes:

- Authentification
- Possibilité pour le/la cadre de santé de gérer les plannings des médecins
- Affichage des activités (une salle, une tâche (service concerné), un médecin, une date et un horaire) sur un planning.
- Affichage d’un planning personnel, propre à chaque utilisateurs.
- Affichage d’un planning pour chaque service et chaque médecin.

Le développement de ces fonctionnalités sera détaillé dans les commits.

## Comment le faire tourner ?

### Dépendances

Les dépendances seront installées lors de la configuration du projet, et sont accessibles à partir des fichiers composer.json et package.json . Voici les principales dépendances que le projet utilise:

- npm: *latest*,
- composer: *latest*,
- PHP: ≥ *5.6*
- Laravel: *5.4*
- semantic-ui: *latest*

### Faire tourner le projet

#### npm, composer, .env

Pour commencer, notre projet a des « dépendances ». Elles doivent être chargées au travers des gestionnaires dont le projet a besoin (à savoir npm pour nodejs et composer pour PHP). Nous devons ainsi lancer les commandes suivantes:

```
npm install
composer install
```

Laravel a besoin d’un fichier contenant une variable d’environnement, non présent sur le répertoire pour des raisons de sécurité. Pour créer ce fichier, vous devrez taper les commandes suivantes:

```
copy .env.example .env    # pour WINDOWS
cp .env.example .env    # pour LINUX
php artisan key:generate
```

La dernière commande va générer la variable d’environnement APP_KEY. Cette dernière servira à crypter les sessions.

#### Base de données, migrations et graines

Maintenant que le fichier .env est créé, il faut le configurer. Normalement, les paramètres de base devraient être corrects, à l’exception de trois champs. Vous devrez les configurer comme ci-dessous:

```php
DB_DATABASE=nomdb    # à remplacer par le nom de votre db
DB_USERNAME=nomuser    # à remplacer par l’utilisateur de votre db
DB_PASSWORD=motdepassedb    # à remplacer par le mot de passe de votre db
```

Par la suite, nous créerons les tables utilisées par le projet.
Leur structure est préparée dans les migrations (/database/migrations). Ce seront elles qui permettront de créer les tables dont nous avons besoin.  
Ensuite, pour les remplir, nous utiliserons les graines, ou seeds (/database/seeds).

Il suffit de lancer les deux commandes suivantes:

```
php artisan migrate
php artisan db:seed
```

Il ne nous reste maintenant plus qu’à allumer le serveur:

```
php artisan serve
```

Et voilà, le tour est joué ! Vous devriez avoir accès au projet. Maintenant, lisez bien les commentaires dans le code ! Ils vous aideront à mieux comprendre.