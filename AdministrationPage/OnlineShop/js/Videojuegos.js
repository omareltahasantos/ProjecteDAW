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
//Carga el select de categorias
      $.ajax({
        url: "php/Videojuegos/selectCategory.php",
        method:'GET',
        success: function(data) {
            
            $("#category").append(data);
            
            }
           
    
    });

      $.ajax({
        url: "php/Videojuegos/selectproductoid.php?id_juego="+ $product_id,
        method:'GET',
        dataType:"json",
        success: function(data) {
         
            $('#id_juego').val(data.id_juego);
            $('#title').val(data.titulo);
            $("#category> option[value='"+data.categoria+"']").attr('selected', 'selected');
            $('#price').val(data.precio);
            $("#status> option[value='"+data.estado+"']").attr('selected', 'selected');
            $("#platform> option[value='"+data.plataforma+"']").attr('selected', 'selected');
            $('#stock').val(data.stock);
            $("#titleVideogame").html(data.titulo);
           
            
            }
           

    });
  
  })

    /////////BOTON ELIMINAR VIDEOJUEGO////
    $(document).on("click","button.delete",function(){ 
      $product_id_delete = $(this).attr('id'); //Detecta el id del boton editar que es el id del registro
      

      $.ajax({
        url: "php/Videojuegos/deleteProducto.php?id_juego="+ $product_id_delete,
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
  /////GUARDAR INSERCION VIDEOJUEGO



  

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

function validateInsertTitulo(){

  var  titulo =$("#titl").val();

   var cont=0;
   tituloSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array

   $("#mensajeErrorInsertTitulo").html("");
   
   if(titulo===""){
       //$("#inputUserRegister").css("border", "2px solid red")
       $("#mensajeErrorInsertTitulo").append("El campo titulo esta vacio <br>");
       cont++;
   }
   if(tituloSinEspacios.test(titulo)){
       $("#mensajeErrorInsertTitulo").append("El campo titulo no puede contener espacios <br>");
       cont++;
   }
    if($.isNumeric(titulo)) {
      $("#mensajeErrorInsertTitulo").append("El campo titulo no puede ser un numero <br>");
      cont++;
    }
   if(cont==0){
       $("#titl").css("border", "2px solid green")
       return true;
   }else{
       $("#titl").css("border", "2px solid red")
   }
 
}

function validateInsertPrecio(){

  var  precio =$("#pric").val();

   var cont=0;
   pricSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array

   $("#mensajeErrorInsertPrecio").html("");
   
   if(precio===""){
       //$("#inputUserRegister").css("border", "2px solid red")
       $("#mensajeErrorInsertPrecio").append("El campo precio esta vacio <br>");
       cont++;
   }
   if(pricSinEspacios.test(precio)){
       $("#mensajeErrorInsertPrecio").append("El campo precio no puede contener espacios <br>");
       cont++;
   }
    if(!($.isNumeric(precio))) {
      $("#mensajeErrorInsertPrecio").append("El campo precio debe ser un numero <br>");
      cont++;
    }
   if(cont==0){
       $("#pric").css("border", "2px solid green")
       return true;
   }else{
       $("#pric").css("border", "2px solid red")
   }
 
}

function validateInsertStock(){

  var  stock =$("#stoc").val();

   var cont=0;
   stockSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array

   $("#mensajeErrorInsertStock").html("");
   
   if(stock===""){
       //$("#inputUserRegister").css("border", "2px solid red")
       $("#mensajeErrorInsertStock").append("El campo stock esta vacio <br>");
       cont++;
   }
   if(stockSinEspacios.test(stock)){
       $("#mensajeErrorInsertStock").append("El campo stock no puede contener espacios <br>");
       cont++;
   }
    if(!($.isNumeric(stock))) {
      $("#mensajeErrorInsertStock").append("El campo stock debe ser un numero <br>");
      cont++;
    }
   if(cont==0){
       $("#stoc").css("border", "2px solid green")
       return true;
   }else{
       $("#stoc").css("border", "2px solid red")
   }
 
}
function validateAllInsert(){
  verificaTitulo = validateInsertTitulo();
  verificaPrecio= validateInsertPrecio();
  verificaStock = validateInsertStock();

  if(verificaTitulo== true && verificaPrecio == true && verificaStock == true ){
    var id= $('#id_jueg').val();
    var title=$('#titl').val();   
    var category= $('#categoria').val(); 
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
       splitImagen = nomFich.split(".");
       splitbueno = splitImagen[0];
       $.ajax({
        url: "php/Videojuegos/insertProducto.php?id_juego="+ id+"&title="+title+"&category="+category+"&price="+price+"&status="+status+"&platform="+platform+"&stock="+stock+"&image="+splitbueno,
        method:'GET',
        success: function(data) {
            
            $("#mensajeInsert").html(data);
            
            }
           

    });



  }else{
    $("#mensajeErrorInsertStock").append("Los campos no validan <br>");
  }
}

$(document).on("click","#guardarInsert",validateAllInsert);

$(document).on("click","#cerrarInsert",function(){
  $("#mensajeInsert").html("");
  id= $('#id_jueg').val("");
  title=$('#titl').val("");   
 category= $('#categoria').val(""); 
  price= $('#pric').val("");  
 status= $("#statu").val("");
  platform=$("#platfor").val("");
 stock= $('#stoc').val("");
 rutaImagen = $("#image").val("");
  
  
})

function validateUpdateTitulo(){

  var  titulo =$("#title").val();

   var cont=0;
   tituloSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array

   $("#mensajeErrorUpdateTitulo").html("");
   
   if(titulo===""){
       //$("#inputUserRegister").css("border", "2px solid red")
       $("#mensajeErrorUpdateTitulo").append("El campo titulo esta vacio <br>");
       cont++;
   }
   if(tituloSinEspacios.test(titulo)){
       $("#mensajeErrorUpdateTitulo").append("El campo titulo no puede contener espacios <br>");
       cont++;
   }
    if($.isNumeric(titulo)) {
      $("#mensajeErrorUpdateTitulo").append("El campo titulo no puede ser un numero <br>");
      cont++;
    }
   if(cont==0){
       $("#title").css("border", "2px solid green")
       return true;
   }else{
       $("#title").css("border", "2px solid red")
   }
 
}

function validateUpdatePrecio(){

  var  precio =$("#price").val();

   var cont=0;
   pricSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array

   $("#mensajeErrorUpdatePrecio").html("");
   
   if(precio===""){
       //$("#inputUserRegister").css("border", "2px solid red")
       $("#mensajeErrorUpdatePrecio").append("El campo precio esta vacio <br>");
       cont++;
   }
   if(pricSinEspacios.test(precio)){
       $("#mensajeErrorUpdatePrecio").append("El campo precio no puede contener espacios <br>");
       cont++;
   }
    if(!($.isNumeric(precio))) {
      $("#mensajeErrorUpdatePrecio").append("El campo precio debe ser un numero <br>");
      cont++;
    }
   if(cont==0){
       $("#price").css("border", "2px solid green")
       return true;
   }else{
       $("#price").css("border", "2px solid red")
   }
 
}

function validateUpdateStock(){

  var  stock =$("#stock").val();

   var cont=0;
   stockSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array

   $("#mensajeErrorUpdateStock").html("");
   
   if(stock===""){
       //$("#inputUserRegister").css("border", "2px solid red")
       $("#mensajeErrorUpdateStock").append("El campo stock esta vacio <br>");
       cont++;
   }
   if(stockSinEspacios.test(stock)){
       $("#mensajeErrorUpdateStock").append("El campo stock no puede contener espacios <br>");
       cont++;
   }
    if(!($.isNumeric(stock))) {
      $("#mensajeErrorUpdateStock").append("El campo stock debe ser un numero <br>");
      cont++;
    }
   if(cont==0){
       $("#stock").css("border", "2px solid green")
       return true;
   }else{
       $("#stock").css("border", "2px solid red")
   }
 
}
function validateAllUpdate(){
  verificaTitulo = validateUpdateTitulo();
  verificaPrecio= validateUpdatePrecio();
  verificaStock = validateUpdateStock();

  if(verificaTitulo== true && verificaPrecio == true && verificaStock == true ){
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
    splitImagen = nomFich.split(".");
    splitbueno = splitImagen[0];
    //alert($splitImagen[0]);
    $.ajax({
      url: "php/Videojuegos/updateProducto.php?id_juego="+ id+"&title="+title+"&category="+category+"&price="+price+"&status="+status+"&platform="+platform+"&stock="+stock+"&image="+splitbueno,
      method:'GET',
      success: function(data) { 
          console.log(data); 
          $("#mensajeUpdate").html(data);
          
          }
  });
  }else{
    $("#mensajeErrorUpdateStock").append("Los campos no validan <br>");
  }
}
$(document).on("click", "#guardar",validateAllUpdate);

$(document).on("click","#cerrarUpdate",function(){
  $("#mensajeUpdate").html("");
})

$(document).ready(function(){
    $("#titl").blur(validateInsertTitulo);
    $("#pric").blur(validateInsertPrecio);
    $("#stoc").blur(validateInsertStock);
    $("#title").blur(validateUpdateTitulo);
    $("#price").blur(validateUpdatePrecio);
    $("#stock").blur(validateUpdateStock);
})