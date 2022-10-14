<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exos 1 & 2</title>
</head>
<body>
    <form action="<?php $_SERVER['HTTP_HOST']; ?>/Exos1-et-2/traitement.php" method="post">
        <fieldset>
            <legend>Saisissez vos coordonées</legend>
            <table>
                <tr>
                    <td>Nom : </td>
                    <td><input type="text" name="nom" /></td>
                </tr>
                <tr>
                    <td>Prénom : </td>
                    <td> <input type="text" name="prenom" /></td>
                </tr>
                <tr>
                    <td>Adresse : </td>
                    <td><input type="text" name="adresse" /></td>
                </tr>
                <tr>
                    <td>Ville :</td>
                    <td><input type="text" name="ville" /></td>
                </tr>
                <tr>
                    <td>Code postal :</td>
                    <td><input type="text" name="code" maxlength="5"/></td>
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
</body>
</html>