function filtrarDadosSensor(sensor_type) {
    var sensor_id = $( "input[name^='sensor_id']" ).val();
    console.log(sensor_id);

    $.ajax({
        type: "GET",
        url: '/greenhouse/details/sensor/'+sensor_type+'?sensor_id='+sensor_id,
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function() {
            console.log("Valor " + data.read +" adicionado para o topico " + data.topic);
        }
    });
}