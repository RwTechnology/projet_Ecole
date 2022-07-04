<?php
include_once('./config/app.php');
include_once('./services/authentification.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>CFPTH</title>
</head>

<body>
   <?php  include_once('./includes/header.php')  ?>
    <section class="banner dflex">
        <div>
            <h1>Bienvenue à CFPTH</h1>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>
                libero quis, nisi beatae fuga laborum ex at neque corrupti officiis!
            </p>
        </div>
        <div class="btn">
            <button>Lire Plus</button>
            <button>Commencer maintenant</button>
        </div>
    </section>

    <section class="apropos dflex">
        <div class="image-apropos">
            <img src="./assets/images/pexels-kampus-production-5940838.jpg" alt="">
        </div>
        <div class="text">
            <h1>A Propos</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae odit ut error ab eius officiis rem sunt,
                velit suscipit nesciunt atque. Numquam debitis culpa corrupti corporis? Similique quas laudantium maxime
                omnis tenetur asperiores
                ad, sapiente nihil nisi, voluptatibus quae, corporis consequatur? Ullam mollitia ut earum at ipsa
                consequuntur dicta harum illo ea vel deleniti quis, eius facilis ex totam deserunt veniam! Qui delectus
                obcaecati sint illo assumenda
                modi voluptates odit quidem numquam ullam repellat necessitatibus facilis aperiam voluptatum consectetur
                expedita earum id repudiandae possimus enim adipisci ipsa, quisquam amet. Unde ex obcaecati sint
                molestias nulla impedit ipsum
                eum, voluptatem quas!</p>
        </div>
    </section>

    <section class="subject">
        <div class="title">
            <h2>SUBJECT</h2>
            <h1>EXPLORE TOP SUBJECT</h1>
        </div>
        <div class="subject-option dflex">
            <div>
                <img src="./assets/images/informatique.jpg" alt="">
                <div class="option">
                    <p>Informatique</p>
                    <p>100 cours</p>
                </div>
            </div>
            <div>
                <img src="./assets/images/carrelage.jpg" alt="">
                <div class="option">
                    <p>Informatique</p>
                    <p>100 cours</p>
                </div>
            </div>
            <div>
                <img src="./assets/images/construction.jpg" alt="">
                <div class="option">
                    <p>Informatique</p>
                    <p>100 cours</p>
                </div>
            </div>
            <div>
                <img src="./assets/images/plomberie.jpg" alt="">
                <div class="option">
                    <p>Informatique</p>
                    <p>100 cours</p>
                </div>
            </div>
        </div>
        <div class="subject-option dflex">
            <div>
                <img src="./assets/images/infoematique2.jpg" alt="">
                <div class="option">
                    <p>Informatique</p>
                    <p>100 cours</p>
                </div>
            </div>
            <div>
                <img src="./assets/images/electricite.jpg" alt="">
                <div class="option">
                    <p>Informatique</p>
                    <p>100 cours</p>
                </div>
            </div>
            <div>
                <img src="./assets/images/aaa.jpg" alt="">
                <div class="option">
                    <p>Informatique</p>
                    <p>100 cours</p>
                </div>
            </div>
            <div>
                <img src="./assets/images/bbb.jpg" alt="">
                <div class="option">
                    <p>Informatique</p>
                    <p>100 cours</p>
                </div>
            </div>
        </div>
    </section>

    <section class="teacher">
        <h1>Meet our teachers</h1>
        <div class="teacherItems dflex">
            <div class="card">
                <div><img src="./assets/images/professeur/prof1.jpg" alt=""></div>
                <div class="text">
                    <p>Jhon Doe</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/images/professeur/prof3.jpg" alt=""></div>
                <div class="text">
                    <p>Jhon Doe</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/images/professeur/prof2.jpg" alt=""></div>
                <div class="text">
                    <p>Jhon Doe</p>
                </div>
            </div>
            <div class="card">
                <div><img src="./assets/images/professeur/prof4.jpg" alt=""></div>
                <div class="text">
                    <p>Jhon Doe</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="dflex">
        <div>
            <h3>GET IN TOUCH</h3>
            <p><i class="fa-solid fa-location-dot"></i> <span>13 Street, New York, USA</span></p>
            <p><i class="fa-solid fa-phone"></i> <span>+50944069411</span></p>
            <p><i class="fa-solid fa-envelope"></i></i> <span>+50944069411</span></p>
            <p class="socialIcons">
                <span><i class="fa-brands fa-twitter"></i></span>
                <span> <i class="fa-brands fa-facebook-f"></i></span>
                <span><i class="fa-brands fa-linkedin-in"></i></span>
                <span><i class="fa-brands fa-instagram"></i></span>
            </p>
        </div>
        <div>
            <h3>OUR COURSES</h3>
            <ul>
                <li><span><i class="fa-solid fa-chevron-right"></i></span> Web Design</li>
                <li><span><i class="fa-solid fa-chevron-right"></i></span> App Design</li>
                <li><span><i class="fa-solid fa-chevron-right"></i></span> Marketing</li>
                <li><span><i class="fa-solid fa-chevron-right"></i></span> Research</li>
                <li><span><i class="fa-solid fa-chevron-right"></i></span> SEO</li>
            </ul>
        </div>
        <div>
            <h3>NEWSLETTER</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Hic unde esse ipsam, fugiat nemo voluptatem et cupiditate
                quia consectetur corporis soluta inventore quos nam, maiores
                totam ab officiis illo adipisci.  
            </p>
             <div class="btn dflex">
                <input type="text" placeholder="Your Email Address">
                <input type="submit" value="Sign Up">
             </div>   
        </div>
    </footer>

</body>

</html>