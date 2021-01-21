# Présentation du projet:
Il s'agit d'un site web développé grâce à html, php, js et mysql permettant de transmettre les résultats d'analysé médicaux au patient.

# Comment lancer l'application localement?
Afin de lancer le projet en local vous devez:
> Installer XAMPP, ensemble de logiciels permettant de mettre en place un serveur Web local.
> Mettre le dossier avec l'ensemble des fichiers du projet (donc ici medapp) dans htdocs, qui lui même se trouvera dans le dossier xampp.(C:\xampp\htdocs)
> Lancer XAMPP Control Panel et "Start" Apache et MySQL.
> Sur votre navigateur, écrire "localhost/@nomdudossiercontenantleprojet/index.html
Donc ici, ca sera localhost/medapp/index.html
> créez une nouvelle base de données qui s'intitule "userregistration" dans phpMyAdmin.
> créer dans un premier temps une table qui s'intitule "usertable" pour la partie login/inscription avec 2 colonnes: name étant une clé primaire et password.
> créez dans un deuxième temps une table qui s'intitule "mytable" pour la partie formulaire et modifications des données avec 10 colonnes: 
dossier, genre, prenom étant la clé primaire, nom, secu, adresse, codepostal, medecin, contact et date. 

## PAGE D'ACCUEIL
Cette page d'accueil dispose d'une partie avec une référence à la RGPD ainsi qu'un message de bienvenue aux utilisateurs avec un bouton menant vers la page d'inscription et de connexion.
En bas de page, on retrouve un slider défilant trois images de laboratoires et du logo de notre école. Et enfin, on retrouve un menu en bas avec RGPD, Liens utiles, mes mentions légales, la partie FAQ les informations sur les contacts.

## PAGE CONTACT
Sur cette page contact, on retrouve le logo du système du laboratoire en haut, des données sur les contacts ainsi qu'un google map pour permettre la localisation. 
Et comme pour la page d'accueil, en bas de page, on retrouve toujours les liens qui redirigent vers la page d'acceuil, la page RGPD, les liens utiles, les mentions légales et FAQ.

## PAGE LIENS UTILES
Cette page contient de nouveau le logo en haut, un ensemble de liens en rapport avec la santé et le laboratoire.
De plus, en haut, on retrouve une petite fenêtre avec la page Facebook de l'école ainsi que les éléments publiés sur leur page.

## PAGE MENTIONS LEGALES
Il s'agit d'une page comportant le logo et de nouveau les liens de redirection vers les pages Home, RGPD, Liens utiles, FAQ et contact.
Mais de plus, on retrouve des informations concernant la date de 1ère mise en ligne, l'objectif du site, l'hébergeur, le contenu du site et enfin des informations sur les propriétés et droits d'auteur.

## PAGE FAQ
La page FAQ contient tous genres de questions fréquemment posées par les utilisateurs.
Il y a différents sujets abordés tels que l'inscription et la connexion, les données et le formulaire, la gestion du compte, le site et enfin des explications de l'identité du "laboratoire".

## PAGE INSCRIPTION ET SE CONNECTER
Dans cette page, il est possible de s'inscrire (bien que c'est souvent le laboratoire qui crée un compte et transmet le mot de passe au patient).
Il est également possible de se connecter. On retrouve toujours le logo en haut et les redirections vers home , RGPD, liens utiles, etc.

## PAGE FORMULAIRE DE SAISIES ET MODIFICATION
Cette page permet d'inscrire les données tels que le numéro du dossier, le genre, le nom de famille, le numéro de sécurité sociale, l'adresse, le code postal, le médecin traitant, la personne à contacter en cas d'urgence et enfin la date d'intervention. Le prénom est automatiquement le username transcris dans ce formulaire et ne devant pas changer.
Ensuite, en bas s'affiche une liste avec l'ensemble des analyses réalisés et trois boutons:
> Un bouton "modifier et enregistrer vos données" pour insérer les données insérées par l'utilisateur lorsqu'elle sont différentes de celles insérées avant.
> D'autres boutons pour les analyses réalisées, enregistrer les modifications et afficher les résultats.
C'est également sur cette page que l'utilisateur doit de connecter grâce au "se déconnecter" qui se trouve juste au-dessus de "Bonjour [nom de l'utilisateur].

## PAGE ANALYSE BIOCHIMIQUE
Cette page regroupe donc les résultats de l'analyse biochimique sanguine et urinaire.
On retrouve donc les valeurs du taux de glycémie, de ferritine, de protéinurie et de glycosurie.
En haut de la page, un récapitulatif des informations saisies est présent afin de s'assurer que tout a été saisies correctement. Ce sont ces même saisies du formulaire qui sont utilisés pour générer le pdf par la suite. D'ailleurs un pdf est généré comme cidessus grâce au bouton "accéder au pdf".

## PAGE ANALYSE HÉMATOLOGIQUE

Cette page regroupe donc les résultats de l'analyse hématologique sanguine.
On retrouve donc les valeurs du taux de numération (globules rouges, hémoglobine, hematrocrite, volume globulaire moyen), de formule leucocytaire (lymphocyte, polybasophile, polyneutrophiles, etc.), de plaquettes (en tissu) et enfin de la vitesse de sédimentation.
En haut de la page, un récapitulatif des informations saisies est présent comme pour l'analyse biochimique afin de s'assurer que tout a été saisies correctement. Ce sont ces même saisies du formulaire qui sont utilisés pour générer le pdf par la suite. D'ailleurs un pdf est généré comme ci-dessus grâce au bouton "accéder au pdf".
