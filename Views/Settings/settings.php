<?php
headerAdmin($data);

getModal('modalSettings',$data);
getModal('modalAddSettings',$data);
$ke = $data['banner']; 
$set = $data['informacion'];
$fotoActual = $set['icono'];
$fotoRemove = 0;
$imgPortada = $fotoActual != "" ? '<img id="img" src="'.media()."/images/".$fotoActual.'">' : "";
?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i>Configuración</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#"><?= $data['page_name'] ?></a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile mb-4">
            <div class="tile-body">
              <div class="bs-component">
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tabinicios">Información Adicional</a></li>
                  <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tabservicios">Servicios</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#">Disabled</a></li> -->
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade active show" id="tabinicios">
                    <!-- fin de footer, formulario -->
                    <div class="card border-info">
                        <div class="card-body">
                          <form id="editInformacion">
                          <input type="hidden" id="txtidinfo" name="txtidinfo" value="<?= $set['id'] ?>">
                            <!-- <input type="hidden" id="foto_actual" name="foto_actual" value="<?= $fotoActual ?>">
                            <input type="hidden" id="foto_remove" name="foto_remove" value="<?= $fotoRemove; ?>"> -->
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputEmail1">Contáctanos</label>
                                        <div class="input-group">
                                          <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                                          <input type="text" class="form-control" id="txtcontactanos" name="txtcontactanos" value="<?= $set['contactanos']?>" >
                                        </div>
                                      <small class="form-text text-muted" id="emailHelp">Correo de contactanos</small>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputPassword1">Hora de Atención</label>
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="bi bi-clock-fill"></i></span>
                                          <input class="form-control" id="txthoraatencion" name="txthoraatencion" type="text" value="<?= $set['hora_atencion']?>" >
                                      </div>
                                      <small class="form-text text-muted" id="emailHelp">Hora AM - PM</small>
                                    </div>
                                    <div class="mb-3">
                                      <h3>Redes sociales</h3>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputPassword1">Facebook</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                          <input class="form-control" id="txtfacebook" name="txtfacebook"  type="text" value="<?= $set['facebook']?>">
                                        </div>
                                      <small class="form-text text-muted" id="emailHelp">Link</small>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputPassword1">Instagram</label>
                                      <div class="input-group">
                                          <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                          <input class="form-control" id="txtinstagram" name="txtinstagram" type="text" value="<?= $set['instagram']?>">
                                      </div>
                                      <small class="form-text text-muted" id="emailHelp">Link</small>
                                    </div>
                                    <div class="mb-3">
                                      <h4>Banner (Lista)</h4>
                                      <select class="form-control" id="demoSelect" multiple="">
                                        <optgroup label="Banner del Slider">
                                          <?php foreach ($ke as $b) { ?>
                                            <option>
                                              <?= $b['images']." (".$b['frase'].")" ?></option>
                                          <?php } ?> 
                                        </optgroup>
                                      </select>
                                      <small class="form-text text-muted" id="emailHelp">Lista de Banner</small>
                                    </div>
                                    <div class="mb-3">
                                      <!-- <h4>banner</h4> -->
                                        <div class="table-response table-wrapper-h300">
                                        <table class="table table-striped" id="tableBanner">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>Imagen</th>
                                            <th>Frase</th>
                                            <th><button type="button" class="btn btn-success btn-sm float-end" onclick="ftnAgregar()" title="Agregar"><i class="bi bi-plus-lg"></i></button></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                      </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">Eslogan</label>
                                    <input class="form-control" id="txteslogan" name="txteslogan" type="text" placeholder="Frase" 
                                    value="<?= $set['eslogan']?>">
                                    <small class="form-text text-muted" id="emailHelp">Frase de la página</small>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">Color</label>
                                    <input class="form-control" id="txtcolor" name="txtcolor" type="color" placeholder="Codigo de color" 
                                    value="<?= $set['color']?>">
                                    <small class="form-text text-muted" id="emailHelp">Código de Color</small>
                                  </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputPassword1">Color de Menú</label>
                                      <input class="form-control" id="txtcolormenu" name="txtcolormenu" type="color" placeholder="Codigo del color" 
                                      value="<?= $set['color_menu']?>">
                                      <small class="form-text text-muted" id="emailHelp">Código de Menú</small>
                                    </div>
                                    <div class="mb-3">
                                      <div class="form-group">
                                        
                                        <div id="containerGallery">
                                          <h4>ICONO</h4>
                                          <span>Tamaño sugerido (1920px X 239px)</span>
                                        </div>
                                          <hr>
                                          <input type="file" name="txticono" id="txticono" value="<?= $set['icono'] ?>">
                                          <!-- <div id="containerImages">
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
                                          </div> -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <h4>Delivery</h4>
                                        </div>
                                        <div class="col-md-2">
                                          <div class="toggle-flip">
                                            <label>
                                              <input type="checkbox" id="txtdelivery" name="txtdelivery" 
                                              <?= ($set['delivery'] == 'S') ? 'checked': '' ?> 
                                              ><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                                            </label>
                                          </div>
                                        </div>  
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                                </div>
                              <div class="tile-footer">
                                <div class="row">
                                  <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary"> <i class="bi bi-check-circle-fill"></i> Guardar</button>
                                    <a href="<?= base_url().'/dashboard' ?>" class="btn btn-secondary"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
                                  </div>
                                </div>
                              </div>
                          </form>
                        </div>
                    </div>
                  </div>
                  
                  <!-- fin de footer -->
                    <div class="tab-pane fade" id="tabservicios">
                    <div class="card border-warning">
                      <div class="card-body">
                        <?php 
                        $ecocheck = ($set['ecommerce'] == 1) ? ' checked' : '';
                        if($set['mostrarprecio'] == 1){
                          $showpricheck = ' checked';
                          $priceattr = ' disabled="true"';
                        }else{
                          $showpricheck = '';
                          $priceattr = ' required="true"';
                        }
                        if($set['delivery'] == 'S'){
                          $chks = ' checked';
                          $chkn = '';
                        }else{
                          $chks = '';
                          $chkn = ' checked';
                        }
                        ?>
                      <form id="formServicios">
                        <input type="hidden" name="idInfo" value="<?= $set['id']; ?>">
                        <div class="row">
                          <div class="col-md-7">
                            <div class="mb-3 row">                      
                              <p class="col-md-3"><b>ECOMMERCE</b></p>
                              <div class="col-md-9">
                                <div class="toggle-flip">
                                  <label>
                                    <input type="checkbox" name="cbxEcommerce" <?= $ecocheck; ?>><span class="flip-indecator" data-toggle-on="SI" data-toggle-off="NO"></span>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label class="col-form-label col-md-3" for="txtHorPedi">Horario Max Pedido</label>
                              <div class="col-md-3">
                                <input class="form-control" name="txtHorPedi" id="txtHorPedi" type="time" value="<?= $set['horamax']; ?>">
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label class="col-form-label col-md-3">Horario Entrega</label>
                              <div class="col-md-9">
                                <div class="row">
                                  <div class="col-4">
                                    <div class="mb-3">
                                      <label class="col-form-label" for="txtHorDesde">Desde</label>
                                      <input class="form-control" name="txtHorDesde" id="txtHorDesde" type="time" value="<?= $set['horainicio']; ?>">
                                    </div>
                                  </div>
                                  <div class="col-4">
                                    <div class="mb-3">
                                      <label class="col-form-label" for="txtHorHasta">Hasta</label>
                                      <input class="form-control" name="txtHorHasta" id="txtHorHasta" type="time" value="<?= $set['horafin']; ?>">
                                    </div>
                                  </div>
                                </div>
                              </div> 
                            </div> 
                            <div class="mb-3 row">
                              <p class="col-md-3">Mostrar Precios</p>
                              <div class="col-md-9">
                                <div class="row">
                                  <div class="col-3">
                                    <div class="toggle-flip">
                                      <label>
                                        <input type="checkbox" name="cbxShowPrecios" id="cbxShowPrecios" <?= $showpricheck; ?>><span class="flip-indecator" data-toggle-on="SI" data-toggle-off="NO"></span>
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-8">
                                    <div class="mb-3">
                                      <input class="form-control" id="txtMostrarPrice" name="txtMostrarPrice" type="text" placeholder="Texto a Mostrar" <?= $priceattr; ?> value="<?= $set['textoprecio']; ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label class="col-form-label col-md-3" for="txtTerminos">Términos y Condiciones</label>
                              <div class="col-md-9">
                                <textarea class="form-control" id="txtTerminos" name="txtTerminos" rows="8"><?= $set['terminos']; ?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="mb-3 row">
                              <h5 class="col-md-3">Delivery</h5>
                              <div class="col-md-5">
                                <div class="row">
                                  <div class="col-6">
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="radio" value="S" name="rbtDelivery" <?= $chks; ?>><i class="bi bi-check-circle-fill" style="color: #198754"></i> SI
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-6">
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="radio" value="N" name="rbtDelivery" <?= $chkn; ?>><i class="bi bi-x-circle-fill" style="color: #dc3545"></i> NO
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>                      
                            <div class="card">
                              <div class="card-body">
                                <?php $st = $data['storeserice']; ?>
                                <div class="table-responsive table-wrapper">
                                  <table class="table table-sm" id="tableTiendasDelivery">
                                    <thead>
                                      <th>Tienda</th>
                                      <th width="100">Envio S/</th>
                                      <th width="100" class="text-center">Estado </th>
                                    </thead>
                                    <tbody>
                                      <?php for($t = 0 ; $t < count($st); $t++) {
                                        $dvyCheck = $st[$t]['delivery'] == 1 ? " checked " : "";
                                      ?>
                                      <tr>
                                        <td>
                                          <input type="hidden" name="tiendas[<?= $t; ?>][codigo]" value="<?= $st[$t]['idtnd']; ?>"> <?= $st[$t]['nomtnd']; ?>
                                        </td>
                                        <td>
                                          <input type="text" class="form-control form-control-sm valid validNumber" name="tiendas[<?= $t; ?>][monto]" value=" <?= $st[$t]['envio']; ?>" placeholder="Monto" onkeypress="return controlTag(event);">
                                        </td>
                                        <td class="text-center">
                                          <div class="toggle lg">
                                            <label>
                                              <input type="checkbox" name="tiendas[<?= $t; ?>][estado]" <?= $dvyCheck ?>><span class="button-indecator"></span>
                                            </label>
                                          </div>
                                        </td>
                                      </tr>                                  
                                      <?php } ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>                      
                          </div>
                        </div>
                        <div class="tile-footer">
                          <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                      </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php

footerAdmin($data);
?>

<script>
     $('#demoSelect').select2();
  </script>