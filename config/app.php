<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'projetecole');
define('OPTION', ["charset" => "UTF-8"]);
define('DNS', "mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE);
define('SITE_URL', 'http://localhost/projetEcole/');



include_once('DatabaseConnection.php');
$db = new DatabaseConnection;

function base_url($slug)
{
    echo SITE_URL . $slug;
}


function redirect($message, $page, $statut)
{
    if ($statut === "error") {

        $redirectTo = SITE_URL . $page;
        $_SESSION['message'] = "$message";
        header("location:$redirectTo");
        exit(0);
    }
    else {
        $redirectTo = SITE_URL . $page;
        $_SESSION['sucess'] = "$message";
        header("location:$redirectTo");
        exit(0);
    }
}


/*Chaque variable $_POST doit être vérifiée par la fonction*/
function validateInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    strip_tags($input);
    return $input;
}

//
function destroySessionRegiter()
{
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    unset($_SESSION['cPass']);
}

//
function destroySessionAdresse()
{
    unset($_SESSION['pays']);
    unset($_SESSION['ville']);
    unset($_SESSION['adresse']);
    unset($_SESSION['code_postal']);
}

// 
function validateMail($mail)
{
    if (filter_var($mail,FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function validatepassword($pass)
{
    if (strlen($pass) < 8) {
        return "Votre mot de passe doit contenir au moins 8 caractères !";
    } elseif (!preg_match("#[0-9]+#", $pass)) {
        return "Votre mot de passe doit contenir au moins un chiffre !";
    } elseif (!preg_match("#[A-Z]+#", $pass)) {
        return "Votre mot de passe doit contenir au moins une lettre majuscule !";
    } elseif (!preg_match("#[a-z]+#",$pass)) {
       return "Votre mot de passe doit contenir au moins une lettre minuscule !";
    } elseif (!preg_match('@[^\w]@', $pass)) {
        return "Votre mot de passe doit contenir au moins un caractère spécial !";
    }
    else {
        return "succes";
    }
}

