
  <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="addBanner">
            <input type="text" id="txtid" name="txtid">
          <div class="mb-3">
              <div class="form-group">
                <div id="containerGallery">
                  <h4>Imagen</h4>
                </div>
                  <hr>
                  <div id="containerImages">
                    <div class="photo">
                      <div class="prevPhoto prevPortada">
                        <span class="delPhoto notBlock">X</span>
                        <label for="foto"></label>
                        <div>
                          <img name="images" id="images" width="100"> 
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
            <hr>
            <div class="mb-3">
              <h4>Frase</h4>
              <input type="text" class="form-control" id="txtfrase" name="txtfrase " value="">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>  
