

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

    
categoria = $("#categoria").val();



function cargaPlatformOfertas(){

    $.ajax({
        url: "../Clases/conexion/php/cargaPlatformOfertas.php",
        method: 'GET',
        success: function (data) {

            console.log(data);
            $("#categoriaSub").html(data);
    
        }
    
    
      });
}


   comienza = 4;

   window.addEventListener('scroll',function(){
    const scrolled = window.scrollY;
	 const scrolledNodecimals = scrolled.toFixed(); 
    const scrollable = (document.documentElement.scrollHeight - window.innerHeight) ; //punto mas bajo del scroll
    
    console.log("Scrolled" + scrolledNodecimals);
    console.log("Scrollable" + scrollable);

     

    //El punto que tengo mirar es el mas bajo + unos pixeles
   // console.log(window.innerHeight - 300);
   if(scrolledNodecimals == scrollable){
	  
	   
    comienza = comienza +4;
      
    mostrara = 4;
   
    if(categoria == "Ofertas"){
            console.log(categoria);
        cargaJuegosOfertas(comienza,mostrara);
    }else if (categoria == "Rebajas"){
        console.log(categoria);
        cargaJuegosRebajas(comienza,mostrara);
    }else{
        console.log(categoria);
        cargaJuegosGenerico(comienza,mostrara);

    }

   }
   
  })

   function cargaJuegosOfertas(comienza,mostrara){
    console.log("cargando juegos....")
    var comienza  = comienza;
    var mostrara = mostrara;
   

    $.ajax({
        url: "../Clases/conexion/php/cargaJuegosOfertas.php?comienza="+comienza+"&mostrara="+mostrara,
        method: 'GET',
        success: function (data) {

            
             
            if(data == 'No hagas mas'){
                console.log(data);
             //   container.off('scroll',scrollThis);
            }else{
                console.log(data);
                $("#cargaJuegosOferta").append(data); 
               // container.on('scroll',scrollThis);
            }
    
        }
    
    
    });
    }
 

    function cargaJuegos8(){
        console.log("cargando juegos....8")
      
        $.ajax({
            url: "../Clases/conexion/php/cargaJuegos8.php",
            method: 'GET',
            success: function (data) {
    
                    $("#cargaJuegosOferta").append(data); 
                   
                }
        
            }
        
        
          );
        }
          


function cargaPlatformRebajas(){

    $.ajax({
        url: "../Clases/conexion/php/cargaPlatformRebajas.php",
        method: 'GET',
        success: function (data) {

            console.log(data);
            $("#categoriaSub").html(data);
    
        }
    
    
      });
}
function cargaJuegosRebajas(comienza,mostrara){
    var comienza  = comienza;
    var mostrara = mostrara;
    
    $.ajax({
        url: "../Clases/conexion/php/cargaJuegosRebajas.php?comienza="+comienza+"&mostrara="+mostrara,
        method: 'GET',
        success: function (data) {
      
            if(data == 'No hagas mas'){
                console.log(data);
                //container.off('scroll',scrollThis);
            }else{
                console.log(data);
                $("#cargaJuegosOferta").append(data); 
               // container.on('scroll',scrollThis);
            }
    
        }
    
    
      });
      
   
}

function cargaJuegosRebajas8(){
    console.log("cargando juegos....8")
  
    $.ajax({
        url: "../Clases/conexion/php/cargaJuegosRebajas8.php",
        method: 'GET',
        success: function (data) {

                $("#cargaJuegosOferta").append(data); 
               
            }
    
        }
    
    
      );
    }
      

function cargaPlatformGenerica(){

    $.ajax({
        url: "../Clases/conexion/php/cargaPlatformGenerico.php?categoria="+categoria,
        method: 'GET',
        success: function (data) {

            console.log(data);
            $("#categoriaSub").html(data);
    
        }
    
    
      });
}
function cargaJuegosGenerico(comienza,mostrara){
    var comienza  = comienza;
    var mostrara = mostrara;
    $.ajax({
        url: "../Clases/conexion/php/cargaJuegosGenerico.php?categoria="+categoria+"&comienza="+comienza+"&mostrara="+mostrara,
        method: 'GET',
        success: function (data) {

                 
            if(data == 'No hagas mas'){
                console.log(data);
              //  container.off('scroll',scrollThis);
            }else{
                console.log(data);
                $("#cargaJuegosOferta").append(data); 
              //  container.on('scroll',scrollThis);
            }
    
        }
    
    
      });
}

function cargaJuegosGenerico8(){
    var comienza  = comienza;
    var mostrara = mostrara;
    $.ajax({
        url: "../Clases/conexion/php/cargaJuegosGenerico8.php?categoria="+categoria,
        method: 'GET',
        success: function (data) {

            console.log(data);
            $("#cargaJuegosOferta").append(data);
    
        }
    
    
      });
}



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
    if(categoria == "Ofertas"){
        //comienza = 0;
        //mostrar = 8;
        cargaPlatformOfertas();
        cargaJuegos8();
       // cargaJuegosOfertas(comienza,mostrar);
     
    }else if (categoria == "Rebajas"){
        cargaPlatformRebajas();
        cargaJuegosRebajas8();
    }else{
        cargaJuegosGenerico8();
        cargaPlatformGenerica();

    }
    $.ajax({
        url: "../Clases/conexion/php/totalItems.php",
        method:'GET',
        success: function(data) {

              $("#carro").html(" Cesta (" +data+")");
            
            }
           

    });
})

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
        url: "../Clases/conexion/php/cargaModalCesta.php",
        success: function(data) {
            $("#cargaModalCesta").html(data);
          
            }
      
        
        });


        $.ajax({
            method: 'GET',
            url: "../Clases/conexion/php/totalPrice.php",
            success: function(data) {
                $(".totalJuegosModal").html("Total: "+data);
              
                }
          
            
            });
            $.ajax({
                url: "../Clases/conexion/php/totalItems.php",
                method:'GET',
                success: function(data) {
        
                      $(".cantidadJuegosModal").html(" (" +data+") Videojuegos");
             
                    }
                   
        
            });
  }
  function realizarPedido(){
         // alert("afdaf")
          window.location.href="../informacion/index.php";
      }

  $(document).on("click","button.botonanadir",function(){  

    //input =  $("#image");
    //input.replaceWith(input.val('').clone(true));
      id_juego = $(this).attr('id'); 
    
        //Hago una conexion ajax para guardar tanto el id del juego, como el id del usuario que da click a meter cesta al juego
        
      $.ajax({
        url: "../Clases/conexion/php/insertCesta.php?id_juego="+ id_juego,
        method:'GET',
        success: function(data) {

                if(data === "bien"){
                   
                    $(this).attr("data-toogle","modal");
                    $(this).attr("data-target","juegosCarrito");
                    $("#repetido2").hide();
                    $('#juegosCarrito').modal('show');
                   
                    cargaCesta();
                    $.ajax({
                        url: "../Clases/conexion/php/totalItems.php",
                        method:'GET',
                        success: function(data) {
            
                              $("#carro").html(" Cesta (" +data+")");
                            
                            }
                           
                
                    });
                    
                    setTimeout(function(){
                        $('#juegosCarrito').modal('hide');
                      },3000);
                    $('#realizarPedido2').click(realizarPedido);
                    $.ajax({
                        url: "../Clases/conexion/php/totalItems.php",
                        method:'GET',
                        success: function(data) {
            
                              $("#carro").html(" Cesta (" +data+")");
                            
                            }
                           
                
                    });
                }else{
                    $("#repetido2").show();
                    $('#juegosCarrito').modal('show');
                    $("#repetido2").css("border","1px solid #efefef");
                    $("#repetido2").html("El juego seleccionado esta repetido!");
                   
                    cargaCesta();
                    setTimeout(function(){
                        $('#juegosCarrito').modal('hide');
                      },3000);
                }
               
            
            }
           

    });
    //Muestra el total de items en la pagina principal
    
  
  })


