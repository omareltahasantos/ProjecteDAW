//CARGA TABLA VIDEOJUEGO///////////////
function cargaGaleria(){ //Carga la tabla Videojuegos de forma dinamica cada segundo, por si se hace un cambio salga sin recargar la pagina
    $.ajax({
      method:'GET',
      url: "php/Galeria/cargaTablaGaleria.php",
      success: function(data) {
          $("#cargaGaleria").html(data);
          }
          
  
  });
  }
  setInterval(cargaGaleria,500);

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
        var foto=$('#fotoUpdate').val(); 
        var pos = foto.lastIndexOf("\x5c"); //Esto se hace porque de normal te devuelve una ruta sin comillas y con eso se ponen
       
        var nomFich;
        if (pos > 0) {
          nomFich = foto.substr( pos + 1 ) ; //Esto me va a dar el nombre de la imagen para meterla en la bd
        }
        splitImagen = nomFich.split(".");
        splitbueno = splitImagen[0];
   
        $.ajax({
          url: "php/Galeria/updateGaleria.php?id_galeria="+ id+"&foto="+splitbueno,
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
  $(document).on("click","#guardarInsertGaleria",function(){
   
    var id_juego=$('#id_juegoGaleria').val();   
    var foto=$('#foto').val(); 
    var pos = foto.lastIndexOf("\x5c"); //Esto se hace porque de normal te devuelve una ruta sin comillas y con eso se ponen
   
    var nomFich;
    if (pos > 0) {
      nomFich = foto.substr( pos + 1 ) ; //Esto me va a dar el nombre de la imagen para meterla en la bd
    }
    splitImagen = nomFich.split(".");
    splitbueno = splitImagen[0];

    //alert(id_juego);
    //alert(splitbueno);
   
       $.ajax({
        url: "php/Galeria/insertGaleria.php?id_juego="+ id_juego+"&foto="+splitbueno,
        method:'GET',
        success: function(data) {
            
            $("#mensajeInsertGaleria").html(data);
            
            }
           

    });
    
  })
  ////CERRAR INSERT limpia los todos los campos y el mensaje succesfully
  $(document).on("click","#cerrarInsertGaleria",function(){
    $("#mensajeInsertGaleria").html("");
    $('#id_juegoGaleria').val("");
    $('#foto').val("");
    
  })

  

//Deteccion evento al dar click meter nuevos videojuegos

$(document).on("click","#addGaleria",function(){
  //alert("Estoy insertando");
    
  $.ajax({
    url: "php/Galeria/selectids.php",
    method:'GET',
    success: function(data) {
        
        $("#id_juegoGaleria").html(data);
        
        }
       

});

})