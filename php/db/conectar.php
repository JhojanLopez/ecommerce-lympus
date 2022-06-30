<?php
     
    $host = "localhost";  //Direccion Ip del servidor Mysql
   /*  $usuario  ="u228561512_wolfhunter"; //Nombre de Usuario del SRV Mysql
    $contrasena ="1955423Uv"; //Contraseña del Usuario 
       */
    $usuario = "root";
    $contrasena = "2205";
    $basededatos ="u228561512_wolfhunter"; //Nombre de la BD 
    

    function Conectarse(){
        global $host, $usuario, $contrasena, $basededatos;
        if (!($link =Mysqli_connect($host,$usuario,$contrasena))){
            echo "Error conectando al Servidor.<br>";
            exit();
        }
        else{
            /* echo "Listo estamos conectados al Servidor.<br>"; */
        }
       
        if(!mysqli_select_db($link,$basededatos)){
            echo "Error Seleccionando BD.<br>";
        }
        else{
           /*  echo "Obtuvimos la base de datos $basededatos sin problema.<br>"; */
        }
        return $link;
    }
        $link=Conectarse();
    
    ?>
