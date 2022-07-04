<header>
        <div class="header1 dflex">
            <div class="divLeft">
                <i class="fa-solid fa-school"></i> <span>welcome to CFPTH</span>
            </div>
            <div class="divRight">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-google-plus-g"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>
        <div class="header2 dflex">
            <div class="dflex">
                <i class="fa-solid fa-envelope-circle-check"></i>
                <span>
                    <p>Mail Us</p>
                    <p><a href="">ecoleprofessionnelledehinche@gmail.com</a></p>
                </span>

            </div>

            <div class="dflex">
                <i class="fa-solid fa-graduation-cap"></i>
                <p title="salut">CFPTH</p>
            </div>

            <div class="dflex">
                <i class="fa-solid fa-phone-volume"></i>
                <span>
                    <p>Call Us</p>
                    <p>+50932320033</p>
                </span>
            </div>
        </div>

        <nav class="dflex">
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="">Apropos</a></li>
                <li><a href="">Filière</a></li>
                <li><a href="./inscription.php">Inscription</a></li>
                <li><a href="./professeur.php">Professeurs</a></li>
                <li><a href="./profil.php">Profil</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Personnels</a></li>
                <li><a href="">contact</a></li>
            </ul>

        <div class="connexionDeconnexion">
            <?php
if ($auth->isLoggedIn()) {?>
                <i class="fa-solid fa-user-large-slash"></i><a href="./services/logout.php">&nbsp Deconnexion</a>
                <?php } else {?>
          <i class="fa-solid fa-user-large"></i><a href="signin.php">&nbsp  Connecter</a>
            <?php }?>
            </div>
        </nav>
    </header>
