<?php



include '../Controller/produitC.php';

$produitC=new produitC();

$listeproduits=$produitC->afficherproduits(); 



?>

<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>+216 216 000 111</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="index.php">
						<!-- replace logo here -->
					
						<img src="images/photo_logo.png" alt="" width="135" height="135">
						
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-android-cart"></i>Panier</a>
						<div class="dropdown-menu cart-dropdown">
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>1250.00</span>
									</div>
									<h5><strong>$1200</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->

							<div class="cart-summary">
								<span>Total</span>
								<span class="total-price">$1799.00</span>
							</div>
							<ul class="text-center cart-buttons">
								<li><a href="cart.html" class="btn btn-small">Voir panier</a></li>
								<li><a href="checkout.html" class="btn btn-small btn-solid-border">Vérifier</a></li>
							</ul>
						</div>

					</li><!-- / Cart -->

					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i> Search</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					</li><!-- / Search -->

				

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="index.php">Accueil</a>
					</li><!-- / Home -->


					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Magasin<span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Basic -->
								<div class="col-lg-6 col-md-6 mb-sm-3">
									<ul>
										<li class="dropdown-header">Pages</li>
										<li role="separator" class="divider"></li>
										<li><a href="afficherListeproduitfront.php">Shop</a></li>
								
									

									</ul>
								</div>

								<!-- Layout -->
								<div class="col-lg-6 col-md-6 mb-sm-3">
									<ul>
										

									</ul>
								</div>

							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->


					<!-- Pages -->
					<li class="dropdown full-width dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Offres<span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Introduction -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Introduction</li>
										<li role="separator" class="divider"></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
									
									</ul>
								</div>


								<!-- Mega Menu -->
								<div class="col-sm-3 col-xs-12">
									<a href="shop.html">
										<img class="img-responsive" src="images/shop/header-img.jpg" alt="menu image" />
									</a>
								</div>
							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Pages -->



					<!-- Blog -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Contact <span
								class="tf-ion-ios-arrow-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="contact.html">Contactez-nous</a></li>
							<li><a href="about.html">CyberUtopia</a></li>
							
					
						</ul>
					</li><!-- / Blog -->

					<!-- Shop -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Votre Compte<span
								class="tf-ion-ios-arrow-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.html">Se connecter</a></li>
							<li><a href="signin.html">Créer un compte</a></li>
							<li><a href="dashboard.html">Interface utilisateur</a></li>
							<li><a href="order.html">Commandes</a></li>
							<li><a href="profile-details.html">Profil client</a></li>

						</ul>
					</li><!-- / Blog -->
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>



<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">

					<h1 class="page-name">Magasin</h1>

					<ol class="breadcrumb">
						<li><a href="index.php">Accueil</a></li>
						<li class="active">Magasin</li>
			</ol>
				</div>
			</div>
		</div>
	</div>

</section>



<form action="" method="POST" target="_blank" class="newsletter-inner">
                           <div class="row">
						   <div class="col-2">
						   </div>
						   <div class="col-10">
						   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input name="rechercher" placeholder="rechercher" required="" type="rechercher">
								<button type="submit"  name="submit"  class="btn">rechercher</button>
								</div>
								</div>
							</form>
							<br><br><br><br>

							<?php
    if (isset($_POST['submit']))
    {
      $nom_produit=$_POST['rechercher'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit' or nom='$nom_produit'  or code_categ='$nom_produit' ");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }
?>





<?php
    if (isset($_POST['samsung']))
    {
      $nom_produit=$_POST['samsung'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }

	if (isset($_POST['apple']))
    {
      $nom_produit=$_POST['apple'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }

	if (isset($_POST['oppo']))
    {
      $nom_produit=$_POST['oppo'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }

	if (isset($_POST['huawei']))
    {
      $nom_produit=$_POST['huawei'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }

	

	if (isset($_POST['xiaomi']))
    {
      $nom_produit=$_POST['xiaomi'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }

	if (isset($_POST['trie1']))
    {
      $nom_produit=$_POST['trie1'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit order by pu_vente ");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }
	if (isset($_POST['trie2']))
    {
      $nom_produit=$_POST['trie2'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit order by  pu_vente desc ");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }
	if (isset($_POST['trie3']))
    {
      $nom_produit=$_POST['trie3'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit where date >='2021/01/01'  ");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }
	if (isset($_POST['trie4']))
    {
      $nom_produit=$_POST['trie4'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit where date <='2021/01/01'  ");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }
	if (isset($_POST['MSI']))
    {
      $nom_produit=$_POST['MSI'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }
	if (isset($_POST['HP']))
    {
      $nom_produit=$_POST['HP'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }

	if (isset($_POST['ASUS']))
    {
      $nom_produit=$_POST['ASUS'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }
	if (isset($_POST['MAC']))
    {
      $nom_produit=$_POST['MAC'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }

	if (isset($_POST['accessoires pc']))
    {
      $nom_produit=$_POST['accessoires pc'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=kamounn","root","");
    $tree = $bdd->query("SELECT * FROM produit WHERE id_scateg='$nom_produit'");


    
	while($result = $tree->fetch()){
    
		echo'	<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">NOUVEAU</span>
						';$k="images/shop/products/".$result['url_image'];
					echo'	<img class="img-responsive" src= '; echo $k ;echo' alt="product-img" />
						<div class="preview-meta">


						<form method="POST" action="product-singlefront.php">
							<ul>
								<li>

                                
								<input type="submit" name="afficher" class="tf-ion-android-cart" value="Acheter">
						<input type="hidden" value='; echo $result ['id_produit']; echo' name="id_produit">
									
								</li>
								
							</ul>
						</form>



                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.php">'; echo $result ['nom']; echo'</a></h4>
						<p class="price">'; echo $result['pu_vente'] ."DT"; echo'</p>
					</div>
				</div>
			</div>';
	} }
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

      
	

		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
			        				<p class="product-price">$200</p>
			        				<p class="product-short-description">
			        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
			        				</p>
			        				<a href="cart.html" class="btn btn-main">Add To Cart</a>
			        				<a href="product-single.html" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->

				</div>				
			</div>
		
		</div>
	</div>
</section>




<section class="section instagram-feed">
	<div class="container">
		<div class="row">
			<div class="title">
			<br>		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><b<br><br><br><br><b<br><br><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="instagram-slider" id="instafeed" data-accessToken="IGQVJYeUk4YWNIY1h4OWZANeS1wRHZARdjJ5QmdueXN2RFR6NF9iYUtfcGp1NmpxZA3RTbnU1MXpDNVBHTzZAMOFlxcGlkVHBKdjhqSnUybERhNWdQSE5hVmtXT013MEhOQVJJRGJBRURn"></div>
			</div>
		</div>
	</div>
</section>


<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">CONTACTEZ-NOUS</a>
					</li>
					<li>
						<a href="shop.html">MAGASIN</a>
					</li>
					<li>
						<a href="about.html">cyberutopia</a>
					</li>
					<li>
						<a href="faq.html">FAQ</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">MoneyMakers</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
