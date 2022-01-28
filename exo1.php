<?php
$title = "Variables superglobales";
require __DIR__ .'/partials/header.php'?>

    <h1>Informations sur votre serveur</h1>
    <?php
        echo "Votre User Agent est: " . $_SERVER['HTTP_USER_AGENT'] . '<br>';
        echo "Votre nom de serveur est: " . $_SERVER['SERVER_NAME'] . '<br>';
        echo "Votre adresse ip est: " . $_SERVER['REMOTE_ADDR'];
    ?>

<?= require __DIR__ .'/partials/footer.php'?>
