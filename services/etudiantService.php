<?php
include_once './controllers/EtudiantController.php';
include_once './controllers/ResponsableController.php';
include_once './controllers/EtablissementController.php';
include_once './controllers/MaladieController.php';

$etudiant = new EtudiantController;
$responsableObj = new ResponsableController;
$etablissement = new EtablissementController;
$maladieObj = new MaladieController;

// if (!$etudiant->isEtudiantExists($_SESSION['auth_user']['user_id'])) {
//     echo "yes";
// }else
// {
//     echo "no";   
// } 



if (isset($_POST['inscription'])) {
    $annee_academique1 = validateInput($_POST['annee_academique1']);
    $annee_academique2 = validateInput($_POST['annee_academique2']);

    $annee_academique = $annee_academique1 . "-" . $annee_academique2;

    $vacation = validateInput($_POST['vacation']);
    $date_inscription = validateInput($_POST['date_inscription']);
    $filiere = validateInput($_POST['filiere']);
    $nom_postulant = validateInput($_POST['nom_postulant']);
    $prenom_postulant = validateInput($_POST['prenom_postulant']);
    $date_naissance = validateInput($_POST['date_naissance']);
    $lieu_naissance = validateInput($_POST['lieu_naissance']);
    $adresse_actuelle = validateInput($_POST['adresse_actuelle']);
    $telephone_postulant = validateInput($_POST['telephone_postulant']);
    $nom_prenom_pere = validateInput($_POST['nom_prenom_pere']);
    $telephone_pere = validateInput($_POST['telephone_pere']);
    $status_de_vie_pere = validateInput($_POST['status_de_vie_pere']);
    $travail_pere = validateInput($_POST['travail_pere']);
    $nom_prenom_mere = validateInput($_POST['nom_prenom_mere']);
    $telephone_mere = validateInput($_POST['telephone_mere']);
    $status_de_vie_mere = validateInput($_POST['status_de_vie_mere']);
    $travail_mere = validateInput($_POST['status_de_vie_mere']);
    $responsable = validateInput($_POST['responsable']);
    $telephone_responsable = validateInput($_POST['telephone_responsable']);
    $contributeur = validateInput($_POST['contributeur']);
    $telephone_contributeur = validateInput($_POST['telephone_contributeur']);
    $en_cas_urgence = validateInput($_POST['en_cas_urgence']);
    $telephone_en_cas_urgence = validateInput($_POST['telephone_en_cas_urgence']);
    $email_responsable = validateInput($_POST['email_responsable']);
    $etablissement_professionel = validateInput($_POST['etablissement_professionel']);
    $dicipline = validateInput($_POST['dicipline']);
    $observation = validateInput($_POST['observation']);
    $mention = validateInput($_POST['mention']);
    $motif_abandon = validateInput($_POST['motif_abandon']);
    $ecole_classique = validateInput($_POST['ecole_classique']);
    $classe = validateInput($_POST['classe']);
    $moyenne_generale = validateInput($_POST['moyenne_generale']);
    $observation_moyenne = validateInput($_POST['observation_moyenne']);
    $maladie = "";


    isset($_POST['maladie1']) ? $maladie .= validateInput($_POST['maladie1']) . "," : '';
    isset($_POST['maladie2']) ? $maladie .= validateInput($_POST['maladie2']) . "," : '';
    isset($_POST['maladie3']) ? $maladie .= validateInput($_POST['maladie3']) . "," : '';
    isset($_POST['maladie4']) ? $maladie .= validateInput($_POST['maladie4']) . "," : '';
    isset($_POST['autre_maladie']) ? $maladie .= validateInput($_POST['autre_maladie']) . "," : '';

    if ( // info etudiant
        !empty($annee_academique1) and !empty($annee_academique2) and  !empty($vacation) and !empty($date_inscription) and !empty($filiere) and !empty($nom_postulant)
        and !empty($prenom_postulant) and !empty($date_naissance) and !empty($lieu_naissance) and !empty($adresse_actuelle) and !empty($telephone_postulant)

        // info responsable
        and !empty($nom_prenom_pere) and !empty($telephone_pere) and !empty($status_de_vie_pere) and !empty($travail_pere)
        and !empty($nom_prenom_mere) and !empty($telephone_mere) and !empty($status_de_vie_mere) and !empty($travail_mere)
        and !empty($responsable) and !empty($telephone_responsable) and !empty($contributeur) and !empty($telephone_contributeur)
        and !empty($en_cas_urgence) and !empty($telephone_en_cas_urgence) and !empty($email_responsable)

        // info etablissement
        and !empty($etablissement_professionel) and !empty($dicipline) and !empty($observation) and !empty($mention)
        and !empty($motif_abandon) and !empty($ecole_classique) and !empty($classe) and !empty($moyenne_generale)
        and !empty($observation_moyenne)

        // info maladie
        and !empty($maladie)
    ) {
        if (!$etudiant->isEtudiantExists($_SESSION['auth_user']['user_id'])) {

            //insertion info etudiant
            $id_etudiant = $etudiant->enregistrerEtudiant(
                $_SESSION['auth_user']['user_id'],$annee_academique, $vacation, $date_inscription, $filiere, $nom_postulant,
                $prenom_postulant, $date_naissance, $lieu_naissance, $adresse_actuelle,
                $telephone_postulant);

                echo $id_etudiant;

            if ($id_etudiant) {

                // inserton responsable
                $checkInsertResponsable = $responsableObj->enregistrerResponsable(
                     $id_etudiant, $nom_prenom_pere, $telephone_pere, $status_de_vie_pere,
                    $travail_pere, $nom_prenom_mere, $telephone_mere, $status_de_vie_mere,
                    $travail_mere, $responsable, $telephone_responsable, $contributeur,
                    $telephone_contributeur, $en_cas_urgence, $telephone_en_cas_urgence, $email_responsable);

                if ($checkInsertResponsable) {

                    // insertion etablissement
                    $checkInsertEtablissement = $etablissement->enregistrerEtablissement($id_etudiant, $etablissement_professionel, $dicipline, $observation,
                        $mention, $motif_abandon, $ecole_classique, $classe, $moyenne_generale, $observation_moyenne);

                    if ($checkInsertResponsable) {

                        // insertion maladie
                        $checkInsertmaladie = $maladieObj->enregistrerMaladie($id_etudiant, $maladie);

                        if ($checkInsertmaladie) {
                            // redirect("", "inscription.php", "");
                            // echo "ca va";
                        } else {
                            redirect("Quelque chose s'est mal passée", "inscription.php", "error");
                        }
                    } else {
                        redirect("Quelque chose s'est mal passée", "inscription.php", "error");
                    }
                } else {
                    redirect("Quelque chose s'est mal passée", "inscription.php", "error");
                }
            } else {
                redirect("Quelque chose s'est mal passée", "inscription.php", "error");
            }
        }else {
           redirect("not acess", "inscription.php", "error"); 
        }
    } else {
        redirect("Remplissez tous les champs", "inscription.php", "error");
    }

}
