//CARGA TABLA VIDEOJUEGO///////////////
function cargaTrailer(){ //Carga la tabla Videojuegos de forma dinamica cada segundo, por si se hace un cambio salga sin recargar la pagina
    $.ajax({
      method:'GET',
      url: "php/Trailer/cargaTablaTrailer.php",
      success: function(data) {
          $("#cargaTrailer").html(data);
          }
          
  
  });
  }
  setInterval(cargaTrailer,500);

  //Se detecta el boton con clase editar y al hacer click coge el valor del atributo id del boton que se este seleccionando y hacemos una conexioon ajax para que nos devuelva los valores con ese id
  $(document).on("click","button.editarGaleria",function(){  
   
   
      $product_id = $(this).attr('id');
  

    $.ajax({
      url: "php/Galeria/selectName.php?id_galeria="+$product_id,
      method:'GET',
      success: function(data) {
          
          $("#titleVideogameGaleria").html(data);
         //alert(data)
          }
        

    });
   
      $.ajax({
        url: "php/Galeria/selectGaleriaid.php?id_galeria="+$product_id,
        method:'GET',
        dataType:"json",
        success: function(data) {
            //console.log(data.id_galeria);
            $('#id_galeria').val(data.id_galeria);

    
           
            
            }
           

    });
 
  })
  ////////////BOTON GUARDAR EDICION AL EDITAR////////////
    //Esta funcion al darle al boton guardar guardara todos los datos de los inputs en la tabla videojuegos
    $(document).on("click", "#guardarUpdateGaleria",function(){
     
      
        var id=  $('#id_galeria').val(); 
        var trailer=$('#trailerUpdate').val(); 
        var pos = trailer.lastIndexOf("\x5c"); //Esto se hace porque de normal te devuelve una ruta sin comillas y con eso se ponen
       
        var nomFich;
        if (pos > 0) {
          nomFich = trailer.substr( pos + 1 ) ; //Esto me va a dar el nombre de la imagen para meterla en la bd
        }
        splitImagen = nomFich.split(".");
        splitbueno = splitImagen[0];
   
        $.ajax({
          url: "php/Galeria/updateGaleria.php?id_galeria="+ id+"&trailer="+splitbueno,
          method:'GET',
          success: function(data) { 
              console.log(data); 
              $("#mensajeUpdateGaleria").html(data);
              
              }
      });
    })
    $(document).on("click","#cerrarUpdateGaleria",function(){
      $("#mensajeUpdateGaleria").html("");
    })
    /////////BOTON ELIMINAR VIDEOJUEGO////
    $(document).on("click","button.deleteGaleria",function(){ 
      $product_id_delete = $(this).attr('id'); //Detecta el id del boton editar que es el id del registro
      

      $.ajax({
        url: "php/Galeria/deleteGaleria.php?id_galeria="+ $product_id_delete,
        method:'GET',
        success: function(data) {
            console.log(data);
            
            alert(data);
            
            }

         
           

    });
    
  })
  /////GUARDAR INSERCION VIDEOJUEGO
  $(document).on("click","#guardarInsertTrailer",function(){

    var formData = new FormData();
     var files = $("#trailer")[0].files[0];
     formData.append('file',files);
    alert("ins")
    var id_juego=$('#id_juegoTrailer').val();   
    $.ajax({                        
      type: "post",                 
      url: "php/Trailer/insertTrailer.php",                     
      data: formData, 
      contentType:false,
      processData:false,
      success: function(data)             
      {
       console.log("datos enviados");
       console.log(data);            
      }
  });


   
    /*
    var pos = trailer.lastIndexOf("\x5c"); //Esto se hace porque de normal te devuelve una ruta sin comillas y con eso se ponen
   
    var nomFich;
    if (pos > 0) {
      nomFich = trailer.substr( pos + 1 ) ; //Esto me va a dar el nombre de la imagen para meterla en la bd
    }
    splitImagen = nomFich.split(".");
    splitbueno = splitImagen[0];
    alert(splitbueno);
    //alert(id_juego);
    //alert(splitbueno);
   
       $.ajax({ 
        url: "php/Trailer/insertTrailer.php?id_juego="+ id_juego+"&trailer="+splitbueno,
        method:'GET',
        success: function(data) {
            console.log(data)
           // $("#mensajeInsertTrailer").html(data);
            
            }
           

    });
    */
    
  })
  ////CERRAR INSERT limpia los todos los campos y el mensaje succesfully
  $(document).on("click","#cerrarInsertGaleria",function(){
    $("#mensajeInsertGaleria").html("");
    $('#id_juegoGaleria').val("");
    $('#trailer').val("");
    
  })

  

//Deteccion evento al dar click meter nuevos videojuegos

$(document).on("click","#addTrailer",function(){
  //alert("Estoy insertando");
    
  $.ajax({
    url: "php/Trailer/selectids.php",
    method:'GET',
    success: function(data) {
        
        $("#id_juegoTrailer").html(data);
        
        }
       

});

})