<?php 
session_start();
if(isset($_SESSION['rol'])){//..?

   

include ("../db/conectar.php");
include('../db/tabla_usuario.php');


  $codigo=$_SESSION['codigo'];
  $codigoMetodoPago=$_SESSION['metodoPago'];

    echo $codigo.'  '.$codigoMetodoPago.'  '.$tipo.'  '.$banco;
    

    /* boorra de bd */
    $query = query_t_u_deleteByMetodoPago($codigo,$codigoMetodoPago);
    $result = mysqli_query($link,$query);

    $_SESSION['metodoPago']=NULL;
    
    mysqli_close($link);
    header('location:../../configuracion.php?exito4=true');


}else{
    header('location:../../index.php');
}

function validacionPassword($passActual,$passNueva,$passConfirmacion){
    
    if($passActual===$_SESSION['password']){

        if($passNueva===$passConfirmacion){

            return true;

        }else{
       
        header('location:../../configuracion.php?error3=true');
        
        }

    }else{
        header('location:../../configuracion.php?error2=true');
  
    }

}



?>