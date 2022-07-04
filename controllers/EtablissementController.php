<?php
class EtablissementController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function enregistrerEtablissement($id_etudiant, $etablissement_professionel, $dicipline, $observation,
        $mention, $motif_abandon, $ecole_classique, $classe, $moyenne_generale, $observation_moyenne
    ) {

        $insert_query = "INSERT INTO etablissement(id_etudiant,etablissement_professionel,dicipline,observation,
        mention,motif_abandon,ecole_classique,classe,moyenne_generale,observation_moyenne)
        VALUES(?,?,?,?,?,?,?,?,?,?)";

        $result = $this->conn->prepare($insert_query);
        $result->execute([
            $id_etudiant, $etablissement_professionel, $dicipline, $observation,
            $mention, $motif_abandon, $ecole_classique, $classe, $moyenne_generale, $observation_moyenne]);

        $count = $result->rowCount();

        if ($count == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function selectEtablissementById()
    {
        $stmt = $this->conn->query("SELECT * FROM etablissement");
        $data = $stmt->fetchObject();
        return $data;

    }

}
