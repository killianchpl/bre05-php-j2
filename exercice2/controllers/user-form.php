<?php

$email = $_POST['email'];
$password = $_POST['password'];

// Exercice 1
echo "Email : $email | Mot de passe : $password";

echo "<br>";

// Exercice 2
$passwordConfirm = $_POST['password_confirm'];

if ($password === $passwordConfirm) {
    echo "Vérification des mots de passe : OK";
} else {
    echo "Vérification des mots de passe : NOK";
}

echo "<br>";

if (isset($_POST['newsletter'])) {
    echo "Email : $email | Mot de passe : $password | Newsletter : Oui";
} else {
    echo "Email : $email | Mot de passe : $password | Newsletter : Non";
}

?>