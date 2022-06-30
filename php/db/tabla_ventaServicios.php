<?php
    $tabla_usuario="usuario";
    $query_t_u_findAll="SELECT * FROM $tabla_usuario;";
  
    function  query_t_u_findByCorreoContrasena($correo, $password){
        global $tabla_usuario;
        try{
            $query = "SELECT * FROM $tabla_usuario where Correo='$correo' and Contrasena='$password';";
            return $query;
    
        }catch(mysqli_sql_exception $e){
            var_dump($e);
        }
    }



?>