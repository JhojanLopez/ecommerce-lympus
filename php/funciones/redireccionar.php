<?php
/* rediccionara dependiendo del rol */
    session_start();

    if(isset($_SESSION['rol'])){}
    
        function redireccionar($rol){

            switch($rol){
                case 1:
                    return header('location:../index.php');
                    break;
                default:
                return location('../index.php');
                break;
            }
            
        }

    

?>