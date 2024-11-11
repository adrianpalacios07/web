<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Tortaza</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sergeyco SAC">
    <meta name="theme-color" content="#FFFF00">
    <link rel="shortcut icon" href="<?= media();?>/images/icono_app.png">
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="store"/>
    <meta property="og:title" content="Tortaza"/>
    <meta property="og:description" content="la felicidad llego a tu casa" /> 
    <meta property="og:url" content="https://www.tortaza.com.pe/"/>
    <meta property="og:site_name" content="Administrativo Web"/>
    <meta property="og:image" content="<?= media();?>/images/icono_app.png"/>
    <link rel="image_src" href="<?= media();?>/images/icono_app.png"/>
    <link rel="icon" href="<?= media();?>/images/icono_app.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= media();?>/images/icono_app.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= media();?>/images/icono_app.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= media();?>/images/icono_app.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= media();?>/images/icono_app.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= media();?>/images/icono_app.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= media();?>/images/icono_app.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= media();?>/images/icono_app.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= media();?>/images/icono_app.png" />
    <link rel="icon" type="image/png" href="<?= media();?>/images/icono_app.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?= media();?>/images/icono_app.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?= media();?>/images/icono_app.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= media();?>/images/icono_app.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?= media();?>/images/icono_app.png" sizes="128x128" />
    <meta name="msapplication-TileColor" content="#FFFF00" />
    <meta name="msapplication-TileImage" content="<?= media();?>/images/icono_app.png" />
    <meta name="msapplication-square70x70logo" content="<?= media();?>/images/icono_app.png" />
    <meta name="msapplication-config" content="<?= media();?>/images/icono_app.png">
    <meta name="msapplication-square150x150logo" content="<?= media();?>/images/icono_app.png" />
    <meta name="msapplication-wide310x150logo" content="<?= media();?>/images/icono_app.png" />
    <meta name="msapplication-square310x310logo" content="<?= media();?>/images/icono_app.png" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media()?>/admin/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media()?>/admin/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="<?= media()?>/admin/css/datatables.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?= media()?>/admin/css/font/bootstrap-icons.css">
  </head>
  <body class="app sidebar-mini">
    <div id="divLoading" >
      <div>
        <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
      </div>
    </div>
    <header class="app-header"><a class="app-header__logo" href="<?= base_url(); ?>/dashboard"><?= $data['page_tag']; ?></a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">       
        <!--Notification Menu-->
       
        <!-- User Menu-->
        <li class="dropdown">
          <a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu">
            <i class="bi bi-person fs-4"></i>
          </a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?= base_url(); ?>/settings"><i class="bi bi-gear me-2 fs-5"></i> Configuración</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/usuario/perfil"><i class="bi bi-person me-2 fs-5"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </header>
<?php require_once ("nav_admin.php"); ?>