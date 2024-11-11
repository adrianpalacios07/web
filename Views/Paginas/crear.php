<?php
headerAdmin($data); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-postcard-fill"></i> <?= $data['page_title']; ?></h1>
    </div>
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
          <form class="form-horizontal" id="formPaginas">
            <div class="row">
              <div class="col-md-9">
                <div class="mb-3 row">
                  <label class="form-label col-md-2" for="txtTitulo">Titulo</label>
                  <div class="col-md-4">
                    <input class="form-control valid validText" type="text" name="txtTitulo" id="txtTitulo" value="" placeholder="Titulo de la pagina">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-md-2" for="txtContenido">Contenido</label>
                  <div class="col-md-10">
                    <textarea class="form-control" rows="8" name="txtContenido" id="txtContenido"></textarea>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label class="form-label col-md-2" for="cboEstado">Estado</label>
                  <div class="col-md-3">
                    <select class="form-control selectpicker" name="cboEstado" id="cboEstado">
                      <option value="A">Activo</option>
                      <option value="X">Inactivo</option>
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
                          <div></div>
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