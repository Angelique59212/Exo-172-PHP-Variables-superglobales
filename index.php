<?php
session_start();

$_SESSION['name'] = 'Dehainaut';
$_SESSION['firstName'] = 'Angélique';
$_SESSION['age'] = 33; ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables superglobales</title>
</head>
<body>
    <h1>Menu</h1>

    <a href="exo1.php">Exercice numéro 1</a><br>
    <a href="exo2.php"><?= $_SESSION['name'] . " " . $_SESSION['firstName'] . " " . $_SESSION['age'] . "ans"?></a>

    <form action="exo3.php" method="post">
        <label for="user-mail">Login</label>
        <input type="email" id="user-mail" name="user-mail">

        <label for="passwd"></label>
        <input type="password" id="passwd" name="passwd">

        <input type="submit" value="Login" id="login" name="login">
    </form>
</body>
</html>

