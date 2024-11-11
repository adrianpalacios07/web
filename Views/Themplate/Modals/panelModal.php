<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nuevo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="addPanel">
            <div class="mb-3">
              <label class="form-label" for="exampleInputEmail1">Titulo</label>
              <input class="form-control" id="txtname" name="txtname" type="text" placeholder="Titulo"  value="<?php echo $n['titulo']?>">
            </div>
            <div class="mb-3">
              <label class="form-label" for="exampleSelect1">Estado</label>
                <select class="form-select" id="exampleSelect1" name="txtestado">
                    <option value="A">Activo</option>
                    <option value="X">Inactivo</option>
                </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="txtcontenido">Contenido</label>
              <textarea class="form-control" id="txtcontenido" name="txtcontenido" rows="3"><?php echo html_entity_decode($n['contenido']) ?></textarea>
            </div>

          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>  