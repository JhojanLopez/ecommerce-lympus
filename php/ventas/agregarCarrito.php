<?php
 session_start();

 if(isset($_SESSION['carrito'])){//si ya existe el carrito
    
    
    echo' existe sesion carrito<br>';
    $listaVenta=$_SESSION['carrito'];
    $pagina=$_POST['redireccion'];

    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $precioUnidad=$_POST['precioUnidad'];
    $costoUnidad=$_POST['costoUnidad'];
    $cantidad=$_POST['cantidad'];
    $imagen=$_POST['imagen'];
    
    $subTotal = establecerSubTotal($precioUnidad,$cantidad);
    $ganancia = establecerGanancia($precioUnidad,$costoUnidad,$cantidad);
    $eliminado = false;//necesario para que no bote errores
   
    if(validarCantidad($codigo, $cantidad)){//si es true crea otro producto en la lista

    $listaVenta[]=array('codigo'=>$codigo,'nombre'=>$nombre, 'precioUnidad'=>$precioUnidad, 'costoUnidad'=>$costoUnidad,
    'cantidad'=>$cantidad, 'imagen'=>$imagen,'subtotal'=>$subTotal, 'ganancia'=>$ganancia, 'eliminado'=>$eliminado);      
    }


    $_SESSION['carrito']=$listaVenta;//se reestablece el valor de la sesion carrito

    redireccion($pagina);
   


 }else{//sino se crea por 1era vez la session carrito y se guardar el primer dato
    echo'no existe sesion carrito<br>';
    $pagina=$_POST['redireccion'];

    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $precioUnidad=$_POST['precioUnidad'];
    $costoUnidad=$_POST['costoUnidad'];
    $cantidad=$_POST['cantidad'];
    $imagen=$_POST['imagen'];
    
    $subTotal = establecerSubTotal($precioUnidad,$cantidad);
    $ganancia = establecerGanancia($precioUnidad,$costoUnidad,$cantidad);
   
    $eliminado = false;
    $listaVenta[]=array('codigo'=>$codigo,'nombre'=>$nombre, 'precioUnidad'=>$precioUnidad, 'costoUnidad'=>$costoUnidad,
    'cantidad'=>$cantidad, 'imagen'=>$imagen,'subtotal'=>$subTotal, 'ganancia'=>$ganancia, 'eliminado'=>$eliminado);     
     

    echo 'cantidad de p:'.count($listaVenta); 
    mostrarProductos();
    $_SESSION['carrito']=$listaVenta;

  redireccion($pagina);

   
 }


/* editar una cantidad */
/*   function mostrarProductos(){
    global $listaVenta;
    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
        echo 'codigo='.$listaVenta[$i]['codigo'].'<br>'
        .'cantidad='.$listaVenta[$i]['cantidad'].'<br>';
        $listaVenta[$i]['cantidad']= $listaVenta[$i]['cantidad']*100;   
    }
    mostrarProductos2();
 } */
 
function validarCantidad($codigo,$cantidad){
    //busca en la lista del carrito si el codigo dado ya fue ingresado de serlo modificara la cantidad de dicho producto 
    global $listaVenta;


    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
        if( $listaVenta[$i]['codigo']==$codigo){

            $listaVenta[$i]['cantidad']=$listaVenta[$i]['cantidad']+$cantidad;
            $precio = $listaVenta[$i]['precioUnidad'];
            $costo = $listaVenta[$i]['costoUnidad'];
            $cantidadNueva= $listaVenta[$i]['cantidad'];

            $listaVenta[$i]['subtotal']=establecerSubTotal($precio, $cantidadNueva);
            $listaVenta[$i]['ganancia']=establecerGanancia($precio, $costo,$cantidadNueva);
   
            return false;
            
        }
        
    }

    return true; 

}

 function mostrarProductos(){
    global $listaVenta;
    for ($i=0; $i <=count($listaVenta)-1; $i++) { 
        echo '<br> codigo='.$listaVenta[$i]['codigo'].'<br>'
        .'nombre='.$listaVenta[$i]['nombre'].'<br>'
        .'precio und='.$listaVenta[$i]['precioUnidad'].'<br>'
        .'costo und='.$listaVenta[$i]['costoUnidad'].'<br>'
        .'imagen='.$listaVenta[$i]['imagen'].'<br>'
        .'cantidad='.$listaVenta[$i]['cantidad'].'<br>'
        .'subtotal='.$listaVenta[$i]['subtotal'].'<br>'
        .'ganancia='.$listaVenta[$i]['ganancia'].'<br>'
        ;
        
        
    }
}

function establecerSubTotal($precio,$cantidad){
    return $precio*$cantidad;
}

function establecerGanancia($precio,$costo,$cantidad){
    return ($precio-$costo)*$cantidad;
}

function redireccion($pagina){
global $pagina;
    if($pagina==1){
          
    header('Location:../../celulares.php');
    
    }else if ($pagina==2){
        header('Location:../../televisores.php');
    }else if ($pagina==3){
        header('Location:../../computadores.php');
    }else if ($pagina==4){
        header('Location:../../carritoCompra.php');
    }
}

/* 
    function vaciarLista(){
        session_start();
        unset($_SESSION['carrito']);
    }
     */
 
 
?>