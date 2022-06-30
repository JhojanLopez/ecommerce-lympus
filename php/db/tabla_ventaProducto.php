<?php
    $tabla_venta_producto='venta_producto';
    $query_t_vp_findAll="SELECT * FROM $tabla_venta_producto;";
  

    function query_t_vp_insertar($codigoVenta,$codigoProducto,$cantidad_venta,$costo_venta,$precio_venta,$ganancia_venta){
        global $tabla_venta_producto;
        try{
            $query ="INSERT INTO venta_producto (FK_codigoVenta,FK_codigoProducto,cantidadVenta, costoVenta, precioVenta, gananciaVenta) VALUES 
             ('".$codigoVenta."',
            '".$codigoProducto."',
            '".$cantidad_venta."',
            '".$costo_venta."',
            '".$precio_venta."',
            '".$ganancia_venta."');";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }
    function  query_t_vp_findByFkCodigoVenta($codigoVenta){
        global $tabla_venta_producto;
        try{
            $query = "SELECT * FROM $tabla_venta_producto where Correo='$codigoVenta';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_vp_findByFkCodigoProducto($codigoProducto){
        global $tabla_venta_producto;
        try{
            $query = "SELECT * FROM $tabla_venta_producto where Correo='$codigoProducto';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    

?>