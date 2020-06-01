$(document).on("click",".botonCuenta",function(){
    window.location.href = 'login.html';

})
$(document).on("click",".registerbutton",function(){
    window.location.href = 'register.html';

})

$(document).ready(function(){
    $("#inputUserRegister").blur(validateUser);
    $("#inputPasswordRegister").blur(validatePassword);
    $("#inputTelefonoRegister").blur(validateTelefono);
    $("#inputEmailRegister").blur(validateEmail);
    $("#inputUserLogin").blur(validateUserLogin);
    $("#inputPasswordLogin").blur(validatePasswordLogin);
    

   
})

/////////////Aqui deberia ir una consulta para el registro de los usuarios
///////////////////////////////////TODA LA VALIDACION REGISTER/////////////////////////////////////////////
function validateUser(){
   var  usuario =$("#inputUserRegister").val();
    var cont=0;
    UserSinEspacios = /\s/; ///Capta el valor del input, lo divide en espacios y los pone en posiciones de un array

    $("#mensajeErrorUser").html("");
    
    if(usuario===""){
        //$("#inputUserRegister").css("border", "2px solid red")
        $("#mensajeErrorUser").append("El campo usuario esta vacio <br>");
        cont++;
    }
    if(UserSinEspacios.test(usuario)){
        $("#mensajeErrorUser").append("El campo usuario no puede contener espacios <br>");
        cont++;
    }
    if(!(/^[a-zA-Z]{3,5}\d{0,3}$/.test(usuario))){
        $("#mensajeErrorUser").append("El campo usuario debe comenzar de 3 a 5 letras y puede estar seguido de 0 a 3 digitos <br>");
        cont++;
    }   
    if(cont==0){
        $("#inputUserRegister").css("border", "2px solid green")
        return true;
    }else{
        $("#inputUserRegister").css("border", "2px solid red")
    }
  
}

function validatePassword()
{
    password =$("#inputPasswordRegister").val();
    passwordConfirm =$("#inputPasswordConfirmRegister").val();
    var cont=0;
    PassSinEspacios = /\s/;
    $("#mensajeErrorPassword").html("");

    var lowerCaseLetters = /[a-z]/g;
    if(!(password.match(lowerCaseLetters))) {
      cont++;
      $("#mensajeErrorPassword").append("El campo password debe contener minusculas <br>");
    } 
     
 
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(!(password.match(upperCaseLetters))) {
     cont++;
     $("#mensajeErrorPassword").append("El campo password debe contener mayusculas <br>");
    } 
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(!(password.match(numbers))) {
     $("#mensajeErrorPassword").append("El campo password debe contener numeros <br>"); 
     cont++;
    }

    if(PassSinEspacios.test(password)){
        $("#mensajeErrorPassword").append("El campo password no puede contener espacios <br>");
        cont++;
    }
  
    // Validate length
    if(password.length != 8) {
      cont++;
      $("#mensajeErrorPassword").append("El campo password debe contener 8 caracteres");
    }

    if(cont==0){
        $("#inputPasswordRegister").css("border", "2px solid green")
        return true;
    }else{
        $("#inputPasswordRegister").css("border", "2px solid red")
    }
    
}

function validateTelefono(){
    var  telefono =$("#inputTelefonoRegister").val();
     var cont=0;
    
 
     $("#mensajeErrorTelefono").html("");
     
     if(telefono===""){
         //$("#inputUserRegister").css("border", "2px solid red")
         $("#mensajeErrorTelefono").append("El campo telefono esta vacio <br>");
         cont++;
     }
    
     if(!(/^[0-9]{9,9}$/.test(telefono))){
         $("#mensajeErrorTelefono").append("El campo telefono debe contener 9 digitos <br>");
         cont++;
     }   
     if(cont==0){
         $("#inputTelefonoRegister").css("border", "2px solid green")
         return true;
     }else{
         $("#inputTelefonoRegister").css("border", "2px solid red")
     }
   
 }

 function validateEmail(){
    var  email =$("#inputEmailRegister").val();
     var cont=0;
    
 
     $("#mensajeErrorEmail").html("");
     
     if(email===""){
         //$("#inputUserRegister").css("border", "2px solid red")
         $("#mensajeErrorEmail").append("El campo email esta vacio <br>");
         cont++;
     }
    
     if(/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)==false){
         $("#mensajeErrorEmail").append("El campo email debe contener la estructura palabra - @ - palabra.com <br>");
         cont++;
     }   
     if(cont==0){
         $("#inputEmailRegister").css("border", "2px solid green")
         return true;
     }else{
         $("#inputEmailRegister").css("border", "2px solid red")
     }
   
 }

 function validateAll(){
    verificaUser = validateUser();
    verificaPass= validatePassword();
    verificaEmail = validateEmail();
    verificaTelefono = validateTelefono();
    if(verificaUser== true && verificaPass == true && verificaEmail == true && verificaTelefono == true){
        var  usuario =$("#inputUserRegister").val();
        var  password =$("#inputPasswordRegister").val();
        var  email =$("#inputEmailRegister").val();
        var  telefono =$("#inputTelefonoRegister").val();
        
       $.ajax({
        url: "../Clases/conexion/php/insertUser.php?usuario=" + usuario + "&password=" + password + "&email=" + email + "&telefono=" + telefono,
        method: 'GET',
        success: function (data) {
          //console.log(data); //Confirmar confirmacion o negacion update
          console.log(data); 
            if(data == "bien1bien2bien3"){
              
                window.location.href = 'login.html';
            }else{
                $("#mensajeErrorEmail").append(data);
               
            }
    
        }
    
    
      });
    }else{
        $("#mensajeErrorEmail").append("Todos los campos deben ser correctos");
    }
}

$(document).on("click","#registro",function(){
    validateAll();
})
///////////////////////////////////TODA LA VALIDACION REGISTER HASTA AQUI/////////////////////////////////////////////

///Validacion front del login
function validateUserLogin(){
    var  usuarioLogin =$("#inputUserLogin").val();
     var cont=0;
   
 
     $("#mensajeErrorUserLogin").html("");
     
     if(usuarioLogin===""){
         //$("#inputUserRegister").css("border", "2px solid red")
         $("#mensajeErrorUserLogin").append("El campo usuario esta vacio <br>");
         cont++;
     }
    
     if(!(/^[a-zA-Z]{3,5}\d{0,3}$/.test(usuarioLogin))){
         $("#mensajeErrorUserLogin").append("El campo usuario debe comenzar de 3 a 5 letras y puede estar seguido de 0 a 3 digitos <br>");
         cont++;
     }   
     if(cont==0){
         $("#inputUserLogin").css("border", "2px solid green")
         return true;
     }else{
         $("#inputUserLogin").css("border", "2px solid red")
     }
   
 }

 function validatePasswordLogin()
{
    passwordLogin =$("#inputPasswordLogin").val();
    PassSinEspacios = /\s/;
    var cont=0;
    $("#mensajeErrorPasswordLogin").html("");

    var lowerCaseLetters = /[a-z]/g;
    if(!(passwordLogin.match(lowerCaseLetters))) {
      cont++;
      $("#mensajeErrorPasswordLogin").append("El campo password debe contener minusculas <br>");
    } 
     
 
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(!(passwordLogin.match(upperCaseLetters))) {
     cont++;
     $("#mensajeErrorPasswordLogin").append("El campo password debe contener mayusculas <br>");
    } 
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(!(passwordLogin.match(numbers))) {
     $("#mensajeErrorPasswordLogin").append("El campo password debe contener numeros <br>"); 
     cont++;
    }

    if(PassSinEspacios.test(passwordLogin)){
        $("#mensajeErrorPasswordLogin").append("El campo password no puede contener espacios <br>");
        cont++;
    }
  
    // Validate length
    if(passwordLogin.length != 8) {
      cont++;
      $("#mensajeErrorPasswordLogin").append("El campo password debe contener 8 caracteres <br>");
    }

    if(cont==0){
        $("#inputPasswordLogin").css("border", "2px solid green")
        return true;
    }else{
        $("#inputPasswordLogin").css("border", "2px solid red")
    }
    
}
 
function validateAllLogin(){
    verificaUserLogin = validateUserLogin();
    verificaPassLogin= validatePasswordLogin();
    
    if(verificaUserLogin== true && verificaPassLogin == true){
        var  usuario =$("#inputUserLogin").val();
        var  password =$("#inputPasswordLogin").val();

        $.ajax({
            url: "../Clases/conexion/php/checkUser.php?usuario=" + usuario + "&password=" + password,
            method: 'GET',
            success: function (data) {
              //console.log(data); //Confirmar confirmacion o negacion update
              console.log(data); 
                if(data == "existelogcorrecto"){
                    
                    window.location.href = '../homePage/index.php?usuario='+usuario;
                }else{
                    $("#mensajeErrorPasswordLogin").append("El usuario no existe");
                   
                }
        
            }
        
        
          });
        }else{
        $("#mensajeErrorPasswordLogin").append("Todos los campos tiene que ser correctos <br>");
    }
}






$(document).on("click",".iniciarSesion",function(){

validateAllLogin();




})


///////BValidacion front register//////

