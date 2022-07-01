$('document').ready(function (){

  if($('#compra').hasClass('d-none')){
    $('#modalCompra').modal("show");
  }

  
  $('#listaProductos tbody').on('click', 'tr', function () {
    if ($(this).hasClass('table-active')) {/*si ya esta seleccionada una entonces quitar la seleccion*/
        $(this).removeClass('table-active');
    } else {
        $('tr.table-active').removeClass('table-active');
        $(this).addClass('table-active');
    }
});

   /*  $('#editar').click(function(){
        console.log("editar"+ $('#codigoEditar').val());

    }) */;

   
    $('#listaProductos tbody').on('click', 'tr', function () {
      
      if ($(this).hasClass('table-active')) {/*si ya esta seleccionada una entonces quitar la seleccion*/
        let codigo=$(this).find('input[type="hidden"]').val();
        
      $('.trigger').click(function(){
        console.log(codigo);
        let cod= codigo;   
        $('#modalCodigo').val(cod);
        
        $('#modalEditar').modal("show");
      });
      
      }else{

      } 
  });


 

});  