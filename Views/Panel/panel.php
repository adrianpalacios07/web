<?= headerPanel($data) ?>
<?= getModal('panelModal',$data); ?>
    <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
          <div class="position-relative">
          <h3 class="tile-title position-absolute top-0 start-0">Menú</h3>
          <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar +</button>
          </div>
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Estado</th>
                  <th>Acción</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($data['pages'] as $m) { ?>
                <tr>
                    <td><?php echo $m['titulo']?></td>
                    <td>
                        <?php echo ($m['estado'] == 'A') ? 'ACTIVO':'INACTIVO' ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url()."/".$data['page_url']."/edit/".$m['idpage']?>" class="btn btn-outline-success">Edit</a>
                    </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
<?= footerPanel()?>