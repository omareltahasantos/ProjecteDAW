<!--
<div class="modal fade" id="updateModalCateogoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content d-block">
            <div class="modal-header  d-block">
              <h5 class="modal-title text-center" id="exampleModalLabel" >Categoria</h5>
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
                  
                    <input type="hidden" class="form-control" placeholder="Enter Id" id="id_categoria" name="id_categoria" value="" >
                
                 
                    <div class="form-group">
                      <label for="id">Categoria: </label>
                      <select class="form-control" id="category">
                             
                      </select>
                    </div>
                 </div>
               </div>
                <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
                  <div class="col-md-6" id="mensajeUpdateCategoria">
                  <div class="circle-loader">
                      <div class="checkmark draw"></div>
                  </div>
                  </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal" id="cerrarUpdateCategoria">Cerrar</button>
              <button type="button" class="btn btn-primary" id="guardarCategoria">Guardar</button>
            </div>
          </div>
        </div>
      </div>-->

      
<div class="modal fade" id="updateModalGaleria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content d-block">
      <div class="modal-header d-block ">
        <h5 class="modal-title text-center" id="exampleModalLabel">Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row m-3">
            <div class="col-md-12">
              <h4 class="text-left text-center" id="titleVideogameGaleria"></h2>
            </div>
        </div> 
        <div class="row pl-3 h-100 justify-content-center align-items-center">
          <div class="col-md-4">
          <input type="hidden" class="form-control" placeholder="Enter Id" id="id_galeria" name="id_galeria" value="" >
           <div class="form-group">
                <label for="id">Foto</label>
                <input type="file"  id="fotoUpdate" name="adjunto" accept=".pdf,.jpg,.png" multiple>
                
              </div>
          </div>
        </div>
        <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
          <div class="col-md-6" id="mensajeUpdateGaleria">
          <div class="circle-loader">
              <div class="checkmark draw"></div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="cerrarUpdateGaleria">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardarUpdateGaleria">Guardar</button>
      </div>
    </div>
  </div>
</div>