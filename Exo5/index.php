<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 5</title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Transférez un fichier ZIP</legend>
        <table>
            <tr>
                <td>Choisissez un fichier </td>
                <td>
                    <input type="file" name="fichier">
                </td>
                <td>
                    <input type="hidden" name="MAX_FILE_SIZE" accept="application/zip" value="1000000">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="ENVOI">
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
<?php

if(isset($_FILES['fichier']))
{
    // Décommenter la ligne suivante pour voir le contenu de la variable qui récupère le fichier
    // var_dump($_FILES["fichier"]);

    if($_POST["MAX_FILE_SIZE"] < $_FILES["fichier"]["size"])
    {
        echo "Taille trop grande<hr>";
        echo "Taille maximale autorisée :", $_POST["MAX_FILE_SIZE"]," octets<hr>";
        echo "Taille du fichier transféré :", $_FILES["fichier"]["size"]," octets<hr>";
    }
    else
    {
        //Enregistrement vers la destination voulue et renommage du fichier
        $result = move_uploaded_file($_FILES["fichier"]["tmp_name"], "C:\\Users\\c.ballet\\Documents\\" . $_FILES['fichier']['name']);

        if($result)
        {
            echo "Vous avez bien transféré le fichier<hr>";
            echo "Le nom du fichier est : ",$_FILES["fichier"]["name"],"<hr>";
            echo "Votre fichier a une taille de ", $_FILES["fichier"]["size"]," octets<hr>";
        }
        else
        {
            echo "<hr> Erreur de transfert n°", $_FILES["fichier"]["error"];
        }
    }
}
