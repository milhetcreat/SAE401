# Dossier UX

## Membres du groupe
Milhet Elsa & 
Mellé Florestan

## Description générale de l'application
Ce projet a pour but de mettre en œuvre les enseignements des modules “Design d’expérience”, “Développement Front et intégration”, “Développement Back”, “Gestion de projet”, et “Déploiement de services. 

Notre sujet est la réalisation d’une application web & mobile permettant l’adoption d’un animal.
L’objectif est d’avoir une plateforme qui centralise des animaux à la recherche d’un nouveau foyer. Les utilisateurs de l’application pourront donc consulter les animaux qui sont mis à l’adoption et ajouter son animal afin de lui trouver un nouveau foyer.


## Fonctionnalités / Ecrans

Menu de navigation
- Accès aux principales pages de l’application 

Inscription
- Formulaire permettant aux utilisateurs de s’inscrire 
- Imposer un mot de passe sécurisé 
- Crypter les mots de passes

Connexion
- Formulaire de connexion grâce à l’adresse email et le mot de passe 
- Possibilité de se souvenir de l’utilisateur 

Animaux
- Liste de tous les animaux à adopter dans l’application 
- Filtrer par critères (type, race, localisation, âge, taille, sexe, nb de likes, … ) 
- Recherche par critères

Animal
- Page qui affiche toutes les informations relatives à un animal (prenom, race, images, age, sexe, … )
- Informations du maître
- Possibilité de like
- Possibilité de signaler
- Message / Téléphone 

Espace utilisateur
- Consulter ses informations personnelles
- Liste des animaux mis à l’adoption
- Possibilité d’ajouter un animal

Like
- Liste de tous les animaux likés 

Ajout Animal
- Accessible depuis l’espace utilisateur, cette page permet d’ajouter son animal

Gestion Animal
- Possibilité de mettre à jour et supprimer un animal

Administration
- Ajouter/supprimer des utilisateurs 
- Mise à jour de tous les éléments administrables 
- Suppression des animaux/utilisateurs après signalement


### Navigation

Nous avons opté pour un menu burger pour optimiser l'espace visuel de la page d'accueil. Étant donné que la page d'accueil est destinée à mettre en avant les animaux disponibles pour l'adoption, réduire la visibilité du menu principal permet de mettre l'accent sur le contenu principal.
Le menu burger offre également une apparence épurée et moderne à la page d'accueil.

En cliquant sur le menu burger, les utilisateurs peuvent accéder à un menu déroulant qui permet de naviguer sur les différentes pages de l'application, telles que :
Mes Favoris : Page renvoyant une liste des animaux gardés en favoris.
Mon Profil : Page complète qui permet de visualiser ses informations personnelles, ses animaux, ainsi que d'ajouter et/ou modifier ceux-ci.

### Accueil

Notre header est constitué d'un menu burger qui permet la navigation vers les différentes pages ainsi que du profil de l'utilisateur.

Au-dessous du header, nous avons intégré une section de recherche qui permet aux utilisateurs de trouver rapidement un animal spécifique en entrant des mots-clés et un bouton afin de filtrer sa recherche. Ces fonctionnalités sont essentielles pour les utilisateurs qui ont déjà une idée précise de l'animal qu'ils souhaitent adopter.

Juste en dessous de la section de recherche, nous avons inclus des filtres de recherche avancée. Ces filtres permettent aux utilisateurs de restreindre leurs résultats en fonction de critères spécifiques tels que l'âge, le sexe, la taille, etc. Nous avons choisi d'inclure cette fonctionnalité pour permettre aux utilisateurs d'affiner leur recherche et de trouver plus facilement l'animal qui correspond à leurs préférences et à leurs besoins.

Nous avons mis en avant un menu, listant les animaux disponibles à l'adoption. Par défaut, la page affiche tous les animaux disponibles, ce qui permet aux utilisateurs d'avoir une vue d'ensemble de toutes les options disponibles dès leur arrivée sur le site.

Chaque animal est présenté par une card, avec une photo, son nom, son âge, son sexe, sa race ainsi que le lieu où il réside. Cette présentation permet aux utilisateurs d'avoir un aperçu rapide des animaux disponibles et de décider lesquels ils souhaitent explorer davantage. Aussi, si ceux-ci ont marqué leur esprit, il y a la possibilité de mettre un like sur l'animal.

### Ecran 1 / Page 1
![Démarrage Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/639db913-2539-4c84-9e08-3ce208747200)
<br>

Première page : on retrouve une icone de présentation, un petit slogan en rapport avec l'application, un bouton inscription et un bouton pour accéder a l'application sans se connecter.

### Ecran 2 / Page 2

![Connexion Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/46af839e-b1e2-4faf-82f4-4544b469c267)
<br>
Page de connexion comprenant deux input (mail et mot de passe) afin de se connecter. En plus, il y a un bouton "valider" la connexion ainsi que la possibilité de s'inscrire si l'utilisateur n'a pas de compte.


### Ecran 3 / Page 3

![Inscription Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/0b5321ef-f917-46c9-8994-db6a3dd1c995)
<br>
Page d'inscription comprenant les différents input pour s'inscrire et deux boutons "suivant" et "annuler".

### Ecran 4 / Page 3

![Inscription2](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/150163972/e9867f51-8bfd-4968-be71-5e8e296f311e)
<br>
Suite page inscription comprenant les inputs pour la ville et l'âge, un bouton pour rajouter une photo de profil et enfin deux boutons pour préciser son sexe

### Ecran 5 / Page 4
![accueilsansco](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/150163972/2c62d60b-e7ca-44ff-9b52-640d9552267d)
<br>
Page d'accueil comprenant différentes cards dans lesquels sont affichés les animaux pour un utilisateur non connecté on retrouve un profil pour se connecter ( en haut à gauche ) et un bouton filtre pour ajouter des paramètres de recherche, un slider permettant de choisir le type d'animal recherché, une barre de recherche pour chercher un paramètre spécifique et enfin des boutons like sur chaque card pour ajouter l'animal aux favoris

### Ecran 6 / Page 4
![Accueil Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/7fe67da7-57a7-4f2e-a63c-2706f81b9c28)
<br>
Page d'accueil comprenant différentes cards dans lesquels sont affichés les animaux pour un utilisateur connecté on retrouve un profil accéder a son espace personnel ( en haut à gauche ), un bouton filtre pour ajouter des paramètres de recherche, un slider permettant de choisir le l'espèce recherchée, une barre de recherche pour chercher un paramètre spécifique et enfin des boutons like sur chaque card pour ajouter l'animal aux favoris

### Ecran 7 / Page 4
![Accueil chien Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/c9adf60b-263b-4e65-b081-6cf949b0e826)
<br>
Page d'accueil avec les chiens séléctionnés comme espèce. Toutes les pages des espèces sont faites de la même manière ayant juste la couleur qui change.

### Ecran 8 / Page 5
![Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/97f796e0-8c98-4b98-bf0a-1400695c8d13)
<br>
Page Animal comprenant les différentes informations sur l'animal concerné : Photos, Prénom, Localisation, Sexe, Age, Poids, Taille, Description et enfin Spécificités. On retrouve également le nom et prénom du propriétaire ainsi que sa photo de profil et dans la section haute de la page on peut trouver un autre bouton like ( icone de coeur ) pour ajouter l'animal a ses favoris et un bouton pour signaler l'animal en cas de problème ( icone de cloche ).

### Ecran 9 / Page 6
![Espace utilisateur](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/150163972/97341173-8a1e-4d8d-a8be-180ae3747dd5)
<br>
Page Espace Utilisateur avec la possibiité de modifier chaque informations de l'utilisateurs sauf son mot de passe.

### Ecran 10 / Page 7
![Modifier Profil Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/6b1f6707-5597-4ae3-8007-c2923721fae2)
<br>
Page Modification Profil sur laquelle on retrouve son image profil ainsi qu'un bouton pour la changer, ses informations personnelles, ses animaux avec leurs likes et un bouton pour modifier le profil d'un animal ainsi qu'un bouton pour ajouter un animal. Dans le Header on retrouve simplement un bouton pour revenir à l'accueil.

### Ecran 11 / Page 7
![Modifier2 Profil Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/447eea5a-a34a-4a76-a6bc-d46f8872eb75)
<br>
Suite de la Page Modification Utilisateur.

### Ecran 12 / Page 8
![Ajouter Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/1e9a92b8-9e5a-474c-b36e-c661b1e36612)
<br>
Page Ajouter un Animal avec les informations basiques.

### Ecran 13 / Page 8
![Ajouter2 Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/02c5855f-4120-4ab8-a947-5d9be80f36cd)
<br>
Suite de la Page Ajouter un Animal: le poids est par défault en kg et l'âge en années, c'est selon nous le plus utilisé et le plus probable.

### Ecran 14 / Page 9
![Modifier Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/0697670c-433d-4739-9a94-7e5db6aade23)
<br>
Page Modifier un Animal: avec la reprise dess informations de l'animal.

### Ecran 15 / Page 9
![Modifier2 Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/adc636d7-5bcc-4ebd-aa22-576df24037f2)
<br>
Suite de la Page Modifier un Animal.

### Ecran 16 / Page 10
![Like Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/dd42e29e-23f5-4820-b8ee-de594aad6107)
<br>
Page Favoris : c'est la même schéma que l'accueil avec uniquement les animaux mis en favoris par l'utilisateur.

## Maquettes finales
Nous avons utilisé Material UI le design system créé par Google pour la maquette d'Elsa et Ant Design un design system créé pour des logiciels de gestion de données. En finalité nous avons choisi d'utiliser la maquette d'Elsa, material UI convenant bien plus à notre utilisation car plus polyvalent et la documentation étant plus fournie que celle d'Ant Design qui est elle encore partiellement en chinois.

### Maquette Mobile Elsa
https://www.figma.com/file/DskeYvLuwb0MeeW0h3MXxW/SAE-401?type=design&node-id=0%3A1&mode=design&t=GaUnqXG7wlMfBKax-1

### Maquette Desktop Elsa
https://www.figma.com/file/8sdNFLWOD7gDr2NZAxJF6i/SA%C3%89-DESKTOP?type=design&node-id=0%3A1&mode=design&t=MEIon05gE5BecWAk-1

### Maquette Mobile Florestan
https://www.figma.com/file/1JnsegMa63EZ1XLVZfmr9E/Maquette-mobile-SAE-401-Florestan-Mell%C3%A9-Cappellin?type=design&node-id=0%3A1&mode=design&t=geJeerFT3DN4FtUd-1

### Maquette Desktop Florestan
https://www.figma.com/file/MH1pjga5mhDMO52xoWEm1R/Maquette-Desktop-SAE-401-Florestan-Mell%C3%A9-Cappellin?type=design&node-id=0%3A1&mode=design&t=khsvmJLyblMZ9MOG-1






# UX FILE

## Group members
Milhet Elsa & 
Mellé Florestan

## General Description

Our work was aimed at developping a web and mobile app that serves as a platform to adopt pets.
The project is meant to use the lessons of the Resources "Design d'expérience", "Développement Front et Intégration", "Développement Back", "Gestion de projet", and "Déploiement de services"
The goal is to create a platform which centralizes pets that are looking for a new family. The users will be able to look for all the pets available on the app but can also register their own for an adoption.

## Features / Screens

Navigation Menu
- Allows to navigate through the app

Registering
- Form allowing users to register
- A secured password is necessary ( at least 1 Capital letter, 1 lowercase letter, 1 special character and 1 number )
- Password is encrypted

Connexion
- The user can connect to his account by using an email and a password
- Remember me checkbox available

Pets
- List of every pet available
- Filters by options (type, race, place, age, height, sex, amount of like)
- Search with options available

Pet
- Presentation page for each pet with more precise informations about him (surname, race, images, age, sex )
- Owner's informations
- A user can like the pet to add him into his wishlist
- A user can report a pet if there is any problem, admins will be informed about it
- A user can chat with the owner by chat or phone

User personnal space
- All the user's personnal informations about his account are available here
- List of the pet's the user registered
- The user can add or update a pet he registered

Like
- "Liked" pets list

Admin
- Add / update / delete any user
- Add / update / delete any pet
- Acces to every report and chat on the app


### Navigation

We opted for a burger menu to optimize the visual space of the home page. Since the homepage is intended to highlight the animals available for adoption, reducing the visibility of the main menu allows you to focus on the main content.
The burger menu also offers a minimalist and modern look on the homepage.

By clicking on the burger menu, users can access a drop-down menu that allows them to navigate through the various pages of the application, such as:
Mes Favoris (Liked): A list of animals kept as favorites.
Mon Profil (Personnal Space): Complete page that allows you to view your personal information, your animals, as well as add and/ or modify them.

### Home Page

Our header consists of a burger menu that allows navigation to the different pages as well as the user profile.

Below the header, we have integrated a search section that allows users to quickly find a specific animal by entering keywords and a button to filter its search. These features are essential for users who already have a clear idea of the animal they want to adopt.

Just below the search section, we have included advanced search filters. These filters allow users to narrow their results based on specific criteria such as age, sex, size, etc. We have chosen to include this feature to allow users to refine their search and more easily find the animal that matches their preferences and needs.

We have listed the animals available for adoption. By default, the page displays all available animals, allowing users to have an overview of all available options as soon as they arrive on the site.

Each animal is presented by a card, with a photo, its name, age, sex, breed and the place where it resides. This presentation allows users to have a quick overview of available animals and decide which ones they want to explore further. Also, if they really liked it, there is the possibility to "like" an animal.

### Screen 1 / Page 1
![Démarrage Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/639db913-2539-4c84-9e08-3ce208747200)
<br>

Here is a presentation icon, the currency of our app, a register button and a "continue as a guest" button

### Screen 2 / Page 2

![Connexion Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/46af839e-b1e2-4faf-82f4-4544b469c267)
<br>
Connexion screen where we can find two inputs one to enter your mail and one for your password to acces to the app as a connected user. There is also a "Confirm" button to connect and a "Register" button for someone without an account

### Screen 3 / Page 3

![Inscription Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/0b5321ef-f917-46c9-8994-db6a3dd1c995)
<br>
Registering page with the different inputs to register properly there is also a "next" and a "cancel" button.

### Screen 4 / Page 3

![Inscription2](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/150163972/e9867f51-8bfd-4968-be71-5e8e296f311e)
<br>
Register page part 2: there is two inputs for the city and the age, a button for the profile picture and finally two buttons to enter your sex.
### Screen 5 / Page 4
![accueilsansco](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/150163972/2c62d60b-e7ca-44ff-9b52-640d9552267d)
<br>
ome page with different cards displaying the animals for a user who is not logged in: a profile for logging in (top left) and a filter button for adding search parameters, a slider for choosing the type of animal you are looking for, a search bar for looking for a specific parameter, and like buttons on each card for adding the animal to favorites.

### Screen 6 / Page 4
![Accueil Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/7fe67da7-57a7-4f2e-a63c-2706f81b9c28)
<br>
Home page with different cards displaying the animals for a logged-in user: a profile to access his/her personal space (top left), a filter button to add search parameters, a slider to choose the species, a search bar to search for a specific parameter and finally like buttons on each card to add the animal to favorites.

### Screen 7 / Page 4
![Accueil chien Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/c9adf60b-263b-4e65-b081-6cf949b0e826)
<br>
Home page with dogs selected as species. All the species pages are made in the same way, with only the color changing.

### Screen 8 / Page 5
![Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/97f796e0-8c98-4b98-bf0a-1400695c8d13)
<br>
The Animal page contains information on the concerned pet : photos, first name, location, sex, age, weight, size, description and special features. You'll also find the owner's first and last name and profile photo, and at the top of the page you'll find another like button (heart icon) to add the animal to your favorites, and a button to report the animal in a problem's case (bell icon).

### Screen 9 / Page 6
![Espace utilisateur](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/150163972/97341173-8a1e-4d8d-a8be-180ae3747dd5)
<br>
User's personnal sapce with the ability to modify all user's information except password.

### Screen 10 / Page 7
![Modifier Profil Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/6b1f6707-5597-4ae3-8007-c2923721fae2)
<br>
Profile edit page, where you'll find your profile picture and a button to change it, your personal information, your pets with their likes and a button to edit a pet's profile, as well as a button to add a pet. The Header simply contains a button for returning to the home page.

### Screen 11 / Page 7
![Modifier2 Profil Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/447eea5a-a34a-4a76-a6bc-d46f8872eb75)
<br>
Profile edit page (part 2)

### Screen 12 / Page 8
![Ajouter Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/1e9a92b8-9e5a-474c-b36e-c661b1e36612)
<br>
Add pet page with basic information.

### Screen 13 / Page 8
![Ajouter2 Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/02c5855f-4120-4ab8-a947-5d9be80f36cd)
<br>
Add pet Page part 2: the default weight is in kg and the age in years, which we believe is the most widely used.

### Screen 14 / Page 9
![Modifier Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/0697670c-433d-4739-9a94-7e5db6aade23)
<br>
Update pet page with the old informations about the animal

### Screen 15 / Page 9
![Modifier2 Animal Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/adc636d7-5bcc-4ebd-aa22-576df24037f2)
<br>
Update pet page part 2

### Screen 16 / Page 10
![Like Elsa](https://github.com/mmicastres/sae401-milhet_elsa_melle_florestan/assets/144545254/dd42e29e-23f5-4820-b8ee-de594aad6107)
<br>
Liked page : you can find all of your liked pets on this page.

### Final Mockups
We used Material UI the Google's design system for Elsa’s model and Ant Design a design system created for data management software. In the end we chose to use Elsa's model, material UI which is much more suitable for our use being more versatile and documentation being more provided Ant Design's which is still partially in Chinese.

### Mobile Mockup Elsa
https://www.figma.com/file/DskeYvLuwb0MeeW0h3MXxW/SAE-401?type=design&node-id=0%3A1&mode=design&t=GaUnqXG7wlMfBKax-1

### Desktop Mockup Elsa
https://www.figma.com/file/8sdNFLWOD7gDr2NZAxJF6i/SA%C3%89-DESKTOP?type=design&node-id=0%3A1&mode=design&t=MEIon05gE5BecWAk-1

### Mobile Mockup Florestan
https://www.figma.com/file/1JnsegMa63EZ1XLVZfmr9E/Maquette-mobile-SAE-401-Florestan-Mell%C3%A9-Cappellin?type=design&node-id=0%3A1&mode=design&t=geJeerFT3DN4FtUd-1

### Desktop Mockup Florestan
https://www.figma.com/file/MH1pjga5mhDMO52xoWEm1R/Maquette-Desktop-SAE-401-Florestan-Mell%C3%A9-Cappellin?type=design&node-id=0%3A1&mode=design&t=khsvmJLyblMZ9MOG-1
