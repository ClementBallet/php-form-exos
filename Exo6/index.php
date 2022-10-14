<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo 6</title>
</head>
<body>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <fieldset>
      <legend>Faites votre choix</legend>
      <table>
        <tr>
          <td>
            <input type="submit" name="choix" value="Vendre">
          </td>
          <td>
            <input type="submit" name="choix" value="Acheter">
          </td>
          <td>
            <input type="submit" name="choix" value="Louer">
          </td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>
</html>

<?php

if (isset($_POST["choix"]))
{
    switch( $_POST["choix"] )
    {
        case "Vendre":
            header("location:pagevente.html");
            break;
        case "Acheter":
            header("location:pageachat.html");
            break;
        case "Louer":
            header("location:pagelocation.html");
            break;
    }
}
