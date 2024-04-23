<?php
session_start();

if(isset($_SESSION["id_user"])) {
}else{
  session_destroy();
	header('Location: signin.php');

    
}
?>
<?php
	include_once 'C:\xampp\htdocs\louled\Controller\ReclamationC.php';
	$ReclamationC=new ReclamationC();
	$listeRec=$ReclamationC->afficherReclamation(); 
    include_once 'C:\xampp\htdocs\louled\Controller\PubliciteC.php';
    $PubliciteC=new PubliciteC();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>TUNI-TROC</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/img3.png" type="image/img3.png">
    <link rel="apple-touch-icon" href="images/img3.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
 
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/img3.png" class="logo" alt=""height="76" width="76"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profil</a></li>
                        <li class="nav-item "><a class="nav-link" href="bepartner.php">be a partner</a></li>
                        <li class="dropdown active">
                            <a href="afficheravis.php" class="nav-link dropdown-toggle arrow " data-toggle="dropdown">avis et reclamation</a>
                            <ul class="dropdown-menu">
								<li><a href="afficheravis.php">show avis</a></li>
								<li><a href="ajouteravis.php">add  avis</a></li>
                                <li><a href="afficherreclamation.php">show reclamation</a></li>
                                <li><a href="ajouterreclamation.php">add reclamation</a></li>
                            
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="affichersponsor.php">Sponsor</a></li>
                        <li class="nav-item"><a class="nav-link" href="afficherposte.php">Forum</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

 
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <?php 
                          if(isset($_SESSION['id_user'])){
                             ?>

                        <li class=""><a href="logout.php">
						
							<p>LOG OUT</p>
					</a></li>
                 
                    <?php 
                    }else
                    {
                    ?>
                  
                    <li class=""><a href="signin.php">
						
                        <p>SIGN IN</p>
                </a></li>
                <li class=""><a href="signup.php">
						
                        <p>SIGN UP</p>
                </a></li>
                <?php 
                   }
    
                       
                     ?>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
          
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-5">
                                  
                                </div>
                                <div class="col-md-4">
                                <h1 class="center">afficher reclamation</h1>
                                </div>
                                <div class="col-md-4">
                                  
                                  </div>
                                  </div>
    <!-- End Top Search -->	
    <div class="row">		 
    <?php
				foreach($listeRec as $RECLAMATION){
			?>
             <div class="col-md-3 col-lg-3 col-xl-3">
             <div class="blog-content">
                <?php 
                   
   
                   
                    $pub=$PubliciteC->afficherrandpub(); 
                ?>
                            <div class="title-blog">
                               <h3><?php echo $pub['nom_publicite']; ?></h3>
                                <p><?php echo $pub['date_publicite']; ?></p>
                                 <p> <?php echo $pub['prix']; ?></p>
                                <div class="blog-img">
                            <img class="img-fluid"  src="images/<?php echo $pub['photo']; ?>" alt="" />
                        </div>
                                 </div>
                            <ul class="option-blog">
                          
              
                            </ul>
                        </div>
             </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="contact-info-left">
                        <h2><?php echo $RECLAMATION['id_reclamation']; ?></h2>
                        <p><?php echo $RECLAMATION['message']; ?> </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i><?php echo $RECLAMATION['nom_perso']; ?> </p>
                            </li>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i><?php echo $RECLAMATION['prenom_perso']; ?> </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href=""><?php echo $RECLAMATION['num_tel']; ?></a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href=""><?php echo $RECLAMATION['email']; ?></a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i><?php echo $RECLAMATION['daterec']; ?> </p>
                            </li>
                        </ul>
                    </div>
                    <br>
             <br>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="blog-content">
                <?php 
                   
   
                   
                    $pub=$PubliciteC->afficherrandpub(); 
                ?>
                            <div class="title-blog">
                               <h3><?php echo $pub['nom_publicite']; ?></h3>
                                <p><?php echo $pub['date_publicite']; ?></p>
                                 <p> <?php echo $pub['prix']; ?></p>
                                <div class="blog-img">
                            <img class="img-fluid"  src="images/<?php echo $pub['photo']; ?>" alt="" />
                        </div>
                                 </div>
                            <ul class="option-blog">
                          
              
                            </ul>
                        </div>
             </div>
          
                <?php
				}
			?>
	</div>
		<footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Freshshop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">Qui sommes-nous</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>CONTACTEZ-NOUS</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>