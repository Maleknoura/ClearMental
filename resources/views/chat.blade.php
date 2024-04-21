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

const channel = pusher.subscribe('chat-channel');

channel.bind('new-message', function(data) {
    const messageElement = document.createElement('div');
    messageElement.textContent = `${data.user}: ${data.message}`;
    document.getElementById('messages').appendChild(messageElement);
});
    </script>
</body>
</html>