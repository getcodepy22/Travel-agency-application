
# ✈️ Voyage Facile - Application Web d'Agence de Voyage

## 📌 Description
**Voyage Facile** est une application web dynamique permettant aux utilisateurs de :
- Rechercher des vols
- Réserver un billet
- Effectuer un paiement
- Générer un ticket avec QR Code
- Consulter leurs réservations

Un espace **Admin PRO++** permet de gérer :
- Clients 👤
- Réservations ✈️
- Paiements 💳
- Vols 🛫
- Commentaires 💬

---

## 🚀 Fonctionnalités

### 👤 Utilisateur
- Inscription / Connexion
- Réservation de vol
- Paiement sécurisé (simulation)
- Génération de ticket PDF avec QR Code
- Consultation des réservations
- Envoi de commentaires

### 🛠 Admin
- Dashboard avec statistiques
- Gestion des clients
- Gestion des réservations
- Gestion des paiements (statut : PAYE / EN_ATTENTE)
- Gestion des vols
- Consultation des commentaires clients
- Suppression des données
- Envoi d'email

---

## 🧰 Technologies utilisées

- **Frontend**
  - HTML5
  - CSS3
  - Bootstrap 5
  - JavaScript

- **Backend**
  - PHP (procédural & MySQLi)

- **Base de données**
  - MySQL

- **Librairies**
  - QRCode.js
  - html2canvas
  - jsPDF

---

## ⚙️ Installation

### 1. Cloner le projet
```bash
git clone https://github.com/getcodepy22/Travel-agency-application
```

### 2. Importer la base de données
Ouvrir phpMyAdmin
Créer une base de données : gestion_agence
Importer le fichier SQL fourni : database.sql

### 3. Lancer le projet
Placer le projet dans htdocs (XAMPP)
Accéder via :
http://localhost/voyage-facile/

## 🧾 Base de données

# Tables principales :

- users
- vol
- reservation
- paiement

## 🎨 Interface
 - Design moderne avec Bootstrap 5
 - Responsive (mobile / tablette / desktop)
 - UI simple et intuitive
 - Cartes dynamiques pour les vols
- Interface admin professionnelle

### 📈 Améliorations futures
  - Paiement réel (Stripe / PayPal)
  - API de vols en temps réel
  - Système de notification email
  - Application mobile (Flutter / React Native)
  - Multi-langues (FR / EN / AR)
## 👨‍💻 Auteur
Projet de Fin cycle  (L3)


