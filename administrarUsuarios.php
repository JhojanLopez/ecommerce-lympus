<?php
session_start();
if(isset($_SESSION['rol'])){
  
if($_SESSION['rol']==1){
  $sessionActiva = true;
  $nombre = $_SESSION['nombre'];
  $correo = $_SESSION['correo'];

}else{
    header('location:index.php');
}

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
    <!-- Link dataTable -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" />

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/53305f8af1.js" crossorigin="anonymous"></script>

    <!-- ccs personalizado -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Administar usuarios</title>
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
    <section>
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <?php
                 if(isset($_GET['exito']))
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

                    <?php
                            if(isset($_GET['error']))
                            {

                            
                            ?>
                    <div class="alert alert-danger d-flex" role="alert">
                        <div class="text-center">
                            <i class="fa-solid fa-xmark"></i> Error. El correo digitado ya esta registrado con otro
                            usuario.
                        </div>
                    </div>
                    <?php  
                            }
                            ?>
                    <div id="advertencia" class="alert alert-warning d-flex d-none" role="alert">
                        <div class="text-center">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            Debes seleccionar algun registro
                        </div>
                    </div>
                    <div class="mt-5">
                        <table id="listaUsuarios" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>CODIGO</th>
                                    <th>NOMBRE</th>
                                    <th>CORREO</th>
                                </tr>
                            </thead>
                            <!-- Footer Table -->
                            <tfoot>
                                <tr>
                                    <th>CODIGO</th>
                                    <th>NOMBRE</th>
                                    <th>CORREO</th>
                                </tr>


                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- modal editar usuario-->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titulo-modal">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- formulario -->
                    <form method="POST" action="php/usuario/modificar_usuarios.php" class="was-validated row g-3">
                        <div class="mb-3">
                            <select id="activo" name="activo" class="form-select" required disabled>
                                <option name="activo" value="0">Usuario activo</option>
                                <option name="activo" value="1">Usuario inactivo</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" id="codigo" name="codigo" />
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required />
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo:</label>
                            <input type="email" class="form-control" id="correo" name="correo" required />
                        </div>
                        <div class="mb-3">
                            <label for="rol" class="form-label">rol:</label>
                            <select id="rol" name="rol" class="form-select" required>
                                <option selected value=""></option>
                                <option name="rol" value="1">Administrador</option>
                                <option name="rol" value="2">Almacenista</option>
                                <option name="rol" value="3">Usuario registrado</option>

                            </select>
                        </div>
                        <div class="modal-footer col-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <!-- usado ya que generar error  en desactivar-->

                            <form action="">

                            </form>

                            <form action="php/usuario/desactivar_usuario.php" method="POST">
                                <input type="hidden" id="codigoDesactivar" name="codigoDesactivar" />
                                <button id="desactivar" type="submit" class="d-none btn btn-danger">Desactivar</button>
                            </form>

                            <form action="php/usuario/activar_usuario.php" method="POST">
                                <input type="hidden" id="codigoActivar" name="codigoActivar" />
                                <button id="activar" type="submit" class="d-none btn btn-success">Activar</button>
                            </form>
                        </div>
                </div>
                </form>

            </div>
        </div>
    </div>
    </div>
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
    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js de jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- usado para el datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script><!-- jquery -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>


    <!-- js personalizado -->
    <script src="js/menu_cuenta.js"></script>
    <script src="js/dataTable_usuarios.js"></script>

</body>

</html>