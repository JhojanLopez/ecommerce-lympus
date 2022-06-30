<?php
    $tabla_usuario="usuario";
    $query_t_u_findAll="SELECT * FROM $tabla_usuario;";
   /* dara toda la lista de usuarios exceptuando al ususario que esta logeado (utilziado en admin) */
    function  query_t_u_findAllDifferentCodigo($codigo){
        global $tabla_usuario;
        try{
            $query = "SELECT * FROM $tabla_usuario where codigo<>'$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_u_findByCorreoContrasena($correo, $password){
        global $tabla_usuario;
        try{
            $query = "SELECT * FROM $tabla_usuario where correo='$correo' and contrasena='$password';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }
   
    function  query_t_u_findByCorreo($correo){
        global $tabla_usuario;
        try{
            $query = "SELECT * FROM $tabla_usuario  WHERE correo ='$correo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    /* buscara si existe otro correo que haya puesto al actualizar siempre y cuando sea distinto al codigo de la persona logeada */
    function  query_t_u_findByCorreoDifferentCodigo($codigo, $correo){
        global $tabla_usuario;
        try{
            $query = "SELECT * FROM $tabla_usuario  WHERE correo ='$correo' and codigo<>'$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }
    function query_t_u_insertar($nombre,$correo,$password,$rol){
        global $tabla_usuario;
        try{
            $query ="INSERT INTO $tabla_usuario (activo,nombre,correo,contrasena,FK_CodigoRol) VALUES
             ('0',
            '".$nombre."',
            '".$correo."',
            '".$password."',
            '".$rol."');";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_u_updateByNombreCorreo($codigo, $correo, $nombre){
        global $tabla_usuario;
        try{
            $query = "UPDATE $tabla_usuario SET correo='$correo', nombre='$nombre' where codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_u_updateByNombreCorreoRol($codigo, $correo, $nombre, $rol){
        global $tabla_usuario;
        try{
            $query = "UPDATE $tabla_usuario SET correo='$correo', nombre='$nombre', FK_CodigoRol='$rol' where codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }
    
    function  query_t_u_updateByCorreo($codigo, $correo){
        global $tabla_usuario;
        try{
            $query = "UPDATE $tabla_usuario SET correo='$correo' WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function  query_t_u_updateByNombre($codigo, $nombre){
        global $tabla_usuario;
        try{
            $query = "UPDATE $tabla_usuario SET nombre='$nombre' WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_u_updateByPassword($codigo,$contrasena){
        global $tabla_usuario;
        try{
            $query = "UPDATE $tabla_usuario SET contrasena='$contrasena' WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_u_updateByActivo($codigo,$activo){
        global $tabla_usuario;
        try{
            $query = "UPDATE $tabla_usuario SET activo='$activo' WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }


    function query_t_u_updateByMetodoPago($codigo,$codigoMetodoPago){
        global $tabla_usuario;
        try{
            $query = "UPDATE $tabla_usuario SET FK_metodoPago='$codigoMetodoPago' WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }

    function query_t_u_deleteByMetodoPago($codigo,$codigoMetodoPago){//no borra solo lo pone null
        global $tabla_usuario;
        try{
            $query = "UPDATE $tabla_usuario SET FK_metodoPago=NULL  WHERE codigo='$codigo';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }
?>