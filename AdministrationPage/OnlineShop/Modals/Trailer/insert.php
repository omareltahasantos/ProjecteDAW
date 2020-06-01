

<div class="modal fade" id="insertModalTrailer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content d-block">
      <div class="modal-header  d-block">
        <h5 class="modal-title text-center" id="exampleModalLabel">Insertar Trailer</h5>
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
          <div class="col-md-5 text-center">
            <div class="form-group">
                <label for="id">Selecciona Juego</label>
                <!--<input type="text" class="form-control" placeholder="Enter id videojuego" id="id_juego">-->
                <select class="form-control" id="id_juegoTrailer">
                             
                 </select>
              </div>
          </div>
          <div class="col-md-5 text-center">
            <form method="post" id="formulario" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="id">Trailer</label>
                 <input type="file" name="trailer" id="trailer">
              </div>
             <!-- <input type="button" id="btn-ingresar" value="Ingresar" />-->
            </form>
          </div>
        </div>
        <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
          <div class="col-md-6" id="mensajeInsertTrailer">
          <div class="circle-loader">
              <div class="checkmark draw"></div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="cerrarInsertTrailer">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardarInsertTrailer">Guardar</button>
      </div>
    </div>
  </div>
</div>