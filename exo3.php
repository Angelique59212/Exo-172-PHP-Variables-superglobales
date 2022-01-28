<?php
if (isset($_POST['login'])) {
    $email = trim(strip_tags($_POST['user-mail']));
    $password = $_POST['passwd'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse mail non valide";
    }
setcookie('user-mail', $email);
setcookie('passwd', $password);
}
?>
<h1>Votre espace</h1>
