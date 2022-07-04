<?php
include_once('./config/app.php');
include_once('./services/etudiantService.php');
include_once('./services/authentification.php');
$auth->isLoggedout();

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
</head>

<body>


    <div class="container-xl px-4 mt-4">
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
            <div class="col-xl-20">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><?php include_once('./errors/message.php')   ?></div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6 dflex">
                                    <label class="small mb-1">Année Académique  <span class="text-danger">*</span></label>&nbsp&nbsp   
                                    <input class="anneeAca" type="number" min="1900"
                                        max="2099" step="1" placeholder="2000" name="annee_academique1" />&nbsp&nbsp  
                                    <input class="anneeAca" type="number" min="1900"
                                        max="2099" step="1" placeholder="2000" name="annee_academique2" />

                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Vacation choisie  <span class="text-danger">*</span></label>&nbsp&nbsp  
                                    <label for="">AM : </label>
                                    <input type="radio" name="vacation" value="AM">&nbsp&nbsp  
                                    <label for="">PM : </label>
                                    <input type="radio" name="vacation" value="PM">
                                </div>
                            </div>

                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for=" ">Date d'inscription  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="date" name="date_inscription">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Filière choisie  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="" type="text" name="filiere">
                                </div>
                            </div>

                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Nom du postulant (e)  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="" type="text" name="nom_postulant">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Prénom du postulant (e)  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="" type="text" name="prenom_postulant">
                                </div>
                            </div>

                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Date de naissance  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="date" name="date_naissance">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Lieu de naissance  <span class="text-danger">*</span> </label>
                                    <input class="form-control" id="inputLastName" type="text" name="lieu_naissance">
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for=" ">Adresse actuelle  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="text" name="adresse_actuelle">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Telephone  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputLastName" type="tel" name="telephone_postulant">
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for=" ">Nom et prénom du père  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="text"name="nom_prenom_pere">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Telephone  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputLastName" type="tel" name="telephone_pere">
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Vivant</label>
                                    <input type="radio" name="status_de_vie_pere" value="Vivant">&nbsp&nbsp  
                                    <label class="small mb-1" for="">Décédé</label>
                                    <input type="radio" name="status_de_vie_pere" value="Décédé">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Travail du père <span class="text-danger">*</span></label>
                                    <input class="form-control" id="" type="text" name="travail_pere" >
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Nom et prénom de la mère  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="" type="text"  name="nom_prenom_mere">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Telephone <span class="text-danger">*</span></label>
                                    <input class="form-control" id="" type="tel" name="telephone_mere">
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="">Vivant</label>
                                    <input type="radio" name="status_de_vie_mere" value="Vivant">&nbsp&nbsp  
                                    <label class="small mb-1" for="">Décédé</label>
                                    <input type="radio" name="status_de_vie_mere" value="Décédé">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Travail de la mère  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputLastName" type="text" name="travail_mere">
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for=" ">Avec qui vis-tu ?  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="text" name="responsable">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Télephone  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputLastName" type="tel" name="telephone_responsable">
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for=" ">Qui paie pour vous la contribution
                                        annuelle  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="text" name="contributeur">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Télephone  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputLastName" type="tel" name="telephone_contributeur">
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for=" ">Qui contacter en cas d'urgence et
                                        pour notifier  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="text" name="en_cas_urgence">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Télephone <span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputLastName" type="tel" name="telephone_en_cas_urgence">
                                </div>
                            </div>



                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Email de l'un de vos responsables  <span class="text-danger">*</span></label>
                                <input class="form-control" id="inputUsername" type="email" name="email_responsable">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Dernier Etablissement professionel
                                    fréquenté  <span class="text-danger">*</span></label>
                                <input class="form-control" id="inputUsername" type="text" name="etablissement_professionel">
                            </div>

                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for=" ">Dicipline choisie  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="text" name="dicipline">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Observation  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputLastName" type="tel" name="observation">
                                </div>
                            </div>

                            <!-- Form Row-->
                            <fieldset>
                                <legend>Mention  <span class="text-danger">*</span></legend>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for=" ">Admis (e)</label>
                                        <input type="radio" name="mention" value="Admis"> &nbsp&nbsp  
                                        <label class="small mb-1" for=" ">Maintenu (e)</label>
                                        <input type="radio" name="mention" value="Maintenu">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Motif d'abandon</label>
                                        <input class="form-control" id="inputLastName" type="tel" name="motif_abandon">
                                    </div>
                                </div>
                            </fieldset>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Dernière ecole classique
                                    frequentée  <span class="text-danger">*</span></label>
                                <input class="form-control" id="inputUsername" type="text" name="ecole_classique">
                            </div>

                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-4">
                                    <label class="small mb-1" for=" ">Classe  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="text" name="classe">
                                </div>

                                <div class="col-md-4">
                                    <label class="small mb-1" for=" ">Moyenne Génerale  <span class="text-danger">*</span></label>
                                    <input class="form-control" id=" " type="text" name="moyenne_generale">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-4">
                                    <label class="small mb-1" for="inputLastName">Observation  <span class="text-danger">*</span></label>
                                    <input class="form-control" id="inputLastName" type="tel" name="observation_moyenne">
                                </div>
                            </div>

                            <fieldset>
                                <legend>Es-tu?  <span class="text-danger">*</span></legend>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="">Asmatique</label>
                                        <input type="checkbox" name="maladie1" value="Asmatique"> &nbsp&nbsp  
                                        <label class="small mb-1" for=" ">Epileptique</label>
                                        <input type="checkbox" name="maladie2" value="Epileptique"> &nbsp&nbsp 
                                        <label class="small mb-1" for=" ">Anémique</label> 
                                        <input type="checkbox" name="maladie3" value="Anémique" > &nbsp&nbsp 
                                        <label class="small mb-1" for="">Cardiaque</label>
                                        <input type="checkbox" name="maladie4" value="Cardiaque">
                                    </div>

                                    <!-- Form Group (last name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputLastName">Autre</label>
                                        <input class="form-control" id="inputLastName" type="tel" name="autre_maladie">
                                    </div>
                                </div>
                            </fieldset>


                            <!-- Save changes button-->
                            <button class="btn btn-primary col-md-2" name="inscription" type="submit">Inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>