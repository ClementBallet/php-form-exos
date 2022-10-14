<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 3</title>
    <style>
        body > table {
            border-collapse: collapse;
        }
        body > table, body > table td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<!--  On fait le traitement sur la même page donc on récupère la page courante avec $_SERVER['PHP_SELF']  -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>Saisissez votre e-mail</legend>
            <table>
                <tr>
                    <td>mail :</td>
                    <td>
                        <input type="text" name="mail">
                        <!--  On récupère les infos du navigateur avec $_SERVER['HTTP_USER_AGENT']  -->
                        <input type="hidden" name="navigateur" value="<?= $_SERVER['HTTP_USER_AGENT'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="ENVOI" name="submit">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php
    // Condition pour lancer le traitement PHP au clic du submit
    if ( isset($_POST['submit']) )
    {
        if( !empty($_POST['mail']) && !empty($_POST['navigateur']) )
        {
            echo "<table>";
            echo "<caption>Votre mail et votre navigateur</caption>";

            // Décommenter la ligne suivante pour voir le contenu de $_POST
            // var_dump($_POST);

            foreach($_POST as $cle => $val)
            {
                // Condition pour ne pas afficher la valeur du submit dans mon tableau
                if ($val == 'ENVOI') {
                    exit();
                }

                echo "<tr><td> $cle :</td><td>" . stripslashes($val) . "</td></tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "<script type=\"text/javascript\">alert('Le formulaire est incomplet');</script>";
        }
    }
    ?>

</body>
</html>
