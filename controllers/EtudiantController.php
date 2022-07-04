<?php
class EtudiantController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function enregistrerEtudiant(
        $id_utilisateur, $annee_academique, $vacation, $date_inscription, $filiere, $nom_postulant, $prenom_postulant,
        $date_naissance, $lieu_naissance, $adresse_actuelle, $telephone_postulant) {

        $insert_query = "INSERT INTO etudiant(
                id_utilisateur,annee_academique,vacation,date_inscription,filiere,nom_postulant,
                prenom_postulant,date_naissance,lieu_naissance,adresse_actuelle,telephone_postulant
               ) VALUES(?,?,?,?,?,?,?,?,?,?,?)";

        $result = $this->conn->prepare($insert_query);
        $result->execute([
            $id_utilisateur, $annee_academique, $vacation, $date_inscription, $filiere, $nom_postulant,
            $prenom_postulant, $date_naissance, $lieu_naissance, $adresse_actuelle, $telephone_postulant]);

        $count = $result->rowCount();

        if ($count == 0) {
            return false;
        } else {
            return $id_etudiant = $this->selectEtudiant($nom_postulant, $prenom_postulant);
        }
    }

    public function selectEtudiant($nom_postulant, $prenom_postulant)
    {
        $stmt = $this->conn->query("SELECT * FROM etudiant where nom_postulant='$nom_postulant' and prenom_postulant='$prenom_postulant'");
        $data = $stmt->fetchObject();
        return $data->id;
    }

    public function selectEtudiantById()
    {
        $stmt = $this->conn->query("SELECT * FROM etudiant ");
        $data = $stmt->fetchObject();
        return $data; 
    }

    public function isEtudiantExists($id_utilisateur)
    {
        $checkIdUtilisateur = "SELECT * from etudiant where id_utilisateur=? LIMIT 1";
        $result = $this->conn->prepare($checkIdUtilisateur);
        $result->execute([$id_utilisateur]);

        if ($result->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
