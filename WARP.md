# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Contexte du projet

- Application Laravel 8 (PHP 7.4.x), avec Laravel Breeze (authentification) et Laravel Sail (environnement Docker facultatif).
- Front-end géré par Laravel Mix (Webpack). Assets principaux: resources/js (app.js, gospel.js) et resources/sass (app.scss, front.scss…).
- Base de données MySQL (docker-compose inclus via Sail).
- Tests via PHPUnit/Laravel Test Runner (php artisan test), dossiers tests/Feature et tests/Unit.
- Fonctions notables: réservations d’événements, galerie, discographie, contenu statique par slug, formulaire de contact avec hCaptcha.

## Commandes usuelles

Remarque: Les exemples ci-dessous sont fournis en deux variantes — “host” (exécution directe sur votre machine) et “Sail” (via Docker). Adaptez selon votre environnement.

### Installation (host)

```bash
composer install
cp .env.example .env
php artisan key:generate
# Configurez votre base de données dans .env puis:
php artisan migrate --seed
npm install
npm run dev
```

### Installation (Sail / Docker)

```bash
composer install
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
# Après configuration DB dans .env (Sail fournit mysql):
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

### Développement local

- Lancer le serveur Laravel (host):
```bash
php artisan serve
```
- Lancer le watcher d’assets (host):
```bash
npm run watch
```
- Variante Sail:
```bash
./vendor/bin/sail artisan serve
./vendor/bin/sail npm run watch
```

### Build des assets

- Développement (host):
```bash
npm run dev
```
- Production (minifié):
```bash
npm run prod
```
- Variantes Sail:
```bash
./vendor/bin/sail npm run dev
./vendor/bin/sail npm run prod
```

### Tests

- Exécuter tous les tests (host):
```bash
php artisan test
# ou
./vendor/bin/phpunit
```
- Exécuter tous les tests (Sail):
```bash
./vendor/bin/sail artisan test
# ou
./vendor/bin/sail phpunit
```

#### Exécuter un seul test

- Par fichier (host):
```bash
php artisan test tests/Feature/ExampleTest.php
```
- Par nom (filter), classe ou méthode (host):
```bash
php artisan test --filter=AuthenticationTest
php artisan test --filter="tests\\Feature\\Auth\\AuthenticationTest::test_users_can_authenticate"
```
- Variantes Sail:
```bash
./vendor/bin/sail artisan test tests/Feature/ExampleTest.php
./vendor/bin/sail artisan test --filter=AuthenticationTest
```

### Linting

Aucun linter explicite détecté (ni PHP-CS-Fixer/PHPStan, ni ESLint/Prettier). N’assumez pas de commandes de lint tant qu’elles ne sont pas ajoutées au projet.

### Base de données (rappels)

- Migrations & seeders (host):
```bash
php artisan migrate --seed
```
- Réinitialiser la base (attention destructif):
```bash
php artisan migrate:fresh --seed
```
- Variantes Sail:
```bash
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail artisan migrate:fresh --seed
```

## Architecture (vue d’ensemble)

- Entrées HTTP (routes/web.php):
  - Page d’accueil: FrontController@index.
  - Groupe “admin” avec middleware auth (Breeze). Contrôleurs resource pour Event, Gallery, Disc, Contact, Content (ce dernier avec slug contraint et actions limitées). Tableau de bord: Admin/MainController@dashboard.
  - Espace public: réservations d’événements (EventController), galerie (GalleryController), discographie (DiscController), contact (ContactController), pages de contenu par slug (FrontController@content) avec vérification de la vue et fallback 404.
  - API minimale (routes/api.php) protégée par auth:api.

- Contrôleurs et Middleware:
  - App/Http/Controllers: séparation claire entre front (FrontController, ContactController, etc.) et admin (App/Http/Controllers/Admin/* pour la gestion CRUD).
  - Middlewares spécifiques (App/Http/Middleware): Contact, Event, Gallery bloquent l’accès si la fonctionnalité est désactivée via config/karrot.php (lèvent NotFoundHttpException). Autres middlewares Laravel standard.

- Modèles et données:
  - Modèles: Event (scopes online/canDisplay, accessor dateFr, relation hasMany Reservation), Reservation, Image, Disc, Content, User.
  - Migrations sous database/migrations, seeders (DatabaseSeeder, EventSeeder) et factories (EventFactory, UserFactory).

- Vues & composants (Blade):
  - resources/views/front/* pour le site public; resources/views/admin/* pour l’administration; resources/views/components/* pour composants réutilisables; gabarits sous views/layouts (app, front, guest). Templates d’e-mails sous views/mail.

- E-mails:
  - App/Mail/Reservation et ReservationConfirmation (Markdown mailables), sujet localisé, destinataires basés sur la réservation.

- Validation & sécurité:
  - Règle personnalisée App/Rules/ValidHCaptcha: vérifie hCaptcha via appel HTTP à https://hcaptcha.com/siteverify. Dépend de HCAPTCHA_SECRET dans l’environnement.

- Configuration & feature flags:
  - config/karrot.php expose les clés KARROT_CONTACT, KARROT_EVENT, KARROT_GALLERY pour activer/désactiver des sections. content_view_path défini sur 'front/content'.

- Assets front-end:
  - webpack.mix.js compile:
    - JS: resources/js/app.js -> public/js/app.js, resources/js/gospel.js -> public/js/scripts.js
    - SASS: resources/sass/app.scss et front.scss -> public/css
  - Dépendances: Alpine.js, Bootstrap 5, Axios, Sass, Quill…

- Tests:
  - phpunit.xml définit deux suites (Unit, Feature) et coverage sur app/. Variables de test (CACHE_DRIVER=array, MAIL_MAILER=array, etc.) déjà configurées.

## Notes complémentaires

- docker-compose.yml (Sail) fournit les services laravel.test, mysql, mailhog. Les ports sont paramétrables via variables d’environnement.
- Aucun README.md ni règles d’IA tierces (Claude/Cursor/Copilot) détectés à intégrer.
