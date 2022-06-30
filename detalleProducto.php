<?php 
 session_start();
 if(isset($_SESSION['rol'])){//indicamos que  hay una sesion activa
   $sessionActiva = true;

 
     if(isset($_SESSION['carrito'])){
         include('php/ventas/carrito.php');//obtengo la lista ventas apartir de la clase carrito
     }
 
 
   


 }
  if(isset($_GET['codigo'])){
        
    $codigo=$_GET['codigo'];
    include 'php/db/conectar.php';
    include('php/db/tabla_producto.php');

    $query=query_t_p_findByCodigo($codigo);
    $result = mysqli_query($link, $query);
    $producto=mysqli_fetch_assoc($result);
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Detalle producto</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- ccs personalizado -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/53305f8af1.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->
    <header class="p-3 mb-3 border-bottom bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 px-2 justify-content-center mb-md-0">
                    <li>
                        <div class="nav-principal px-3">
                            <a href="index.php" class="nav-link  text-primary text-decoration-none">
                                Lympus<i class="fa-solid fa-bolt-lightning"></i>
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
                    <?php 
            if(isset($sessionActiva)){   
                ?>
                    <li>
                        <div class="fs-6">
                            <a href="carritoCompra.php" class="nav-link px-4 text-primary text-decoration-none">
                                <i class="fas fa-shopping-cart text-primary mr-1"></i>
                                <?php if(isset($_SESSION['carrito'])){?>
                                <span class="badge bg-light text-dark">
                                    <?php echo cantidadTotalProductos();?></span>
                                <?php }  ?>
                            </a>
                        </div>
                    </li>
                    <?php }  ?>
                </ul>
                <?php
       
            if(isset($sessionActiva)){   
                ?>
                <div id="sessionActiva" class="d-none">
                    usado para comprobar si hay una session activa
                </div>
                <?php  }?>
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


    <!-- detalles del producto -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <img class="img-fluid" src="<?php if(isset($_GET['codigo'])){echo $producto['imagen'];}?>" alt="">
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?php if(isset($_GET['codigo'])){echo $producto['nombre'];}?></h3>
                <div class="d-flex mb-3">
                    <div class="text-warning mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                </div>
                <h3 class="font-weight-semi-bold mb-4"><?php if(isset($_GET['codigo'])){echo '$'.$producto['precio'];}?>
                </h3>
                <p class="mb-4"><?php if(isset($_GET['codigo'])){
                    echo $producto['descripcion'];}
                    ?></p>

                <div class="d-flex align-items-center mb-4 pt-2">
                    <form action="php/ventas/agregarCarrito.php" method="POST">
                        <input type="hidden" name="codigo" value="<?php echo $producto['codigo']?>">
                        <div class="input-group input-group-sm mb-3">
                            <input class="form-control" placeholder="Ingrese cantidad" type="number" name="cantidad"
                                min="1" required>

                            <?php if(isset($_SESSION['rol'])){?>
                            <input type="hidden" name="redireccion" value="4">
   
                            <input type="hidden" name="nombre" value="<?php echo $producto["nombre"];?>">
                            <input type="hidden" name="precioUnidad" value="<?php echo $producto["precio"];?>">
                            <input type="hidden" name="costoUnidad" value="<?php echo $producto["costo"];?>">
                            <input type="hidden" name="imagen" value="<?php echo $producto["imagen"];?>">
                            
                            <button type="submit" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>
                                Añadir al
                                carrito</button> <?php }else{

                        ?><button type="button" class="btn btn-primary px-3" data-bs-toggle="modal"
                                data-bs-target="#advertencia"><i class="fas fa-shopping-cart mr-1"></i>
                                Añadir a carrito
                            </button> <?php }?>
                        </div>

                   
                </div>

            </div>
        </div>

    </div>
    <!-- fin detalles del producto -->
    <div class="modal fade" id="advertencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Inicia sesión para poder comprar productos en la tienda. Si no posees una cuenta puedes
                    <a class="decoration-none" href="registro.php">registrate.</a>
                </div>
                <div class="modal-footer">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js de jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--  js personalizado  -->
    <script src="js/menu_cuenta.js"></script>
</body>

</html>