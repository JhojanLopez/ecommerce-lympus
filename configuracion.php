<?php
session_start();
if(isset($_SESSION['rol'])){
  $sessionActiva = true;
  $nombre = $_SESSION['nombre'];
  $correo = $_SESSION['correo'];
}else{
  header('location:index.php');
}/* 
include('php/db/conectar.php'); */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ccs personalizado -->
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/53305f8af1.js" crossorigin="anonymous"></script>
    <title>Configuracion</title>
</head>

<body>
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
            if(isset($sessionActiva)){   
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
    <!-- editar correo -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="mt-4">
                        <h3>Perfil <i class="fa-solid fa-user"></i></h3>
                        <div class="mt-4 me-3">
                            <p>Tu correo electronico es usado para indentificarte en el
                                sistema de Lympus, necesario para el incio de sesión.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <?php
                            if(isset($_GET['exito1']))
                            {

                            
                            ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">

                        <div>
                            Datos guardados exitosamente <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </div>
                    <?php  
                            }
                            ?>
                    <form action="php/usuario/modificar_perfil.php" method="POST">
                        <div class="mt-4 mb-4">
                            <label for="exampleFormControlInput1" class="form-label">Correo</label>
                            <?php echo'<input
                type="email"
                class="form-control"
                id="correo"
                name="correo"
                value="'.$correo.'"
                placeholder="Edita tu correo"
                required
              />'  ?>
                            <?php
                            if(isset($_GET['error1']))
                            {

                            
                            ?>
                            <span class="text-danger">
                                <i class="fa-solid fa-xmark"></i> Error. El correo digitado ya esta registrado con otro
                                usuario.
                            </span>
                            <?php  
                            }
                            ?>

                        </div>
                        <div class="mt-4 mb-4">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <?php echo'<input
                type="text"
                class="form-control"
                id="nombre"
                name="nombre"
                value="'.$nombre.'"
                placeholder="Edita tu nombre"
                required
              />'  ?>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <br>
                    <hr>

                </div>
            </div>
        </div>
    </section>
    <!-- editar password -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="mt-4">
                        <h3>Contraseña <i class="fa-solid fa-key"></i></h3>
                        <div class="mt-4 me-3">
                            <p>Tu contraseña es muy importante para acceder al sistema,
                                procura establecer una contraseña segura y que no tengas
                                en otros sitios web.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <?php
                            if(isset($_GET['exito2']))
                            {

                            
                            ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">

                        <div>
                            Datos guardados exitosamente <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </div>
                    <?php  
                            }
                            ?>
                    <form action="php/usuario/modificar_password.php" method="POST">
                        <div class="mt-4 mb-4">
                            <label for="exampleFormControlInput1" class="form-label">Contraseña actual</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="passActual"
                                placeholder="Escribe tu contraseña actual" required />
                        </div>
                        <?php
                            if(isset($_GET['error2']))
                            {

                            
                            ?>
                        <span class="text-danger">
                            <i class="fa-solid fa-xmark"></i> Error. La contraseña actual que fue digitada no es
                            correcta.
                        </span>
                        <?php  
                            }
                            ?>
                        <div class="mt-4 mb-4">
                            <label for="exampleFormControlInput1" class="form-label">Contraseña Nueva</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="passNueva"
                                placeholder="Escribe tu nueva contraseña" required />
                        </div>

                        <div class="mt-4 mb-4">
                            <label for="exampleFormControlInput1" class="form-label">Confirma contraseña</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                name="passConfirmacion" placeholder="Confirma tu contraseña nueva " required />
                            <?php
                            if(isset($_GET['error3']))
                            {

                            
                            ?>
                            <span class="text-danger">
                                <i class="fa-solid fa-xmark"></i> Error. Las contraseña nueva y de confirmacion no
                                coinciden.
                            </span>
                            <?php  
                            }
                            ?>

                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <br>
                    <hr>

                </div>
            </div>
        </div>
    </section>


    <?php 
    if(isset($_SESSION['rol'])){
      
      if($_SESSION['rol']==3){

    
    ?>
    <!-- editar metodo de pago -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="mt-4">
                        <h3>Metodo de pago <i class="fa-solid fa-comment-dollar"></i></h3>
                        <div class="mt-4 me-3">
                            <p> Puedes agregar o eliminar un metodo de pago para realizar
                                distintas compras en la tienda.
                            </p>
                        </div>
                    </div>
                </div>

                <?php if(isset($_SESSION['metodoPago'])){


                 ?>
                <div class="col-7">
                    <?php
                            if(isset($_GET['exito3']))
                            {

                            
                            ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">

                        <div>
                            Metodo de pago guardado exitosamente <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </div>
                    <?php  
                            }
                            ?>


                    <div class="mt-5 text-center">
                        <form method="GET" action="php/usuario/eliminar_metodo_pago.php">
                            <button type="submit" class="btn btn-danger">Eliminar metodo de pago actual</button>
                        </form>

                    </div>
                </div>
                <?php 
                 }else{

                 
                ?>
                <div class="col-7">
                    <?php
                            if(isset($_GET['exito4']))
                            {

                            
                            ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">

                        <div>
                            Metodo de pago borrado exitosamente <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </div>
                    <?php  
                            }
                            ?>
                    <div class="mt-5 text-center">
                        <!-- Button trigger agregar metodo de pago -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class="fa-solid fa-plus"></i> Agrega metodo de pago
                        </button>

                    </div>
                    <!-- Modal agregar-->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Metodo de pago</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="php/usuario/agregar_metodo_pago.php" method="POST" class="row g-3">
                                        <div class="col-12">
                                            <label for="numeroCuenta" class="form-label">Numero de cuenta</label>
                                            <input type="number" name="numeroCuenta" class="form-control" min="0"
                                                max="99999999999999999999" id="numeroCuenta" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="tipo" class="form-label">Tipo de pago</label>
                                            <select id="tipo" name="tipo" class="form-select" required>
                                                <option selected value=""></option>
                                                <option name="tipo" value="credito">Tarjeta de crédito</option>
                                                <option name="tipo" value="debito">Tarjeta de débito</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="banco" class="form-label">Banco</label>
                                            <select id="banco" name="banco" class="form-select" required>
                                                <option selected value=""></option>
                                                <option name="banco" value="BANCOLOMBIA">BANCOLOMBIA</option>
                                                <option name="banco" value="BANCO DE BOGOTA">BANCO DE BOGOTA</option>
                                                <option name="banco" value="BBVA">BBVA</option>
                                                <option name="banco" value="DAVIVIENDA">DAVIVIENDA</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                 }
                ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <br>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <?php 

      }
    }
    ?>
    <!-- eliminar cuenta -->
    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="col-5">
                    <div class="mt-4">
                        <h3 class="text-danger">Cerrar cuenta <i class="fa-solid fa-user"></i></h3>
                        <div class="mt-4 me-3">
                            <p>Puedes cerrar tu cuenta dentro del sistema lympus,
                                ten presente que para recuperarla necesitas <a class="text-decoration-none"
                                    href="#">contactar</a>
                                a nuestro equipo.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="mt-5 text-center">
                        <form method="POST" action="php/usuario/desactivar_cuenta.php">
                            <input type="hidden" name="codigo" <?php 
                            echo 'value="'.$_SESSION['codigo'].'"'
                            ?>>
                            <button type="submit" class="btn btn-outline-danger">Cerrar cuenta</button>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">


                    </div>
                </div>
            </div>
    </section>

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
    <!-- js personalizado -->
    <script src="js/menu_cuenta.js"></script>
</body>

</html>