<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/actuality.css') }}">
    <title>Document</title>
</head>

<body>
    <!-- component -->
    <header class="header-area">
        <div class="container">
            <div class="row d_flex">
                <div class=" col-md-3 col-sm-3">
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="navbar-area">
                        <nav class="site-navbar">
                            <div class="logo">
                                <img src="/images/logo.png" alt="" width="100px" height="170px">
                            </div>
                            <ul>
                                <li><a class="active" href="">Home</a></li>
                                <li><a href="">Actuality</a></li>
                                <li><a href="">Library</a></li>

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
   
    <div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16">

        <div class="mb-10 rounded overflow-hidden flex flex-col mx-auto text-center">
            <a href="#"
                class="max-w-3xl mx-auto text-xl sm:text-4xl text-gray-400 inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{ $book->title }}</a>
    
            <a href="#">
                <img class="w-2/3 h-80  bg-center my-4  mx-auto"
                    src="{{ $book->image }}"
                    alt="">
            </a>
            <p class="text-gray-700 text-base leading-8 max-w-2xl mx-auto">
                {{ $book->content }}
            </p>
            <div class="py-5 text-sm font-regular text-gray-900 flex items-center justify-center">
                <span class="mr-3 flex flex-row items-center">
                   
                    
                <a href="#" class="flex flex-row items-center hover:text-indigo-600  mr-3">
                    <svg class="text-indigo-600" fill="currentColor" height="16px" aria-hidden="true" role="img"
                        focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                        </path>
                        <path d="M0 0h24v24H0z" fill="none"></path>
                    </svg>
                    <span class="ml-1">{{ $book->auteur }}</span></a>
                <a href="{{ $book->pathpdf }}" class="flex flex-row items-center hover:text-indigo-600">
                    <svg class="text-indigo-600" fill="currentColor" height="16px" aria-hidden="true" role="img"
                        focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path fill=""
                            d="M15.4496399,8.42490555 L8.66109799,1.63636364 L1.63636364,1.63636364 L1.63636364,8.66081885 L8.42522727,15.44178 C8.57869221,15.5954158 8.78693789,15.6817418 9.00409091,15.6817418 C9.22124393,15.6817418 9.42948961,15.5954158 9.58327627,15.4414581 L15.4486339,9.57610048 C15.7651495,9.25692435 15.7649133,8.74206554 15.4496399,8.42490555 Z M16.6084423,10.7304545 L10.7406818,16.59822 C10.280287,17.0591273 9.65554997,17.3181054 9.00409091,17.3181054 C8.35263185,17.3181054 7.72789481,17.0591273 7.26815877,16.5988788 L0.239976954,9.57887876 C0.0863319284,9.4254126 0,9.21716044 0,9 L0,0.818181818 C0,0.366312477 0.366312477,0 0.818181818,0 L9,0 C9.21699531,0 9.42510306,0.0862010512 9.57854191,0.239639906 L16.6084423,7.26954545 C17.5601275,8.22691012 17.5601275,9.77308988 16.6084423,10.7304545 Z M5,6 C4.44771525,6 4,5.55228475 4,5 C4,4.44771525 4.44771525,4 5,4 C5.55228475,4 6,4.44771525 6,5 C6,5.55228475 5.55228475,6 5,6 Z">
                        </path>
                    </svg>
                    <span class="ml-1">Telecharger le pdf</span></a>
            </div>
            <hr>
    
        </div>
    
    </div>
    <div class="col-md-12 text-center text-white" style="background-color: #3e033b;">
        <p>© 2020 All Rights Reserved. Design </p>
    </div>
</body>

</html>
