<?php
headerAdmin($data);
$page = $data['pagina'];
$option = $page['estado'];
$fotoActual =$page['portada'];
$fotoRemove = 0;
$imgPortada = $fotoActual != "" ? '<img id="img" src="'.media()."/images/uploads/".$fotoActual.'">' : "";
$pageRuta = base_url().'/'.$page['ruta'];


?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-postcard-fill"></i> <?= $data['page_title']; ?></h1>
    </div>
    <?php if($_SESSION['permisosMod']['w']){ ?>
    <div>
        <a href="<?= base_url() ?>/paginas/crear" class="btn btn-primary" ><i class="bi bi-file-plus-fill"></i> Crear página</a>
    </div>
    <?php } ?>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
      <li class="breadcrumb-item active"><a href="<?= base_url(); ?>/paginas">Paginas</a></li>
      <li class="breadcrumb-item"><?= $data['page_title']; ?></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <?= dep($fotoActual) ?>
          <form class="form-horizontal" id="formPaginas">
            <input type="hidden" name="codPage" value="<?= $page['idpage']; ?>">
            <input type="hidden" id="foto_actual" name="foto_actual" value="<?= $fotoActual; ?>">
            <input type="hidden" id="foto_remove" name="foto_remove" value="<?= $fotoRemove; ?>">
            <div class="row">
              <div class="col-md-9">
                <div class="mb-3 row">
                  <label class="form-label col-md-2" for="txtTitulo">Titulo</label>
                  <div class="col-md-4">
                    <input class="form-control valid validText" type="text" name="txtTitulo" id="txtTitulo" value="<?= $page['titulo']; ?>" placeholder="Titulo de la pagina">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-md-2" for="txtContenido">Contenido</label>
                  <div class="col-md-10">
                    <textarea class="form-control" rows="8" name="txtContenido" id="txtContenido"><?= $page['contenido']; ?></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-md-2" for="cboEstado">Estado</label>
                  <div class="col-md-3">
                    <select class="form-control selectpicker" name="cboEstado" id="cboEstado">
                      <option value="A">Activo</option>
                      <option value="I">Inactivo</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  <div class="form-group col-md-12">
                    <div id="containerGallery">
                      <h4>Portada</h4>
                      <span>Tamaño sugerido (1920px X 239px)</span>
                    </div>
                    <hr>
                    <div id="containerImages">
                      <div class="photo">
                        <div class="prevPhoto prevPortada">
                          <span class="delPhoto notBlock">X</span>
                          <label for="foto"></label>
                          <div>
                            <?= $imgPortada ?>
                          </div>
                        </div>
                        <div class="upimg">
                          <input type="file" name="foto" id="foto">
                        </div>
                        <div id="form_alert"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="<?= base_url(); ?>/paginas"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
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
<script>
  document.querySelector("#cboEstado").value = "<?= $option; ?>" 
</script>