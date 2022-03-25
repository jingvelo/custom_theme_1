<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Fitness HTML Template">
	<meta name="author" content="CodeGlamour">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Edify - Home 2 Multipurpose bootstrap 4 Html Template</title>
	<!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
  <?php
    wp_head();
    ?>

</head>
<body>
	<!-- Preloader -->
	<div id="preloader">
	  <div class="ozient-folding-cube">
		  <div class="ozient-cube1 ozient-cube"></div>
		  <div class="ozient-cube2 ozient-cube"></div>
		  <div class="ozient-cube4 ozient-cube"></div>
		  <div class="ozient-cube3 ozient-cube"></div>
		</div>
	</div>
	<!-- *****Main Wrapper***** -->
	<div id="home" class="main-wrapper">
		<!-- SUB NAVBAR -->
		<div class="top_navbar d-none d-lg-block">
			<nav class="navbar">
		        <div class="container">
		          <span class="color-yellow d-none d-lg-block fa fa-map-marker"> <a class="text-white" href="">&nbsp;101, Avenue, New York, NY 10018 US.</a></span> 
		&emsp;&emsp; <span class="color-yellow d-none d-lg-block fa fa-clock"><a class="text-white" href="">&nbsp; 212 396 5575,212 524 458</a></span>
		              <span class="color-yellow d-none d-lg-block fa fa-clock ml-auto"><a class="text-white" href="">&nbsp;&nbsp;Mon-Sat, 8.00-18.00. Sunday CLOSED</a></span>
		          </div>
		    </nav>
		</div>
		
		<header class="main-header">
			<div class="main_navbar">	
			<!-- MAIN NAVBAR -->
						<nav class="navbar navbar-expand-lg navbar-dark">
					<div class="container">
					  <a class="navbar-brand logo-sticky" href="<?php echo site_url('/') ?>"><img class="img-fluid" src="<?php echo get_theme_file_uri('/images/bg-img/logo.png') ?>" alt="Edify" /></a>
					  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse" id="navbarNav">
						<?php

								$args = array(
										'theme_location'  => 'primary',
										'container_class' => '',
										'add_li_class'		=> 'nav-item',
										'menu_class'      => 'navbar-nav mr-auto',
                       

								);
								wp_nav_menu($args);
						
						?>
						
						<!-- <ul class="navbar-nav mr-auto">
							 <li class="nav-item">
									<a href="/" class="nav-link">Home</a>
								  </li>
								  <li class="nav-item">
									<a href="about.html" class="nav-link">About</a>
								  </li>
								  <li class="nav-item">
									<a href="services.html" class="nav-link">Services</a>
								  </li>
								   <li class="nav-item">
									<a href="blog_page.html" class="nav-link">Blog</a>
								  </li>
								  
								  <li class="nav-item">
									<a href="contact.html" class="nav-link">Contact</a>
								  </li>
						  </ul> -->
						  
						  <ul class="navbar-nav ml-auto">
								   <li class="nav-item">
									  <a class="link-outline" href="#"><i class="icon fas fa-sign-in-alt"></i>&nbsp;Book now</a>
								  </li>
							</ul>
						</div>
					  </div>
				</nav>
		    </div>
		</header>

<?php
	if(is_front_page()) {
		?>
	

		<section class="main_banner_area text-white">
			<div class="overl"></div>
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="info">
								<h1 class="display-4 text-white bold">Growth Partners</h1>
								<p class="text-white">Connect with top consultants hand-picked by Edify consulting and finance.</p>
								<button type="submit" class="btns btn-primary">Learn More</button>
								<button type="submit" class="btns btn-outline-info blue bg-warning ml-3">Contact Us</button>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php
	}
	elseif(!is_single()){ ?>
		<section id="bg">
			<div class="overl"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-6 col-sm-12 pt-5">
							<div class="section-heading">
								<h1 class="display-4 text-white"><?php echo single_post_title(); ?></h1>
							</div>
							<div class="section-inline">
								<ul class="list-inline">
									<li class="list-inline-item">
									  <a class="home text-white" href="<?php echo site_url('/'); ?>">Home</a>
								  </li>
								  <li class="list-inline-item">
									<i class="home text-white fa fa-angle-double-right"></i>
								  </li>
								  <li class="list-inline-item">
									<p class="home text-white"><?php echo single_post_title(); ?></p>
								  </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

  <?php 
	}
	?>



