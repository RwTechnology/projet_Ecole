<?php
class ResponsableController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function enregistrerResponsable($id_etudiant, $nom_prenom_pere, $telephone_pere, $status_de_vie_pere,
        $travail_pere, $nom_prenom_mere, $telephone_mere, $status_de_vie_mere, $travail_mere, $responsable,
        $telephone_responsable, $contributeur, $telephone_contributeur, $en_cas_urgence, $telephone_en_cas_urgence, $email_responsable
    ) {

        $insert_query = "INSERT INTO responsable(id_etudiant,nom_prenom_pere,telephone_pere,status_de_vie_pere,travail_pere,
        nom_prenom_mere,telephone_mere,status_de_vie_mere,travail_mere,responsable,telephone_responsable,
        contributeur,telephone_contributeur,en_cas_urgence,telephone_en_cas_urgence,email_responsable)
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $result = $this->conn->prepare($insert_query);
        $result->execute([
            $id_etudiant, $nom_prenom_pere, $telephone_pere, $status_de_vie_pere,
            $travail_pere, $nom_prenom_mere, $telephone_mere, $status_de_vie_mere, $travail_mere, $responsable,
            $telephone_responsable, $contributeur, $telephone_contributeur, $en_cas_urgence, $telephone_en_cas_urgence, $email_responsable]);

        $count = $result->rowCount();

        if ($count == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function selectResponsableById()
    {
        $stmt = $this->conn->query("SELECT * FROM responsable");
        $data = $stmt->fetchObject();
        return $data;

    }
}
