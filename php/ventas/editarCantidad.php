<?php
session_start();
if(isset($_SESSION['rol'])){
    if(isset($_SESSION['carrito'])){
        
        $listaVenta = $_SESSION['carrito'];
        $codigo=$_POST['codigo'];
        $cantidad=$_POST['cantidad'];
        
       ;

        for ($i=0; $i <=count($listaVenta)-1; $i++) { 
         
            if($listaVenta[$i]['codigo']==$codigo){

                
                $listaVenta[$i]['cantidad']=$cantidad;
                echo 'ganancia antes'.$listaVenta[$i]['ganancia'];
                $listaVenta[$i]['ganancia']= ($listaVenta[$i]['precioUnidad']-$listaVenta[$i]['costoUnidad'])*$cantidad;//restablecemos la ganancia
                echo 'ganancia despues'.$listaVenta[$i]['ganancia'];
                
                echo 'subtotal antes'.$listaVenta[$i]['subtotal'];
                $listaVenta[$i]['subtotal']= ($listaVenta[$i]['precioUnidad'])*$cantidad;//restablecemos EL SUBTOTAL
                echo 'subtotal despues'.$listaVenta[$i]['subtotal'];
                
                break;
            }
              
            
        }
        $_SESSION['carrito']=$listaVenta;
         header('location:../../carritoCompra.php');


    }
    
}
?>