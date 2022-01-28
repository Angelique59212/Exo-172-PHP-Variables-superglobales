<?php
session_start();

$title = "Exo2";
require __DIR__ .'/partials/header.php'?>

    <h1>Contenu de variable sessions</h1>
    <?php
    if (isset($_SESSION['name']) && ($_SESSION['firstName']) && ($_SESSION['age'])) {
        echo $_SESSION['name'] . "<br>" . $_SESSION['firstName'] . "<br>" . $_SESSION['age'] . " ans";
    }
    ?>

<?= require __DIR__ .'/partials/footer.php'?>



