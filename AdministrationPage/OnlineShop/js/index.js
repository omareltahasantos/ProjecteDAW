$(document).ready(function(){
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
    $("#products").hide(); //Esconde el div de videojuegos
    $("#pedidos").hide(); //Escode el div de pedidos
    $("#clientes").hide();  // Esconde el div de clientes
    $("#formupdate").hide(); 


    $("#pedido").click(function(){
      $("#pedidos").show();
      $("#products").hide();
      $("#clientes").hide();
    })

    $("#cliente").click(function(){
      $("#clientes").show();
      $("#products").hide();
    $("#pedidos").hide();
    })

    $(document).on("click","#productos",function(){
      $("#products").show();
      $("#pedidos").hide();
      $("#clientes").hide();
  
  
    
    })
    
  })

  

  

   



