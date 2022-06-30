<?php
 session_start();

 if(isset($_SESSION['rol'])){
    if(isset($_SESSION['carrito'])){
        
        $listaVenta = $_SESSION['carrito'];
        $codigo=$_GET['codigo'];
       
        $posicion=remover($listaVenta,$codigo);
     /*   unset($_SESSION['carrito'][$posicion]);
            
        unset($listaVenta[$posicion]); dan error si elinmino el primer registro habiendo mas por delante de este
       */
        
        
        echo '<br>  posicion donde se va remover'.$posicion;
        echo '<br>  conunt sin borrar lista venta:'.count($listaVenta);
        /* unset($listaVenta[$posicion]); */
        echo '<br> conunt borrnado un eleemento lista venta:<br> '.count($listaVenta);
        $ultimaPos=count($listaVenta)-1;


       /*  if($posicion<=$ultimaPos && $posicion!=0){NO SIRVE SOLO DE ADELANTE HACIA ATRAS
            echo 'eentro al condicionl';
            array_splice($listaVenta,$posicion,$posicion-1);
            
        }else{
            echo 'NO eentro al condicionl';
        } */

       
        
     if($posicion==$ultimaPos){
            unset($listaVenta[$posicion]);
            echo 'entro al condicion1';
        
        }else if(count($listaVenta)>0){
            echo 'entro al condicion2';
            array_splice($listaVenta,$posicion,$posicion+1);
            
        }/* else{
            unset($listaVenta[$posicion]);
        } *//* else if(0<$posicion && $posicion<$ultimaPos){solo si esta en la mitad
            array_splice($listaVenta,$posicion,$posicion-1);} */
       

        $_SESSION['carrito']=$listaVenta;
        /* $_SESSION['carrito']=$listaVenta; */
        mostrarProductos($listaVenta);
        echo 'cantidad de count en session= '.count($_SESSION['carrito']);
        echo 'cantidad de count en lista= '.count($listaVenta);
        echo 'existe sesion:?'.isset($_SESSION['carrito']);
        echo 'existe lista:?'.isset($listaVenta);

        if(count($_SESSION['carrito'])==0){

            unset($_SESSION['carrito']);
            header('location:../../carritoCompra.php');
           
        }else{

            header('location:../../carritoCompra.php');
 
        }
        
       
    }
    
}
function mostrarProductos($listaVenta){
    
    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
        echo '<br> codigo='.$listaVenta[$i]['codigo'].'<br>'
        .'nombre='.$listaVenta[$i]['nombre'].'<br>'
        .'precio und='.$listaVenta[$i]['precioUnidad'].'<br>'
        .'costo und='.$listaVenta[$i]['costoUnidad'].'<br>'
        .'imagen='.$listaVenta[$i]['imagen'].'<br>'
        .'cantidad='.$listaVenta[$i]['cantidad'].'<br>'
        .'subtotal='.$listaVenta[$i]['subtotal'].'<br>'
        .'ganancia='.$listaVenta[$i]['ganancia'].'<br>'
        .'eliminado='.$listaVenta[$i]['eliminado'].'<br>'
        ;
        
        
    }
}

function remover($listaVenta,$codigo){//establezco la 'eliminacion' 
    global $listaVenta;
    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
         
        if($listaVenta[$i]['codigo']==$codigo){
            /* $listaVenta[$i]['eliminado']=true; */

            return $i;
        }
    } 

}

/* function posicionProducto($listaVenta,$codigo){
    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
         
        if($listaVenta[$i]['codigo']==$codigo){
            return $i;
        }
    } 

}*/


?>