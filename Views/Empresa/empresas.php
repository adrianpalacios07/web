<?php
headerAdmin($data);
//getModal('panelModal',$data); 
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-postcard-fill"></i> <?= $data['page_title']; ?></h1>
    </div>
    <?php if($_SESSION['permisosMod']['w']){ ?>
    <div>
        <a href="#" class="btn btn-primary" ><i class="bi bi-file-plus-fill"></i> Crear Información</a>
    </div>
    <?php } ?>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
      <li class="breadcrumb-item"><?= $data['page_name']; ?></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <!-- <?= dep($_SESSION) ?> -->
        <div class="table-responsive">
          <table class="table table-hover" id="tableEmpresas">
            <thead>
              <tr>
                <th>Descripción</th>
                <th>Información Adicional</th>
                <th>Información Adicional 2</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
<?php footerAdmin($data); ?>