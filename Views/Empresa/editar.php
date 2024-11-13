<?php
headerAdmin($data);
$page = $data['pagina'];
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-postcard-fill"></i> <?= $data['page_title']; ?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
      <li class="breadcrumb-item active"><a href="<?= base_url(); ?>/empresa">Empresas</a></li>
      <li class="breadcrumb-item"><?= $data['page_title']; ?></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <form class="form-horizontal" id="formEmpresas">
          <input type="hidden" name="codPage" value="<?= $page['id']; ?>">
            <div class="row">
              <div class="col-md-9">
                <div class="mb-3 row">
                  <label class="form-label col-md-2" for="txtTitulo">Título</label>
                  <div class="col-md-4">
                    <input class="form-control valid validText" type="text" name="txtTitulo" id="txtTitulo" value="<?= $page['descripcion']; ?>" placeholder="Titulo de la pagina">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-md-2" for="txtInfo">Información Adicional</label>
                  <div class="col-md-4">
                  <input class="form-control valid validText" type="text" name="txtInfo" id="txtInfo" value="<?= $page['info_adicional']; ?>" placeholder="Titulo de la pagina">
                  </div>
                </div>
                <div class="mb-3 row">
                <label class="form-label col-md-2" for="txtInfo2">Información Adicional N°2</label>
                <div class="col-md-4">
                  <input class="form-control valid validText" type="text" name="txtInfo2" id="txtInfo2" value="<?= $page['info_adicional2']; ?>" placeholder="Titulo de la pagina">
                  </div>
                </div>
              </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="<?= base_url(); ?>/empresa"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<?php footerAdmin($data); ?>