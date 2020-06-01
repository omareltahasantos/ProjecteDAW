//CARGA TABLA VIDEOJUEGO///////////////
function cargaCliente(){ //Carga la tabla Videojuegos de forma dinamica cada segundo, por si se hace un cambio salga sin recargar la pagina
    $.ajax({
      method:'GET',
      url: "php/Cliente/cargaTablaCliente.php",
      success: function(data) {
          $("#cargaClientes").html(data);
          }
          
  
  });
  }
  setInterval(cargaCliente,500);
  ////////BOTON EDITAR DE VIDEOJUEGOS//////////////////
  //Se detecta el boton con clase editar y al hacer click coge el valor del atributo id del boton que se este seleccionando y hacemos una conexioon ajax para que nos devuelva los valores con ese id
  $(document).on("click","button.editarCliente",function(){  

   
      product_id = $(this).attr('id');
      //Carga el select de categorias
      $.ajax({
        url: "php/Cliente/selectCliente.php?id_user="+product_id,
        method:'GET',
        success: function(data) {
            
            $("#nombreCliente").html(data);
            
            }
           
    
    });

      $.ajax({
        url: "php/Cliente/selectClienteid.php?id_user="+ product_id,
        method:'GET',
        dataType:"json",
        success: function(data) {
        
            $('#id_cliente').val(data.id_user);
            $('#nombreCliente2').val(data.nombre);
            $('#emailCliente').val(data.email);
            $('#telefonoCliente').val(data.telefono);
            $("#RolClienteUpdate> option[value='"+data.rol+"']").attr('selected', 'selected');   
            }
           

    });
  
  })
  ////////////BOTON GUARDAR EDICION AL EDITAR////////////
    //Esta funcion al darle al boton guardar guardara todos los datos de los inputs en la tabla videojuegos
    $(document).on("click", "#guardarUpdateCliente",function(){
      
        ////Capto el valor de cada uno de los inputs
        var id= $('#id_cliente').val(); 
    
        var nombre=$('#nombreCliente2').val();    
        var email= $('#emailCliente').val(); 
        var telefono= $('#telefonoCliente').val();  
        var rol=$("#RolClienteUpdate").val();

        $.ajax({
          url: "php/Cliente/updateCliente.php?id_user="+ id+"&nombre="+nombre+"&email="+email+"&telefono="+telefono+"&rol="+rol,
          method:'GET',
          success: function(data) { 
              console.log(data); 
              $("#mensajeUpdateCliente").html(data);
              
              }
      });
    })
    $(document).on("click","#cerrarUpdateCliente",function(){
      $("#mensajeUpdateCliente").html("");
    
    })
    /////////BOTON ELIMINAR VIDEOJUEGO////
    $(document).on("click","button.deleteCliente",function(){ 
      $product_id_delete = $(this).attr('id'); //Detecta el id del boton editar que es el id del registro
      

      $.ajax({
        url: "php/Cliente/deleteCliente.php?id_user="+ $product_id_delete,
        method:'GET',
        success: function(data) {
            console.log(data);
            
            if(data=="El registro ha sido eliminado correctamente"){
              alert(data);
            }else{
              alert(data);
            }
            
            }

         
           

    });
    
  })
  

//Deteccion evento al dar click meter nuevos videojuegos

