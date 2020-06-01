//CARGA TABLA VIDEOJUEGO///////////////
function cargaCategorias(){ //Carga la tabla Videojuegos de forma dinamica cada segundo, por si se hace un cambio salga sin recargar la pagina
    $.ajax({
      method:'GET',
      url: "php/Categorias/cargaTablaCategorias.php",
      success: function(data) {
          $("#cargaCategorias").html(data);
          }
          
  
  });
  }
  setInterval(cargaCategorias,500);

  //Se detecta el boton con clase editar y al hacer click coge el valor del atributo id del boton que se este seleccionando y hacemos una conexioon ajax para que nos devuelva los valores con ese id
  $(document).on("click","button.editarCategoria",function(){  
   
   
      $product_id = $(this).attr('id');
     
//Carga el select de categorias
      $.ajax({
        url: "php/Categorias/selectCategory.php",
        method:'GET',
        success: function(data) {
            
            $("#nombreCategoriaUpdate").html(data);
            
            }
           
    
    });

      $.ajax({
        url: "php/Categorias/selectCategoriasid.php?id_categoria="+$product_id,
        method:'GET',
        dataType:"json",
        success: function(data) {
          $('#titleCategoria').html(data.nombre);
            $('#id_categoria').val(data.id_categoria);
           $("#nombreCategoriaUpdate> option[value='"+data.nombre+"']").attr('selected', 'selected');
    
           
            
            }
           

    });
  
  })
  ////////////BOTON GUARDAR EDICION AL EDITAR////////////
    //Esta funcion al darle al boton guardar guardara todos los datos de los inputs en la tabla videojuegos
    $(document).on("click", "#guardarUpdateCategoria",function(){
     
      
        var id= $('#id_categoria').val();    
        var category= $('#nombreCategoriaUpdate').val(); 
       
        $.ajax({
          url: "php/Categorias/updateCategorias.php?id_categoria="+ id+"&category="+category,
          method:'GET',
          success: function(data) { 
              console.log(data); 
              $("#mensajeUpdateCategoria").html(data);
              
              }
      });
    })
    $(document).on("click","#cerrarUpdateCategoria",function(){
      $("#mensajeUpdateCategoria").html("");
    })
    /////////BOTON ELIMINAR VIDEOJUEGO////
    $(document).on("click","button.deleteCategoria",function(){ 
      $product_id_delete = $(this).attr('id'); //Detecta el id del boton editar que es el id del registro
      

      $.ajax({
        url: "php/Categorias/deleteCategorias.php?id_categoria="+ $product_id_delete,
        method:'GET',
        success: function(data) {
            console.log(data);
            
            alert(data);
            
            }

         
           

    });
    
  })
  /////GUARDAR INSERCION VIDEOJUEGO

  ////CERRAR INSERT limpia los todos los campos y el mensaje succesfully
  $(document).on("click","#cerrarInsertCategoria",function(){
    $("#mensajeInsertCategoria").html("");
    $('#nombreCategoria').val("");
    
    
  })

  



  function validateInsertCategoria(){

    var  categoria =$("#nombreCategoria").val();
  
     var cont=0;
     categoriaSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
  
     $("#mensajeErrorInsertCategoria").html("");
     
     if(categoria===""){
         //$("#inputUserRegister").css("border", "2px solid red")
         $("#mensajeErrorInsertCategoria").append("El campo categoria esta vacio <br>");
         cont++;
     }
     if(categoriaSinEspacios.test(categoria)){
         $("#mensajeErrorInsertCategoria").append("El campo categoria no puede contener espacios <br>");
         cont++;
     }
      if($.isNumeric(categoria)) {
        $("#mensajeErrorInsertCategoria").append("El campo categoria no puede ser un numero <br>");
        cont++;
      }
     if(cont==0){
         $("#nombreCategoria").css("border", "2px solid green")
         return true;
     }else{
         $("#nombreCategoria").css("border", "2px solid red")
     }
   
  }

  function validateAllInsert(){
    verificaCategoria = validateInsertCategoria();
   
    
    if(verificaCategoria== true ){
      var nombre=$('#nombreCategoria').val();   
   
      $.ajax({
       url: "php/Categorias/insertCategorias.php?nombre="+ nombre,
       method:'GET',
       success: function(data) {
           
           $("#mensajeInsertCategoria").html(data);
           
           }
          

   });
   
    }else{
      $("#mensajeErrorInsertCategoria").append("El campo categoria debe validar <br>");
    }
  }

  $(document).on("click","#guardarInsertCategoria",validateAllInsert);


  
  

  $(document).ready(function(){
    $("#nombreCategoria").blur(validateInsertCategoria);
   
   
})