$(document).on("click",".botonCuenta",function(){
    window.location.href = 'login.html';

})
$(document).on("click",".registerbutton",function(){
    window.location.href = 'register.html';

})

/////////////Aqui deberia ir una consulta para el registro de los usuarios
$(document).on("click","#registro",function(){
    
    usuario =$("#inputUserRegister").val();
    password =$("#inputPasswordRegister").val();
    passwordConfirm =$("#inputPasswordConfirmRegister").val();
    email = $("#inputEmailRegister").val();

    //Validacion front del register

    //Si esta vacio algun campo desplegar el error
    $("#mensajeError").html("");
    if(usuario===""){
        $("#mensajeError").append("El campo usuario esta vacio <br>");
    }
    if(password===""){
        $("#mensajeError").append("El campo password esta vacio <br>");
    }
    if(passwordConfirm===""){
        $("#mensajeError").append("El campo confirmar password esta vacio <br>");
    }
    if(email===""){
        $("#mensajeError").append("El campo email esta vacio <br>");
    }
    //Si ninguno esta vacio
    if(usuario!="" && password!="" && email!="" && passwordConfirm!="" ){
        if(password!=passwordConfirm){
            $("#mensajeError").append("El campo password y confirmar password no coinciden <br>");
        }else{ //Si llegados aqui va todo perfectamente, deberiamos insertar el usuario en la base de datos o mirar si ese usuario existe en la bd 

            window.location.href = 'login.html';
        }
    }
})

///Validacion front del login
$(document).on("click",".iniciarSesion",function(){

    usuario =$("#inputUserLogin").val();
    password =$("#inputPasswordLogin").val();


    //Validacion front del register

    //Si esta vacio algun campo desplegar el error
    $("#mensajeErrorLogin").html("");
    if(usuario===""){
        $("#mensajeErrorLogin").append("El campo usuario esta vacio <br>");
    }
    if(password===""){
        $("#mensajeErrorLogin").append("El campo password esta vacio <br>");
    }
    
    //Si ninguno esta vacio y comprobamos que el usuario existe en la base de datos entonces ira al home
    if(usuario!="" && password!=""  ){

        if(usuario=="Omar"){
            window.location.href = '../homePage/index.php?usuario='+usuario+"&password="+password;
        }else{ //Si llegados aqui va todo perfectamente, deberiamos insertar el usuario en la base de datos o mirar si ese usuario existe en la bd 
            $("#mensajeErrorLogin").append("El usuario o password no existen <br>");
           
        }
           

        
    }
        //Hacemos la comprobacion de si existe el usuario con ajax a un php y si existe hacemos el location  y sino desplegamos mensaje de error conforme no exis
})



