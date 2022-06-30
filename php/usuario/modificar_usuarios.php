<?php 
/* modificacion de los usuarios por parte del administrador */
session_start();
if(isset($_SESSION['rol']) && $_POST){//..?

   

include ("../db/conectar.php");
include('../db/tabla_usuario.php');

  $codigo=$_POST['codigo'];
  $nombre=$_POST['nombre'];
  $correo=$_POST['correo'];
  $rol=$_POST['rol'];
  

if(validarCorreo($codigo,$correo)){//si es correcta la validacion entonces se actualiza
    $query = query_t_u_updateByNombreCorreoRol($codigo,$correo,$nombre,$rol);
    $result = mysqli_query($link, $query);
    
    mysqli_close($link);
    
    header('location:../../administrarUsuarios.php?exito=true');
    
}else{
    header('location:../../administrarUsuarios.php?error=true');//correo ya existe no puede ser igual a otro existente
}


}else{
    header('location:../../index.php');
}

function actualizarCorreo(){
    global $codigo, $correo, $link;
    echo 'actualizar correo'.$correo.'  cod'.$codigo;

    if(validarCorreo($codigo,$correo)){//si es correcta la validacion entonces se actualiza
        $query = query_t_u_updateByCorreo($codigo,$correo);
        $result = mysqli_query($link, $query);
        
        /* mysqli_free_result($result); (?)*/
        mysqli_close($link);
        
        $_SESSION['correo']=$correo;
        header('location:../../configuracion.php?exito1=true');//correo ya existe no puede ser igual a otro existente
        
    }else{
        header('location:../../configuracion.php?error1=true');//correo ya existe no puede ser igual a otro existente
    }

    /* 
    $query=query_t_u_updateByCorreo($codigo,$correo);
    echo $query;
    $result = mysqli_query($link, $query); */

}

function validarCorreo($codigo,$correo){
    global $link;
    $query = query_t_u_findByCorreoDifferentCodigo($codigo,$correo);
    echo '<br> validar correo'.$query;
    
    $result = mysqli_query($link, $query);
    $row=mysqli_num_rows($result);
    mysqli_free_result($result);
    
    
    if($row==0){//si es 0 es porque si se puede agg en la bd
    echo 'fila es '.$row;
        return true;
    }else{
        return false;
    }
    
}

?>