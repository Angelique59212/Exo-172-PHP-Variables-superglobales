<?php
session_start(); ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo2</title>
</head>
<body>
    <h1>Contenu de variable sessions</h1>
    <?php
    if (isset($_SESSION['name']) && ($_SESSION['firstName']) && ($_SESSION['age'])) {
        echo $_SESSION['name'] . "<br>" . $_SESSION['firstName'] . "<br>" . $_SESSION['age'] . " ans";
    }
    ?>

</body>
</html>



