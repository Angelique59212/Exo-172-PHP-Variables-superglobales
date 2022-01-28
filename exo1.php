<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable superglobales</title>
</head>
<body>
    <h1>Informations sur votre serveur</h1>
    <?php
        echo "Votre User Agent est: " . $_SERVER['HTTP_USER_AGENT'] . '<br>';
        echo "Votre nom de serveur est: " . $_SERVER['SERVER_NAME'] . '<br>';
        echo "Votre adresse ip est: " . $_SERVER['REMOTE_ADDR'];
    ?>
</body>
</html>
