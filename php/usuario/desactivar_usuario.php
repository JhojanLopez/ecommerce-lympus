<?php 
session_start();
if(isset($_SESSION['rol']) && $_POST){//..?

   

include ("../db/conectar.php");
include('../db/tabla_usuario.php');

  $codigo=$_POST['codigoDesactivar'];

    echo $codigo;


        $query=query_t_u_updateByActivo($codigo,1);
        $result = mysqli_query($link, $query);
        mysqli_close($link);
        
    header('location:../../administrarUsuarios.php?exito=true');
    

}else{
    header('location:../../index.php');
}



?>