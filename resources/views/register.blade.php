<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Styles -->

        <style>
                        
            /* BASIC */
            body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
            }

            a {
            color: #92badd;
            display:inline-block;
            text-decoration: none;
            font-weight: 400;
            }

            h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display:inline-block;
            margin: 40px 8px 10px 8px; 
            color: #cccccc;
            }



            /* STRUCTURE */

            .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column; 
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
            }

            #formContent {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 90%;
            max-width: 450px;
            position: relative;
            padding: 0px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
            }

            #formFooter {
            background-color: #f6f6f6;
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
            }



            /* TABS */

            h2.inactive {
            color: #cccccc;
            }

            h2.active {
            color: #0d0d0d;
            border-bottom: 2px solid #5fbae9;
            }



            /* FORM TYPOGRAPHY*/

            input[type=button], input[type=submit], input[type=reset]  {
            background-color: #e11a29;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 #e11a29;
            box-shadow: 0 10px 30px 0 rgba(226, 85, 85, 0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            }

            input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
            background-color: #e30e1e;
            }

            input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
            }

            input[type=text], input[type=email], input[type=password] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            }
            .invalid, .invalid-feedback{
                text-align: left;
                font-size: 14px;
                margin-left: 40px;
                color:red
            }

            input[type=text]:focus,input[type=email]:focus, input[type=password]:focus {
            background-color: #fff;
            border-bottom: 2px solid #e11a29;
            }

            input[type=text]:placeholder, input[type=email]:placeholder, input[type=password]:placeholder {
            color: #cccccc;
            }



            /* ANIMATIONS */

            /* Simple CSS3 Fade-in-down Animation */
            .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            }

            @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
            }

            @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
            }

            /* Simple CSS3 Fade-in Animation */
            @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

            .fadeIn {
            opacity:0;
            -webkit-animation:fadeIn ease-in 1;
            -moz-animation:fadeIn ease-in 1;
            animation:fadeIn ease-in 1;

            -webkit-animation-fill-mode:forwards;
            -moz-animation-fill-mode:forwards;
            animation-fill-mode:forwards;

            -webkit-animation-duration:1s;
            -moz-animation-duration:1s;
            animation-duration:1s;
            }

            .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
            }

            .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
            }

            .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
            }

            .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
            }

            /* Simple CSS3 Fade-in Animation */
            .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #e11a29;
            content: "";
            transition: width 0.2s;
            }

            .underlineHover:hover {
            color: #0d0d0d;
            }

            .underlineHover:hover:after{
            width: 100%;
            }



            /* OTHERS */

            *:focus {
                outline: none;
            } 

            .icon {
            width:20%;
            padding: px
            }

        </style>
    </head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                <img src="{!! asset('img/logo.png') !!}" id="icon" class="logo p-3" />
              </div>
              <h2>Registro</h2>
              <div id="err" style="color: red">


              </div>
              <!-- Login Form -->
              <form name="frm_login" id="frm_login" method="POST"  class="needs-validation" enctype="multipart/form-data" validate>
                @csrf
                <div class="form-group">
                    <input type="text" id="name" class="fadeIn second form-control" name="name" placeholder="name" required>
                    <div class="invalid-feedback ">Ingresar Nombre</div>
                </div>
                <div class="form-group">
                    <input type="email" id="email" class="fadeIn second form-control" name="email" placeholder="email" required>
                    <div class="invalid-feedback ">Ingresar email</div>
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="fadeIn third form-control" name="password" placeholder="password" required>
                    <div class="invalid-feedback ">Ingresar contraseña</div>
                </div>
                <div class="form-group">
                    <input type="password" id="confirm_password" class="fadeIn third form-control" name="confirm_password" placeholder="Confirmar password" required>
                    <div class="invalid-feedback ">Deben coincidir las contraseñas</div>
                    <div class="invalid"></div>
                </div>
                <input type="button" class="fadeIn fourth" id="enviar_registro" value="Registrarse">
            </form>
              
              <div id="formFooter">
                <a class="underlineHover" href="{{route('user.login')}}">Ya tengo una cuenta</a>
              </div>
            </div>
        </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
    
    <script>
        $("#enviar_registro").click(function(event) {
            event.preventDefault();
            let validacion = true;
            var data = $("#frm_login").serialize();
            if($('#name').val() == ""){
                $('#name').addClass("is-invalid");
                validacion = false;
            } else{
                $('#name').removeClass("is-invalid").addClass("was-validated");
            }
            if($('#email').val() == ""){
                $('#email_validacion').html('Ingrese email');
                $('#email').addClass("is-invalid");
                validacion = false;
            } else{
                $('#email').removeClass("is-invalid").addClass("was-validated");
            }
            
            if($('#password').val() == "" || $('#password').val().length < 8){
                $('#password').addClass("is-invalid");
                validacion = false;
            } else{
                $('#password').removeClass("is-invalid").addClass("was-validated");
            }
            if($('#password').val() == "" || $('#password').val() !== $('#confirm_password').val() ){
                $('#confirm_password').addClass("is-invalid");
                validacion = false;
            } else{
                $('#confirm_password').removeClass("is-invalid").addClass("was-validated");
            }
            if(validacion !== false){

            $.ajax({
                type: 'POST',
                url: '{{route('save.register')}}',
                data: data,
                dataType: 'json',
		        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response){
                    console.log(response);
                    console.log(response['state']);
                    // console.log(response['message']);
                    if(response['state'] == true){
                        Swal.fire({
                        title: '!Registrado exitosamente!',
                        text: 'Ya puedes ingresar a tu cuenta',
                        icon: 'success',
                        showConfirmButton: false
                        });
                    window.location.replace('{{route('user.login')}}');
                    } else if(response['state'] == false){
                        $('.invalid').html('*'+ response['message']);
                    }
                    
                },
                error: function(response){
                    console.log("error");
                    console.log(response);
                  
                }
            });
            }
        });
    
    </script>
    </body>
</html>
