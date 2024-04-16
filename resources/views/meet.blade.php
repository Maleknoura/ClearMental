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
    <header class="header-area">
        <div class="container">
            <div class="row d_flex">
                <div class=" col-md-3 col-sm-3">
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="navbar-area">
                        <nav class="site-navbar">
                            <div class="logo">
                                <img src="/images/logo.png" alt="" width="80px" height="140px">
                            </div>
                            <ul>
                                <li><a class="active" href="">Home</a></li>
                                <li><a href="">Actuality</a></li>
                                <li><a href="">Library</a></li>

                                {{-- <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user"
                                            aria-hidden="true"></i></a></li>
                                <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search"
                                            aria-hidden="true"></i></a></li> --}}
                            </ul>
                            <ul>
                                <li><a href=""><a href="Javascript:void(0)"><i class="fa fa-user"
                                                aria-hidden="true"></i></a></li>
                                <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                            <button class="nav-toggler">
                                <span></span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
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


{{-- <div id="meet"cla ></div> --}}
</body>
</html>