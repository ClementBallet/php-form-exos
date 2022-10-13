<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 4</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset>
      <legend>Saisissez le prix HT et le taux de TVA</legend>
      <table>
        <tr>
          <td>Prix Hors Taxes : </td>
          <td>
              <input type="text" name="prixht" value="<?php if(isset($_POST['prixht'])) echo $_POST['prixht'];?>" />
          </td>
        </tr>
        <tr>
          <td>Taux de TVA (en %) : </td>
          <td>
              <input type="text" name="tva" value="<?php if(isset($_POST['tva'])) echo $_POST['tva'];?>"/>
          </td>
        </tr>
        <?php
        if( !empty($_POST['prixht']) AND !empty($_POST['tva']) )
        {
            // Formule : PRIXHT x TVA% (Ex: 100 x 0.20)
            $calculMontantTVA = round($_POST['prixht'] * $_POST['tva'] / 100,2);
            // Formule : PRIXHT x (1 + TVA%) (Ex: 100 x 1.20)
            $calculPrixTTC = round($_POST['prixht'] * (1 + $_POST['tva'] / 100),2);

            echo "<tr><td>Montant de la TVA :</td><td><input type=\"text\" value=\"" . $calculMontantTVA . "\"/></td></tr>";
            echo "<tr><td>Prix TTC :</td><td><input type=\"text\" value=\"" . $calculPrixTTC . "\"/></td></tr>";
        }
        else
        {
            echo "Le formulaire est incomplet!";
        }
        ?>
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