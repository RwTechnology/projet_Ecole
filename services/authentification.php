<?php
include_once('./controllers/RegisterController.php');
include_once('./controllers/LoginController.php');

$auth = new LoginController;

if (isset($_POST['login'])) {
  
    $email = validateInput($_POST['email']);
    $password = validateInput($_POST['password']);

    if (!empty($email) and !empty($password)) {
        $checkLogin = $auth->userLogin($email,$password);

        echo $password;

        if ($checkLogin) {
            redirect("", "index.php","error");
        } else {
            redirect("Email ou mot de passe invalide", "signin.php","error");
        }
    } else {
        redirect("Remplissez tous les champs", "signin.php","error");
    }
}


if (isset($_POST['register'])) {
    $nom = validateInput($_POST['nom']);
    $prenom = validateInput($_POST['prenom']);
    $email = validateInput($_POST['email']);
    $password = validateInput($_POST['password']);
    $confPassword = validateInput($_POST['confPassword']);

    $register = new RegisterController;
    if (!empty($nom) and !empty($prenom) and !empty($email) and !empty($password) and !empty($confPassword)) {
        if (validateMail($email)) {
            $checkpassword = validatepassword($password);
            if ($checkpassword === "succes") {
                $result_password = $register->confirmPassword($password, $password);

                if ($result_password) {
                    $result_user = $register->isUserExists($email);
                    if ($result_user) {
                        redirect("L'e-mail existe déjà", "signup.php","error");
                    } else {
                        $register_query = $register->registration($nom, $prenom,$email,$password,0);
                        if ($register_query) {
                            destroySessionRegiter();
                            redirect("", "signin.php","error");
                        } else {
                            redirect("Quelque chose s'est mal pass", "signup.php","error");
                        }
                    }
                } else {
                    redirect("Le mot de passe et la confirmation du mot de passe ne correspondent pas", "signup.php","error");
                }
            } else {
                redirect($checkpassword, "signup.php","error");
            }
        } else {
            redirect("Email incorect", "signup.php","error");
        }
    } else {
        redirect("Remplissez tous les champs", "signup.php","error");
    }
}
