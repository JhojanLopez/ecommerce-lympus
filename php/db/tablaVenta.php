<?php
    $tabla_venta="venta"; 
    $query_t_v_findAll="SELECT * FROM $tabla_venta;";
    $query_t_v_findLastID="SELECT MAX(codigo) AS codigo FROM $tabla_venta";
  
    function query_t_v_insertar($fecha,$pago,$total_venta,$ganancia_venta,$Fk_metodoPago,$fk_usuario){
        global $tabla_venta;
        try{
            $query ="INSERT INTO $tabla_venta 
            (fecha, pago, total_venta, ganancia_venta, Fk_metodoPago, FK_usuario) VALUES 
             ('".$fecha."',
            '".$pago."',
            '".$total_venta."',
            '".$ganancia_venta."',
            '".$Fk_metodoPago."',
            '".$fk_usuario."');";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_v_findBycodigo($codigo){
        global $tabla_venta;
        try{
            $query ="SELECT * FROM $tabla_venta WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }
    function query_t_u_actualizar($codigo,$fecha,$hora,$total_venta,$ganancia_venta,$Fk_metodoPago,$fk_usuario){
        global $tabla_venta;
        try{
            $query ="UPDATE $tabla_venta set 
            codigo = '$codigo', 
            fecha='$fecha', 
            hora='$hora',
            total_venta='$total_venta',
            ganancia_venta='$ganancia_venta',
            FK_metodoPago='$Fk_metodoPago', 
            FK_usuario='$fk_usuario'
            where codigo= $codigo";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

?>