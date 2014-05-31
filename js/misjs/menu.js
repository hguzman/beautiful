var x;
x=$(document);
x.ready(inicio);

function inicio(){
    var adm=$("#admin");
    adm.click(algo);

}

function algo(){
   
//    var programa1=$("#programa").val();
//    var ficha1=$("#ficha").val();
    $.post("codigos/cod_consultarficha.php",{programa:programa1,ficha:ficha1},datos); //envia y recibe
    return false;
}

function datos(datorecibidos){
    $("#respuesta").html(datorecibidos);
}


$(document).ready(function(){
	$("#admin").click(function(evento){
      //elimino el comportamiento por defecto del enlace
      evento.preventDefault();      
      //Aquí pondría el código de la llamada a Ajax
      $.post("codigos/cod_consultarficha.php",{programa:programa1,ficha:ficha1},datos); //envia y recibe
      return false;

   });
});

function datos(datorecibidos){
    $("#respuesta").html(datorecibidos);
}