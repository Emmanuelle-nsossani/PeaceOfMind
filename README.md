# 🎓 PeaceOfMind, la santé mentale des étudiants

Ce projet est un site web développé pour une association dédiée à la santé mentale des étudiants. Il vise à sensibiliser, informer et offrir des ressources pour le bien-être mental des jeunes en milieu universitaire.

## 🚀 Fonctionnalités
- 🗞️ **Articles et ressources** : Accès à des contenus informatifs sur la santé mentale
- 📝 **Formulaire de contact** : Permet aux utilisateurs de contacter l’association
- 📊 **Espace administrateur** : Gestion des contenus via un back-office sécurisé
- 🔐 **Authentification des utilisateurs** : Système de connexion pour les administrateurs

## 🛠️ Technologies utilisées
- **Frontend** : HTML, CSS, JavaScript
- **Backend** : PHP
- **Base de données** : MySQL (gérée avec PHPMyAdmin)

## ⚙️ Installation
1. Clone le dépôt :
   ```bash
   git clone https://github.com/Emmanuelle-nsossani/PeaceOfMind.git
   ```
2. Place les fichiers dans le dossier de ton serveur local (ex: `htdocs` pour XAMPP ou `www` pour WAMP).
3. Configure la base de données avec PHPMyAdmin :
   - Crée une base de données (ex : `peaceofmind`)
   - Importe le fichier `database.sql` qui se trouve dans le dssier
4. Configure les identifiants de la base de données dans le fichier de connexion PHP :
   ```php
   $host = 'localhost';
   $db = 'peaceofmind';
   $user = 'root';
   $password = '';
   ```
5. Lance le serveur local et accède au site via `http://localhost/nom-du-projet`

## ✅ Améliorations possibles
- Ajout d’un forum de discussion
- Notifications par e-mail
- Optimisation responsive pour mobile

## 🤝 Contribuer
1. Fork le projet
2. Crée une branche (`git checkout -b feature/ta-fonctionnalite`)
3. Commit tes changements (`git commit -m "Ajout d'une nouvelle fonctionnalité"`)
4. Push la branche (`git push origin feature/ta-fonctionnalite`)
5. Ouvre une pull request

## 📩 Contact
Pour toute question, contactez-moi à [emmanuelle.nsossani@outlook.com] ou sur [www.linkedin.com/in/ensossani]
