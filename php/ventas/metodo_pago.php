<?php 
/* obtenermos el metodo */

if(isset($_SESSION['rol'])){//indicamos que  hay una sesion activa
  
     if(isset($_SESSION['metodoPago'])){
       
        $codigo=$_SESSION['metodoPago'];
        include 'php/db/conectar.php';
        include('php/db/tabla_metodo_pago.php');
        
        $query=query_t_mp_findByCodigo($codigo);
        $result = mysqli_query($link, $query);
        $metodoPago=mysqli_fetch_assoc($result);
        
       /*  echo $metodoPago['tipo'].' '.$metodoPago['nombre_banco'].
 */
        mysqli_free_result($result);
        mysqli_close($link);

    }/* else{

        echo 'no existe';
    } */


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