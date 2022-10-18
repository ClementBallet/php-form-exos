<?php

if( !empty($_POST['nom']) &&
    !empty($_POST['prenom']) &&
    !empty($_POST['adresse']) &&
    !empty($_POST['ville']) &&
    !empty($_POST['code'])
) {
    // Juste pour le style ^^
    echo "<style>
        table {
            border-collapse: collapse;
        }
        table, td {
            border: 1px solid black;
        }
      </style>";
    echo "<table>";
    echo "<caption><b>Confirmation de vos coordonnées</b></caption>";

    // Décommentter la ligne suivante pour voir le contenu de $_POST
    //var_dump($_POST);

    // On parcourt le tableau renvoyé par $_POST et on récupère à chaque fois le binome clé/valeur
    foreach($_POST as $cle => $valeur)
    {
        echo "<tr> <td> $cle :</td> <td>" . stripslashes($valeur) . "</td></tr>";
    }

    echo "</table>";
} else {
    // Si les conditions ne sont pas remplies, on affiche en JS la popup alert() et on renvoie vers la page précédente qui contient le formulaire
    echo "<script type='text/javascript'>alert('Le formulaire est incomplet'); document.location=window.history.back()  </script>";
}
