$(document).ready(function() {
    $('#btn-guardar').click(function() {
        var datos = $('#frmdatos').serialize();
        /*alert(datos);
        return false;*/
        var validar = "";
        if (($('#NombreC').val() == "") && ($('#Edad').val() == "") && ($('#Celular').val() == "") && ($('#Email').val() == "")) {
            validar = "No hay datos en los campos";
            alert(validar);
            return false;
        }
        if ($('#NombreC').val() == "") {
            validar += "Campo Nombre vacio \n";
        }
        if ($('#Edad').val() == "") {
            validar += "Campo Edad vacio \n";
        }
        if ($('#Celular').val() == "") {
            validar += "Campo celular vacio \n";
        }
        if ($('#Email').val() == "") {
            validar += "Campo Email vacio \n";
        }
        if (validar != "") {
            alert(validar);
            return false;
        }
    });
});