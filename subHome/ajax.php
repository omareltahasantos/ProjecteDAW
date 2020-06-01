<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
   

        .container{
            width:400px;
            height:1080px;
            overflow:scroll;
            
         
        }

    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>
      </div>
      <p>aufgaufgbaufgaufguafgvbuafv</p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.js"></script>
    <script>

      var container = $(".container");
      container.on('scroll', scrollThis);

      function scrollThis(){
       var scrollHeight = container[0].scrollHeight;//
       
       var height = container.height(); //Alto ventana
       var posicionScroll = container.scrollTop(); // Posicion scroll
      // console.log(scrollHeight);
       //console.log( "Alto ventana"+height);

       if((posicionScroll + height) > scrollHeight){
        container.off('scroll',scrollThis);
        $.ajax({
        url: "http://localhost/proyectoGrado2/subHome/ajax.php",
        success: function (data) {

            //console.log("ajax completed.....");
            //aqui iria el append de la paginacion
            container.append('<p>SOME NEW TEXT FROM Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, nisi distinctio! Iste accusamus, quisquam voluptatum non amet cupiditate aut optio nostrum excepturi pariatur cum voluptatibus, reprehenderit enim asperiores deserunt sed! </p>')
            container.on('scroll',scrollThis);
          
    
        }
    
      });

       }
       
      }
    

       

      
      //SELECT * FROM VIDEOJUEGOS LIMIT 4,8;
    //PARA MOSTRAR MAS RESULTADOS A PARTE DE LOS QUE CARGAN AL INICIAR LA PAGINA TAL VEZ DEBERIAMOS COGER EL LIMIT DE LA PRIMERA CONSULTA Y EMPEZAR A SACAR VALORES A PARTIR DE ESE VALOR ESTILO SI ES 4
    //PONER 4,10 -  QUE IRA DEL 4 AL 10 PRODUCTO
    </script>
  </body>
</html>