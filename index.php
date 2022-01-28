<?php
session_start();

$_SESSION['name'] = 'Dehainaut';
$_SESSION['firstName'] = 'Angélique';
$_SESSION['age'] = 33;

$title = "Menu";
require __DIR__ .'/partials/header.php'?>



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

    <a href="exo4.php">Informations cookie</a><br>
    <a href="exo5.php">Modification de contenu</a>

<?= require __DIR__ .'/partials/footer.php'?>
