<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="messages"></div>


    <script>
        const pusher = new Pusher('f4414fe3293d74a74a54', {
    cluster: 'eu',
    encrypted: true
});

// Abonnement au canal de chat
const channel = pusher.subscribe('chat-channel');

// Écoute de l'événement 'new-message'
channel.bind('new-message', function(data) {
    // Mettre à jour l'interface utilisateur avec le nouveau message
    const messageElement = document.createElement('div');
    messageElement.textContent = `${data.user}: ${data.message}`;
    document.getElementById('messages').appendChild(messageElement);
});
    </script>
</body>
</html>