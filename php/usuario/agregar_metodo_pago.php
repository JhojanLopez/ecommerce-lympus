<?php 
session_start();
if(isset($_SESSION['rol']) && $_POST){//..?

   

include ("../db/conectar.php");
include('../db/tabla_usuario.php');
include('../db/tabla_metodo_pago.php');


  $codigo=$_SESSION['codigo'];
  $numeroCuenta=$_POST['numeroCuenta'];
  $tipo=$_POST['tipo'];//a actualizar
  $banco=$_POST['banco'];

    echo $codigo.'  '.$numeroCuenta.'  '.$tipo.'  '.$banco;
    

    /* agg a bd */
    $query=query_t_mp_insertar($tipo,$banco,$numeroCuenta);
    $result = mysqli_query($link,$query);
    /* 
    */
    /* obtengo el id */
    $result = mysqli_query($link,$query_t_mp_findLastId);
    $lastCod =mysqli_fetch_array($result);
    mysqli_free_result($result);

    echo 'ultimo cod'.$lastCod[0]; 
    /* ACTUALIZO EL METODO DE PAGO del usuario*/
    $query=query_t_u_updateByMetodoPago($codigo,$lastCod[0]);
    $result = mysqli_query($link,$query);
    $_SESSION['metodoPago']=$lastCod[0];
    
    mysqli_close($link);
    header('location:../../configuracion.php?exito3=true');


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