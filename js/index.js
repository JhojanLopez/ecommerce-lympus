$('document').ready(function (){

    if($('#sessionActiva').hasClass('d-none')){//usado para identificar si existe el id 
        //sessionActiva de manera que se visualiza si la sesion esta activa
          
          console.log('session activa');
          $('#opcionesNoSesion').addClass('d-none');
          $('#opcionesSesion').removeClass('d-none');
          

      }else{
        console.log('sesion inactiva');

      }
});  