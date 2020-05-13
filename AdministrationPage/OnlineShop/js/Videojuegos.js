//CARGA TABLA VIDEOJUEGO///////////////
function cargaVideojuegos(){ //Carga la tabla Videojuegos de forma dinamica cada segundo, por si se hace un cambio salga sin recargar la pagina
    $.ajax({
      method:'GET',
      url: "php/Videojuegos/cargaTablaProductos.php",
      success: function(data) {
          $("#cargaProductos").html(data);
          }
          
  
  });
  }
  setInterval(cargaVideojuegos,500);
  ////////BOTON EDITAR DE VIDEOJUEGOS//////////////////
  //Se detecta el boton con clase editar y al hacer click coge el valor del atributo id del boton que se este seleccionando y hacemos una conexioon ajax para que nos devuelva los valores con ese id
  $(document).on("click","button.editar",function(){  

    input =  $("#image");
    input.replaceWith(input.val('').clone(true));
      $product_id = $(this).attr('id'); 
     

      $.ajax({
        url: "php/Videojuegos/selectproductoid.php?id_juego="+ $product_id,
        method:'GET',
        dataType:"json",
        success: function(data) {
         
            $('#id_juego').val(data.id_juego);
            $('#title').val(data.titulo);
            $('#category').val(data.categoria);
            $('#price').val(data.precio);
            $("#status> option[value='"+data.estado+"']").attr('selected', 'selected');
            $("#platform> option[value='"+data.plataforma+"']").attr('selected', 'selected');
            $('#stock').val(data.stock);
            $("#titleVideogame").html(data.titulo);
           
            
            }
           

    });
  
  })
  ////////////BOTON GUARDAR EDICION AL EDITAR////////////
    //Esta funcion al darle al boton guardar guardara todos los datos de los inputs en la tabla videojuegos
    $(document).on("click", "#guardar",function(){
     
        var rutaImagen = $("#imagen").val();
        var pos = rutaImagen.lastIndexOf("\x5c"); //Esto se hace porque de normal te devuelve una ruta sin comillas y con eso se ponen
       
        var nomFich;
        if (pos > 0) {
          nomFich = rutaImagen.substr( pos + 1 ) ; //Esto me va a dar el nombre de la imagen para meterla en la bd
        }
        ////Capto el valor de cada uno de los inputs
        var id= $('#id_juego').val(); 
        var title=$('#title').val();    
        var category= $('#category').val(); 
        var price= $('#price').val();  
        var status= $("#status").val();
        var platform=$("#platform").val();
        var stock= $('#stock').val();

        $.ajax({
          url: "php/Videojuegos/updateProducto.php?id_juego="+ id+"&title="+title+"&category="+category+"&price="+price+"&status="+status+"&platform="+platform+"&stock="+stock+"&image="+nomFich,
          method:'GET',
          success: function(data) {
              console.log(data); 
              $("#mensajeUpdate").html(data);
              
              }
      });
    })
    $(document).on("click","#cerrarUpdate",function(){
      $("#mensajeUpdate").html("");
    })
    /////////BOTON ELIMINAR VIDEOJUEGO////
    $(document).on("click","button.delete",function(){ 
      $product_id_delete = $(this).attr('id'); //Detecta el id del boton editar que es el id del registro
     

      $.ajax({
        url: "php/Videojuegos/deleteProducto.php?id_juego="+ $product_id_delete,
        method:'GET',
        success: function(data) {
            console.log(data);
            
         
            
            }
           

    });
     
  })
  /////GUARDAR INSERCION VIDEOJUEGO
  $(document).on("click","#guardarInsert",function(){
    //Captamos el valor de los inputs para insertarlos en la base de datos
    var id= $('#id_jueg').val();
    var title=$('#titl').val();   
    var category= $('#categor').val(); 
    var price= $('#pric').val();   
    var status= $("#statu").val();
    var platform=$("#platfor").val();  
    var stock= $('#stoc').val();
    var rutaImagen = $("#image").val();
    var pos = rutaImagen.lastIndexOf("\x5c");
     var nomFich;
       if (pos > 0) {
         nomFich = rutaImagen.substr( pos + 1 ) ; 
       }
       
       $.ajax({
        url: "php/Videojuegos/insertProducto.php?id_juego="+ id+"&title="+title+"&category="+category+"&price="+price+"&status="+status+"&platform="+platform+"&stock="+stock+"&image="+nomFich,
        method:'GET',
        success: function(data) {
            
            $("#mensajeInsert").html(data);
            
            }
           

    });
    
  })
  ////CERRAR INSERT limpia los todos los campos y el mensaje succesfully
  $(document).on("click","#cerrarInsert",function(){
    $("#mensajeInsert").html("");
    id= $('#id_jueg').val("");
    title=$('#titl').val("");   
   category= $('#categor').val(""); 
    price= $('#pric').val("");  
   status= $("#statu").val("");
    platform=$("#platfor").val("");
   stock= $('#stoc').val("");
   rutaImagen = $("#image").val("");
    
    
  })

  

