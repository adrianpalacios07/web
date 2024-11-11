<?= headerPanel($data); $n = $data['info'];?>

<main class="app-content">
    <div class="row">
        <div class="col-md-12">
          <div class="tile"> 
            <!-- fondo de blanco -->
            <div class="row">
              <div class="col-lg-12">
                <form id="formEditarPagina">
                    <input type="hidden" value="<?php echo $n['idpage'] ?>" name="txtid">
                  <div class="mb-3">
                    <label class="form-label" for="exampleInputEmail1">Titulo</label>
                    <input class="form-control" id="txtname" name="txtname" type="text" placeholder="Enter email" value="<?php echo $n['titulo']?>">
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                        <label class="form-label" for="exampleSelect1">Estado</label>
                        <select class="form-select" id="exampleSelect1" name="txtestado">
                            <option <?php echo ($n['estado'] == 'A') ? 'selected':'' ?> value="A">Activo</option>
                            <option <?php echo ($n['estado'] == 'X') ? 'selected':'' ?> value="X">Inactivo</option>
                        </select>
                    </div>
                    </div>
                  <div class="mb-3">
                    <label class="form-label" for="txtcontenido">Contenido</label>
                    <textarea class="form-control" id="txtcontenido" name="txtcontenido" rows="3"><?php echo html_entity_decode($n['contenido']) ?></textarea>
                  </div>
                  <div class="tile-footer float-end">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                  </div>
                </form>
              </div>
            </div>  
          </div>
        </div>
      </div>
</main>
<?= footerPanel() ?>