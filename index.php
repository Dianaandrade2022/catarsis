
<!-- php -->
<?php
session_start();
if (isset($_SESSION['correo'])) {
  echo 
  '<script>
  alert("Ya tiene una cuenta como '.$_SESSION['correo'].'");
  window.location ="index2.php";
  </script>';
  exit;
} 
else if(isset($_SESSION['correoadmin'])) {
    echo 
    '<script>
    alert("Ya tiene una cuenta administrador como'.$_SESSION['correoadmin'].'");
    window.location ="indexadmin.php";
    </script>';
    exit();
  }
  elseif (isset($_SESSION['correocol'])) {
    echo 
    '<script>
    alert("Ya tiene una cuenta como colaborador como'.$_SESSION['correocol'].'");
    window.location ="indexcolaborador.php";
    </script>';
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="short icon" href="img/iconos/icon.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Inicio</title>
    
</head>
<body>

    <nav class="menu">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="material-icons">menu</i>
        </label>
        <div>
        <a href="index.php" class="enlace"><img src="img/elementos/logohealthy.png" alt=""></a>
        </div>
        <ul class="Desplazable">
            <li><a href="index.php"><i class="material-icons">home</i>Inicio</a></li>
            <li><a href="user/sobre.php"><i class="material-icons">people</i>Sobre Nosotros</a></li>
            <li>
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Mas 
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                 <li><a class="dropdown-item" href="user/plan.php"><i class="material-icons">assessment</i>Ver planes</a></li>
                 <li><a class="dropdown-item" href="login/registro.php"><i class="material-icons">person</i>Iniciar Sesion</a></li>
                 <li><a class="dropdown-item" href="user/psicologos.php"><i class="material-icons">person_pin_circle</i>Ver psicologos</a></li>
                 <li><a class="dropdown-item" href="php/adminform.php"><i class="material-icons">https</i>Iniciar como admin</a></li>
               </ul>
            </li>
        </ul>
        <div class="usuario">
            <a href="login/registro.php"><img src="img/elementos/user.png" alt=""></a>
            <a href="login/registro.php" style="text-decoration: none; line-height: 80px;"><h3> Iniciar Sesion</h3></a>
        </div>
    </nav>
    <!-- CONTENEDOR -->
    <div class="contenedor">
        <!--Bienvenido-->
        <div class="bienvenido">
            <div class="contenidob">
                <h3>¡Bienvenido a Healthy Mind!</h3>
                <h5>Todo fue pensado para tí, esperamos que esta página te sea de mucha ayuda y que puedas encontrar que esta página te sea de mucha ayuda y que puedas encontrar paz y aprender cosas sobre tí, registrate e inicia sesión para poder registrar tu información.</h5>
            </div>
        </div>
        <!--Fin Bienvenido-->
        <!-- Contenedor 2 -->

        <div class="contenedor2">
        <!-- Content section 1-->
        <div class="contenedorc">
            <div class="contenedor2 row align-columns-center">
                <div class="col-12 mt-5 border-top pt-4 pb-3">
                    <h4 class="text-center">Importancia de la salud mental</h4>
                    <p class="card-text text-justify">Nuestra salud mental depende de factores internos y externos y cuando pasamos por momentos y de acuerdo a nuestras circunstancias lo enfrentamos de distintas maneras que pueden no ser viables, por lo cual hemos desarrollado healthymind para poderte brindar un espacio donde puedas llevar un seguimiento que te permita conocer y evaluarte diariamente.</p>
                </div>
                    <div class="card col bg-transparent border-0 border-bottom rounded-0">
                        <img src="img/elementos/profesional.jpg" alt="profesional" class="card-img-top img-fluid">
                        <h4 class="card-title text-center pt-3">Servicios</h4>
                        <p class="card-text text-justify pt-2">Contacta a profesionales y obten un servicio más completo.</p>
                    </div>

                    <div class="card col bg-transparent border-0 border-bottom rounded-0">
                        <img src="img/elementos/saludfisica.jpg" alt="" class="card-img-top img-fluid">
                        <h4 class="card-title text-center pt-3">¡Unete!</h4>
                        <p class="card-text text-justify pt-2">Tener una estabilidad mental te brinda multiples beneficios en todos los aspectos de tu vida</p>
                    </div>

                    <div class="card col bg-transparent border-0 border-bottom rounded-0">
                        <img src="img/elementos/saludmental.jpg" alt="" class="card-img-top img-fluid">
                        <h4 class="card-title text-center pt-3">Nos importas</h4>
                        <p class="card-text text-justify pt-1">Esta página fue creada para florecer tu desarrollo personal</p>
                    </div>
            </div>
        </div>
        <!-- fin -->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-6"><img class="img-fluid rounded-circle" src="img/elementos/saludmental.png" alt="" />    
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="p-4">
                            <h3 class="display-5">Tu diario emocional</h3>
                            <h5  class="text-center" >Registra tus emociones y explora tus sentimientos con HealthyMind</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Content section 1-->
         <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-6"><img class="img-fluid rounded-circle" src="img/elementos/fondoi.jpg" alt="" />
                            <div class="d-grid gap-1 d-md-block">
                                <button type="button" class="btn btn-outline-primary col-12"><a href="login/registro.php" >Empezar ahora</a></button>
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2">
                        <div class="p-5">
                            <h3 class="display-3">Comienza a trabajar en ti</h3>
                            <h5 class="display-6 text-center">Registrate e Inicia Sesión</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Fin contenedor 2 -->
    </div>
    <!-- Fin contenedor todo -->
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
