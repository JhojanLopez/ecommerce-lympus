<?php
$correo=$_POST['correo'];
$password=$_POST['pass'];

include ("../db/conectar.php");
include('../db/tabla_usuario.php');

/* $query = "SELECT * FROM $tabla_usuario where Correo='$correo' and Contrasena='$password';";
 */
$query = query_t_u_findByCorreoContrasena($correo,$password);
$result = mysqli_query($link, $query);


$row=mysqli_num_rows($result);
echo 'fila es '.$row;

if($row>0){
    $usuario = mysqli_fetch_array($result);
    
    if($usuario[1]==0){//si esta activo
    session_start();
    $_SESSION['codigo']=$usuario[0];
    $_SESSION['activo']=$usuario[1];
    $_SESSION['nombre']=$usuario[2];
    $_SESSION['correo']=$usuario[3];
    $_SESSION['password']=$usuario[4];
    $_SESSION['rol']=$usuario[5];
    $_SESSION['metodoPago']=$usuario[6];


    echo "Conexion exitosa rol= " .$usuario[5];

    header('location:../../index.php'); 
  
}else{
    header('location:../../login.php?error2=true'); 
}

}else {/* si no existe el usuario o elimino la cuenta*/
     header('location:../../login.php?error1=true'); 
}
mysqli_free_result($result);
mysqli_close($link);


?>