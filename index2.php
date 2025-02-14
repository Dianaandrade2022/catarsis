<!-- php -->
<?php
session_start();

if (!isset($_SESSION['correo'])) {
  echo 
  '<script>
  alert("Debes iniciar sesion");
  window.location ="login/registro.php";
  </script>';
  session_destroy();
  die();
}

require_once 'login/php/conexion.php';
$database = new database(); 
$con = $database->conectar();

$usuario = $_SESSION['correo'];
$consul = $con -> prepare("SELECT usuario FROM usuario WHERE correo = '$usuario'");
$consul -> execute();
$consul =  $consul->fetch(PDO::FETCH_ASSOC);
if (isset($consul)) {
    $user = $consul['usuario'];
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
    <script src="https://kit.fontawesome.com/6368fe8576.js" crossorigin="anonymous"></script>

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
        <a href="index2.php" class="enlace"><img src="img/elementos/logohealthy.png" alt=""></a>
        </div>
        <ul>
            <li><a href="index2.php"><i class="material-icons">home</i>Inicio</a></li>
            <li><a href="php/sobre.php"><i class="material-icons">people</i>Sobre Nosotros</a></li>
            <li><a href="php/configuracionuser.php"><i class="material-icons">dvr</i>Contacto</a></li>
     <li><button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
       Mi perfil
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="php/complementar.php"><i class="material-icons">add</i>Complementar datos</a></li>
        <li><a class="dropdown-item" href="php/test.php"><i class="material-icons">streetview</i>Contestar test</a></li>
        <li><a class="dropdown-item" href="php/perfil.php"><i class="material-icons">remove_red_eye</i>Ver perfil</a></li>
        <li><a class="dropdown-item" href="php/configuracionuser.php"><i class="material-icons">settings</i>Configuracion</a></li>  
      </ul></li>
      <li>
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Mas 
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                 <li><a class="dropdown-item" href="php/plan.php"><i class="material-icons">assessment</i>Ver planes</a></li>
                 <li><a class="dropdown-item" href="login/php/cerrarsesion.php"><i class="material-icons">person</i>Cerrar Sesion</a></li>
                 <li><a class="dropdown-item" href="php/psicologos.php"><i class="material-icons">person_pin_circle</i>Ver psicologos</a></li>
                 <li><a class="dropdown-item" href="php/mostrar.php"><i class="fa-solid fa-comment-check"></i>Ver test</a></li>
               </ul></li>
      </ul>
   <div class="usuario">
            <a href="php/perfil.php"><img src="img/elementos/user.png" alt=""></a>
            <a href="php/perfil.php" style="text-decoration: none;"><h3 class="h1"><?php echo $user?></h3></a>
        </div>
    </nav>
   <!-- CONTENEDOR -->
   <div class="contenedor">
        <!--Bienvenido-->
        <div class="bienvenido">
            <div class="contenidob">
                <h3>¡Bienvenido a HealthyMind!</h3>
                <h5>Todo fue pensado para tí, esperamos que esta página te sea de mucha ayuda y que puedas encontrar que esta página te sea de mucha ayuda y que puedas encontrar paz y aprender cosas sobre tí.</h5>
            </div>
        </div>
        <!--Fin Bienvenido-->
        <!-- Contenedor 2 -->

        <div class="contenedor2">
           <!-- Content section 1-->
        <div class="contenedorc">
            <div class="contenedor2 row align-columns-center">
                <div class="col-12 mt-5 border-top pt-4 pb-3">
                    <h2 class="text-center text-primary text-uppercase">Importancia de la salud mental</h2>
                    <p class="text-center">Nuestra salud mental depende de factores internos y externos y cuando pasamos por momentos y de acuerdo a nuestras circunstancias lo enfrentamos de distintas maneras que pueden no ser viables, por lo cual hemos desarrollado healthymind para poderte brindar un espacio donde puedas llevar un seguimiento que te permita conocer y evaluarte diariamente.</p>
                </div>
                    <div class="card col bg-transparent border-0 border-bottom pb-4 rounded-0 ">
                        <img src="img/elementos/profesional.jpg" alt="profesional" class="card-img-top img-fluid">
                        <h4 class="card-title text-center pt-3">Servicios</h4>
                        <p class="card-text text-justify pt-2">Contacta a profesionales y obten un servicio más completo.</p>
                    </div>

                    <div class="card col bg-transparent border-0 border-bottom pb-4  rounded-0">
                        <img src="img/elementos/saludfisica.jpg" alt="" class="card-img-top img-fluid">
                        <h4 class="card-title text-center pt-3">¡Unete!</h4>
                        <p class="card-text text-justify pt-2">Tener una estabilidad mental te brinda multiples beneficios en todos los aspectos de tu vida</p>
                    </div>

                    <div class="card col bg-transparent border-0 border-bottom pb-4  rounded-0">
                        <img src="img/elementos/saludmental.jpg" alt="" class="card-img-top img-fluid">
                        <h4 class="card-title text-center pt-3">Nos importas</h4>
                        <p class="card-text text-justify pt-1">Esta página fue creada para florecer tu desarrollo personal</p>
                    </div>
            </div>
        </div>
        <!-- fin -->
        <!-- Content section 1-->

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
                            <h5  style="text-align:center ;" >Registra tus emociones y explora tus sentimientos con HealthyMind</h5>
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
                            <div class="d-grid gap-1 d-md">
                                <button type="button" class="btn btn-outline-primary"><a href="php/test.php" >Empezar ahora</a></button>
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2"  >
                        <div class="p-5">
                            <h3 class="display-3">Estas más cerca</h3>
                            <h5 class="display-6" style="text-align:center; ;">Inicia respondiendo nuestra encuesta</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Fin contenedor 2 -->
    </div>


    <!-- iconos -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="facebook" viewBox="0 0 16 16">
    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
  </symbol>
  <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
  </symbol>
  <symbol id="twitter" viewBox="0 0 16 16">
    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
  </symbol>
</svg>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>