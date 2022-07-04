<?php
include_once('./config/app.php');
include_once('./services/authentification.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">	
	<title>document</title>	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.php">Login</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
							<hr>
							<?php include_once('./errors/message.php')   ?>
							<form method="post" action="">
								<div class="top-margin">
									<label>Nom</label>
									<input type="text" name="nom" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Prenom</label>
									<input type="text" name="prenom" class="form-control" required>
								</div>
								<div class="top-margin">
									<label>Email<span class="text-danger">*</span></label>
									<input type="email" name="email" class="form-control" required>
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Mot de passe<span class="text-danger">*</span></label>
										<input type="password" name="password"class="form-control" required>
									</div>
									<div class="col-sm-6">
										<label>Confirmmer Mot de passe <span class="text-danger">*</span></label>
										<input type="password" name="confPassword" class="form-control" required>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											I've read the <a href="page_terms.html">Terms and Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" name="register" type="submit">Register</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

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
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>