<?php 

session_start();

if(isset($_SESSION['rol'])){//..?

    
        if($_SESSION['rol']==1 || $_SESSION['rol']==2){

            include ("../db/conectar.php");
            include('../db/tabla_producto.php');
           
           
           $result = mysqli_query($link,$query_t_p_findAll);
           
           if(!$result){
               die("Error");
           }else{
           while($data = mysqli_fetch_assoc($result)){
           $listaProductos[]=$data;
           }
           echo json_encode($listaProductos);
           
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