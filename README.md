# Syforum

Site basique réalisé avec le framework symfony lors de ma formation à la CCI campus de Colmar.

Les attendus et réaliser :

PARTIE PRATIQUE :
L’objectif est de réaliser un petit site type forum d’entraide informatique, en s’inspirant du site https://stackoverflow.com. Les visiteurs pourront s’inscrire et devenir membre pour ainsi poster de nouveaux topics avec un titre et une explication du problème qu’ils rencontrent. Les membres pourront éditer leurs topics et apporter des réponses à d’autres topics.
Avant de vous lancer dans le code, lisez entièrement le sujet, et pensez aux lignes de commandes que vous allez pouvoir utiliser.

Installation de Symfony
1.	Installez la dernière version de Symfony.
2.	Configurez Symfony pour le connecter à votre serveur de base de données et créez une base de données tp_symfony grâce à la ligne de commande.


Création / Édition d’un Topic

Créez une nouvelle entité Topic avec :
1.	un champ titre de type string ;							
2.	un champ message, de type text ;
3.	un champ date de création et un champ date de mise à jour de type datetime ;
4.	Utilisez la ligne de commande pour générer un système de CRUD pour l’entité Topic.

Espace membre

1.	Créez une nouvelle entité User (utilisez la ligne de commande)
2.	Un utilisateur pourra créer des annonces. Il pourra avoir une ou plusieurs annonces et une annonce n’appartiendra qu’à un seul utilisateur. Créez la relation en conséquence (utilisez la ligne de commande !).
3.	Un visiteur a la possibilité de créer un compte grâce à un formulaire lui demandant d’entrer son email et son mot de passe (le mot de passe devra être crypté).
4.	L’utilisateur possédant un compte (qu’on appellera un membre) peut se connecter grâce à un bouton connexion qui le redirige vers un formulaire de connexion.
5.	Un membre a la possibilité de se déconnecter grâce à un bouton « se déconnecter ».
6.	Un membre peut créer un topic grâce à un bouton qui le redirige sur le formulaire de création d’un topic.
7.	Un membre peut modifier un topic lui appartenant grâce à un bouton qui le redirige sur le formulaire d’édition.
8.	Un membre peut supprimer un topic lui appartenant grâce à un bouton.
9.	Un membre a accès à son espace grâce à un bouton « mon profil »
10.	Quand il clique sur « mon profil », il voit la liste de tous ces topics.


Page accueil

Fonctionnalités attendues	

1.	Créez un nouveau controller HomeController
2.	Dans la méthode index, affichez des topics par ordre chronologique (du plus récent au plus ancien) avec une pagination.
3.	L’affichage contiendra le titre du topic, ainsi que date de création.
4.	Quand un visiteur clique sur un topic, il accède au détail du topic.
