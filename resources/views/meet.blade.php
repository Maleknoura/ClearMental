<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://meet.jit.si/external_api.js'></script>
    <title>Document</title>
</head>
<body>
    <div id="meet" style="width: {{ $width }}px; height: {{ $height }}px;"></div>

    <script>
        const domain = '{{ $domain }}';
        const options = {
            roomName: '{{ $roomName }}',
            width: {{ $width }},
            height: {{ $height }},
            parentNode: document.querySelector('#meet'),
            lang: '{{ $lang }}'
            
        };
        const api = new JitsiMeetExternalAPI(domain, options);
    </script>


<div id="meet"></div>
</body>
</html>