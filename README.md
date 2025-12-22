# UCY Theme - WordPress Modern Theme Setup (Vite + Tailwind)

Ce projet est une structure de thème WordPress utilisant Vite pour le développement rapide, Tailwind CSS pour le style, et Docker pour l'environnement local.

## 🛠 Architecture & Workflow

- Développement : Les assets sont servis par Vite (localhost:5173) avec Hot Module Replacement (HMR).

- Production : Les assets sont compilés, versionnés (hashing) et servis via le dossier dist/.

- Pont PHP/JS : Un fichier témoin .dev à la racine du thème permet à WordPress de basculer automatiquement entre le mode Dev et Prod.

## 🏗 Installation

1. Cloner le projet :

```
git clone https://github.com/bartsam/ucy-theme.git
cd ucy-theme
```

2. Configuration Docker :

- Copier et compléter les variables d'environnement : `cp .env.example .env`
- Lancer l'environnement : `docker-compose up -d`

3. Installation du Thème :

- Installer des dépendances : `npm install`
- Accédez à `http://localhost:8000`
- Suivez l'installation classique de WordPress
- Aller dans **Apparence > Thèmes** et activer le thème **UCY Theme**

## ⚡ Utilisation (Scripts NPM)

- `npm run dev` : Lance le serveur Vite + crée le fichier `.dev` (HMR activé).
- `npm run build` : Compile les assets dans dist/ + supprime le fichier `.dev`.
- `npm run export` : Compile les assets et crée une archive .zip du thème

## 📂 Structure du Thème

```
ucy-theme/
├── dist/               # Assets compilés pour la production
├── src/                # Sources (JS, CSS, Images)
│ ├── main.js           # Point d'entrée JS (importe le CSS ici)
│ └── app.css           # Fichier Tailwind
├── docker-compose.yml  # Configuration de l'environnement local
├── .env                # Variables d'environnement (non versionné)
├── .dev                # Fichier temporaire (HMR)
├── functions.php       # Logique WordPress
├── style.css           # En-tête officiel du thème
├── vite.config.js      # Configuration Vite
└── tailwind.config.js  # Configuration Tailwind CSS
└── ucy-theme.zip       # Archive du thème prêt à l'import
```

## 🚀 Déploiement

1. **Thème** : Lancer `npm run export` et récupèrer le fichier `ucy-theme.zip`.
2. **Contenu & Base de données** :
   - Utiliser le plugin _All-in-One WP Migration_ en local.
   - Exporter un paquet `.wpress`.
   - Importez ce paquet sur le WordPress de production.

---

## 📜 Licence & Propriété

Ce projet a été réalisé bénévolement pour l'Union Comtoise de Yoga.

- **Propriété :** Le code source est mis à disposition de l'association pour son usage exclusif.
- **Droits d'auteur :** Copyright (c) 2025 Samuel Bart.
- **Usage Public :** Ce dépôt est public à des fins de démonstration technique.
- **Restrictions :** Toute utilisation commerciale, copie ou redistribution du code sans autorisation préalable est strictement interdite.
