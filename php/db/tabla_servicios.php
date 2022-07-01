<?php
    $tabla_servicios="servicios"; 
    $query_t_s_findAll="SELECT * FROM $tabla_servicios;";
  
    function  query_t_s_findByCodigo($codigo){
        global $tabla_servicios;
        try{
            $query = "SELECT * FROM $tabla_servicios where codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_s_findByTipo($tipo){
        global $tabla_servicios;
        try{
            $query = "SELECT * FROM $tabla_servicios where tipo='$tipo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_s_findByPrecioMayorMenor($tipo){
        global $tabla_servicios;
        try{
            $query = "SELECT * FROM $tabla_servicios 
            WHERE tipo = '$tipo'
            ORDER BY precio DESC;";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_s_findByPrecioMenorMayor($tipo){
        global $tabla_servicios;
        try{
            $query = "SELECT * FROM $tabla_servicios 
            WHERE tipo = '$tipo'
            ORDER BY precio ASC;";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_u_insertar($nombre,$marca,$tipo,$existencia,$precio,$costo,$descripcion){
        global $tabla_servicios;
        try{
            $query ="INSERT INTO $tabla_servicios (nombre,marca,existencia,precio,costo,descripcion) VALUES //COLOCAR IMAGEN LUEGO
             ('".$nombre."',
            '".$marca."',
            '".$tipo."',
            '".$existencia."',
            '".$precio."',
            '".$costo."',
            '".$descripcion."');";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }





?>