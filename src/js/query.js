$('.js-eliminar').on('click', function(){

    var idLibro = $(this).attr('jsId');

    //alert(idLibro);
    $('.jsILibro').val(idLibro);
}); 


$('.js-btnActivar').on('click', function(){
    var idLibro = $(this).attr('jsId');
    $('.jsILibroAc').val(idLibro);
   // alert(idLibro);

});

$('.js-btnUpdate').on('click', function(){
    var id = $(this).attr('js-id_libro');
    var nombre = $(this).attr('js-nombre');
    var volumen = $(this).attr('js-volume');
    var etiqueta = $(this).attr('js-etiqueta');
    var autor = $(this).attr('js-autor');

    $('#js-id_libro').val(id);
    $('#js-nombre').val(nombre);
    $('#js-volumen').val(volumen);
    $('#js-etiqueta').val(etiqueta);
    $('#js-autor').val(autor);
    //alert(id);
});