# Test technique — Dev Front
## Aperçu du projet

Ce projet est la réalisation d’un test technique dont l’objectif était de reproduire au pixel près une interface fournie via Adobe XD, en utilisant Laravel Blade, HTML et Tailwind CSS.
Il met en avant une approche soignée du design system, du responsive et de la finesse des détails visuels.

## Objectif principal

Créer une reproduction fidèle de la maquette tout en garantissant une harmonisation visuelle (alignements, hiérarchie, rythme vertical).
Documenter les choix et arbitrages dans le README pour justifier chaque adaptation.

## Stack technique

- Backend : Laravel (Blade templates)

- Frontend : Tailwind CSS + Vite

- Gestion des dépendances : Composer (PHP) & npm/yarn (JS)

- Langages : PHP 8.1+, HTML, CSS (Tailwind)

## Fonctionnalités

- Pages statiques reproduisant fidèlement le design XD.

- Composants Blade réutilisables pour une structure claire (approche similaire à React Components).

- Responsive design pensé mobile-first, avec des ajustements sur mesure par rapport à la maquette desktop.

## Structure du projet

- resources/views/ : pages Blade et composants personnalisés (x-components)

- public/ : images, logos et ressources statiques

- tailwind.config.js : configuration du thème et des breakpoints

- package.json / composer.json : dépendances JS et PHP

## Lancement rapide
### Cloner le projet
git clone <url_du_repo>
cd rec-0925-devfront

### Installer les dépendances PHP
composer install

### Installer les dépendances front
npm install   # ou yarn install

### Créer le fichier d’environnement
cp .env.example .env

### Générer la clé Laravel
php artisan key:generate

### Lancer en mode développement
npm run dev
php artisan serve

### Accéder au projet
[http://localhost:8000] (http://127.0.0.1:8000/)

## URLs principales

- /randriamitandrina-completez-votre-reservation

- /randriamitandrina-paiement

## Décisions de design

- Uniformisation des boutons et le card : ajout d’icônes pour renforcer la cohérence.

- Header repensé : amélioration de la hiérarchie visuelle pour une meilleure première impression.

- Récapitulatif paiement sticky : ajusté pour rester visible lors du scroll.

## Temps estimé

Environ 10 heures de travail, incluant :

- Mise en place du projet Laravel/Tailwind
- Intégration fidèle des pages
- Adaptations responsives et ajustements graphiques
