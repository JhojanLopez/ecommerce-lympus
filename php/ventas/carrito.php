<?php 
/* session_start(); */

if(isset($_SESSION['carrito'])){//si ya existe el carrito

    $listaVenta =$_SESSION['carrito'];
  /*   echo 'total venta= '.totalVenta();
    echo 'cantidad total venta= '.cantidadTotalProductos();
     */
}


function cantidadTotalProductos(){
    global $listaVenta;
    $cantidad=0;
    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
        
        $cantidad=$listaVenta[$i]['cantidad']+$cantidad;
         
    }
    return $cantidad;  


}
function totalVenta(){
    global $listaVenta;
    $total=0;
    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
        
        $total=$listaVenta[$i]['subtotal']+$total;
         
    }
    return $total;  


}

function gananciaVenta(){
    global $listaVenta;
    $ganancia=0;
    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
        
        $ganancia=$listaVenta[$i]['ganancia']+$ganancia;
         
    }
return $ganancia;
}

?>