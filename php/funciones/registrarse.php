<?php

    session_start();

    if(isset($_SESSION['rol'])){
    header('location:../../index.php');
    }

    include '../db/conectar.php';
    include '../db/tabla_usuario.php';

    if($_POST){        
            
        $correo = $_POST['correo'];
        
        $query = query_t_u_findByCorreo($correo);//si existe ya un usuario con el mismo correo no se puede guardar
        $result= mysqli_query($link,$query);
       
       
        $row=mysqli_num_rows($result);
        echo 'fila es =' .$row.' la condicion es= '. ($row!=null);

        if($row==0){
        echo'entro al if';
   
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $password = $_POST['pass'];
        $confirmarPassword = $_POST['confirmPass'];
        
    

        if($password===$confirmarPassword){

        $query = query_t_u_insertar($nombre,$correo,$password,'3');
        
        $result=mysqli_query($link,$query);//arroja falso o true si no se ingreso a la bd
        
        if($result){
            header('Location:../../registro.php?correcto=true');
            header('Location:../../login.php?registro=true');
        } else {
            echo'no se ingreso el dato a la bd error?';
            header('Location:../../registro.php?error3=true');
        }

        }else{
           echo'no se ingreso el dato a la bd ya existe el usuario con el correo asignado';
            header('Location:../../registro.php?error2=true');
         
        }
        
        mysqli_free_result($result);
        mysqli_close($link);


        }else{
            header('Location:../../registro.php?error1=true');
        }
        
    }


?>