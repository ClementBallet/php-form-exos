# Exercices sur le traitement des formulaires en PHP

## Enoncés

Exercices formulaires en PHP

### Exercice 1

- Créer un formulaire comprenant un groupe de champs ayant pour titre "Adresse client".
- Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du code postal.
- Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un tableau HTML <table>

### Exercice 2

- Améliorer le script précédent en vérifiant l’existence des données et en affichant une boîte d’alerte JavaScript si l’une des données est manquante.

### Exercice 3

- Créer un formulaire contenant :
  - un champ pour saisir une adresse e-mail
  - un champ caché destiné à récupérer le type du navigateur de l’utilisateur (indice : voir $_SERVER)
- Le code PHP affiche l’adresse mail et le nom du navigateur dans la même page après vérification de l’existence des données.

### Exercice 4

- Créer un formulaire demandant la saisie d’un prix HT et d’un taux de TVA.
- Le script PHP affiche le montant de la TVA et le prix TTC dans deux zones de texte sur la même page que le formulaire.
- Le formulaire maintient les données saisies même après validation du formulaire

### Exercice 5

- Créer un formulaire n’effectuant que le transfert de fichiers ZIP et d’une taille limitée à 1 Mo.
- Le script affiche le nom du fichier ainsi que la taille du fichier transféré et un texte confirmant la réception.

### Exercice 6
- Dans la perspective de création d’un site d’agence immobilière, créer un formulaire comprenant trois boutons Submit nommés « Vendre », « Acheter » et « Louer ».
- En fonction du choix effectué par le visiteur, le rediriger vers la page correspondante.
  Exemple : le bouton Vendre doit renvoyer vers la page html pagevente.html
  Indice : voir la fonction header().
