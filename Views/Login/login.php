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
    <!-- descripcion adicional al momento de compartir -->
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
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title><?= $data['page_name'].' - '.$data['page_title']; ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1><?= $data['page_title']; ?></h1>
      </div>
      <div class="login-box">
        <div id="divLoading" >
          <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
          </div>
        </div>
        <form class="login-form" name="formLogin" id="formLogin">
          <h3 class="login-head"><i class="bi bi-person me-2"></i><?= strtoupper($data['page_name']); ?></h3>
          <div class="mb-3">
            <label class="form-label">USUARIO</label>
            <input class="form-control" id="txtUsuario" name="txtUsuario" type="text" placeholder="Email" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">CONTRASEÑA</label>
            <input class="form-control" id="txtPassword" name="txtPassword" type="password" placeholder="Password">
          </div>
          <div class="mb-3">
            <div class="utility">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"><span class="label-text">Recordar</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Recuperar Contraseña?</a></p>
            </div>
          </div>
          <div class="mb-3 btn-container d-grid">
            <button class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INGRESAR</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="bi bi-person-lock me-2"></i>Recuperar Contraseña?</h3>
          <div class="mb-3">
            <label class="form-label">CORREO</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="mb-3 btn-container d-grid">
            <button class="btn btn-primary btn-block"><i class="bi bi-unlock me-2 fs-5"></i>Restablecer</button>
          </div>
          <div class="mb-3 mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="bi bi-chevron-left me-1"></i> Ir a Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <script type="text/javascript" src="<?= media(); ?>/admin/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/admin/js/main.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/functions_admins.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/admin/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>