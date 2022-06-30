<?php 
  session_start();
  if(isset($_SESSION['rol'])){//indicamos que  hay una sesion activa
    $sessionActiva = true;
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style3.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/53305f8af1.js" crossorigin="anonymous"></script>
    <title>Lympus | Tienda virtual, servicios moviles y más</title>
</head>

<body>
<nav class="py-1 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav-secundario nav me-auto"></ul>
            <ul class="nav nav-secundario">
                <li class="nav-item">
                    <a href="nosotros.php" class="nav-link link-dark px-2">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="p-3 mb-3 border-bottom bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 px-2 justify-content-center mb-md-0">
                    <li>
                        <div class="nav-principal">
                            <a href="index.php" class="nav-link px-2 text-primary text-decoration-none">
                                Lympus <i class="fa-solid fa-bolt-lightning"></i>
                            </a>
                        </div>


                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="#" class="nav-principal nav-link px-2 d-block dropdown-toggle text-primary"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                Servicios
                                <span><i class="fa-solid fa-tv"></i></span>
                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="prepago.php">Servicios movil prepago</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="postpago.php">Servicios movil postpago</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="internetHogar.php">Servicios internet hogar</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="doblePlay.php">Servicios dobleplay hogar</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a href="#" class="nav-principal nav-link px-2 d-block dropdown-toggle text-primary"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tienda <span><i class="fa-brands fa-shopify"></i></span>
                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="celulares.php">Celulares</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="televisores.php">Televisores</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="computadores.php">Computadores</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <?php 
            if($sessionActiva){   
          ?>
                <div id="sessionActiva" class="d-none">
                    usado para comprobar si hay una session activa
                </div>
                <?php 
            }
            ?>
                <div id="opcionesNoSesion" class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle text-primary"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        Cuenta
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="registro.php">Registrarse</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="login.php">Iniciar sesion</a>
                        </li>
                    </ul>
                </div>
                <div id="opcionesSesion" class="dropdown text-end d-none">
                    <!-- si no ha iniciado logeado permanecera oculto -->
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle text-primary"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"><?php 
              echo $_SESSION['nombre'];
              ?>
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="configuracion.php">Configuracion</a></li>

                        <?php
                if($_SESSION['rol']==1){
                
              ?>
                        <li>
                            <a class="dropdown-item" href="administrarUsuarios.php">Administrar usuarios</a>
                        </li>
                        <?php
                  
                }
              ?>


                        <?php
                if($_SESSION['rol']==1 || $_SESSION['rol']==2){
                
              ?>
                        <li>
                            <a class="dropdown-item" href="gestionarProductos.php">Gestionar productos</a>
                        </li>
                        <?php
                  
                }
              ?>

                        <?php
                if($_SESSION['rol']==1 || $_SESSION['rol']==3){
                
              ?>
                        <li><a class="dropdown-item" href="#">Administrar ventas</a></li>
                        <?php
                  
                }
              ?>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="php/funciones/cerrarSesion.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section class="fondo">

        <div class="contenido-fondo">
            <h2>
                Jhojan David Lopez
                </br>
                Juan David Turriago</h2>
            <div class="ubicacion">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0275d8" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="11" r="3" />
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                    </svg>
                    Guadalajara de Buga, Valle del Cauca


                </p>


            </div>
            <a class="boton" , href="#">Contactar</a>
            <p>
                </br>315 845 1158 - 321 767 9083
            <p>
        </div>
    </section>

    <main class="contenedor sombra">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-5"> Nosotros </h2>
                </div>
            </div>
        </div>

        <div class="servicios">

            <section class="servicio">
                <h3> Misión </h3>

                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M304 16.58C304 7.555 310.1 0 320 0C443.7 0 544 100.3 544 224C544 233 536.4 240 527.4 240H304V16.58zM32 272C32 150.7 122.1 50.34 238.1 34.25C248.2 32.99 256 40.36 256 49.61V288L412.5 444.5C419.2 451.2 418.7 462.2 411 467.7C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zM558.4 288C567.6 288 575 295.8 573.8 305C566.1 360.9 539.1 410.6 499.9 447.3C493.9 452.1 484.5 452.5 478.7 446.7L320 288H558.4z" />
                    </svg>

                </div>

                <p>
                    Ofrecer a nuestros clientes un servicio oportuno,
                    de alta calidad y confiabilidad, y a nuestros empleados, un ambiente de trabajo agradable,
                    cordial y alegre, digno de admiración, donde se sientan a gusto y puedan prosperar.
                </p>
            </section>

            <section class="servicio">
                <h3>Visión</h3>

                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path style="color:red;"
                            d="M64 400C64 408.8 71.16 416 80 416H480C497.7 416 512 430.3 512 448C512 465.7 497.7 480 480 480H80C35.82 480 0 444.2 0 400V64C0 46.33 14.33 32 32 32C49.67 32 64 46.33 64 64V400zM342.6 278.6C330.1 291.1 309.9 291.1 297.4 278.6L240 221.3L150.6 310.6C138.1 323.1 117.9 323.1 105.4 310.6C92.88 298.1 92.88 277.9 105.4 265.4L217.4 153.4C229.9 140.9 250.1 140.9 262.6 153.4L320 210.7L425.4 105.4C437.9 92.88 458.1 92.88 470.6 105.4C483.1 117.9 483.1 138.1 470.6 150.6L342.6 278.6z" />
                    </svg>

                </div>

                <p class="texto-justificado">
                    Mantener y mejorar el posicionamiento que Lympus ha logrado en su
                    comunidad de tal manera que siga siendo identificada por su calidad y servicio.
                    Siempre que se piense en telecomunicaciones debemos aparecer como referencia en la mente de las
                    personas.
                </p>
            </section>

        </div>

    </main>


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md">
                    <h5 class="text-start">Equipos</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="celulares.php">Celulares</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="computadores.php">Computadores</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="televisores.php">Televisores</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-4 col-md">
                    <h5>Servicio movil</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="prepago.php">Prepago</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="postpago.php">postpago</a>
                        </li>                        
                    </ul>
                </div>
                <div class="col-4 col-md">
                    <h5>Servicio hogar</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="internetHogar.php">Internet Hogar</a>
                        </li>
                        <li class="mb-1">
                            <a class="link-secondary text-decoration-none" href="doblePlay.php">Dobleplay hogar</a>
                        </li>                        
                    </ul>
                </div>                
            </div>

            <div class="row">
                <div class="text-center pt-4 my-md-5 pt-md-5 border-top">
                    <div class="col-md-12">
                        <p class="lead fs-3">Copyright 2022 &COPY; Lympus</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js de jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--  js personalizado  -->
    <script src="js/index.js"></script>
</body>

</html>