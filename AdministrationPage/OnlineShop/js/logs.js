//CARGA TABLA VIDEOJUEGO///////////////
function cargaLogs(){ //Carga la tabla Videojuegos de forma dinamica cada segundo, por si se hace un cambio salga sin recargar la pagina

    $.ajax({
      method:'GET',
      url: "php/Logs/cargaTablaLogs.php",
      success: function(data) {
          $("#cargaLogs").html(data);
          }
          
  
  });
  }

 
  setInterval(cargaLogs,500);

 