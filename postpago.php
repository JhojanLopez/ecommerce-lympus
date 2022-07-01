<?php 
   session_start();
   if(isset($_SESSION['rol'])){//indicamos que  hay una sesion activa
     $sessionActiva = true;
 
    include('php/ventas/metodo_pago.php');
        
 
   }
 ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Postpago</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/53305f8af1.js" crossorigin="anonymous"></script>

</head>

<body style="position: initial; overflow: initial;">
    <?php
     if(isset($_GET['compra'])){
     ?>
    <div id="compra" class="d-none"></div>
    <?php   
     } 
     ?>
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

    <div class="container py-3">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center mb-3">
            <h1 class="display-4 fw-normal mb-2">Planes postpago</h1>
            <p class="fs-5 text-muted">Tenemos muchos paquetes para que puedas navegar, hablar y disfrutar con las
                personas que mas quieres.
                ¡Adquiere el que mas te guste!</p>
        </div>

        <main>
            <div class="row row-cols-1 row-cols-md-4 mb-4 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Paquete 55gb</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$55000<small
                                    class="text-muted fw-light">/mes</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Minutos y mensajes ilimitados.</li>
                                <li>Instagram, Twitter, Facebook y WhatsApp ilimitados.</li>
                                <li>500 minutos para llamadas a larga distancia internacional.</li>
                            </ul>
                            <?php if(isset($_SESSION['rol'])){ ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                data-bs-target="#paquete1Postpago">
                                Comprar
                            </button>
                            <?php }else{ ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                data-bs-target="#advertencia">
                                Comprar
                            </button> <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Paquete 70gb</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$65000<small
                                    class="text-muted fw-light">/mes</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Minutos y mensajes ilimitados.</li>
                                <li>Instagram, Twitter, Facebook y WhatsApp ilimitados.</li>
                                <li>500 minutos para llamadas a larga distancia internacional.</li>
                            </ul>
                            <?php if(isset($_SESSION['rol'])){ ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                data-bs-target="#paquete2Postpago">
                                Comprar
                            </button>
                            <?php }else{ ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                data-bs-target="#advertencia">
                                Comprar
                            </button> <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Paquete 80gb</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$70000<small
                                    class="text-muted fw-light">/mes</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Minutos y mensajes ilimitados.</li>
                                <li>Instagram, Twitter, Facebook y WhatsApp ilimitados.</li>
                                <li>500 minutos para llamadas a larga distancia internacional.</li>
                            </ul>
                            <?php if(isset($_SESSION['rol'])){ ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                data-bs-target="#paquete3Postpago">
                                Comprar
                            </button>
                            <?php }else{ ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                data-bs-target="#advertencia">
                                Comprar
                            </button> <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">Paquete ilimitado</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$100000<small
                                    class="text-muted fw-light">/mes</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Minutos y mensajes ilimitados.</li>
                                <li>Instagram, Twitter, Facebook y WhatsApp ilimitados.</li>
                                <li>500 minutos para llamadas a larga distancia internacional.</li>
                            </ul>
                            <?php if(isset($_SESSION['rol'])){ ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                data-bs-target="#paquete4Postpago">
                                Comprar
                            </button>
                            <?php }else{ ?>
                            <button type="button" class="w-100 btn btn-lg btn-primary" data-bs-toggle="modal"
                                data-bs-target="#advertencia">
                                Comprar
                            </button> <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <!-- footer -->
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
    <!-- fin del footer -->
    <!-- modales de compra paquete 1 postpago -->
    <div class="modal fade" id="paquete1Postpago" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="php/servicios/movil.php" method="POST">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Paquete 55 gb</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Minutos y mensajes ilimitados.
                            Instagram, Twitter, Facebook y WhatsApp ilimitados.
                            500 minutos para llamadas a larga distancia internacional.
                        </p>
                        <br />
                        <p>
                            Precio: $55000
                        </p>
                        <input type="hidden" name="paquete" value="5">
                        <label for="numero">Numero de celular:</label>
                        <input type="tel" class="form-control" name="numero" required>
                        <label for="metodo_pago">Escoge tu metodo de pago:</label>
                        <select id="tipo" name="metodo_pago" class="form-select" required>
                            <option selected value=""></option>
                            <option name="metodo_pago" value="1">CONSIGNACION</option>
                            <?php if(isset($metodoPago)){?>
                            <option name="metodo_pago" value="<?php echo $metodoPago['codigo']?>">
                                <?php echo strtoupper(''.$metodoPago['tipo']).' / '.$metodoPago['nombre_banco']
                                        ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modales de compra paquete 2 -->
    <div class="modal fade" id="paquete2Postpago" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="php/servicios/movil.php" method="POST">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Paquete 70gb</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Minutos y mensajes ilimitados.
                            Instagram, Twitter, Facebook y WhatsApp ilimitados.
                            500 minutos para llamadas a larga distancia internacional.
                        </p>
                        <br />
                        <p>
                            Precio: $65000
                        </p>
                        <input type="hidden" name="paquete" value="6">
                        <label for="numero">Numero de celular:</label>
                        <input type="tel" class="form-control" name="numero" required>
                        <label for="metodo_pago">Escoge tu metodo de pago:</label>
                        <select id="tipo" name="metodo_pago" class="form-select" required>
                            <option selected value=""></option>
                            <option name="metodo_pago" value="1">CONSIGNACION</option>
                            <?php if(isset($metodoPago)){?>
                            <option name="metodo_pago" value="<?php echo $metodoPago['codigo']?>">
                                <?php echo strtoupper(''.$metodoPago['tipo']).' / '.$metodoPago['nombre_banco']
                                        ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modales de compra paquete 3 -->
    <div class="modal fade" id="paquete3Postpago" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="php/servicios/movil.php" method="POST">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Paquete 80 gb</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <p>Minutos y mensajes ilimitados.
                            Instagram, Twitter, Facebook y WhatsApp ilimitados.
                            500 minutos para llamadas a larga distancia internacional
                        </p>
                        <br />
                        <p>
                            Precio: $70000
                        </p>
                        <input type="hidden" name="paquete" value="7">
                        <label for="numero">Numero de celular:</label>
                        <input type="tel" class="form-control" name="numero" required>
                        <label for="metodo_pago">Escoge tu metodo de pago:</label>
                        <select id="tipo" name="metodo_pago" class="form-select" required>
                            <option selected value=""></option>
                            <option name="metodo_pago" value="1">CONSIGNACION</option>
                            <?php if(isset($metodoPago)){?>
                            <option name="metodo_pago" value="<?php echo $metodoPago['codigo']?>">
                                <?php echo strtoupper(''.$metodoPago['tipo']).' / '.$metodoPago['nombre_banco']
                                        ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modales de compra paquete 4 -->
    <div class="modal fade" id="paquete4Postpago" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="php/servicios/movil.php" method="POST">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Paquete ilimitado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <p>Minutos y mensajes ilimitados.
                            Instagram, Twitter, Facebook y WhatsApp ilimitados.
                            500 minutos para llamadas a larga distancia internacional.
                        </p>
                        <br />
                        <p>
                            Precio: $100000
                        </p>
                        <input type="hidden" name="paquete" value="8">
                        <label for="numero">Numero de celular:</label>
                        <input type="tel" class="form-control" name="numero" required>
                        <label for="metodo_pago">Escoge tu metodo de pago:</label>
                        <select id="tipo" name="metodo_pago" class="form-select" required>
                            <option selected value=""></option>
                            <option name="metodo_pago" value="1">CONSIGNACION</option>
                            <?php if(isset($metodoPago)){?>
                            <option name="metodo_pago" value="<?php echo $metodoPago['codigo']?>">
                                <?php echo strtoupper(''.$metodoPago['tipo']).' / '.$metodoPago['nombre_banco']
                                        ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modales de advertencia -->
    <div class="modal fade" id="advertencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Inicia sesión para poder adquirir servicios. Si no posees una cuenta puedes
                    <a class="decoration-none" href="registro.php">registrate.</a>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- modal de compra -->
    <div class="modal fade" id="modalCompra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tu compra ha sido realizada con exito.
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js de jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--  js personalizado  -->
    <script src="js/servicios.js"></script>

    <script src="js/menu_cuenta.js"></script>


</body>

</html>