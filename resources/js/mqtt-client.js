// Create a client instance
client = new Paho.Client("m16.cloudmqtt.com", 31559, "web_" + parseInt(Math.random() * 100, 10));

// set callback handlers
client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;

// connect the client
client.connect({
    useSSL: true,
    onSuccess:onConnect,
    userName:'pscfjpyw',
    password:'-8tL2Q2-CGgJ'
});


// called when the client connects
function onConnect() {
    // Once a connection has been made, make a subscription and send a message.
    console.log("onConnect");
    client.subscribe("sensor/temperatura");
    client.subscribe("sensor/umidade");
    client.subscribe("sensor/condutividade");
}

// called when the client loses its connection
function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
        console.log("onConnectionLost:"+responseObject.errorMessage);
    }
}

// called when a message arrives
function onMessageArrived(message) {
    console.log("onMessageArrived:"+message.payloadString);

    console.log(message.destinationName);

    var data = {
        'topic': message.destinationName,
        'read': message.payloadString
    };

    $.ajax({
        type: "POST",
        url: '/public/insertdata',
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function() {
            console.log("Valor " + data.read +" adicionado para o topico " + data.topic);
        }
    });
}