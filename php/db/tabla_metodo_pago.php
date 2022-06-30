<?php
    $tabla_metodo_pago="metodo_pago"; 
    $query_t_mp_findAll="SELECT * FROM $tabla_metodo_pago;";
    $query_t_mp_findLastId="SELECT MAX(codigo) AS codigo FROM $tabla_metodo_pago";
    
    function  query_t_mp_findByCodigo($codigo){
        global $tabla_metodo_pago;
        try{
            $query = "SELECT * FROM $tabla_metodo_pago where Codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_mp_insertar($tipo,$nombre_banco,$numero_cuenta){
        global $tabla_metodo_pago;
        try{
            $query ="INSERT INTO $tabla_metodo_pago (tipo, nombre_banco, numero_cuenta) VALUES 
             ('".$tipo."',
            '".$nombre_banco."',
            '".$numero_cuenta."');";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_mu_delete($codigo){
        global $tabla_metodo_pago;
        try{
            $query ="DELETE * FROM $tabla_metodo_pago WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

?>