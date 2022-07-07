<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group">

		<div class="container">
    <!--  implementazione header utilizzando nav-bar importata da bootstrap-->
        <nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<img class="img" src="https://static.vecteezy.com/system/resources/previews/001/190/172/non_2x/circle-logo-flower-png.png" alt="">
				<div class="collapse navbar-collapse mx-3" id="navbarText">
					<h4><span class="fw-bold">Nature</span> Agency</h4>
				</div>
					<button class="navbar-toggler" style="color:gray" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-align-justify"></i>
					</button>
				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mx-3 mb-3 mb-lg-0 ">
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Who we are</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Products</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link" href="#">Blog</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link text-dark" aria-current="page" href="#"><i class="fas fa-search"></i></a>
						</li>
						<li class="nav-item mx-2">
							<button type="button" class="btn  rounded-pill">Contact Us</button>
						</li>
					</ul>
					</div>
				</div>
        </nav>
    </div>
		</header><!-- #site-header -->

	
		
		
