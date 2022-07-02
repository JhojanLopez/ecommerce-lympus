<?php 
/* modificacion de los usuarios por parte del administrador */
session_start();
if(isset($_SESSION['rol']) && $_POST){//..?

   

include ("../db/conectar.php");
include('../db/tabla_producto.php');

  $nombre=$_POST['nombre'];
  $marca=$_POST['marca'];
  $tipo=$_POST['tipo'];
  $existencia=$_POST['existencia'];
  $precio=$_POST['precio'];
  $costo=$_POST['costo'];
  $descripcion=$_POST['descripcion'];
  
  echo'nombre= '.$nombre.' marca= '.$marca.' tipo= '.$tipo.' existencia= '.$existencia.
  ' precio= '.$precio.' costo= '.$costo.' descripcion= '.$descripcion;


if($precio>$costo){
    /* actualizarProducto(); */
    $imagen = establecerImagen($tipo);
    $query = query_t_p_insertar($nombre, $marca, $tipo,
        $existencia, $precio, $costo, $descripcion,$imagen);

        $result = mysqli_query($link, $query);

        mysqli_close($link);

    header('location:../../gestionarProductos.php?exito=true');

}else{
    header('location:../../gestionarProductos.php?error1=true');
       
}
    
}

function establecerImagen($tipo){
    if($tipo=='Celular'){
        return 'img/imgGrandes/Celulares/predeterminadocel.png';
    }else if($tipo=='Computador'){
        return 'img/imgGrandes/Computadores/predeterminadopc.png';
        
    }else{
        return 'img/imgGrandes/Televisores/predeterminadotv.png';
   
    }



}

?>