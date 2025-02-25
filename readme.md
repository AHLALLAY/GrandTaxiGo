# 🚕 GrandTaxiGo : Plateforme de Réservation de Grands Taxis

**Assigné à:** Houssni Ouchad  
**Date de création:** 23/02/25

## 📋 Description Globale

Une plateforme intuitive permettant aux passagers de réserver facilement des grands taxis et aux chauffeurs de gérer leurs trajets et disponibilités en toute simplicité. Vous êtes chargé(e) de développer cette plateforme en utilisant le framework Laravel.

**Technologies utilisées:** PHP, Git, PostgreSQL, UML.

## 🔍 Situation professionnelle

Optimiser l'efficacité via le développement monolithique Laravel.

## ❓ Besoin visé ou problème rencontré

Les clients expriment le souhait d'améliorer l'expérience utilisateur en réduisant les temps de chargement et en augmentant la réactivité. Le problème technique découle d'une gestion inefficace de la logique métier, de la manipulation des données et de la présentation, entraînant des performances en deçà des attentes. L'objectif est de résoudre ce problème en utilisant l'MVC avec Laravel pour créer une application web plus rapide, plus réactive et offrant une expérience utilisateur améliorée.

## 🎯 Compétences visées

| Compétence | Niveau |
|------------|--------|
| Planifier le travail à effectuer individuellement et en équipe | Niveau 3 : transposer |
| Définir le périmètre d'un problème rencontré | Niveau 2 : adapter |
| Rechercher de façon méthodique une ou des solutions | Niveau 2 : adapter |
| Partager la solution adoptée | Niveau 3 : transposer |
| Mettre en place une base de données relationnelle | Niveau 3 : transposer |
| Développer des composants d'accès aux données SQL et NoSQL | Niveau 3 : transposer |
| Développer des composants métier côté serveur | Niveau 3 : transposer |

## 🌐 Contexte du projet

La société GrandTaxiGo souhaite développer une plateforme permettant la réservation de grands taxis pour des trajets interurbains. L'objectif est de permettre aux passagers de réserver des trajets et de trouver des chauffeurs disponibles pour des trajets spécifiques. En parallèle, les chauffeurs pourront publier leurs disponibilités et gérer leurs trajets.

## ✨ Fonctionnalités

### 👤 Authentification et compte

- _En tant qu'utilisateur (passager ou chauffeur)_, je veux créer un compte avec une photo de profil obligatoire et mes informations personnelles.
- _En tant qu'utilisateur_, je veux me connecter avec mes identifiants pour accéder à mon compte et gérer mon profil.

### 🗺️ Réservation et gestion des trajets

- _En tant que passager_, je veux réserver un taxi en indiquant la date, le lieu de prise en charge et la destination.
- _En tant qu'utilisateur_, je veux consulter mon historique de trajets (réservations pour le passager, courses effectuées pour le chauffeur).
- _En tant que passager_, je veux annuler une réservation dans un délai déterminé (avant une heure de départ).
- _En tant que passager_, je veux filtrer les chauffeurs par localisation et disponibilité.
- _En tant que chauffeur_, je souhaite pouvoir accepter ou refuser les réservations (Toutes les réservations dépassant leur heure de départ sans acceptation ou annulation par le chauffeur seront automatiquement annulées).
- _En tant que chauffeur_, je veux mettre à jour mes disponibilités (L'automatisation des disponibilités est facultative).

### 🌟 Bonus

- Email pour le chauffeur lors d'une nouvelle demande de réservation.
- Email pour le passager lors de l'acceptation ou de l'annulation de sa réservation.
- Notification envoyée au passager et au chauffeur avant l'annulation automatique d'une réservation.
- Automatisation de la gestion des disponibilités des chauffeurs.

## 📅 Modalités pédagogiques

Vous disposez de 5 jours en autonomie pour réaliser le brief en utilisant les technologies appropriées.

| Étape | Date |
|-------|------|
| Assignement de Brief | 24/02/2025 à 09:00 |
| Date limite de soumission | 28/02/2025 avant 23:59 |

> 💡 Aidez-vous les uns les autres.

## 📊 Modalités d'évaluation

**Présentation de 15 minutes:**
- ⏱️ 5 minutes : Démonstration de livrable
- ⏱️ 5 minutes : Explication partie code
- ⏱️ 5 minutes : Évaluation des savoirs (Q/A)

⚠️ **Attention:** Toute non-conformité au cahier des charges ou tout retard dans la livraison sur Simplonline entraînera automatiquement l'invalidité de toutes les compétences liées au Brief.

## 📦 Livrables

### 📝 Premier livrable : 1er jour
Lien vers le repository GitHub contenant:
- La planification des tâches
- Diagrammes UML PDF
- README

### 💻 Deuxième livrable : 5ème jour
Lien vers le repository GitHub contenant:
- Le code source du site web avec tous les fichiers nécessaires
- README

## ⭐ Critères de performance

### 1. 🧩 Implémentation des Bonnes Pratiques pour CRUD dans Laravel
Veillez à suivre les bonnes pratiques de Laravel, telles que l'utilisation des migrations pour définir la structure de la base de données, la séparation des préoccupations avec l'utilisation de modèles, et l'optimisation des requêtes Eloquent.

### 2. ✅ Règles de Validation des Formulaires en Laravel
Ajoutez des règles de validation appropriées dans les requêtes avant de passer aux contrôleurs pour assurer l'intégrité des données. Utilisez les fonctionnalités de validation intégrées de Laravel pour vérifier les données entrantes.

### 3. 🔒 Utilisation de Middleware pour la Validation
Implémentez des middlewares de validation pour valider les données avant qu'elles n'atteignent le contrôleur. Cela aide à assurer une validation précoce et à maintenir la propreté du code.

### 4. 🌱 Implémentation des Seeders et Factories pour le Modèle "Announcement"
Utilisez des seeders pour alimenter la base de données avec des données de test. Créez des factories pour générer des données de manière aléatoire lors des tests unitaires et fonctionnels.

### 5. ⚡ Optimisation des Requêtes Eloquent
Assurez-vous que vos requêtes Eloquent sont bien optimisées en utilisant les méthodes appropriées telles que "select", "where", et en évitant le chargement excessif de relations.

### 6. 🔄 Gestion Appropriée des Relations Eloquent
Si votre modèle "Announcement" a des relations avec d'autres modèles, assurez-vous d'utiliser les méthodes Eloquent pour charger ces relations de manière optimale (par exemple, eager loading).

### 7. 🗑️ Utilisation de Soft Deletes
Si vous utilisez Soft Deletes, assurez-vous de gérer correctement les annonces supprimées dans vos requêtes, en évitant de les inclure par défaut dans les résultats.

### 8. 💾 Cache des Requêtes Fréquemment Utilisées
Utilisez le cache pour stocker temporairement des résultats de requêtes fréquemment utilisées afin de réduire la charge sur la base de données.

### 9. 🔬 Tests de Performance
Effectuez des tests de performance pour évaluer la vitesse d'exécution des opérations CRUD sous différentes charges.

### 10. 🖥️ Optimisation des Vues
Si vos vues sont complexes, assurez-vous d'optimiser les requêtes et d'utiliser la mise en cache des vues lorsque cela est approprié.