

//////////////TODO ESTO METE A CADA IDENTIFICADOR EL COLOR VERDE O BLANCO DEPENDIENDO SI SE PULSA O DEJA DE PULSARSE

$(document).on("click","#barras",function(){
    $("#barras").css("color","rgb(45,200,80)")
    $("#menu").css("color","rgb(45,200,80)")
    $("#calendar").css("color","white")
    $("#lanzamiento").css("color","white")
    $("#login").css("color","white")
    $("#acceder").css("color","white")
    $("#cart").css("color","white")
    $("#carro").css("color","white")
})

$(document).on("click","#menu",function(){
    $("#barras").css("color","rgb(45,200,80)")
    $("#menu").css("color","rgb(45,200,80)")
    $("#calendar").css("color","white")
    $("#lanzamiento").css("color","white")
    $("#login").css("color","white")
    $("#acceder").css("color","white")
    $("#cart").css("color","white")
    $("#carro").css("color","white")
})


$(document).on("click","#calendar",function(){
    $("#calendar").css("color","rgb(45,200,80)")
    $("#lanzamiento").css("color","rgb(45,200,80)")
    $("#login").css("color","white")
    $("#acceder").css("color","white")
    $("#cart").css("color","white")
    $("#carro").css("color","white")
    $("#barras").css("color","white")
    $("#menu").css("color","white")

})

$(document).on("click","#lanzamiento",function(){
    $("#calendar").css("color","rgb(45,200,80)")
    $("#lanzamiento").css("color","rgb(45,200,80)")
    $("#login").css("color","white")
    $("#acceder").css("color","white")
    $("#cart").css("color","white")
    $("#carro").css("color","white")
    $("#barras").css("color","white")
    $("#menu").css("color","white")
})


$(document).on("click","#login",function(){
    $("#login").css("color","rgb(45,200,80)")
    $("#acceder").css("color","rgb(45,200,80)")
    $("#cart").css("color","white")
    $("#carro").css("color","white")
    $("#barras").css("color","white")
    $("#menu").css("color","white)")
    $("#calendar").css("color","white")
    $("#lanzamiento").css("color","white")

})

$(document).on("click","#acceder",function(){
    $("#login").css("color","rgb(45,200,80)")
    $("#acceder").css("color","rgb(45,200,80)")
    $("#cart").css("color","white")
    $("#carro").css("color","white")
    $("#barras").css("color","white")
    $("#menu").css("color","white")
    $("#calendar").css("color","white")
    $("#lanzamiento").css("color","white")
})
$(document).on("click","#cart",function(){
    $("#cart").css("color","rgb(45,200,80)")
    $("#carro").css("color","rgb(45,200,80)")
    $("#barras").css("color","white")
    $("#menu").css("color","white")
    $("#calendar").css("color","white")
    $("#lanzamiento").css("color","white")
    $("#login").css("color","white")
    $("#acceder").css("color","white")

})

$(document).on("click","#carro",function(){
    $("#cart").css("color","rgb(45,200,80)")
    $("#carro").css("color","rgb(45,200,80)")
    $("#barras").css("color","white")
    $("#menu").css("color","white")
    $("#calendar").css("color","white")
    $("#lanzamiento").css("color","white")
    $("#login").css("color","white")
    $("#acceder").css("color","white")
    
})
$(document).on("focus","#buscador",function(){
    $("#lupa").css("color","rgb(45,200,80)")
    $("#submit").css("background-color","#595F61")
})
$(document).on("blur","#buscador",function(){
    $("#lupa").css("color","#595F61")
    $("#submit").css("background-color","#E9ECEF")
})
/////////////////////////////////////////////////////////////////////////////////
$(document).on("mouseover",".botonanadir",function(){
    $(this).css("background-color","#222729")
    $(this).css("color","#FFFFFF")
    $(this).children('i').css("color","#5AD40E")
    $(this).css("border","2px solid green")
})
$(document).on("mouseout",".botonanadir",function(){
    $(this).css("background-color","#5AD40E")
    $(this).css("color","#000000")
    $(this).children('i').css("color","#ffffff")
    $(this).css("border","none")

})
var menu =$("#menu").html();
/*
 chivato =0;
      
            $(document).on("click","#menu",function(){
                if(chivato==0){
                    $("#menu").html("Menu");
                    chivato=chivato + 1;
                }else if(chivato==1){
                    $("#menu").html("Cerrar menu");  
                    $("#menu").css("color","white");
                    $("#barras").css("color","white");
                    chivato--;
                }  
            })
            $(document).on("click","#barras",function(){
                if(chivato==0){
                    $("#menu").html("Menu");
                    chivato=chivato + 1;
                }else if(chivato==1){
                    $("#menu").html("Cerrar menu");   
                    chivato--;
                }  
            })
   */    
  
    const pushbar = new Pushbar({
        blur:true,
        overlay:true,
        });
       
$(document).on("click","#menu",function(){
     pushbar.open('pushbar-menu');	
  
 })
 $(document).on("click","#barras ",function(){
    pushbar.open('pushbar-menu');	
 
})

if(pushbar.close()){
    $("#barras").css("color","white")
    $("#menu").css("color","white")
}
   
$("html").click(function() {
    $("#barras").css("color","white")
    $("#menu").css("color","white")
});
$("#pushbar-close").click(function() {
    $("#barras").css("color","white")
    $("#menu").css("color","white")
});
$('.pushbar-menu').click(function (e) {
    e.stopPropagation();

});

    

$('#buscador').keyup(function(){
    var buscador =$('#buscador').val();
    //alert (buscador);

   

   $("#browsers").html("");

   $.ajax({
    method: 'GET',
    url: "../Clases/conexion/php/cargaJuegosBuscador.php?busqueda="+ buscador,
    success: function(data) {
        $("#browsers").append(data);
      
        }
  
    
    });

  });

  function cargaJsonInformacion(){
     console.log("json");
    $.ajax({
        url: "../Clases/conexion/php/cargaCredencialesUser.php",
        method:'GET',
        dataType:"json",
        success: function(data) {
             
           console.log(data);
           
            if(data.nombre!= ""){
                $("#Nombre").val(data.nombre);
                $('#Nombre').attr('readonly', true);
            }
            if(data.email != ""){
                $("#email").val(data.email);
                $('#email').attr('readonly', true);
            }
            if(data.direccion!= ""){
                $("#Direccion").val(data.direccion);
                //$('#Direccion').attr('readonly', true);
            }
            if(data.telefono!= ""){
                $("#Telefono").val(data.telefono);
                //$('#Telefono').attr('readonly', true);
            }
            if(data.pais!= ""){
                $("#Pais> option[value='"+data.pais+"']").attr('selected', 'selected');
                //$('#Pais').attr('readonly', true);
            }
            if(data.codigopostal!= ""){
                $("#CodigoPostal").val(data.codigopostal);
                //$('#CodigoPostal').attr('readonly', true);
            }
            if(data.provincia!= ""){
                $("#Provincia> option[value='"+data.provincia+"']").attr('selected', 'selected');
                //$('#Provincia').attr('readonly', true);
            }
            if(data.apellidos!= ""){
                $("#Apellidos").val(data.apellidos);
                //$('#Apellidos').attr('readonly', true);
            }
            if(data.apartamento!= ""){
                $("#Apartamento").val(data.apartamento);
                //$('#Apartamento').attr('readonly', true);
            } 


           
            }
           

    });
  }
  
    
function validateApellido(){
   var  apellidos =  $("#Apellidos").val();
     var cont=0;
     apellidosSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
  
     $("#mensajeErrorApellido").html("");
     
     if(apellidos===""){
         //$("#inputUserRegister").css("border", "2px solid red")
         $("#mensajeErrorApellido").append("El campo apellidos esta vacio <br>");
         cont++;
     }
    
      if($.isNumeric(apellidos)) {
        $("#mensajeErrorApellido").append("El campo apellidos no puede ser un numero <br>");
        cont++;
      }
     if(cont==0){
         $("#Apellidos").css("border", "2px solid green")
         return true;
     }else{
         $("#Apellidos").css("border", "2px solid red")
     }
   
  }
    
  function validateDireccion(){
   var direccion =  $("#Direccion").val();
     var cont=0;
     direccionSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
  
     $("#mensajeErrorDireccion").html("");
     
     if(direccion===""){
         //$("#inputUserRegister").css("border", "2px solid red")
         $("#mensajeErrorDireccion").append("El campo direccion esta vacio <br>");
         cont++;
     }

     if(!(/^[A-Za-z0-9.\s]+$/.test(direccion))){
        $("#mensajeErrorDireccion").append("El campo direccion no debe contener caracteres raros <br>");
        cont++;
    }   
    
      if($.isNumeric(direccion)) {
        $("#mensajeErrorDireccion").append("El campo direccion no puede ser un numero <br>");
        cont++;
      }
     if(cont==0){
         $("#Direccion").css("border", "2px solid green")
         return true;
     }else{
         $("#Direccion").css("border", "2px solid red")
     }
   
  }

 // [0-9,-*.]
  function validateApartamento(){
    var apartamento = $("#Apartamento").val();
     var cont=0;
     apartamentoSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
  
     $("#mensajeErrorApartamento").html("");
     
     if(apartamento===""){
         
         $("#mensajeErrorApartamento").append("El campo apartamento esta vacio <br>");
         cont++;
     }

     if(!(/^[0-9,-.\s]+$/.test(apartamento))){
        $("#mensajeErrorApartamento").append("El campo apartamento no debe contener letras ni caracteres raros <br>");
        cont++;
    }   
    
      
     if(cont==0){
         $("#Apartamento").css("border", "2px solid green")
         return true;
     }else{
         $("#Apartamento").css("border", "2px solid red")
     }
   
  }
  function validateCodigoPostal(){
    var codigoPostal = $("#CodigoPostal").val();
      var cont=0;
      codigoPostalSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
   
      $("#mensajeErrorCodigoPostal").html("");
      
      if(codigoPostal===""){
          //$("#inputUserRegister").css("border", "2px solid red")
          $("#mensajeErrorCodigoPostal").append("El campo codigo postal esta vacio <br>");
          cont++;
      }
 
      if(!(/^\d{5}$/.test(codigoPostal))){
         $("#mensajeErrorCodigoPostal").append("El campo codigo postal debe contener 5 numeros <br>");
         cont++;
     }   
     
       if(!($.isNumeric(codigoPostal))) {
         $("#mensajeErrorCodigoPostal").append("El campo codigo postal deben ser numeros <br>");
         cont++;
       }
      if(cont==0){
          $("#CodigoPostal").css("border", "2px solid green")
          return true;
      }else{
          $("#CodigoPostal").css("border", "2px solid red")
      }
    
   }

   function validateTelefono(){
        var telefono =  $("#Telefono").val();
      var cont=0;
      telefonoSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
   
      $("#mensajeErrorTelefono").html("");
      
      if(telefono===""){
          //$("#inputUserRegister").css("border", "2px solid red")
          $("#mensajeErrorTelefono").append("El campo telefono esta vacio <br>");
          cont++;
      }
 
      if(!(/^\d{9}$/.test(telefono))){
         $("#mensajeErrorTelefono").append("El campo telefono debe contener 9 numeros <br>");
         cont++;
     }   
     
       if(!($.isNumeric(telefono))) {
         $("#mensajeErrorTelefono").append("El campo telefono deben ser numeros <br>");
         cont++;
       }
      if(cont==0){
          $("#Telefono").css("border", "2px solid green")
          return true;
      }else{
          $("#Telefono").css("border", "2px solid red")
      }
    
   }
   function validateAllCredenciales(){
    verificaApellido = validateApellido();
    verificaDireccion= validateDireccion();
    verificaApartamento= validateApartamento();
    verificaCodigoPostal= validateCodigoPostal();
    verificaTelefono= validateTelefono();
    
    if(verificaApellido== true && verificaDireccion== true && verificaApartamento== true && verificaCodigoPostal== true && verificaTelefono== true){
    
       updateUser();
    }else{
        $("#mensajeErrorTelefono").append("Los campos deben validar <br>");
    }

}

    function updateUser(){
        

        nombre =  $("#Nombre").val();
        email = $("#email").val();
        direccion =  $("#Direccion").val();
        telefono =  $("#Telefono").val();
        pais =  $("#Pais").val();
        codigoPostal = $("#CodigoPostal").val();
        provincia = $("#Provincia").val();
        apellidos =  $("#Apellidos").val();
        apartamento = $("#Apartamento").val();

        console.log(nombre);
        console.log(email);
        console.log(direccion);
        console.log(telefono);
        console.log(pais);
        console.log(provincia);
        console.log(codigoPostal);
        console.log(apellidos);
        console.log(apartamento);
        

        $.ajax({
            method: 'GET',
            url: "../Clases/conexion/php/updateCredenciales.php",
            data:  {nombre: nombre, email: email, direccion:direccion, telefono:telefono, pais:pais, codigoPostal:codigoPostal, provincia:provincia, apellidos:apellidos, apartamento:apartamento},
            success: function(data) {
                if(data=="correcto"){
					 console.log(data);
                  window.location.href="../Pago/index.php";
                }
              
            }
            
            });
        
    
    }

    function cargaCesta(){
        $.ajax({
            method: 'GET',
            url: "../Clases/conexion/php/cargaCestaInformacion.php",
            success: function(data) {
                $("#cargaCestaInformacion").append(data);
              
                }
          
            
            });
    
    
            $.ajax({
                method: 'GET',
                url: "../Clases/conexion/php/totalPriceInformacion.php",
                success: function(data) {
                    $("#valorSubTotal").html(data);
                    $("#valorTotal").html(data);
                    
                  
                    }
              
                
                });
                
        
      }
    
  $(document).on("click","#pagar",validateAllCredenciales);
  function cargaPedidos(){
    $.ajax({
        method: 'GET',
        url: "../Clases/conexion/php/cargaPedidos.php",
        success: function(data) {
            $("#cargaPedidos").append(data);
          
            }
      
        
        });
    
}
  $(document).ready(function(){
    cargaJsonInformacion();
      cargaPedidos();
    
    cargaCesta();
    $("#Apellidos").blur(validateApellido);
    $("#Direccion").blur(validateDireccion);
    $("#Apartamento").blur(validateApartamento);
    $("#CodigoPostal").blur(validateCodigoPostal);
    $("#Telefono").blur(validateTelefono);

    $.ajax({
        url: "../Clases/conexion/php/totalItems.php",
        method:'GET',
        success: function(data) {

              $("#carro").html(" Cesta (" +data+")");
            
            }
           

    });

})
