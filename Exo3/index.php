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
            <legend><b>Saisissez votre e-mail </b></legend>
            <table>
                <tr>
                    <td>mail :</td>
                    <td>
                        <input type="text" name="mail" />
                        <!--  On récupère les infos du navigateur avec $_SERVER['HTTP_USER_AGENT']  -->
                        <input type="hidden" name="navigateur" value="<?= $_SERVER['HTTP_USER_AGENT'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="ENVOI" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php
    if( !empty($_POST['mail']) && !empty($_POST['navigateur']) )
    {
        echo "<table>";
        echo "<caption><b>Votre mail et votre navigateur</b></caption>";

        foreach($_POST as $cle=>$val)
        {
            echo "<tr> <td> $cle : &nbsp;</td> <td>".stripslashes($val)
            ."</td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "<script type=\"text/javascript\">alert('Le formulaire est incomplet');</script>";
    }
    ?>

</body>
</html>
