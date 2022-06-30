<?php 
   session_start();
   if(isset($_SESSION['rol'])){//indicamos que  hay una sesion activa
     $sessionActiva = true;
 
     if(isset($_SESSION['carrito'])){
         include('php/ventas/carrito.php');//obtengo la lista ventas apartir de la clase carrito
         include('php/ventas/metodo_pago.php');//obtengo la lista ventas apartir de la clase carrito
        }
 
 
   }else{
    header('location:index.php');
   }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Carrito de compras</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/53305f8af1.js" crossorigin="anonymous"></script>


    <link href="css/style.css" rel="stylesheet">
</head>

<body>
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
    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <?php if(isset($_GET['compra'])){ ?>

        <div id="compra" class="d-none">
        <?php  
       /*  una vez hecha la compra */
       include ("php/db/conectar.php");
       include('php/db/tablaVenta.php');
       include('php/db/tabla_metodo_pago.php');

       $result = mysqli_query($link, $query_t_v_findLastID);
       $codigo=mysqli_fetch_assoc($result);
       $query = query_t_v_findBycodigo($codigo['codigo']);
       mysqli_free_result($result);    
       $result = mysqli_query($link, $query);
       $venta=mysqli_fetch_assoc($result);
       mysqli_free_result($result); 
        
       $query = query_t_mp_findByCodigo($venta['FK_metodoPago']);
       $result = mysqli_query($link, $query);
       $metodoPagoVenta=mysqli_fetch_assoc($result);
       mysqli_close($link);
      
        ?>
        </div>


        <?php } ?>
        <?php if(isset($_SESSION['carrito'])){ ?>

        <div class="d-flex flex-row px-xl-5 mb-2">
            <div class="col-8">
                <div class="text-center"><button class="btn btn-primary trigger">Editar</button>

                    <a href="php/ventas/vaciarCarrito.php" class="btn btn-danger">Cancelar</a>


                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive">
                <table id="listaProductos" class="table text-center">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>Productos</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Eliminar</th>

                        </tr>
                    </thead>
                    <tbody id="productos" class="align-middle">
                        <?php 
                        for ($i=0; $i <=count($listaVenta)-1; $i++) { ?>
                        <tr>
                            <input type="hidden" id="codigoEditar" value="<?php echo $listaVenta[$i]['codigo']?>">

                            <td class="align-middle">
                                <img src="<?php echo $listaVenta[$i]['imagen']?>"
                                    alt="<?php echo $listaVenta[$i]['nombre']?>" style="width: 50px;">
                                <?php echo $listaVenta[$i]['nombre']?>
                            </td>
                            <td class="align-middle"><?php echo '$'.$listaVenta[$i]['precioUnidad']?></td>
                            <td class="align-middle">
                                <?php echo $listaVenta[$i]['cantidad']?>
                            </td>
                            <td class="align-middle"><?php echo '$'.$listaVenta[$i]['subtotal']?></td>
                            <td class="align-middle">
                                <!-- <form action="php/ventas/removerCarrito.php">
                                    <input type="hidden" id="codigoEditar" value="<?php echo $listaVenta[$i]['codigo']?>">
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                </form> -->

                                <a class="btn btn-sm btn-danger"
                                    href="php/ventas/removerCarrito.php?codigo=<?php echo $listaVenta[$i]['codigo']?>">
                                    <i class="fa fa-times"></i>
                                </a>

                            </td>
                        </tr>
                        <?php    } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">

                <form action="php/ventas/compra.php" method="POST">
                    <div class="card border-secondary mb-1">
                        <div class="card-header bg-primary border-0">
                            <h4 class="font-weight-semi-bold m-0 text-light">Resumen de la compra</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium">Subtotal</h6>
                                <h6 class="font-weight-medium"><?php echo '$'.totalVenta()?></h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Envio</h6>
                                <h6 class="font-weight-medium text-success">Gratis</h6>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Metodo de pago:</h5>
                                <h5 class="font-weight-bold">
                                    <select id="tipo" name="metodo_pago" class="form-select" required>
                                        <option selected value=""></option>
                                        <option name="metodo_pago" value="1">CONSIGNACION</option>
                                        <?php if(isset($metodoPago)){?>
                                        <option name="metodo_pago" value="<?php echo $metodoPago['codigo']?>">
                                            <?php echo strtoupper(''.$metodoPago['tipo']).' / '.$metodoPago['nombre_banco']
                                        ?></option>
                                        <?php }?>
                                    </select>
                                </h5>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <input type="hidden" name="totalVenta" value="<?php echo totalVenta()?>">
                                <h5 class="font-weight-bold">Total</h5>
                                <h5 class="font-weight-bold"><?php echo '$'.totalVenta()?></h5>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary my-3 py-3">Comprar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <?php } else{?>
        <div class="row px-xl-5">
            <div class="col-lg-12 pb-5 mb-5">
                <h1 class="text-center">Lista vacia</h1>
            </div>

        </div>
        <?php }?>
    </div>
    <!-- Cart End -->
    <!--  modal editar cantidad -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="php/ventas/editarCantidad.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar cantidad</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="modalCodigo" name="codigo" required>
                        <input class="form-control" type="number" id="modalCantidad" name="cantidad" min="1"
                            placeholder="Ingresa cantidad del producto seleccionado" required>

                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  modal mostrar venta -->
    <div class="modal fade" id="modalCompra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compra realizada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="justify-content">
                    <p ><b>Tu compra ha sido realizada con exito.</b><br>
                     referencia de venta: <?php echo $venta['codigo']?><br>
                     fecha:  <?php echo $venta['fecha'] ?><br>
                     total: <?php echo $venta['total_venta'] ?><br>
                     metodo de pago: <?php if(isset($metodoPagoVenta) && $metodoPagoVenta['codigo']!=1){ echo strtoupper(''.$metodoPagoVenta['tipo']).' / '.$metodoPagoVenta['nombre_banco'].' / '.$metodoPagoVenta['numero_cuenta'];
                    }else{ echo ' Consignacion';} ?><br>
                                    
                    <b>¡Muchas gracias por tu compra!</b></p>
                    </div>
                </div>

                <div class="modal-footer">


                </div>

            </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js de jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--  js personalizado  -->
    <script src="js/menu_cuenta.js"></script>
    <!--  js personalizado  -->
    <script src="js/carrito_compra.js"></script>
</body>

</html>