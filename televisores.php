<?php 
  session_start();
  if(isset($_SESSION['rol'])){//indicamos que  hay una sesion activa
    $sessionActiva = true;

    if(isset($_SESSION['carrito'])){
        include('php/ventas/carrito.php');//obtengo la lista ventas apartir de la clase carrito
    }


  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Televisores</title>

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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-4" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="img/imgGrandes/Televisores/principal/Xiaomi tv principal.jpeg" class="d-block w-100" alt="productos" width="1279" height="475"/>
                                <div class="carousel-caption d-none d-md-block text-light">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/imgGrandes/Computadores/principal/principal_computador.png" class="d-block w-100" alt="servicios" width="1279" height="475"/>
                                <div class="carousel-caption d-none d-md-block text-light">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container mt-5">
        <!-- filtros -->
        <div class="row mt-5 mb-3">
            <div class="col-4">
                <form action="televisores.php" method="POST">
                    <label for="tipo" class="form-label">Busqueda por:</label>
                    <select id="filtro" name="filtro" class="form-select" required>
                        <option selected value=""></option>
                        <option name="filtro" value="filtro1">Todos</option>
                        <option name="filtro" value="filtro2">Menor precio</option>
                        <option name="filtro" value="filtro3">Mayor precio</option>
                        <option name="filtro" value="filtro4">Marca LG</option>
                        <option name="filtro" value="filtro5">Marca Samsung</option>
                        <option name="filtro" value="filtro6">Marca Xiaomi</option>

                    </select>

            </div>

            <div class="col-2 mt-2">
                <br>
                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Buscar</button>
            </div>
            </form>
        </div>



        <!-- productos -->
        <div class="row mt-5">

            <?php
             include 'php/db/conectar.php';
             include 'php/db/tabla_producto.php';
             $tipo='Televisor';
             $query='';

    if(isset($_POST['filtro'])){
    

        if($_POST['filtro']=='filtro1'){
            global $query;
            $query = query_t_p_findByTipo($tipo);
        }else if($_POST['filtro']=='filtro2'){
            global $query;
            $query = query_t_p_findByPrecioMenorMayorTipo($tipo);

        }else if($_POST['filtro']=='filtro3'){
            global $query;
            $query = query_t_p_findByPrecioMayorMenorTipo($tipo);

        }else if($_POST['filtro']=='filtro4'){
            global $query;
            $query = query_t_p_findByMarcaTipo($tipo,'LG');

        }else if($_POST['filtro']=='filtro5'){
            global $query;
            $query = query_t_p_findByMarcaTipo($tipo,'Samsung');

        }else if($_POST['filtro']=='filtro6'){
            global $query;
            $query = query_t_p_findByMarcaTipo($tipo,'Xiaomi');

        }
      /* 
        echo 'filtro aplicado: '.$_POST['filtro'] ;
        echo $query; */
    }
    else{

    $query = query_t_p_findByTipo($tipo);

        
    }
       
        $result = mysqli_query($link, $query);
        
        while($row=mysqli_fetch_assoc($result))
            {
             ?>
            <!-- tarjeta de producto -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mt-2 mb-5">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent">
                        <img class="img-fluid imagen-tienda" src="<?php  echo $row["imagen"];?>"
                            alt="<?php  echo 'foto_'.$row["nombre"];?>">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $row["nombre"];?></h6>
                        <div class="d-flex justify-content-center">
                            <h6><?php  echo '$'.$row["precio"];?></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-dark border">
                        <a href="detalleProducto.php?codigo=<?php echo $row["codigo"];?>"
                            class="btn btn-sm text-light p-0"><i class="fas fa-eye text-primary mr-1"></i>Mas
                            detalles</a>

                        <?php if(isset($_SESSION['rol'])){?>
                            <form action="php/ventas/agregarCarrito.php" method="POST">
                            <input type="hidden" name="redireccion" value="2">


                            <input type="hidden" name="codigo" value="<?php echo $row["codigo"];?>">
                            <input type="hidden" name="nombre" value="<?php echo $row["nombre"];?>">
                            <input type="hidden" name="precioUnidad" value="<?php echo $row["precio"];?>">
                            <input type="hidden" name="costoUnidad" value="<?php echo $row["costo"];?>">
                            <input type="hidden" name="imagen" value="<?php echo $row["imagen"];?>">
                            
                            <input type="hidden" name="cantidad" value="1">
                            <button type="submit" class="btn btn-sm text-light p-0"><i
                                    class="fas fa-shopping-cart text-primary mr-1"></i>Añadir a carrito</button>
                        </form> <?php }else{

                        ?><button type="button" class="btn btn-sm text-light p-0" data-bs-toggle="modal"
                            data-bs-target="#advertencia"><i class="fas fa-shopping-cart text-primary mr-1"></i>
                            Añadir a carrito
                        </button> <?php }?>
                    </div>
                </div>
            </div>
            <?php
            }

            mysqli_free_result($result);
            mysqli_close($link);


    ?>

        </div>
    </div>
    <!-- fin de los productos -->
    </div>
    </div>
    <!-- fin de los  filtros -->

    <!-- Modal -->
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
    <script src="js/index.js"></script>

</body>

</html>