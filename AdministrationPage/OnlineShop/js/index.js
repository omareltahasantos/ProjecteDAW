$(document).ready(function(){
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
    $("#products").hide(); //Esconde el div de videojuegos
    $("#pedidos").hide(); //Escode el div de pedidos
    $("#clientes").hide();  // Esconde el div de clientes
    $("#formupdate").hide(); 
    $("#divCategorias").hide();
    $("#divLogs").hide();
    $("#divGaleria").hide();
    $("#divTrailer").hide();
    $("#divVisitante").hide();
    $("#divCliente").hide();
    


    $(document).on("click","#productos",function(){
      $("#products").show();
      $("#pedidos").hide();
      $("#clientes").hide();
      $("#divCategorias").hide();
      $("#divLogs").hide();
      $("#divGaleria").hide();
      $("#divTrailer").hide();
      $("#divVisitante").hide();
      $("#divCliente").hide();
    })

    
  })

  
  $(document).on("click","#categorias",function(){
    $("#products").hide();
    $("#pedidos").hide();
    $("#clientes").hide();
    $("#divCategorias").show();
    $("#divLogs").hide();
    $("#divGaleria").hide();
    $("#divTrailer").hide();
    $("#divVisitante").hide();
    $("#divCliente").hide();
  })

   
  $(document).on("click","#logs",function(){
    $("#products").hide();
    $("#pedidos").hide();
    $("#clientes").hide();
    $("#divCategorias").hide();
    $("#divLogs").show();
    $("#divGaleria").hide();
    $("#divTrailer").hide();
    $("#divVisitante").hide();
    $("#divCliente").hide();
  })
   
  $(document).on("click","#galerias",function(){
    $("#products").hide();
    $("#pedidos").hide();
    $("#clientes").hide();
    $("#divCategorias").hide();
    $("#divLogs").hide();
    $("#divGaleria").show();
    $("#divTrailer").hide();
    $("#divVisitante").hide();
    $("#divCliente").hide();
  })
  $(document).on("click","#trailer",function(){
    $("#products").hide();
    $("#pedidos").hide();
    $("#clientes").hide();
    $("#divCategorias").hide();
    $("#divLogs").hide();
    $("#divGaleria").hide();
    $("#divTrailer").show();
    $("#divVisitante").hide();
    $("#divCliente").hide();
  })
  $(document).on("click","#visitante",function(){
    $("#products").hide();
    $("#pedidos").hide();
    $("#clientes").hide();
    $("#divCategorias").hide();
    $("#divLogs").hide();
    $("#divGaleria").hide();
    $("#divTrailer").hide();
    $("#divVisitante").show();
    $("#divCliente").hide();
  })

  $(document).on("click","#cliente",function(){
    $("#products").hide();
    $("#pedidos").hide();
    $("#clientes").hide();
    $("#divCategorias").hide();
    $("#divLogs").hide();
    $("#divGaleria").hide();
    $("#divTrailer").hide();
    $("#divVisitante").hide();
    $("#divCliente").show();
  })
  
  
  
  
  

   



