<?php
    $tabla_venta_servicios="venta_servicios";
    $query_t_vs_findAll="SELECT * FROM $tabla_venta_servicios;";
  
    //servicio movil
    function query_t_vs_insertar_m($codigoVenta,$codigoServicio,$numero){
        global $tabla_venta_producto;
        try{
            $query ="INSERT INTO venta_servicios (FK_codigoVenta,FK_codigoServicios,numero) VALUES 
             ('".$codigoVenta."',
            '".$codigoServicio."',
            '".$numero."');";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_vs_insertar_h($codigoVenta,$codigoServicio,$direccion){
        global $tabla_venta_producto;
        try{
            $query ="INSERT INTO venta_servicios (FK_codigoVenta,FK_codigoServicios,direccion) VALUES 
             ('".$codigoVenta."',
            '".$codigoServicio."',
            '".$direccion."');";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }



?>