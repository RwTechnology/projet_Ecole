<?php

class RegisterController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function registration($Nom,$Prenom,$Email,$Mot_de_passe,$admin)
    {
        $Mot_de_passe = sha1($Mot_de_passe);

        $insert_query = "INSERT INTO utilisateurs(Nom,Prenom,Email,Mot_de_passe,admin) VALUES(?,?,?,?,?)";

        $result = $this->conn->prepare($insert_query);
        $result->execute([$Nom, $Prenom, $Email, $Mot_de_passe,admin]);
        return  $result;
    }

    public function isUserExists($email)
    {
        $checkUser = "SELECT Email from utilisateurs where Email=? LIMIT 1";
        $result = $this->conn->prepare($checkUser);
        $result->execute([$Email]);

        if ($result->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function confirmPassword($pass, $cPass)
    {
        if ($pass == $cPass) {
            return true;
        } else {
            return false;
        }
    }

    // public function resetPassword($newpass, $email)
    // {
    //     $pass = sha1($newpass);
    //     $query = "UPDATE  users SET password=? WHERE email=? ";
    //     $result = $this->conn->prepare($query);
    //     $result->execute([$pass, $email]);


    //     $count = $result->rowCount();

    //     if ($count == 0) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }
}
