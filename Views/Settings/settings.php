<?php
headerAdmin($data);
$set = $data['settings'];
$logo = $set[5]['info_adicional'];
$fotoRemove = 0;
$imgPortada = $logo != "" ? '<img id="img" src="'.media()."/images/".$logo.'">' : "";
?>
<main class="app-content">
  <!-- <?= dep($set) ?> -->
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
                  <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#home">Información Adicional</a></li>
                  <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#profile">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Disabled</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade active show" id="home">
                    <!-- fin de footer, formulario -->
                    <div class="card border-info">
                        <div class="card-body">
                          <form>
                          <input type="hidden" id="foto_actual" name="foto_actual" value="<?= $logo ?>">
                          <input type="hidden" id="foto_remove" name="foto_remove" value="<?= $fotoRemove; ?>">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputEmail1">Contáctanos</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend"><span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span></div>
                                          <input class="form-control" id="exampleInputAmount" type="text" value="<?= $set[2]['info_adicional']?>" >
                                        </div>
                                      <small class="form-text text-muted" id="emailHelp">Correo de contactanos</small>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputPassword1">Hora de Atención</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend"><span class="input-group-text"><i class="bi bi-clock-fill"></i></span></div>
                                          <input class="form-control" id="exampleInputAmount" type="text" value="<?= $set[0]['info_adicional']?>" >
                                        </div>
                                    <small class="form-text text-muted" id="emailHelp">Hora AM - PM</small>
                                    </div>
                                    <div class="mb-3">
                                      <h3>Redes sociales</h3>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputPassword1">Facebook</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend"><span class="input-group-text"><i class="bi bi-facebook"></i></span></div>
                                          <input class="form-control" id="exampleInputAmount" type="text" value="<?= $set[1]['info_adicional']?>">
                                        </div>
                                      <small class="form-text text-muted" id="emailHelp">Link</small>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleInputPassword1">Instagram</label>
                                      <div class="input-group">
                                          <div class="input-group-prepend"><span class="input-group-text"><i class="bi bi-instagram"></i></span></div>
                                          <input class="form-control" id="exampleInputAmount" type="text" value="<?= $set[3]['info_adicional']?>">
                                      </div>
                                      <small class="form-text text-muted" id="emailHelp">Link</small>
                                    </div>
                                    <div class="mb-3">
                                      <h4>Banner</h4>
                                      <select class="form-control" id="demoSelect" multiple="">
                                        <optgroup label="Select Cities">
                                          <option>Imagen1.png</option>
                                          <option>Imagen2.png</option>
                                          <option>Imagen3.png</option>
                                          <option>Imagen4.png</option>
                                          <option>Imagen5.png</option>
                                        </optgroup>
                                      </select>
                                      <small class="form-text text-muted" id="emailHelp">Lista de Banner</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">Eslogan</label>
                                    <input class="form-control" id="exampleInputPassword1" type="text" placeholder="Frase" 
                                    value="<?= $set[4]['info_adicional']?>">
                                    <small class="form-text text-muted" id="emailHelp">Frase de la página</small>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">Color</label>
                                    <input class="form-control" id="exampleInputPassword1" type="color" placeholder="Codigo de color" 
                                    value="<?= $set[6]['info_adicional']?>">
                                    <small class="form-text text-muted" id="emailHelp">Codigo de Color</small>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">Color de Menú</label>
                                    <input class="form-control" id="exampleInputPassword1" type="color" placeholder="Codigo del color" 
                                    value="<?= $set[7]['info_adicional']?>">
                                    <small class="form-text text-muted" id="emailHelp">Codigo de Menú</small>
                                  </div>
                                  <div class="mb-3">
                                    <div class="row">
                                      <div class="form-group col-md-12">
                                        <div id="containerGallery">
                                          <h4>ICONO</h4>
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
                              </div>
                          </form>
                   
                        </div>
                    </div>
                  </div>
                  <!-- fin de footer -->
                  <div class="tab-pane fade" id="profile">
                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                  </div>
                  <!-- <div class="tab-pane fade" id="dropdown1">
                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                  </div>
                  <div class="tab-pane fade" id="dropdown2">
                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                  </div> -->
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