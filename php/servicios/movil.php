<?php
session_start();
if(isset($_SESSION['rol']) && $_POST){

    include ("../db/conectar.php");
    include('../db/tabla_servicios.php');
    include('../db/tabla_venta.php');
    

    $codigoPaquete=$_POST['paquete'];
    $codigoMetodoPago=$_POST['metodo_pago'];

    $query = query_t_s_findByCodigo($codigoPaquete);
    $result = mysqli_query($link, $query);
    $paquete = mysqli_fetch_array($result);
    
    mysqli_free_result($result); 
    
    $fecha= date('d-m-y');
    $total = $paquete['precio'];
    $costo = $paquete['costo'];
    $ganancia =$total-$costo;    
    
    
    
    
    
    mysqli_close($link);
    

}

?>