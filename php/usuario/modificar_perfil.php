<?php 
session_start();
if(isset($_SESSION['rol']) && $_POST){//..?

   

include ("../db/conectar.php");
include('../db/tabla_usuario.php');

  $codigo=$_SESSION['codigo'];
  $correo=$_POST['correo'];
  $nombre=$_POST['nombre'];

/* echo $codigo.'   '.$correo.'  '.$nombre;
 */


    if($correo===$_SESSION['correo'] && $nombre===$_SESSION['nombre']){
        //si son iguales no hay necesidad de actualizar los campos en la bd
        header('location:../../configuracion.php');
       
    
    }else if($nombre===$_SESSION['nombre']){//si son iguales no hay necesidad de actualizar los dos campos
        
        echo 'nombre igual';
        actualizarCorreo();

    }else if($correo===$_SESSION['correo']){//si son iguales no hay necesidad de actualizar los dos campos
    
        echo 'correo igual';
        actualizarNombre();
    }else{
        echo 'actualizar los dos campos';
        actualizarNombreCorreo();
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
function actualizarNombre(){
    global $codigo, $nombre, $link;
    echo 'actualizar nombre'.$nombre;

    $query = query_t_u_updateByNombre($codigo,$nombre);
    $result = mysqli_query($link, $query);
    
    /* mysqli_free_result($result); (?)*/
    mysqli_close($link);
    
    $_SESSION['nombre']=$nombre;
    header('location:../../configuracion.php?exito=true');
    

    
}

function  actualizarNombreCorreo(){
    global $codigo,$link, $nombre, $correo;
    echo 'actualizar nombre'.$nombre.'y correo'.$correo;

    if(validarCorreo($codigo,$correo)){
        
    $query = query_t_u_updateByNombreCorreo($codigo,$correo,$nombre);
    $result = mysqli_query($link, $query);
    
    /* mysqli_free_result($result); (?)*/
    mysqli_close($link);
    
    $_SESSION['nombre']=$nombre;
    $_SESSION['correo']=$correo;
    header('location:../../configuracion.php?exito=true');

    }else{
        header('location:../../configuracion.php?error1=true');
    }
    
    
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