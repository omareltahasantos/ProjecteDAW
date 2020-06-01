<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content d-block">
              <div class="modal-header d-block">
                <h5 class="modal-title text-center" id="exampleModalLabel">Insertar videojuego</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <div class="row m-3">
              <div class="col-md-12">
                  <h2 class="text-left text-center"></h2>
              </div>
            </div> 
             <div class="row pl-3 h-100 justify-content-center align-items-center">
                <div class="col-md-3">
                    <form action="index.html" id="forminsert" >
                        <div class="form-group">
                          <label for="title">Titulo:</label>
                          <input type="text" class="form-control" placeholder="Enter title" id="titl">
                        </div>
                        <div class="form-group">
                            <label for="id">Categoria: </label>
                            <!--<input type="text" class="form-control" placeholder="Enter category" id="categor">-->
                            <select class="form-control" id="categoria">
                             
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="id">Plataforma: </label>
                            <select class="form-control" id="platfor">
                              <option value="PS4">PS4</option>
                              <option value="XBOX">XBOX</option>
                              <option value="PC">PC</option>
                            </select>
                          </div>
                </div>
                 <div class="col-md-3 offset-md-1">
                    <div class="form-group">
                        <label for="id">Precio: </label>
                        <input type="text" class="form-control" placeholder="Enter price" id="pric">
                      </div>
                      <div class="form-group">
                        <label for="id">Stock: </label>
                        <input type="text" class="form-control" placeholder="Enter stock" id="stoc">
                      </div>
                      <div class="form-group">
                        <label for="id">Estado: </label>
                        <select class="form-control" id="statu">
                              <option value="Proximamente">En Lanzamiento</option>
                              <option value="Disponible">Disponible</option>
                              <option value="Agotado">Agotado</option>
                            </select>
                      </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 offset-md-3">
                <div class="form-group">
                        <label for="id">Imagen: </label>
                        <input type="file"  id="image" name="adjunto" accept=".pdf,.jpg,.png" multiple>
                  </div>
                </div>
              </div>
                <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
                  <div class="col-md-6" id="mensajeInsert">
                  <div class="circle-loader">
                      <div class="checkmark draw"></div>
                  </div>
                  </div>
                </div>
              <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
                <div class="col-md-6" id="mensajeErrorInsertTitulo" style="color:red;">
              
                </div>
              </div>
              <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
                <div class="col-md-6" id="mensajeErrorInsertPrecio" style="color:red;">
              
                </div>
              </div>
              <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
                <div class="col-md-6" id="mensajeErrorInsertStock" style="color:red;">
              
                </div>
              </div>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal" id="cerrarInsert">Cerrar</button>
              <button type="button" class="btn btn-primary" id="guardarInsert">Guardar</button>
              </div>
            </div>
          </div>
      </div>