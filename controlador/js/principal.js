$(document).ready(function(){
    $('.contenedor-menu .menu li:has(ul)').click(function(e){
       e.preventDefault(); 
    if($(this).hasClass('activado')){
        $(this).removeClass('activado');
        $(this).children('ul').slideUp();
    }else{
        $('.contenedor-menu .menu li ul').slideUp();
        $('.contenedor-menu .menu li').removeClass('activado');
        $(this).addClass('activado');
        $(this).children('ul').slideDown();
    }
    });

    $('#nuevo').click(function(e){
       $('.panel-central').load('nueva-partida.php');
    });

    


});
