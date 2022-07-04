<?php
include_once './config/app.php';
include_once './controllers/EtudiantController.php';
include_once './controllers/ResponsableController.php';
include_once './controllers/EtablissementController.php';
include_once './controllers/MaladieController.php';
$etudiant = new EtudiantController;
$responsableObj = new ResponsableController;
$etablissement = new EtablissementController;
$maladieObj = new MaladieController;
$dataEtudiant = $etudiant->selectEtudiantById();
$dataResponsable = $responsableObj->selectResponsableById();
$dataEtablissement= $etablissement->selectEtablissementById();
$dataMaladie= $maladieObj->selectMaladieById();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/profil.css">
    <link rel="stylesheet" href="./assets/css/pagesInscription.css">
</head>

<body >

    <div class="container-xl px-4 mt-4 profil_card">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0"
                href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details"
                target="__blank">Profile</a>
            <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page"
                target="__blank">Billing</a>
            <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page"
                target="__blank">Security</a>
            <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"
                target="__blank">Notifications</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                            src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">

                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nom</label>
                                    <input class="form-control" id="inputFirstName" type="text"
                                        placeholder="Enter your first name" value="Ralotchin" disabled>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Prenom</label>
                                    <input class="form-control" id="inputLastName" type="text"
                                        placeholder="Enter your last name" value="Wykens" disabled>
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <fieldset>
                                <legend>Action</legend>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-4">
                                <button class="btn btn-primary col-md-9">info +</button>
                                </div>

                                <div class="col-md-4">
                                <button class="btn btn-primary col-md-9">Modifier</button>
                                </div>

                                <div class="col-md-4">
                                <button class="btn btn-primary col-md-9 imprimer">Imprimer</button>
                                </div>

                            </div>
                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
     </div>   <!-- Fin profil -->

    <div class="impression_card">
    <header>
        <h2>Centre de Formation Professionnelle et Technique de Hinche</h2>
        <h3>(Ci-devant : EPH)</h3>
        <h3>Route Nationale #3, Rentrée de la Bègue/ Bloc citron Sapaterre-Hinche</h3>
        <h3>E-mail : <span>ecoleprofessionnelledehinche@gmail.com</span></h3>
        <h3>Phones : (509) 4015-4733/3232-0033/3274-8833/3274-8849</h3>
    </header>
    <section class="container">
        <div class="entete">
            <h1>FORMULAIRE D'INSCRIPTION</h1>
            <h2>Année Académique : <span><?=$dataEtudiant->annee_academique?></span>
        </div>
        <div class="vacation dflex">
            <h2>Vacation choisie : <span><?=$dataEtudiant->vacation?></span></h2>
            <div class="photo">Photo</div>
        </div>
        <section class="champsContainer">
            <div class="champs dflex">
                <p>Date d'inscription : <span><?=$dataEtudiant->date_inscription?></span></p>
                <p>Filière choisie : <span><?=$dataEtudiant->filiere?></span></p>
            </div>
            <div class="champs dflex">
                <p>Nom du postulant (e) : <span><?=$dataEtudiant->nom_postulant?></span></p>
                <p>Prénom du postulant (e) : <span><?=$dataEtudiant->prenom_postulant?></span></p>
            </div>
            <div class="champs dflex">
                <p>Date de naissance : <span><?=$dataEtudiant->date_naissance?></span></p>
                <p>Lieu de naissance : <span><?=$dataEtudiant->lieu_naissance?></span></p>
            </div>
            <div class="champs dflex">
                <p>Adresse actuelle : <span><?=$dataEtudiant->adresse_actuelle?></span></p>
                <p>Telephone : <span><?=$dataEtudiant->telephone_postulant?></span></p>
            </div>
            <div class="champs dflex">
                <p>Nom et prénom du père : <span><?=$dataResponsable->nom_prenom_pere?></span></p>
                <p>Telephone : <span><?=$dataResponsable->telephone_pere?></span></p>
            </div>
            <div class="champs dflex">
                <p>Statut : <span><?=$dataResponsable->status_de_vie_pere?></span></p>
                <p>Travail du père : <span><?=$dataResponsable->travail_pere?></span></p>
            </div>
            <div class="champs dflex">
                <p>Nom et prénom du mère : <span><?=$dataResponsable->nom_prenom_mere?></span></p>
                <p>Telephone : <span><?=$dataResponsable->telephone_mere?></span></p>
            </div>
            <div class="champs dflex">
            <p>Statut : <span><?=$dataResponsable->status_de_vie_mere?></span></p>
            <p>Travail du mère : <span><?=$dataResponsable->travail_mere?></span></p>
            </div>
            <div class="champs dflex"> 
                <p>Avec qui vis-tu ? : <span><?=$dataResponsable->responsable?></span></p>
                <p>Telephone : <span><?=$dataResponsable->telephone_responsable?></span></p>  
            </div>
            <div class="champs dflex">
                <p>Qui paie pour vous la contribution annuelle : <span><?=$dataResponsable->contributeur?></span></p> 
                <p>Telephone : <span><?=$dataResponsable->telephone_contributeur?></span></p>
            </div>
            <div class="champs dflex">
                <p>Qui contacter en cas d'urgence et pour notifier : <span><?=$dataResponsable->en_cas_urgence?></span></p>  
                <p>Telephone : <span><?=$dataResponsable->telephone_en_cas_urgence?></span></p>
            </div>
            <div class="champs dflex">
                <p>Email de l'un de vos responsables : <span><?=$dataResponsable->email_responsable?></span></p>
            </div>
            <div class="champs dflex">
                <p>Dernier Etablissement professionel fréquenté : <span><?=$dataEtablissement->etablissement_professionel?></span></p> 
            </div>
            <div class="champs dflex">
                <p>Dicipline choisie : <span><?=$dataEtablissement->dicipline?></span></p>
                <p>Observation : : <span><?=$dataEtablissement->observation?></span></p>
            </div>
            <div class="champs dflex">
                <p>Mention : <span><?=$dataEtablissement->mention?></span></p>
            </div>
            <div class="champs dflex">
                <p> Dernière ecole classique frequentée : <span><?=$dataEtablissement->ecole_classique?></span></p>
            </div>
            <div class="champs dflex">
                <p> Classe : <span><?=$dataEtablissement->classe?></span></p>
                <p> Moyenne Génerale : <span><?=$dataEtablissement->moyenne_generale?></span></p>
                <p> Observation : <span><?=$dataEtablissement->observation_moyenne?></span></p>
            </div>
            <div class="champs dflex">
                <p> maladie ? </p>
                <p><span><?=$dataEtablissement->observation_moyenne?></p>
            </div>
        </section>
    </section>
    <div class="footer dflex">
        <div>
            <div class="bar"></div>
            <p>Signature du postulant</p>
        </div>

        <div>
            <div class="bar"></div>
            <p>Visa de l'Adm</p>
        </div>
        <div>
            <div class="bar"></div>
            <p>Signature de la personne autorisée</p>
        </div>
    </div>
    </div>
    <script src="./assets/js/impression.js"></script>
</body>

</html>
