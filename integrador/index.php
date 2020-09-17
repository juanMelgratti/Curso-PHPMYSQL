<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body id="page-top">
    <?php
        if(isset($_GET['done'])){       
    ?>
    <h3 style="text-align:center;">Ya estás registrado, se ha enviado un correo de confirmación a tu mail.</h3>
    
    <?php
        }
    ?>

    <?php
        if(isset($_GET['error'])){       
    ?>
    <h3 style="text-align:center;">El nombre de usuario ya existe, elija otro.</h3>
    
    <?php
        }
    ?>


    <div class="container">
        <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Registrate</h4>

            <form method="POST" action="insertar_usuario.php" >
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="username" class="form-control" placeholder="Nombre de Usuario" type="text" required>
            </div> 
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="name" class="form-control" placeholder="Nombre/s" type="text" required>
            </div> 
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="lastname" class="form-control" placeholder="Apellido/s" type="text" required>
            </div> 
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                 </div>
                <input name="password" class="form-control" placeholder="Contraseña" type="password" id="password" required>
            </div> 
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                </div>
                <input name="confirm_password" class="form-control" placeholder="Confirma tu Contraseña" id="confirm_password" type="password" required>
            </div>             
            
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-table"></i> </span>
                </div>
                <input name="years" class="form-control" placeholder="Edad" type="number" >
            </div> 

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope-open"></i> </span>
                </div>
                <input name="email" class="form-control" placeholder="Email" type="email" required>
            </div> 
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-code"></i> </span>
                </div>
                <input name="web" class="form-control" placeholder="Tu Sitio Web" type="text">
            </div> 
                                      
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Registrarse  </button>
            </div>    
            
            <div class="form-group">
                <a href="mostrar_usuarios.php" class="btn btn-primary btn-block">Mostrar Usuarios</a>
            </div>  
                                                                
        </form>
        </article>
        <script>
            var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");
          
          function validatePassword(){
            if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Las contraseñas no coinciden.");
            } 
            else {
              confirm_password.setCustomValidity('');
            }
          }
          
          password.onchange = validatePassword;
          confirm_password.onkeyup = validatePassword;
          </script>
   
</body>
</html>
