$(document).ready(function(){
    countdown('contador');
});

/*function countdown(){
    $.each($('.countdown-time'), function (index, value) {
        console.log($(this).data('fecha'));
        $(this).text($(this).data('fecha'));
    });
    console.log("again");


}*/




function countdown(id){

    $.each($('.countdown-time'), function (index, value) {

        var fechaCorrecta = getFecha($(this).data('fecha'));
        console.log();

        var fecha = new Date( parseInt(fechaCorrecta[0]), parseInt(fechaCorrecta[1])-1, parseInt(fechaCorrecta[2]), parseInt(fechaCorrecta[3]), parseInt(fechaCorrecta[4]), parseInt(fechaCorrecta[5]));
        var hoy = new Date();
        var dias = 0;
        var horas = 0;
        var minutos = 0;
        var segundos = 0;

        if (fecha > hoy) {
            var diferencia = (fecha.getTime() - hoy.getTime()) / 1000;
            dias = Math.floor(diferencia / 86400);
            diferencia = diferencia - (86400 * dias);
            horas = Math.floor(diferencia / 3600);
            diferencia = diferencia - (3600 * horas);
            minutos = Math.floor(diferencia / 60);
            diferencia = diferencia - (60 * minutos);
            segundos = Math.floor(diferencia);


            $(this).text('('+ dias +') '+ horas + ':' + minutos + ':' + segundos);

            if (dias > 0 || horas > 0 || minutos > 0 || segundos > 0) {
                setTimeout("countdown(\"" + id + "\")",1000);
            }
        } else {
            //document.getElementById('restante').innerHTML = 'Quedan ' + dias + ' D&iacute;as, ' + horas + ' Horas, ' + minutos + ' Minutos, ' + segundos + ' Segundos';
        }
    });
}

function getFecha(fecha) {
    var texto = fecha;
        separadores = ['-',' ',':'];
        textoseparado = texto.split (new RegExp (separadores.join('|'),'g'));
        return textoseparado;
}