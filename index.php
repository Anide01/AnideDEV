<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anide_DEV - Développeur web freelance</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/animation/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="css/animation/animations.css" />
	<link rel="stylesheet" type="text/css" href="css/animation/animations-ie-fix.css" />
	<!--font awesome 5 Pro-->
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-pro-5.6.1-web/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-pro-5.6.1-web/css/brands.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-pro-5.6.1-web/css/fontawesome.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-pro-5.6.1-web/css/solid.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-pro-5.6.1-web/css/regular.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-pro-5.6.1-web/css/light.min.css" />
	<link rel="stylesheet" href="an.css">
	<link rel="shortcut icon" href="icone.png"/>
</head>
<body>
<div class="se-pre-con"></div>
<div class="wrapper" id="wrapper">
	<header class="header sticky-top" id="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-topbar">
			<div class="container">
				<div class="topbar-info ml-auto">
					<ul class="info-head">
						<li>
							<a href="mailto:anidedev229@gmail.com">
								<i class="fal fa-envelope"></i>
								<span>anidedev229@gmail.com</span>
							</a>
						</li>
						<li>
							<a href="whatsapp:+22968456378">
								<i class="fab fa-whatsapp"></i>
								<span>+229 68 45 63 78</span>
							</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>
		<nav class="navbar navbar-expand-lg navbar-light bg-header-menu navbar-header">
			<div class="container">
			<a class="navbar-brand wow bounceIn" id="logo" href="index.php">
					<img src="images/log.png" alt="logo">
				</a>
				<a class="navbar-brand wow pulse" id="logo-sticky" href="index.php">
					<img src="images/log.png" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarmenu">
					<ul class="navbar-nav navbar-menu ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#about">A propos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#service">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#competence">Outils</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio">Réalisations</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tarif">Tarifs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" target="_blank" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section class="slider-home relative">
		<div class="filtre-slider absolute"></div>
		<div id="carouselhome" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators carousel-indicators-home">
				<li data-target="#carouselhome" data-slide-to="0" class="active"></li>
				<li data-target="#carouselhome" data-slide-to="1"></li>
				<li data-target="#carouselhome" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active carousel-item-home">
					<img src="images/slider-1-2.jpg" class="d-block w-100" alt="slider">
					<div class="container carousel-caption carousel-caption-home d-none d-md-block">
						<div class="content-caption">
							<h1 class="wow slideInDown">
								Développement Web
							</h1>
							<p class="wow slideInLeft">
								Création de sites web sur mesure, développement front-end et back-end, e-commerce, maintenance et optimisation.
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item carousel-item-home">
					<img src="images/slider-2.jpg" class="d-block w-100" alt="slider">
					<div class="container carousel-caption carousel-caption-home d-none d-md-block">
						<div class="content-caption">
							<h1 class="wow slideInDown">
								Rédaction Web
							</h1>
							<p class="wow slideInLeft">
								Contenu Web optimisé pour le référencement (SEO), blogging, rédaction de contenu attractif et pertinent.
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item carousel-item-home">
					<img src="images/slider-3.jpg" class="d-block w-100" alt="slider">
					<div class="container carousel-caption carousel-caption-home d-none d-md-block">
						<div class="content-caption">
							<h1 class="wow slideInDown">
								Création Graphique
							</h1>
							<p class="wow slideInLeft">
								Logos percutants, affiches et flyers créatifs pour une communication visuelle efficace.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="more-about absolute">
			<div class="container">
				<a href="#about" id="to-about">
					<i class="far fa-arrow-circle-down"></i>
					<span>En savoir plus</span>
				</a>
			</div>
		</div>
	</section>
	<section id="about" class="about">
		<div class="container">
			<div class="intro-about text-center">
				<h2>A propos</h2>
				
			</div>
			<div class="content-about">
				<div class="row">
					<div class="col-md-4">
						<div class="img-about wow fadeInLeft">
							<img src="images/about7.png" class="img-fluid" alt="about">
						</div>
					</div>
					<div class="col-md-8">
						<div class="text-about wow fadeInRight">
							<h1><span class="anide-dev-highlight" >Anide_DEV,</span></h3>
							Votre guichet unique pour tous vos besoins en développement web, rédaction web et conception graphique. Notre équipe talentueuse de développeurs web expérimentés, rédacteurs passionnés et designers créatifs s'engage à fournir des solutions numériques innovantes et percutantes.

Nos services de développement web comprennent la création de sites web sur mesure, le développement, la maintenance ainsi que le support.

Nos rédacteurs web créent des contenus engageants et optimisés pour le référencement, tels que des articles de blog, des communiqués de presse, du contenu marketing.

Nos designers graphiques conçoivent des visuels attrayants et professionnels, tels que des logos, des infographies, des brochures et des présentations.
					    	</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="service" class="service">
		<div class="container">
			<div class="list-service">
				<div class="row">
					<div class="col-md-4">
						<div class="content-service relative wow fadeInUp">
							<h4>Développement Web</h4>
							<p>
							Nous proposons une gamme complète de services pour répondre à tous vos besoins en matière de présence en ligne. 
							Que vous souhaitiez créer un site portfolio pour mettre en valeur vos travaux, lancer une boutique en ligne pour vendre vos produits avec un site e-commerce, ou partager vos idées et contenus à travers un blog dynamique, nous sommes là pour vous aider. Notre expertise inclut également la création de sites vitrines professionnels pour présenter votre entreprise de manière convaincante.
						</div>
					</div>
					<div class="col-md-4">
						<div class="content-service relative wow fadeInUp">
							<h4>Gestion de projet web</h4>
							<p>
							Avec une approche méthodique et organisée, nous prenons en charge la supervision complète de votre projet web. De la planification initiale à la livraison finale, nous veillons à ce que chaque étape soit gérée efficacement. Grâce à une communication claire et une coordination sans faille, nous nous assurons que votre projet est réalisé dans les délais et selon vos spécifications.
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content-service relative wow fadeInUp">
							<h4>WordPress</h4>
							<p>
                           
								En tant qu'experts WordPress, nous proposons une gamme complète de services pour exploiter pleinement le potentiel de cette plateforme puissante. De la création de sites web simples aux installations complexes, en passant par la personnalisation avancée des thèmes et des plugins, nous sommes là pour répondre à tous vos besoins WordPress. Que vous souhaitiez mettre en place un blog professionnel, une boutique en ligne avec WooCommerce, ou tout autre projet web, nous vous offrons des solutions sur mesure et un support technique de qualité pour garantir le succès de votre site WordPress.
						   </p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content-service relative wow fadeInUp">
							<h4>PSD to HTML</h4>
							<p> 
							Transformons vos maquettes graphiques PSD, XD, Zeplin, Invision, Figma, et bien d'autres, en code HTML/CSS responsive et fonctionnel. Grâce à notre expertise, nous vous offrons un service de conversion précis et de qualité, garantissant une intégration web fluide et conforme à vos designs. Que ce soit pour une conception complexe ou une simple conversion, nous sommes là pour concrétiser votre vision et vous offrir un résultat final impeccable.
							 </p>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="content-service relative wow fadeInUp">
							<h4>Rédaction Web</h4>
							<p>
							La rédaction de contenu de qualité est essentielle pour attirer et engager votre audience en ligne. Nous pouvons créer du contenu original, pertinent et optimisé pour les moteurs de recherche (SEO) dans une variété de niches et de styles. Que ce soit pour des articles de blog, des pages de site web, des newsletters ou des publications sur les réseaux sociaux, nous avons ce qu'il vous faut pour vous démarquer.
                               </p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="content-service relative wow fadeInUp">
							<h4>Création Graphique</h4>
							<p>
							Une identité visuelle forte est cruciale pour la reconnaissance de votre marque. Notre équipe de graphistes talentueux peut concevoir des logos, des affiches, des flyers et d'autres éléments graphiques qui captiveront votre public et refléteront l'essence de votre entreprise. Nous travaillons en étroite collaboration avec vous pour comprendre vos besoins et créer des designs uniques et mémorables qui vous aideront à vous démarquer de la concurrence.
						       </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="competence" class="competence">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="title-competence wow pulse">
						<h5>
							Outils
							<span class="tittle-bold-competence">en développement web</span>
						</h5>
					</div>
					<div class="list-competence">
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>HTML/CSS</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="six-sec-ease-in-out progress-bar progress-bar-competence" role="progressbar" style="width: 95%;" data-percentage="95" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
									</div>
								</div>
							</div>
						</div>

						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>Bootstrap</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 90%;" data-percentage="90" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>JAVASCRIPT / jQuery</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 50%;" data-percentage="80" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>PHP / LARAVEL</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 75%;" data-percentage="95" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>SQL / MYSQL</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 90%;" data-percentage="90" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">90%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>Wordpress</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 80%;" data-percentage="80" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="title-competence wow pulse">
						<h5>
							Compétences
							<span class="tittle-bold-competence">en rédaction web</span>
						</h5>
					</div>
					<div class="list-competence">
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>Optimisation SEO</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 95%;" data-percentage="95" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>ton et style</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 85%;" data-percentage="85" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>contenu clair</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 85%;" data-percentage="90" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>ergonomie digital</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 95%;" data-percentage="95" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">95%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>contenu Marketing </span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 90%;" data-percentage="90" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>Mots-clés pertinets</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 99%;" data-percentage="99" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="title-competence wow pulse">
						<h5>
							Outils
							<span class="tittle-bold-competence">en conception graphique</span>
						</h5>
					</div>
					<div class="list-competence">
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>Photoshop</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 95%;" data-percentage="95" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>illustrator</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 85%;" data-percentage="85" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">85%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>InDesign</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 99%;" data-percentage="95" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>XD / ZEPLIN</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 90%;" data-percentage="90" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-competence">
							<div class="row">
								<div class="col-md-4">
									<div class="title-specification">
										<span>Canva</span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="progress progress-competence" style="height: 22px;">
										<div class="progress-bar progress-bar-competence" role="progressbar" style="width: 99%;" data-percentage="100" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">100%</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio" class="portfolio">
		<div class="container" >
			<div class="intro-about text-center">
				<h2>Nos réalisations</h2>
				<p class="wow pulse">
					Listes des projets sur lesquels nous avons travaillé
				</p>
			</div>
		</div>
		<div class="realisation-tab">
			<div class="container" id="cont">
				<ul class="nav nav-pills mb-3 tab-menu-realisation" id="all-realisation" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="pills-all-project-tab" data-toggle="pill" href="#all-project" role="tab" aria-controls="all-project" aria-selected="true">
					     Sites Web
						</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="pills-psd-to-html-tab" data-toggle="pill" href="#psd-to-html" role="tab" aria-controls="psd-to-html" aria-selected="false">
						Wordpress
						</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="pills-wordpress-tab" data-toggle="pill" href="#wordpress" role="tab" aria-controls="wordpress" aria-selected="false">
						Logos/Affiches
						</a>
					</li>
				</ul>
			</div>
			<div class="container-fluid">
				<div class="tab-content realisation-tab-content" id="realisation-tab-content">
					<div class="tab-pane realisation-tab-pane fade show active" id="all-project" role="tabpanel" aria-labelledby="pills-all-project-tab">
						<div class="list-portfolio">
							<div class="row">
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Jan 2024
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/mon-portfolio.JPG" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
													 Jan 2024
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/imagr14.JPG" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Nov 2023
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/vinicole.JPG" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
													  Dec 2022
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/Capture2.JPG" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
													Mai	2022
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/imag.jpg" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Nov 2021
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/jobpei.png" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane realisation-tab-pane fade" id="psd-to-html" role="tabpanel" aria-labelledby="pills-psd-to-html-tab">
						<div class="list-portfolio">
							<div class="row">
								
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
													Jan	2024
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/mta.png" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
													Sep	2023
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/capture3.jpg" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Nov 2022
													</a>
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/Capture1.JPG" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="tab-pane realisation-tab-pane fade" id="wordpress" role="tabpanel" aria-labelledby="pills-wordpress-tab">
						<div class="list-portfolio">
							<div class="row">
							<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Nov 2022
													</a>
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/logo1.png" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Nov 2022
													</a>
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/logo2.jpg" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Nov 2022
													</a>
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/logo3.png" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Nov 2022
													</a>
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/menu1.png" alt="" class="img-fluid" />
										</div>
									</div>
								</div><div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Nov 2022
													</a>
													</a>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/menu2.png" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-md-4 bloc-portfolio p-0">
									<div class="relative">
										<div class="absolute">
											<div class="table">
												<div class="table-cell padding-55 text-center">
													<p href="" target="_blank">
														<i class="far fa-image"></i>
														Jan 2024
                                                    </p>
												</div>
											</div>
										</div>
										<div class="thumbnail-realisation">
											<img src="images/realisation/33.jpeg" alt="" class="img-fluid" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<section id="tarif" class="tarif">
		<div class="container">
			<div class="intro-about text-center">
				<h2>Tarifs</h2>
				<p>
					Un tarif adapté à vos besoin !
				</p>
			</div>
            <a class="btn-collapse-form-devis text-center" data-toggle="collapse" href="#tarif-form" role="button" aria-expanded="false" aria-controls="collapseExample">
                Une idée? Un projet? <br>
				 N'hésitez pas à demander un devis gratuit
            </a>
			<div class="bloc-form-devis">
				<div class="collapse" id="tarif-form">
					<div class="card card-body card-body-tarif">
                        <form action="note.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-coordonnee">
                                    </div>
                                    <div class="form-coordonnee">
                                        <div class="form-group">
											<label for="nomprenom">Nom et Prénom*</label>
                                            <input type="text" class="form-control input-form-tarif" name="nomprenom" id="name-tarif" placeholder="Nom / Prénom *" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input input-check-tarif" type="radio" name="inlineRadioOptions" required id="particulier" value="option1" checked>
                                                <label class="form-check-label label-check-tarif" for="particulier">Particulier</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input input-check-tarif" type="radio" name="inlineRadioOptions" required id="association" value="option2">
                                                <label class="form-check-label label-check-tarif" for="association">Association*</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input input-check-tarif" type="radio" name="inlineRadioOptions" required id="societe" value="option3">
                                                <label class="form-check-label label-check-tarif" for="societe">Société*</label>
                                            </div>
                                        </div>
                                        <div class="form-group" id="association-show">
                                            <input type="text" class="form-control input-form-tarif" name="association" id="association-tarif" placeholder="Association">
                                        </div>
                                        <div class="form-group" id="societe-show">
                                            <input type="text" class="form-control input-form-tarif" name="societe" id="societe-tarif" placeholder="Société">
                                        </div>
                                        <div class="form-group">
										<label for="email">Email*</label>
                                            <input type="email" class="form-control input-form-tarif" name="email" id="email-tarif" placeholder="Email *" required>
                                        </div>
                                        <div class="form-group">
										<label for="telephone">Téléphone*</label>
                                            <input type="number" class="form-control input-form-tarif" name="telephone" id="phone-tarif" placeholder="Téléphone *" required>
                                        </div>
                                        <div class="form-group">
										<label for="adresse">Adresse*</label>
                                            <input type="text" class="form-control input-form-tarif" name="adresse" id="adresse-tarif" placeholder="Adresse *" required>
                                        </div>
                                        <div class="form-check form-group">
                                            <input class="form-check-input input-checkbox-tarif" type="checkbox" id="condition-tarif" value="option1" aria-label="" required>
                                            <label class="form-check-label label-checkbox-tarif" for="condition-tarif">
                                                En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de devis
                                                et de la relation commerciale qui peut en découler.
                                            </label>
                                       </div>
                                        <div class="alert alert-primary alert-tarif" role="alert">
                                            <i class="fas fa-info-circle"></i>
                                            Demande de devis gratuit. Réponse moyenne sous 72h.
                                            Merci de détailler au maximum votre projet pour une réponse précise.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-coordonnee">
                                        <h5>Votre projet</h5>
                                    </div>
                                    <div class="form-projet">
                                        <select class="custom-select input-form-tarif form-group" name="typ">
                                            <option value="Site Vitrine [Standard]">Site Vitrine [Standard]</option>
											<option value="Site Vitrine [Personnalisé]">Site Vitrine [Personnalisé]</option>
											<option value="Site Porfolio">Site Porfolio</option>
											<option value="Site E-commerce">Site E-commerce</option>
											<option value="Développement spécifique">Développement spécifique</option>
											<option value="Blog">Blog</option>
											<option value="Création de Logo">Création de Logo</option>
											<option value="Conception d'Affiche/Flyer">Conception d'Affiche/Flyer</option>
											<option value="Conception de Carte de visite">Conception de Carte de visite </option>
											<option value="Rédaction d'Article SEO">Rédaction d'Article SEO</option>
											<option value="Autres">Autres</option>
                                        </select>
                                        <div class="form-group">
										<label for="descript">Description de votre projet</label>
                                            <textarea class="form-control input-form-tarif" id="description-projet" name="descript" rows="3" placeholder="Description de votre projet" required></textarea>
                                        </div>
                                        <div class="bloc-submit-form-tarif">
                                            <input type="submit" id="submit-form-tarif" name="envoyer" class="btn btn-primary submit-form-tarif" value="Envoyer ma demande de devis" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="contact relative">
		<div class="divider-redirection absolute">
			<img src="images/divider-redirection.png" alt="" class="img-fluid">
		</div>
		<div class="container">
			<div class="title-form text-center">
				<h5>Contactez-nous</h5>
				
			</div>
			
			<div class="bloc-form-contact">
			
			<div class="bloc-form-contact" id="contac">
					<div class="col-md-15">

						<div class="coordonnee-contact wow fadeInRight">
							<ul>
								<li>
									<i class="fas fa-home"></i>
									<span>Adresse</span>
									<p>
									Godomey, Cotonou, Bénin 
									</p>
								</li>
								<li>
									<i class="fab fa-whatsapp-square"></i>
									<span>Whatsapp</span>
									<a href="Whatsapp:+22968456378">+229 68 45 63 78</a>
								</li>
								<li>
									<i class="fas fa-envelope"></i>
									<span>Email</span>
									<a href="mailto:anidedev229@gmail.com">anidedev229@gmail.com</a>
								</li>
								<li>
									<i class="fas fa-clock"></i>
									<span>Horaires de travail</span>
									<p>
										Lundi - Vendredi : 9h - 18h
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>

				
				</div>
			</div>
		</div>
	</section>
	<footer id="footer" class="footer">
		<div class="container">
			<div class="bloc-footer text-center">
				<div class="info-footer">
					<h3>Anide_DEV</h3>
					<p>
					
					Ensemble vers le sommet du web ! Nous sommes prêts à donner vie à vos projets sur mesure. Des solutions adaptées à tous, pour un succès garanti.
					</p>
				</div>
				<div class="reseau-socio-footer">
					<ul>
				
						<li>
							<a href="https://www.facebook.com/profile.php?id=61558101356399" target="_blank">
								<i class="fab fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="whatsapp:+22968456378" target="_blank">
								<i class="fab fa-whatsapp"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-9 p-0">
						<div class="content-copyright">
							<p>
								© 2024 Anide_DEV.  Tous droits réservés
							</p>
						</div>
					</div>
					<div class="col-md-3 p-0">
						<div class="ruturn-up">
							<span>Retour en haut</span>
							<span id="to-header" href="#wrapper" class="icon-up">
								<i class="far fa-chevron-up"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popover.js"></script>
<script type="text/javascript" src="js/tooltip.js"></script>
<script type="text/javascript" src="js/animation/css3-animate-it.js"></script>
<script type="text/javascript" src="js/animation/wow.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--fonttawesome 5 pro-->
<script defer src="fonts/fontawesome-pro-5.6.1-web/js/all.min.js"></script>
<script defer src="fonts/fontawesome-pro-5.6.1-web/js/brands.min.js"></script>
<script defer src="fonts/fontawesome-pro-5.6.1-web/js/fontawesome.min.js"></script>
<script defer src="fonts/fontawesome-pro-5.6.1-web/js/light.js"></script>
<script defer src="fonts/fontawesome-pro-5.6.1-web/js/regular.min.js"></script>
<script defer src="fonts/fontawesome-pro-5.6.1-web/js/solid.min.js"></script>
<!--ajax loader page-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
