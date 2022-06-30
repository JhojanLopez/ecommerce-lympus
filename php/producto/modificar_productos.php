<?php 
/* modificacion de los usuarios por parte del administrador */
session_start();
if(isset($_SESSION['rol']) && $_POST){//..?

   

include ("../db/conectar.php");
include('../db/tabla_producto.php');

  $codigo=$_POST['codigo'];
  $nombre=$_POST['nombre'];
  $marca=$_POST['marca'];
  $tipo=$_POST['tipo'];
  $existencia=$_POST['existencia'];
  $precio=$_POST['precio'];
  $costo=$_POST['costo'];
  $descripcion=$_POST['descripcion'];
  
  echo'codigo= '.$codigo.' nombre= '.$nombre.' marca= '.$marca.' tipo= '.$tipo.' existencia= '.$existencia.
  ' precio= '.$precio.' costo= '.$costo.' descripcion= '.$descripcion;


if($precio>$costo){
    /* actualizarProducto(); */
    $query = query_t_p_update($codigo, $nombre, $marca, $tipo,
        $existencia, $precio, $costo, $descripcion);

        $result = mysqli_query($link, $query);

        mysqli_close($link);

    header('location:../../gestionarProductos.php?exito=true');

}else{
    header('location:../../gestionarProductos.php?error1=true');
       
}

/* if(validarPrecio($precio,$costo)){

    actualizarProducto();
    header('location:../../gestionarProductos.php?exito=true');

}else{
    header('location:../../gestionarProductos.php?error1=true');
       
} */


function validarPrecio($precio, $costo){

    global $precio,$costo;

    if($precio>$costo){

        return true;

    }   else{

        return false;
        header('location:../../configuracion.php?error3=true');
        echo "el costo no puede ser mayor al precio de venta";
    }     
    

}


function actualizarProducto(){
    global $codigo, $nombre, $marca, $tipo,
        $existencia, $precio, $costo, $descripcion, $link;

        $query = query_t_p_update($codigo, $nombre, $marca, $tipo,
        $existencia, $precio, $costo, $descripcion);

        $result = mysqli_query($link, $query);

        mysqli_close($link);

}

    
}

?>