<?php
session_start();
if(isset($_SESSION['rol'])){
    header('location:index.php');

}/* 
include('php/db/conectar.php'); */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css" />  -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/styleLogin.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/53305f8af1.js" crossorigin="anonymous"></script>

    <title>Login</title>
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

                <div id="opcionesSesion" class="dropdown text-end d-none">
                    <!-- si no ha iniciado logeado permanecera oculto -->
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle text-primary"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php 
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
                            <a class="dropdown-item" href="#">Administrar productos</a>
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


    <form class="formulario" action="php/funciones/ingreso.php" method="POST">

        <div class="container">


            <div class="row justify-content-center pt-5 mt-5 m-1">
                <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">

                    <?php
                 if(isset($_GET['error1']))
                            {

                            
                            ?>
                    <div class="alert alert-danger d-flex" role="alert">
                        <div>
                            Error. Correo o contraseña incorrecta.
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </div>
                    <?php  
                            }
                            ?>

                    <?php
                            if(isset($_GET['error2']))
                            {

                            
                            ?>
                    <div class="alert alert-danger d-flex" role="alert">
                        <div class="text-center">
                            <i class="fa-solid fa-xmark"></i> Su cuenta ha sido inhabilitada. Porfavor comuniquese con
                            un
                            administrador.
                        </div>
                    </div>
                    <?php  
                            }
                            ?>
                    <form action="php/funciones/ingreso.php" method="POST">


                        <div class="form-group text-center pt-3">
                            <h1 class="colorTexto">INICIAR SESIÓN</h1>
                        </div>
                        <div class="form-group mx-sm-4 pt-3">
                            <div class="campo">
                                <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo"
                                    required />
                            </div>
                        </div>
                        <div class="form-group mx-sm-4 pb-3">
                            <div class="campo">
                                <input type="password" name="pass" class="form-control"
                                    placeholder="Ingrese su contraseña" required />
                            </div>
                        </div>
                        <div class="form-group mx-sm-4 pb-2">
                            <div class="enviar">
                                <input class="btn btn-block ingresar" name="submit" type="submit" value="INGRESAR" />
                            </div>
                        </div>

                        <!-- <div class="form-group mx-sm-4 text-right ">
                            <span class=""><a href="#" class="olvide text-dark">Olvide mi contraseña?</a></span>
                        </div> -->
                        <div class="form-group text-center">
                            <span><a href="registro.php" class="registro btn btn-primary">REGISTRARSE</a></span>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </form>


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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js de jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--  js personalizado  -->
    <script src="js/menu_cuenta.js"></script>

    <!-- js personalizado -->
    <script src="js/login.js"></script>

</body>

</html>