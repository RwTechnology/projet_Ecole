<?php
class MaladieController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function enregistrerMaladie($id_etudiant,$maladie) {

        $insert_query = "INSERT INTO maladie(id_etudiant,maladie)
        VALUES(?,?)";

        $result = $this->conn->prepare($insert_query);
        $result->execute([$id_etudiant, $maladie]);

        $count = $result->rowCount();

        if ($count == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function selectMaladieById()
    {
        $stmt = $this->conn->query("SELECT * FROM maladie");
        $data = $stmt->fetchObject();
        return $data;

    }

}
