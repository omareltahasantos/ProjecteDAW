

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

  function cargaCesta(){
    $.ajax({
        method: 'GET',
        url: "../Clases/conexion/php/cargaCestaPago.php",
        success: function(data) {
            $("#cargaCestaPago").append(data);
          
            }
      
        
        });


        $.ajax({
            method: 'GET',
            url: "../Clases/conexion/php/totalPricePago.php",
            success: function(data) {
                $("#valorSubTotal").html(data);
                $("#valorTotal").html(data);
                
              
                }
          
            
            });
            
    
  }

  function cargaJsonPago(){
    console.log("json");
   $.ajax({
       url: "../Clases/conexion/php/cargaCredencialesUser.php",
       method:'GET',
       dataType:"json",
       success: function(data) {
           
           if(data.creditCard!= ""){
               $("#Creditcard").val(data.creditCard);
               
           }
           if(data.email != ""){
               $("#email").val(data.email);
              
           }
           if(data.direccion!= ""){
               $("#Direccion").val(data.direccion);
               //$('#Direccion').attr('readonly', true);
           }
          


           
          console.log(data);
           }
          

   });
 }


 //^[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}$

 function validateCreditNumber(){
    var  creditcard =  $("#Creditcard").val();
      var cont=0;
     ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
   
      $("#mensajeErrorCreditCard").html("");
      
      if(creditcard===""){
        //$("#inputUserRegister").css("border", "2px solid red")
        $("#mensajeErrorCreditCard").append("El campo numero de tarjeta esta vacio <br>");
        cont++;
    }

      if(!(/^[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}$/.test(creditcard))){
        $("#mensajeErrorCreditCard").append("El campo numero de tarjeta debe ser 1111 1111 1111 1111 <br>");
        cont++;
     }   

      if(cont==0){
          $("#Creditcard").css("border", "2px solid green")
          return true;
      }else{
          $("#Creditcard").css("border", "2px solid red")
      }
    
   }

   function validateCardName(){
    var  cardName =  $("#NombreTitular").val();
      var cont=0;
     ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
   
      $("#mensajeErrorCardName").html("");
      
      if(cardName===""){
        //$("#inputUserRegister").css("border", "2px solid red")
        $("#mensajeErrorCardName").append("El campo nombre del titular esta vacio <br>");
        cont++;
    } 
    if(/^[,-.*]+$/.test(cardName)){
        $("#mensajeErrorCardName").append("El campo nombre del titular no debe contener caracteres raros <br>");
        cont++;
    }   
     if($.isNumeric(cardName)) {
        $("#mensajeErrorCardName").append("El campo nombre del titular no puede ser un numero <br>");
        cont++;
      }

      if(cont==0){
          $("#NombreTitular").css("border", "2px solid green")
          return true;
      }else{
          $("#NombreTitular").css("border", "2px solid red")
      }
    
   }

   function validateCardMonth(){
    var  cardMonth =  $("#ExpiracionMonth").val();
 
      var cont=0;
     ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
   
      $("#mensajeErrorCardMonth").html("");
      
      if(cardMonth===""){
        //$("#inputUserRegister").css("border", "2px solid red")
        $("#mensajeErrorCardMonth").append("El campo mes de expiracion esta vacio <br>");
        cont++;
    }

     if(!($.isNumeric(cardMonth))) {
        $("#mensajeErrorCardMonth").append("El campo mes de expiracion debe ser numeros <br>");
        cont++;
      }

      if(/^[,-.*]+$/.test(cardMonth)){
        $("#mensajeErrorCardMonth").append("El campo mes de expiracion no debe contener caracteres raros <br>");
        cont++;
    }   

    if(!(/^01|02|03|04|05|06|07|08|09|10|11|12$/.test(cardMonth))){
        $("#mensajeErrorCardMonth").append("El campo mes de expiracion debe contener el mes en 2 numeros del 0 al 12<br>");
        cont++;
    }   



      if(cont==0){
          $("#ExpiracionMonth").css("border", "2px solid green")
          return true;
      }else{
          $("#ExpiracionMonth").css("border", "2px solid red")
      }
    
   }


   function validateCardYear(){
    var  cardYear =  $("#ExpiracionYear").val();
 
      var cont=0;
     ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
   
      $("#mensajeErrorCardYear").html("");
      
      if(cardYear===""){
        //$("#inputUserRegister").css("border", "2px solid red")
        $("#mensajeErrorCardYear").append("El campo año de expiracion esta vacio <br>");
        cont++;
    }

     if(!($.isNumeric(cardYear))) {
        $("#mensajeErrorCardYear").append("El campo año de expiracion debe ser numeros <br>");
        cont++;
      }

      if(/^[,-.*]+$/.test(cardYear)){
        $("#mensajeErrorCardYear").append("El campo año de expiracion no debe contener caracteres raros <br>");
        cont++;
    }   

    if(!(/^2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031$/.test(cardYear))){
        $("#mensajeErrorCardYear").append("El campo año de expiracion debe contener el año en 4 numeros a partir del año actual <br>");
        cont++;
    }   



      if(cont==0){
          $("#ExpiracionYear").css("border", "2px solid green")
          return true;
      }else{
          $("#ExpiracionYear").css("border", "2px solid red")
      }
    
   }

   
   function validateCardCvv(){
    var  cardCvv=  $("#CVV").val();
 
      var cont=0;
     ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array
   
      $("#mensajeErrorCVV").html("");
      
      if(cardCvv===""){
        //$("#inputUserRegister").css("border", "2px solid red")
        $("#mensajeErrorCVV").append("El campo cvv esta vacio <br>");
        cont++;
    }

     if(!($.isNumeric(cardCvv))) {
        $("#mensajeErrorCVV").append("El campo cvv debe ser numeros <br>");
        cont++;
      }

      if(/^[,-.*]+$/.test(cardCvv)){
        $("#mensajeErrorCVV").append("El campo cvv no debe contener caracteres raros <br>");
        cont++;
    }   

    if(!(/^[0-9]{3,3}$/.test(cardCvv))){
        $("#mensajeErrorCVV").append("El campo cvv debe contener 3 numeros del 0 al 9 <br>");
        cont++;
    }   



      if(cont==0){
          $("#CVV").css("border", "2px solid green")
          return true;
      }else{
          $("#CVV").css("border", "2px solid red")
      }
    
   }

   function changeRol(){
   
    $.ajax({
        method: 'GET',
        url: "../Clases/conexion/php/updateRol.php",
        success: function(data) {
          console.log(data);
        
          
        }
        
        });

    

}

   function deleteCesta(){
   
    $.ajax({
        method: 'GET',
        url: "../Clases/conexion/php/deleteCesta.php",
        success: function(data) {
          console.log(data);
        
          
        }
        
        });

    

}

   function crearlog(){
   
    $.ajax({
        method: 'GET',
        url: "../Clases/conexion/php/crearLogPedido.php",
        success: function(data) {
          console.log(data);
        
          
        }
        
        });

   
    

}
function  rand_code(chars,long){
    code ="";

    for(x=0; x<long; x++){
        rand = Math.floor(Math.random()*chars.length);
        code += chars.substr(rand, 1);
    }
    return code;
}



   function crearPedido(){
    caracteres = "0123456789abcdefABCDFGE";
    longitud = 14;

    var codigo = rand_code(caracteres,longitud);
   
    $.ajax({
        method: 'GET',
        url: "../Clases/conexion/php/crearPedido.php",
        data:  {codigo:codigo},
        success: function(data) {
            if(data){
                crearlog();
                changeRol();
				deleteCesta();
                window.location.href="../homePage/index.php?success=1&usuario="+data;
            }
      
        
          
        }
        
        });

   
    

}
   function updateUser(){
    var  creditcard =  $("#Creditcard").val();


    $.ajax({
        method: 'GET',
        url: "../Clases/conexion/php/updateCredenciales2.php",
        data:  {numero:creditcard},
        success: function(data) {
            if(data=="correcto"){
                console.log(data);
                crearPedido();
               
                ////falta crear el log del pedido, mostrar los pedidos en cada pagina.
            }
          
        }
        
        });
    

}
   function validateAllCredenciales(){
    verificanumero = validateCreditNumber();
    verificatitular= validateCardName();
    verificamonth= validateCardMonth();
    verificayear= validateCardYear();
    verificacvv= validateCardCvv();
    
    if(verificanumero== true && verificatitular== true && verificamonth== true && verificayear== true && verificacvv== true){
        updateUser();
    }else{
        $("#mensajeErrorCVV").append("Los campos deben validar <br>");
    }

}

$(document).on("click","#finalizarCompra",validateAllCredenciales);


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
cargaPedidos();
 cargaCesta();
 cargaJsonPago();
 $("#Creditcard").blur(validateCreditNumber);
 $("#NombreTitular").blur(validateCardName);
 $("#ExpiracionMonth").blur(validateCardMonth);
 $("#ExpiracionYear").blur(validateCardYear);
 $("#CVV").blur(validateCardCvv);
    $.ajax({
        url: "../Clases/conexion/php/totalItems.php",
        method:'GET',
        success: function(data) {

              $("#carro").html(" Cesta (" +data+")");
            
            }
           

    });

})
