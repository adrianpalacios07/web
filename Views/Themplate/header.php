<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $data['page_title'];?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="<?= media()?>/images/icono_app.png"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/slick/slick.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/css/util.css">
		<link rel="stylesheet" type="text/css" href="<?= media() ?>/css/main.css">
	<!--===============================================================================================-->



</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="<?= media() ?>/images/logo.png" alt="IMG-LOGO">
					</a>
					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<?php foreach($data['pages'] as $m){ ?>
								<li><a href="<?= base_url().'/'.$m['ruta'] ?>"><?php echo $m['titulo']; ?></a>
									<ul class="<?php echo (!empty($m['submenu'])) ? 'sub-menu' : ''  ?>">
									<?php foreach ($m['submenu'] as $n) { ?>
											<li><a href="<?php echo base_url().'/'.$m['ruta'].'/'.$n['ruta']; ?>"><?php echo $n['nom_subpagina']; ?></a></li>
									<?php } ?>
									</ul>
							<?php } ?>	
								</li>
						</ul>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="<?= media() ?>/images/logo.png"></a>
			</div>
			
			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
			<?php foreach($data['pages'] as $m){ ?>
				<li><a href="<?= base_url().'/'.$m['ruta'] ?>"><?php echo $m['titulo']; ?></a>
					<ul class="<?php echo (!empty($m['submenu'])) ? 'sub-menu-m' : ''  ?>">
					<?php foreach ($m['submenu'] as $n) { ?>
							<li><a href="<?php echo base_url().'/'.$m['ruta'].'/'.$n['ruta']; ?>"><?php echo $n['nom_subpagina']; ?></a></li>

					<?php } ?>
					</ul>
					<?php echo (!empty($m['submenu'])) ? '<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>' : ''  ?>
					<?php } ?>	
				</li>
				
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>