# Gospel-Dream

Application web Laravel 8 pour la gestion d'événements Gospel avec système de réservation, galerie photos, discographie et gestion de contenu.

## 🎯 Fonctionnalités

- **Réservations d'événements** : Système complet de gestion des événements avec réservation en ligne
- **Galerie photos** : Interface d'administration pour uploader et gérer des images
- **Discographie** : Présentation des albums et morceaux
- **Gestion de contenu** : Pages dynamiques avec slug personnalisé
- **Formulaire de contact** : Protection hCaptcha intégrée
- **Interface d'administration** : Tableau de bord sécurisé avec authentification Laravel Breeze

## 🛠️ Technologies

- **Backend** : Laravel 8 (PHP 7.4.x)
- **Frontend** : Laravel Mix (Webpack), Bootstrap 5, Alpine.js
- **Base de données** : MySQL
- **Authentification** : Laravel Breeze
- **Environnement** : Laravel Sail (Docker optionnel)
- **Tests** : PHPUnit
- **Assets** : Sass, Quill Editor

## 📋 Prérequis

### Installation sur votre machine (Host)
- PHP 7.4.x ou supérieur
- Composer
- Node.js & npm
- MySQL

### Installation avec Docker (Sail)
- Docker
- Docker Compose

## 🚀 Installation

### Installation Host

```bash
# Cloner le projet
git clone [url-du-repo] gospel-dream
cd gospel-dream

# Installer les dépendances PHP
composer install

# Configurer l'environnement
cp .env.example .env
php artisan key:generate

# Configurer votre base de données dans .env puis :
php artisan migrate --seed

# Installer les dépendances Node.js
npm install
npm run dev
```

### Installation avec Sail (Docker)

```bash
# Cloner le projet
git clone [url-du-repo] gospel-dream
cd gospel-dream

# Installer les dépendances PHP
composer install

# Configurer l'environnement
cp .env.example .env

# Démarrer les conteneurs Docker
./vendor/bin/sail up -d

# Générer la clé d'application
./vendor/bin/sail artisan key:generate

# Configurer la base de données (Sail fournit MySQL automatiquement)
./vendor/bin/sail artisan migrate --seed

# Installer les dépendances Node.js
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

## ⚙️ Configuration

### Variables d'environnement importantes

```env
# Base de données
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gospel_dream
DB_USERNAME=root
DB_PASSWORD=

# hCaptcha (pour le formulaire de contact)
HCAPTCHA_SECRET=votre_secret_hcaptcha

# Feature flags (activer/désactiver des sections)
KARROT_CONTACT=true
KARROT_EVENT=true
KARROT_GALLERY=true
```

## 🖥️ Développement

### Lancer le serveur de développement

**Host :**
```bash
# Serveur Laravel
php artisan serve

# Watcher des assets
npm run watch
```

**Sail :**
```bash
# Serveur Laravel
./vendor/bin/sail artisan serve

# Watcher des assets
./vendor/bin/sail npm run watch
```

### Build des assets

**Développement :**
```bash
npm run dev
# ou avec Sail
./vendor/bin/sail npm run dev
```

**Production :**
```bash
npm run prod
# ou avec Sail
./vendor/bin/sail npm run prod
```

## 🧪 Tests

### Exécuter tous les tests

**Host :**
```bash
php artisan test
# ou
./vendor/bin/phpunit
```

**Sail :**
```bash
./vendor/bin/sail artisan test
# ou
./vendor/bin/sail phpunit
```

### Exécuter un test spécifique

**Par fichier :**
```bash
php artisan test tests/Feature/ExampleTest.php
# ou avec Sail
./vendor/bin/sail artisan test tests/Feature/ExampleTest.php
```

**Par filtre (nom de classe ou méthode) :**
```bash
php artisan test --filter=AuthenticationTest
php artisan test --filter="tests\\Feature\\Auth\\AuthenticationTest::test_users_can_authenticate"
# ou avec Sail
./vendor/bin/sail artisan test --filter=AuthenticationTest
```

## 🗄️ Base de données

### Migrations et seeders

```bash
# Exécuter les migrations avec les données de test
php artisan migrate --seed
# ou avec Sail
./vendor/bin/sail artisan migrate --seed

# Réinitialiser complètement la base (⚠️ DESTRUCTIF)
php artisan migrate:fresh --seed
# ou avec Sail
./vendor/bin/sail artisan migrate:fresh --seed
```

## 📁 Architecture du projet

### Structure des contrôleurs
- **Frontend** : `App/Http/Controllers/FrontController`, `ContactController`, etc.
- **Administration** : `App/Http/Controllers/Admin/*` pour la gestion CRUD
- **API** : Routes protégées dans `routes/api.php`

### Modèles principaux
- **Event** : Gestion des événements avec scopes et relations
- **Reservation** : Réservations liées aux événements
- **Gallery/Image** : Système de galerie photos
- **Disc** : Discographie
- **Content** : Contenu dynamique par slug
- **User** : Utilisateurs avec authentification Breeze

### Vues Blade
- `resources/views/front/*` : Site public
- `resources/views/admin/*` : Interface d'administration
- `resources/views/components/*` : Composants réutilisables
- `resources/views/layouts/*` : Gabarits de mise en page

### Feature Flags
Le projet utilise un système de feature flags via `config/karrot.php` :
- `KARROT_CONTACT` : Active/désactive la section contact
- `KARROT_EVENT` : Active/désactive les événements
- `KARROT_GALLERY` : Active/désactive la galerie

## 🔒 Sécurité

- **Authentification** : Laravel Breeze pour l'administration
- **Protection CSRF** : Intégrée via Laravel
- **Validation hCaptcha** : Rule personnalisée `ValidHCaptcha`
- **Middlewares** : Protection des sections selon les feature flags

## 📧 E-mails

Le système gère automatiquement l'envoi d'e-mails :
- **Confirmation de réservation** : `App/Mail/ReservationConfirmation`
- **Notification de réservation** : `App/Mail/Reservation`
- Templates Markdown dans `resources/views/mail/`

## 🐳 Docker (Sail)

Le projet inclut une configuration Docker complète via Laravel Sail :
- **laravel.test** : Application Laravel
- **mysql** : Base de données MySQL
- **mailhog** : Capture des e-mails en développement

Ports configurables via variables d'environnement.

## 📝 Licence

Ce projet est sous licence MIT.

## 🤝 Contribution

1. Fork le projet
2. Créer une branche pour votre fonctionnalité (`git checkout -b feature/ma-nouvelle-fonctionnalite`)
3. Commiter vos changements (`git commit -am 'Ajouter une nouvelle fonctionnalité'`)
4. Pousser vers la branche (`git push origin feature/ma-nouvelle-fonctionnalite`)
5. Créer une Pull Request

## 📞 Support

Pour toute question ou problème, n'hésitez pas à ouvrir une issue sur le repository.