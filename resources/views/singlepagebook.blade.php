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
<div class="flex flex-col  justify-center mt-12">
	<div
		class="relative gap-8 flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
		<div class="w-full md:w-1/3 bg-white grid place-items-center">
			<img src="{{ $book->image }}" alt="" class="rounded-xl w-full" />
    </div>
			<div class="w-full md:w-1/2 bg-white flex flex-col space-y-2 p-3">
				<div class="flex justify-between item-center">
					<div class="flex items-center">
						
					
					</div>
					
				
				</div>
				<h3 class="font-black text-gray-800 md:text-3xl text-xl">{{ $book->title }}</h3>
				<p class="md:text-lg text-gray-500 text-base">{{ $book->content }}</p>
				<p class="text-xl  text-gray-800">{{ $book->auteur }}</p>
                <a href="{{ $book->pathpdf }}" class="text-blue-600 hover:underline">Télécharger le PDF</a>

			</div>
		</div>
	</div>
</body>
</html>