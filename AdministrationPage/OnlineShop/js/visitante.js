//CARGA TABLA VIDEOJUEGO///////////////
function cargaVisitante(){ //Carga la tabla Videojuegos de forma dinamica cada segundo, por si se hace un cambio salga sin recargar la pagina
    $.ajax({
      method:'GET',
      url: "php/Visitante/cargaTablaVisitante.php",
      success: function(data) {
          $("#cargaVisitante").html(data);
          }
          
  
  });
  }
  setInterval(cargaVisitante,500);
  ////////BOTON EDITAR DE VIDEOJUEGOS//////////////////
  //Se detecta el boton con clase editar y al hacer click coge el valor del atributo id del boton que se este seleccionando y hacemos una conexioon ajax para que nos devuelva los valores con ese id
  $(document).on("click","button.editarVisitante",function(){  

   
      product_id = $(this).attr('id');
//Carga el select de categorias
      $.ajax({
        url: "php/Visitante/selectVisitante.php?id_user="+product_id,
        method:'GET',
        success: function(data) {
            
            $("#nombreVisitante").html(data);
            
            }
           
    
    });

      $.ajax({
        url: "php/Visitante/selectVisitanteid.php?id_user="+ product_id,
        method:'GET',
        dataType:"json",
        success: function(data) {
        
            $('#id_visitante').val(data.id_user);
            $('#nombreVisitante2').val(data.nombre);
            $('#emailVisitante').val(data.email);
            $('#telefonoVisitante').val(data.telefono);
            $("#RolVisitanteUpdate> option[value='"+data.rol+"']").attr('selected', 'selected');   
            }
           

    });
  
  })
  ////////////BOTON GUARDAR EDICION AL EDITAR////////////
    //Esta funcion al darle al boton guardar guardara todos los datos de los inputs en la tabla videojuegos
    $(document).on("click", "#guardarUpdateVisitante",function(){
     
        ////Capto el valor de cada uno de los inputs
        var id= $('#id_visitante').val(); 
    
        var nombre=$('#nombreVisitante2').val();    
        var email= $('#emailVisitante').val(); 
        var telefono= $('#telefonoVisitante').val();  
        var rol=$("#RolVisitanteUpdate").val();

        $.ajax({
          url: "php/Visitante/updateVisitante.php?id_user="+ id+"&nombre="+nombre+"&email="+email+"&telefono="+telefono+"&rol="+rol,
          method:'GET',
          success: function(data) { 
              console.log(data); 
              $("#mensajeUpdateVisitante").html(data);
              
              }
      });
    })
    $(document).on("click","#cerrarUpdateVisitante",function(){
      $("#mensajeUpdateVisitante").html("");
    
    })
    /////////BOTON ELIMINAR VIDEOJUEGO////
    $(document).on("click","button.deleteVisitante",function(){ 
      $product_id_delete = $(this).attr('id'); //Detecta el id del boton editar que es el id del registro
      

      $.ajax({
        url: "php/Visitante/deleteVisitante.php?id_user="+ $product_id_delete,
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

$(document).on("click","#add",function(){
  //alert("Estoy insertando");
    
  $.ajax({
    url: "php/Videojuegos/selectCategory.php",
    method:'GET',
    success: function(data) {
        
        $("#categoria").html(data);
        
        }
       

});

})