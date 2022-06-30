<?php 
  session_start();
  if(isset($_SESSION['rol'])){//indicamos que  hay una sesion activa
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Registro</title>

    <link rel="stylesheet" href="css/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/StyleRegistro.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="https://kit.fontawesome.com/53305f8af1.js" crossorigin="anonymous"></script>

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
            </div>
        </div>
    </header>

    <section class="d-flex justify-content-center align-items-center">
        <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4 p-4">
            <?php
                 if(isset($_GET['exito']))
                            {

                            
                            ?>
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <div>
                    Se ha registrado correctamente
                    <i class="fa-solid fa-circle-check"></i>
                </div>
            </div>
            <?php  
                            }
                            ?>

            <?php
                            if(isset($_GET['error1']))
                            {

                            
                            ?>
            <div class="alert alert-danger d-flex" role="alert">
                <div class="text-center">
                    <i class="fa-solid fa-xmark"></i> Error. El correo digitado ya esta
                    registrado con otro usuario.
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
                    <i class="fa-solid fa-xmark"></i> Error. las contraseñas no
                    coinciden
                </div>
            </div>

            <?php  
                            }
                            ?>

            <div class="mb-4 d-flex justify-content-start align-items-center">
                <h4><i class="bi bi-chat-left-quote"></i> &nbsp; Registro</h4>
            </div>
            <div class="mb-1">
                <form id="registro" class="formulario" action="php/funciones/registrarse.php" method="POST">
                    <!--  <?php if(isset($_GET["error"])){
                echo "<p>Error en las credenciales</p>";
            }?> -->

                    <div class="campo">
                        <div class="mb-4">
                            <label for="nombre">
                                <i class="bi bi-person-fill"></i> Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="ej: Usuario"
                                required />
                            <div class="nombre text-danger"></div>
                        </div>
                    </div>

                    <div class="campo">
                        <div class="mb-4">
                            <label for="correo"><i class="bi bi-envelope-fill"></i> Correo</label>
                            <input type="email" class="form-control" name="correo" id="correo"
                                placeholder="ej: Correo@gmail.com" required />
                            <div class="correo text-danger"></div>
                        </div>
                    </div>

                    <div class="campo">
                        <div class="mb-4">
                            <label for="pass">
                                <i class="bi bi-key-fill"></i> Contraseña</label>
                            <input type="password" class="form-control" name="pass" id="pass"
                                placeholder="ej: Contraseña" required />
                            <div class="pass text-danger"></div>
                        </div>
                    </div>

                    <div class="campo">
                        <div class="mb-4">
                            <label for="confirmPass">
                                <i class="bi bi-key-fill"></i> Confirmar contraseña</label>
                            <input type="password" class="form-control" name="confirmPass" id="confirmPass"
                                placeholder="ej: Contraseña" required />
                            <div class="confirmPass text-danger"></div>
                        </div>
                    </div>

                    <div class="enviar">
                        <button id="botton" class="col-12 btn btn-primary d-flex justify-content-between">
                            <span>Registrarse </span><i id="icono" class="bi bi-cursor-fill"></i>
                        </button>
                    </div>
                </form>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js de jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--  js personalizado  -->
    <script src="js/menu_cuenta.js"></script>

</body>

</html>