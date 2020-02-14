<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width"/>
		<title> Mon portofolio </title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
		<link href="./css/stylesheet_main.css" rel="stylesheet" type="text/css">
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Marmelad|Poller+One" rel="stylesheet"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	</head>
	
	<body>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<!-- General -->
		<div id="general">
			<div class="block">
				<header id="header">
						<img src="./images/site/banniere2.png" alt="banner" id="banner" >
				</header>
			</div>
			<!-- Menu -->
			<ul class="menu">
				<li  id="logoMenu-li"><a href="" id="lien-logo" ><img src="./images/site/logo_site.gif" alt="neeyks" id="logoMenu" ></a>
				<li id ="ligne2">
                    <ul>
                        <li class="lien"><a href="#apropos" class = "title-menu">A propos</a></li>

                        <li class="lien"><a href="#travaux" class = "title-menu">Travaux réalisés</a></li>

                        <li class="lien"><a href="#contact" class = "title-menu">Contact</a></li>
                    </ul>
				</li>
			</ul>
			<!-- Menu -->
			<script src="./js/menu_script.js"></script>    
			<!-- Contenu page -->
			<div class="block">
				<div id="content">
				
					<!-- Section a propos -->
					<div class ="block" id="apropos">
						<h1 class="subtitle"></br></br> A propos  </h1>
						<div class="container about">
							<div class="columns">
								<div class="column about-single-element">
									<object data="./images/site/moi_icon.svg" width="100" height="100" type="image/svg+xml">
									</object>
									<p>Alexis, 19 ans, Actuellement étudiant en informatique en région parisienne, je m'intéresse tout particulièrement au domaine du web.</br>
De plus l'univers du graphisme et du multimédia m'attire depuis plusieurs années.
Et donc pour réunir mes deux passions, je souhaite poursuivre mes études en webdesign.</p>
								</div>
								<div class="column about-single-element">
									<object data="./images/site/code_icon.svg" width="100" height="100" type="image/svg+xml">
									</object>
									<p>Savoir-faire informatique : </br>
									- Mise en place et réalisation de projets informatiques. </br>
									- Mise en place et gestion d'un serveur web sous différents systèmes d'exploitation</br>
									- Maitrise des langages de programmations web :</br>
										HTML / CSS / PHP / JAVASCRIPT / JQUERY / SQL </br>
									- Maitrise d'autres langages : 
										Java / Python / C</br>
									- Maitrise des frameworks : Angular 7, Ionic 4 </br>
									- Maitrise des logiciels de développement (Eclipse, Microsoft Visual Studio Code, Atom)</br>
									- Maitrise des systèmes d'exploitation (Windows, Debian, CentOS)
									</p>
								</div>
								<div class="column about-single-element">
									<object data="./images/site/art_icon.svg" width="100" height="100" type="image/svg+xml">
									</object>
									<p>Savoir-faire infographique :</br>
									- Creation de logos, bannieres</br>
									- Réalisations de videos introductives</br>
									- Modélisation 3D, rigging, skinning, texturing</br>
									- Dessin traditionnel et numérique</br></br>
									Logiciels connu :</br>
									- Suite Abobe et des dérivés libres (Photoshop, Illustrator, After Effect, Inkscape, SAI Paint Tool ...)</br>
									- Logiciels 3D (Blender, Cinema4D)</br>
 									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Section a propos -->
					
					<!-- Section travaux -->
					<div class ="block">
						
						<div id="travaux">
							<h3 class="subtitle"></br></br> Mes travaux </h3>
							<!-- Ligne 1 -->
							<div class="tile is-ancestor">
								<a class="lien-tile showModal" id="logo">
									<div class="tile is-parent" >
										<article class="tile is-child notification is-dark logo-tile">
												<p class="title titre-tile">LOGO</p>
										</article>
									</div>
								</a>
								<a class="lien-tile showModal" id="banner">
									<div class="tile is-parent">
										<article class="tile is-child notification is-dark  banner-tile">
												<p class="title titre-tile">BANNIERE</p>
										</article>
									</div>
								</a>
								
							</div>
							<!-- Ligne 1 -->
			
							<!-- Ligne 2 -->
							<div class="tile is-ancestor">
								<a class="lien-tile showModal" id="num">
									<div class="tile is-parent">
										<article class="tile is-child notification is-dark  num-tile">
												<p class="title titre-tile">PEINTURE NUMERIQUE</p>
										</article>
									</div>
								</a>
							</div>
							<!-- Ligne 2 -->
			
							<!-- Ligne 3 -->
							<div class="tile is-ancestor">
								<a class="lien-tile showModal" id="intro">
									<div class="tile is-parent">
										<article class="tile is-child notification is-dark intro-tile">
												<p class="title titre-tile">INTRO </p>
										</article>
									</div>
								</a>
								<a class="lien-tile showModal" id="comp">
									<div class="tile is-parent ">
										<article class="tile is-child notification is-dark comp-tile">
												<p class="title titre-tile">COMPOSITION / DIVERS </p>
										</article>
									</div>
								</a>
								<a class="lien-tile showModal" id="dessin">
									<div class="tile is-parent">
										<article class="tile is-child notification is-dark  dess-tile">
												<p class="title titre-tile">DESSIN</p>
										</article>
									</div>
								</a>
							</div>
							<!-- Ligne 3 -->

		  					<?php
		  					include 'switch_images.php';
		  					?>
						</div>
						<script src="./js/modal_script.js"></script> 
					</div>
					<!-- Section travaux -->
					
					<!-- Section contact -->
					<div class ="block">
						
						<div id="contact">
							<h3 class="subtitle"></br></br> Me contacter </h3>
							<div class="field">
								<label class="label">Name</label>
								<div class="control has-icons-left ">
									<input class="input" type="text" placeholder="Entrez votre nom ...">
									<span class="icon is-small is-left">
										<i class="fas fa-user"></i>
									</span>
								</div>
							</div>
							<div class="field">
								<label class="label">Email</label>
								<div class="control has-icons-left ">
									<input class="input" type="text" placeholder="Entrez votre email...">
									<span class="icon is-small is-left">
										<i class="fas fa-envelope"></i>
									</span>
								</div>
							</div>
							<div class="field">
								<label class="label">Message</label>
								<div class="control">
									<textarea class="textarea" placeholder="Entrez votre message ..."></textarea>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<button class="button is-dark">Submit</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Section contact -->
					
				</div>
			</div>
			<!-- Contenu page -->
			
			<!-- Footer -->
			<div id="footer">
				<div class="lien">
					<a href="https://www.instagram.com/neeyks_art/?hl=en" alt="ig: @neeyks_art" class="insta"><i class="fab fa-instagram"></i></a>
					<a href=""><i class="far fa-file"></i></a>
				</div>
				<p> © Copyright 2018 - Alexis GRANGER </p>
				
			</div>
			<!-- Footer -->
		</div>
		<!-- General -->
        
	</body>
</html>