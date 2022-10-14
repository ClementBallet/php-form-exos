<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercices sur les formulaires</title>
    <style>
        body {
            line-height: 1.5;
            font-family: sans-serif;
        }

        blockquote {
            background-color: aliceblue;
            padding: 20px 40px;
            max-width: 500px;
        }

        code {
            background-color: #eee;
            border-radius: 3px;
            font-family: courier, monospace;
            padding: 0 3px;
            color: red;
        }
    </style>
</head>
<body>
  <h1>Exercices sur les formulaires</h1>
  <p>Liens :</p>
  <?php
  $host = $_SERVER['HTTP_HOST'];
  ?>
  <li><a href="http://<?= $host ?>/Exos1-et-2/">Exos 1 & 2</a></li>
  <li><a href="http://<?= $host ?>/Exo3/">Exo 3</a></li>
  <li><a href="http://<?= $host ?>/Exo4/">Exo 4</a></li>
  <li><a href="http://<?= $host ?>/Exo5/">Exo 5</a></li>
  <li><a href="http://<?= $host ?>/Exo6/">Exo 6</a></li>

  <blockquote>
      <h2>Tip :</h2>
      <p>Pour attendre la validation du formulaire au clic du bouton submit pour lancer le traitement PHP, ajouter un attribut name au submit, par exemple <code>name="submit"</code> et faire une condition en PHP avant l'execution du script de traitement avec <code>if (isset($_POST['submit'])) { ... }</code></p>
  </blockquote>
</body>
</html>