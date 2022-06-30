<?php 
session_start();
if(isset($_SESSION['rol']) && $_POST){//..?

   

include ("../db/conectar.php");
include('../db/tabla_usuario.php');

  $codigo=$_SESSION['codigo'];
  $passActual=$_POST['passActual'];
  $passNueva=$_POST['passNueva'];//a actualizar
  $passConfirmacion=$_POST['passConfirmacion'];

    echo $passActual.'  '.$passNueva.'  '.$passConfirmacion.'pass sesion: '.$_SESSION['password'];


    if(validacionPassword($passActual,$passNueva,$passConfirmacion)){//si es valida entonces se guarda
        $query=query_t_u_updateByPassword($codigo,$passNueva);
        $result = mysqli_query($link, $query);
        mysqli_close($link);
        $_SESSION['password']=$passNueva;
        
    header('location:../../configuracion.php?exito2=true');
    }

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