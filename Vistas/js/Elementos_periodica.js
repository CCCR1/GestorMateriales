$(function(){
    //Se obtiene el valor de la URL desde el navegador
    var actual = window.location+'';
    //Se realiza la división de la URL
    var split = actual.split("=");
    //Se obtiene el ultimo valor de la URL
    var id = split[split.length-1];
    
    $("#num_formulario").val(id);
    
    $("#codigo").focus(function(){
        $("#elemento_per_uau").attr("action","periodico/agregar/contador="+id);
    });
});