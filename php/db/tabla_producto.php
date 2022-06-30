<?php
    $tabla_productos="productos"; 
    $query_t_p_findAll="SELECT * FROM $tabla_productos;";
  
    function  query_t_p_findByCodigo($codigo){
        global $tabla_productos;
        try{
            $query = "SELECT * FROM $tabla_productos where codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    //tipo: celular, computador o televisores
    function  query_t_p_findByTipo($tipo){
        global $tabla_productos;
        try{
            $query = "SELECT * FROM $tabla_productos where tipo='$tipo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    //marca: apple, samsung, xiaomi, etc
    function  query_t_p_findByMarca($marca){
        global $tabla_productos;
        try{
            $query = "SELECT * FROM $tabla_productos where tipo='$marca';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_p_findByMarcaTipo($tipo,$marca){
        global $tabla_productos;
        try{
            $query = "SELECT * FROM $tabla_productos where tipo='$tipo' and marca='$marca';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }
    //organizar segun el tipo de producto
    function  query_t_p_findByPrecioMayorMenorTipo($tipo){
        global $tabla_productos;
        try{
            $query = "SELECT * FROM $tabla_productos 
            WHERE tipo = '$tipo'
            ORDER BY precio DESC;";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_p_findByPrecioMenorMayorTipo($tipo){
        global $tabla_productos;
        try{
            $query = "SELECT * FROM $tabla_productos 
            WHERE tipo = '$tipo'
            ORDER BY precio ASC;";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    //organizar segun el tipo de marca
    function  query_t_p_findByPrecioMayorMenorMarca($marca){
        global $tabla_productos;
        try{
            $query = "SELECT * FROM $tabla_productos 
            WHERE tipo = '$marca'
            ORDER BY precio DESC;";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_p_findByPrecioMenorMayorMarca($marca){
        global $tabla_productos;
        try{
            $query = "SELECT * FROM $tabla_productos 
            WHERE tipo = '$marca'
            ORDER BY precio ASC;";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_p_update($codigo, $nombre, $marca, $tipo,
                                $existencia, $precio, $costo, $descripcion){
        global $tabla_productos;
        try{

            $query = "UPDATE $tabla_productos SET 
            nombre='$nombre', 
            marca='$marca',
            tipo='$tipo',
            existencia='$existencia',
            precio='$precio',
            costo='$costo',
            descripcion='$descripcion'            
            WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }
    
    function query_t_p_insertar($nombre, $marca, $tipo,
                                $existencia, $precio, $costo, $descripcion){
        global $tabla_productos;
        try{
            $query ="INSERT INTO $tabla_productos (nombre, marca, tipo, existencia, precio, costo, descripcion) VALUES 
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