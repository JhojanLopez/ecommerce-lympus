<?php
session_start();
if(isset($_SESSION['rol']) && $_POST){

    include ("../db/conectar.php");
    include('../db/tabla_servicios.php');
    include('../db/tablaVenta.php');
    

    $codigoPaquete=$_POST['paquete'];
    $codigo_metodo_pago=$_POST['metodo_pago'];

    $query = query_t_s_findByCodigo($codigoPaquete);
    $result = mysqli_query($link, $query);
    $paquete = mysqli_fetch_assoc($result);
    
    mysqli_free_result($result); 
    
    $direccion= $_POST['direccion'];
    $fecha= date('y-m-d');
    $total = $paquete['precio'];
    $costo = $paquete['costo'];
    $ganancia =$total-$costo;    
    $codigo_usuario=$_SESSION['codigo'];

    echo  'cod paquete= '.$codigoPaquete.'cod pago= '.$codigo_metodo_pago.'total venta='.$total.'costo= '.$costo.
    'Ganancia venta='.$ganancia.'fecha:' .$fecha.' codigo usuario:'.$codigo_usuario.' celular:'.$direccion;

    $pago = establecerPago($codigoPaquete);
    $query=query_t_v_insertar($fecha,$pago,$total,$ganancia,$codigo_metodo_pago,$codigo_usuario);
    $result = mysqli_query($link, $query);
    
    $result = mysqli_query($link, $query_t_v_findLastID);
    $codigoVenta=mysqli_fetch_array($result);
      
    
    insertarServicios($codigoVenta,$codigoPaquete, $direccion);//tabla *a*
    
    mysqli_close($link);
    redireccionar($codigoPaquete);
    
}
function establecerPago($codigoPaquete){
    if($codiPaquete>0 && $codigoPaquete<5){
        return 0;
    }else{
        return 1;
    }
}

function insertarServicios($codigoVenta,$codigoPaquete,$direccion){
    global $link;
    $Fk_venta= $codigoVenta[0];
    
    include('../db/tabla_ventaServicios.php');
    $query = query_t_vs_insertar_h($Fk_venta,$codigoPaquete,$direccion);
    mysqli_query($link, $query);


}
function redireccionar($codigoPaquete){
    if($codigoPaquete>8 &&  $codigoPaquete<13){
        header('Location:../../internetHogar.php?compra=true');

    }else{
        header('Location:../../doblePlay.php?compra=true');
        
    }}

?>