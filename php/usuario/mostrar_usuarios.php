<?php 
session_start();
if(isset($_SESSION['rol'])){//..?

    
        if($_SESSION['rol']==1){

include ("../db/conectar.php");
include('../db/tabla_usuario.php');

$codigo = $_SESSION['codigo'];
$query = query_t_u_findAllDifferentCodigo($codigo);
$result = mysqli_query($link,$query);
if(!$result){
    die("Error");
}else{
    while($data = mysqli_fetch_assoc($result)){
        $listaUsuarios[]=$data;
    }
    echo json_encode($listaUsuarios);

}
 
mysqli_free_result($result);
mysqli_close($link);
        
}else{

    
    header('location:../../index.php');
}


}else{
    header('location:../../index.php');
}






 
?>