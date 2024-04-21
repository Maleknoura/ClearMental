<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://meet.jit.si/external_api.js'></script>
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <link rel="stylesheet" href="{{ asset('css/actuality.css') }}">
    <title>Document</title>
</head>
<body>
 <x-nav-bar/>
 <a href="{{route('chatify')  }}">
 <img src="https://cdn-icons-png.freepik.com/512/8943/8943377.png" width="70px" height="50px" class="ml-auto " alt="Chatbot Icon">
</a>
    <div id="meet"class="m-auto" style="width: {{ $width }}px; height: {{ $height }}px;"></div>

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



</body>
</html>