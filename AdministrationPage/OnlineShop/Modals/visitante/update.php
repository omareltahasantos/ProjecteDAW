<!--
<div class="modal fade" id="updateModalCateogoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content d-block">
            <div class="modal-header  d-block">
              <h5 class="modal-title text-center" id="exampleModalLabel" >Visitante</h5>
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
                  
                    <input type="hidden" class="form-control" placeholder="Enter Id" id="id_Visitante" name="id_Visitante" value="" >
                
                 
                    <div class="form-group">
                      <label for="id">Visitante: </label>
                      <select class="form-control" id="category">
                             
                      </select>
                    </div>
                 </div>
               </div>
                <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
                  <div class="col-md-6" id="mensajeUpdateVisitante">
                  <div class="circle-loader">
                      <div class="checkmark draw"></div>
                  </div>
                  </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal" id="cerrarUpdateVisitante">Cerrar</button>
              <button type="button" class="btn btn-primary" id="guardarVisitante">Guardar</button>
            </div>
          </div>
        </div>
      </div>-->

      
<div class="modal fade" id="updateModalVisitante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content d-block">
      <div class="modal-header d-block">
        <h5 class="modal-title text-center" id="exampleModalLabel">Visitantes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row m-3">
            <div class="col-md-12">
              <h4 class="text-left text-center" id="nombreVisitante"></h2>
            </div>
        </div> 
        <div class="row pl-3 h-100 justify-content-center align-items-center">
          <div class="col-md-6">
           <input type="hidden" class="form-control" placeholder="Enter Id" id="id_visitante" name="id_visitante" value="" >
            <div class="form-group">
                <label for="id">Nombre:</label>
                <input type="text" class="form-control" placeholder="Enter user" id="nombreVisitante2" name="nombreVisitante" value="" readonly >
              </div>
          </div>
          <div class="col-md-6">
           
              <div class="form-group">
                <label for="id">Email:</label>
                <input type="text" class="form-control" placeholder="Enter email" id="emailVisitante" name="emailVisitante" value="" readonly>
              </div>
          </div>
        </div>
        <div class="row pl-3 h-100 justify-content-center align-items-center">
          <div class="col-md-6">
            <div class="form-group">
                <label for="id">Telefono:</label>
                <input type="text" class="form-control" placeholder="Enter user" id="telefonoVisitante" name="telefonoVisitante" value="" readonly>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="id">Rol:</label>
                
                <select class="form-control" id="RolVisitanteUpdate">
                   <option value="admin">Admin</option>
                   <option value="cliente">Cliente</option>
                   <option value="visitante">Visitante</option>
                </select>
              </div>
          </div>
        </div>
        <div class="row pl-3 h-100 justify-content-center align-items-center pb-3 pt-3">
          <div class="col-md-6" id="mensajeUpdateVisitante">
          <div class="circle-loader">
              <div class="checkmark draw"></div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" id="cerrarUpdateVisitante">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardarUpdateVisitante">Guardar</button>
      </div>
    </div>
  </div>
</div>