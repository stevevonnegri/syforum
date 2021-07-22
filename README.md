Simple site réalisé avec le framework Symfony lors de ma formation de développeur web au CCI de Colmar.

La réalisation :

PARTIE PRATIQUE : L’objectif est de réaliser un petit site type forum d’entraide informatique, en s’inspirant du site https://stackoverflow.com. Les visiteurs pourront s’inscrire et devenir membre pour ainsi poster de nouveaux topics avec un titre et une explication du problème qu’ils rencontrent. Les membres pourront éditer leurs topics et apporter des réponses à d’autres topics. Avant de vous lancer dans le code, lisez entièrement le sujet, et pensez aux lignes de commandes que vous allez pouvoir utiliser.

Installation de Symfony

Installez la dernière version de Symfony.
Configurez Symfony pour le connecter à votre serveur de base de données et créez une base de données tp_symfony grâce à la ligne de commande.
Création / Édition d’un Topic

Créez une nouvelle entité Topic avec :

un champ titre de type string ;
un champ message, de type text ;
un champ date de création et un champ date de mise à jour de type datetime ;
Utilisez la ligne de commande pour générer un système de CRUD pour l’entité Topic.
Espace membre

Créez une nouvelle entité User (utilisez la ligne de commande)
Un utilisateur pourra créer des annonces. Il pourra avoir une ou plusieurs annonces et une annonce n’appartiendra qu’à un seul utilisateur. Créez la relation en conséquence (utilisez la ligne de commande !).
Un visiteur a la possibilité de créer un compte grâce à un formulaire lui demandant d’entrer son email et son mot de passe (le mot de passe devra être crypté).
L’utilisateur possédant un compte (qu’on appellera un membre) peut se connecter grâce à un bouton connexion qui le redirige vers un formulaire de connexion.
Un membre a la possibilité de se déconnecter grâce à un bouton « se déconnecter ».
Un membre peut créer un topic grâce à un bouton qui le redirige sur le formulaire de création d’un topic.
Un membre peut modifier un topic lui appartenant grâce à un bouton qui le redirige sur le formulaire d’édition.
Un membre peut supprimer un topic lui appartenant grâce à un bouton.
Un membre a accès à son espace grâce à un bouton « mon profil »
Quand il clique sur « mon profil », il voit la liste de tous ces topics.
Page accueil

Fonctionnalités attendues

Créez un nouveau controller HomeController
Dans la méthode index, affichez des topics par ordre chronologique (du plus récent au plus ancien) avec une pagination.
L’affichage contiendra le titre du topic, ainsi que date de création.
Quand un visiteur clique sur un topic, il accède au détail du topic.
