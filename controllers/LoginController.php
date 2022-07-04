<?php
class LoginController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function userLogin($email,$password)
    {
        $password = sha1($password);
        $checkLogin = "SELECT * from utilisateurs where email=? and Mot_de_passe=? LIMIT 1";
        $result = $this->conn->prepare($checkLogin);
        $result->execute([$email, $password]);
        if ($result->rowCount() > 0) {
            $data = $result->fetchObject();
            $this->userAuthentification($data);
            return true;
        } else {
            return false;
        }
    }

    public function userAuthentification($data)
    {
        $_SESSION['authentificated'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $data->id,
            'Nom' => $data->Nom,
            'Prenom' => $data->Prenom,
            'Email' => $data->Email,
            'Mot_de_passe' => $data->Mot_de_passe,
            'admin' => $data->admin
        ];
    }

    public function isLoggedIn()
    {
        if (isset($_SESSION['authentificated']) == true) {
            return true;
            redirect("", "index.php","succes");
        } else {
            return false;
        }
    }

    public function isLoggedout()
    {
        if (isset($_SESSION['authentificated']) == false) {
            redirect("Vous n'êtes pas connecté ", "signin.php","error");
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        if (isset($_SESSION['authentificated']) === true) {
            unset($_SESSION['authentificated']);
            unset($_SESSION['auth_user']);
            return true;
        } else {
            return false;
        }
    }
}
