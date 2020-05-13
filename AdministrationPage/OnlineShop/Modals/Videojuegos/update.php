<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content d-block">
            <div class="modal-header  d-block">
              <h5 class="modal-title text-center" id="exampleModalLabel" >Videojuego</h5>
              </button>
            </div>
            <div class="modal-body ">
            <div class="row m-3">
              <div class="col-md-12">
                  <h2 class="text-left text-center" id="titleVideogame"></h2>
              </div>
            </div> 
             <div class="row pl-3 h-100 justify-content-center align-items-center">
                 <div class="col-md-3">
                  
                    <input type="hidden" class="form-control" placeholder="Enter Id" id="id_juego" name="id_juego" value="" >
                
                  <div class="form-group">
                    <label for="title">Titulo:</label>
                    <input type="text" class="form-control" placeholder="Enter title" id="title">
                  </div>
                  <div class="form-group">
                      <label for="id">Categoria: </label>
                      <input type="text" class="form-control" placeholder="Enter category" id="category">
                    </div>
                    <div class="form-group">
                      <label for="id">Plataforma: </label>
                      <select class="form-control" id="platform">
                        <option value="PS4">PS4</option>
                        <option value="XBOX">XBOX</option>
                        <option value="PC">PC</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1 pt-1">
                    <div class="form-group">
                        <label for="id">Precio: </label>
                        <input type="text" class="form-control" placeholder="Enter price" id="price">
                      </div>
                      <div class="form-group">
                        <label for="id">Stock: </label>
                        <input type="text" class="form-control" placeholder="Enter stock" id="stock">
                      </div>
                      <div class="form-group">
                        <label for="id">Estado: </label>
                        <select class="form-control" id="status">
                              <option value="Espera lanzamiento">En Lanzamiento</option>
                              <option value="disponible">Disponible</option>
                              <option value="agotado">Agotado</option>
                            </select>
                      </div>
                
                 </div>
              </div>
              <div class="row">
                <div class="col-md-3 offset-md-3">
                  <div class="form-group">
                          <label for="id">Imagen: </label>
                          <input type="file"  id="imagen" name="adjunto" accept=".pdf,.jpg,.png" multiple>
                  </div>
                </div>
              </div>
                <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
                  <div class="col-md-6" id="mensajeUpdate">
                  <div class="circle-loader">
                      <div class="checkmark draw"></div>
                  </div>
                  </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal" id="cerrarUpdate">Cerrar</button>
              <button type="button" class="btn btn-primary" id="guardar">Guardar</button>
            </div>
          </div>
        </div>
      </div>