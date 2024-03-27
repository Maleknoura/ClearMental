<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div class="grid grid-cols-1 gap-6 justify-center mt-10 lg:mt-16 lg:gap-4 lg:grid-cols-4">
        <!-- Première carte -->
        <div class="relative group">
            <div class="overflow-hidden aspect-w-1 aspect-h-1">
                <img class="object-cover w-full h-full transition-all duration-300 group-hover:scale-125"
                    src="URL_DE_VOTRE_IMAGE" alt="Image du livre" />
            </div>
            <div class="absolute left-3 top-3">
                <p
                    class="sm:px-3 sm:py-1.5 px-1.5 py-1 text-[8px] sm:text-xs font-bold tracking-wide text-white uppercase bg-gray-900 rounded-full">
                    Nouveau</p>
            </div>
            <div class="flex items-start justify-between mt-2 space-x-2">
                <div>
                    <h3 class="text-[10px] font-bold text-gray-900 sm:text-sm md:text-base">
                        <a href="#" title="Titre du livre">
                            Titre du livre
                            <span class="absolute inset-0" aria-hidden="true"></span>
                        </a>
                    </h3>
                    <p class="text-[10px] text-gray-500">Nom de l'écrivain</p>
                    <p class="text-[10px] text-gray-500">Petite description du livre</p>
                </div>
                <div class="text-right">
                    <p class="text-[10px] font-bold text-gray-900 sm:text-sm md:text-base">$XX.XX</p>
                    <del class="mt-0.5 text-[9px] sm:text-sm font-bold text-gray-500"> $XX.XX </del>
                </div>
            </div>

            <!-- Deuxième carte -->
            <div class="relative group">
                <div class="overflow-hidden aspect-w-1 aspect-h-1">
                    <img class="object-cover w-full h-full transition-all duration-300 group-hover:scale-125"
                        src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-3.png"
                        alt="" />
                </div>
                <div class="absolute left-3 top-3">
                    <p
                        class="sm:px-3 sm:py-1.5 px-1.5 py-1 text-[8px] sm:text-xs font-bold tracking-wide text-white uppercase bg-gray-900 rounded-full">
                        Sale
                    </p>
                </div>
                <div class="flex items-start justify-between mt-2 space-x-2">
                    <div>
                        <h3 class="text-[10px] font-bold text-gray-900 sm:text-sm md:text-base">
                            <a href="#" title="">
                                Beylob 90 Speaker
                                <span class="absolute inset-0" aria-hidden="true"></span>
                            </a>
                        </h3>
                        <div class="flex items-center mt-1 space-x-1">
                            <svg class="w-2 h-3 text-gray-300 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <!-- Ajoutez les autres icônes ici -->
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-[10px] font-bold text-gray-900 sm:text-sm md:text-base">$49.00</p>
                        <del class="mt-0.5 text-[9px] sm:text-sm font-bold text-gray-500"> $99.00 </del>
                    </div>
                </div>
            </div>

            <!-- Troisième carte -->
            <div class="relative group">
                <div class="overflow-hidden aspect-w-1 aspect-h-1">
                    <img class="object-cover w-full h-full transition-all duration-300 group-hover:scale-125"
                        src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-3.png"
                        alt="" />
                </div>
                <div class="absolute left-3 top-3">
                    <p
                        class="sm:px-3 sm:py-1.5 px-1.5 py-1 text-[8px] sm:text-xs font-bold tracking-wide text-white uppercase bg-gray-900 rounded-full">
                        Sale
                    </p>
                </div>
                <div class="flex items-start justify-between mt-2 space-x-2">
                    <div>
                        <h3 class="text-[10px] font-bold text-gray-900 sm:text-sm md:text-base">
                            <a href="#" title="">
                                Beylob 90 Speaker
                                <span class="absolute inset-0" aria-hidden="true"></span>
                            </a>
                        </h3>
                        <div class="flex items-center mt-1 space-x-1">
                            <svg class="w-2 h-3 text-gray-300 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <!-- Ajoutez les autres icônes ici -->
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-[10px] font-bold text-gray-900 sm:text-sm md:text-base">$49.00</p>
                        <del class="mt-0.5 text-[9px] sm:text-sm font-bold text-gray-500"> $99.00 </del>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>
