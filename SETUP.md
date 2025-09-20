# Configuration de l'environnement de développement - Gospel Dream

## État actuel
✅ Projet cloné avec succès  
✅ Branche `dev` contient l'application Laravel complète  
✅ Node.js et npm disponibles (v16.20.2, npm v8.19.4)  
❌ PHP non installé  
❌ Composer non installé (mais composer.phar présent dans le projet)  

## Prochaines étapes requises

### 1. Installation de PHP
Pour macOS, vous pouvez installer PHP via Homebrew :
```bash
brew install php
```

### 2. Vérification de l'installation PHP
```bash
php --version
```

### 3. Installation des dépendances PHP avec Composer
Après installation de PHP :
```bash
php composer.phar install
```

### 4. Installation des dépendances JavaScript
```bash
npm install
```

### 5. Configuration de l'environnement
```bash
cp .env.example .env
php artisan key:generate
```

### 6. Migration de la base de données (si nécessaire)
```bash
php artisan migrate
```

### 7. Compilation des assets
```bash
npm run dev
# ou pour la production:
npm run build
```

## Structure du projet
- **Laravel** : Framework PHP principal
- **Node.js/NPM** : Pour la gestion des assets front-end
- **Docker** : Configuration disponible (docker-compose.yml)

## Alternative avec Docker
Si vous préférez éviter l'installation locale de PHP :
```bash
docker-compose up -d
```