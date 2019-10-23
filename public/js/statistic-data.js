function filtrarDadosSensor(sensor_type, sensor_id) {
    var quantidade = $( "select[id^='filtro-tempo']" ).val();
    $_token = "{{ csrf_token() }}";

    $.ajax({
        type: "GET",
        url: '/greenhouse/details/sensor/'+sensor_type+'?sensor_id='+sensor_id,
        data: {
            'quantidade': quantidade,
            '_token': $_token
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}