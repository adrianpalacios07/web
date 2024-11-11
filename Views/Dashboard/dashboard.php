<?php
headerAdmin($data);
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-speedometer"></i><?= $data['page_title'] ?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <a href="<?= base_url() ?>/paginas" class="linkw">
        <div class="widget-small primary coloured-icon"><i class="icon bi bi-postcard-fill fs-1"></i>
          <div class="info">
            <h4>Páginas</h4>
            <p><b></b></p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="<?= base_url() ?>/cliente" class="linkw">
        <div class="widget-small info coloured-icon"><i class="icon bi bi-gear fs-1"></i>
          <div class="info">
            <h4>Configuracion</h4>
            <p><b></b></p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-4">
      <a href="<?= base_url() ?>/producto/lista" class="linkw">
        <div class="widget-small warning coloured-icon"><i class="icon bi bi-boxes fs-1"></i>
          <div class="info">
            <h4>Servicios</h4>
            <p><b></b></p>
          </div>
        </div>
      </a>
    </div>
  </div>
</main>
<?php
footerAdmin($data);
?>