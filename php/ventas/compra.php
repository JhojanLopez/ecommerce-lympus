<?php
 session_start();
 if(isset($_SESSION['rol'])){//indicamos que  hay una sesion activa

   if(isset($_SESSION['carrito']) && isset($_POST)){

        include('carrito.php');//obtengo la lista ventas apartir de la clase carrito
    
        include ("../db/conectar.php");
        include('../db/tablaVenta.php');
        $codigo_metodo_pago = $_POST['metodo_pago'];
        $totalVenta= $_POST['totalVenta'];
        $ganancia = gananciaVenta();//ganancia total
        $fecha= date('y-m-d');
        $codigo_usuario=$_SESSION['codigo'];
        echo  'cod pago: '.$codigo_metodo_pago.'total venta='.$totalVenta.'Ganancia venta='.$ganancia
        .'fecha:' .$fecha.' codigo usuario:'.$codigo_usuario;
       

        $query=query_t_v_insertar($fecha,0,$totalVenta,$ganancia,$codigo_metodo_pago,$codigo_usuario);
        $result = mysqli_query($link, $query);

        $result = mysqli_query($link, $query_t_v_findLastID);
        $codigoVenta=mysqli_fetch_array($result);
       
        insertarProductos($codigoVenta);//tabla *a*
        unset($_SESSION['carrito']);//destruimos la session
        header('location:../../carritoCompra.php?compra=true');
    }


 }else{
  header('location:index.php');
 }
 function insertarProductos($codigoVenta){
    global $link;
    $Fk_venta= $codigoVenta[0];
    include('../db/tabla_ventaProducto.php');

    $listaVenta=$_SESSION['carrito'];
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
      $query=query_t_vp_insertar($Fk_venta,$listaVenta[$i]['codigo'],$listaVenta[$i]['cantidad'],$listaVenta[$i]['costoUnidad'],
      $listaVenta[$i]['precioUnidad'],$listaVenta[$i]['ganancia']);
      echo '<br>'.$query.'<br>';
      mysqli_query($link, $query);
  }
  mysqli_close($link);



 }
?>