<script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">


<x-nav-bar />

<section class="py-10 flex  sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center gap-5 grid-cols-1 gap-12 lg:grid-cols-2">
            <div>
                <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                    Croissance
                    <div class="relative inline-flex">
                        <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#ea580c]"></span>
                        <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">personnelle.</h1>
                    </div>
                </h1>

                <p class="mt-8 text-base text-black sm:text-xl">
                    Le voyage le plus important que vous pouvez entreprendre est celui de la découverte de vous-même.
                    Cette quête intérieure représente bien plus qu'une simple exploration géographique ou une aventure
                    extérieure.</p>

                <div class="mt-10 sm:flex sm:items-center sm:space-x-8">


                </div>
            </div>

            <div class="ml-24">
                <img style=" width: 500px; height: 500px;border-radius: 5%; box-shadow: 0 10px 20px rgb(166, 163, 163)"
                    src="https://i.pinimg.com/564x/2f/aa/af/2faaafb0eb3e8ccf2f9ff42935b73717.jpg" alt="" />
            </div>
        </div>
    </div>
</section>

<section>
    <div class=" sm:px-6 px-4 py-10 font-[sans-serif]">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-[#333] inline-block">Our Coachs</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-16 max-md:max-w-lg mx-auto">
                @foreach ($coachs as $coach)
                    <div class=" h-64 shadow-lg rounded group">
                        <div>
                            <button type="button" class="favorite-btn" data-coach-id="{{ $coach->id }}">

                                @if ($coach->clients()->where('user_id', Auth::user()->id)->exists())
                                    <i class="bx bx-heart"></i>
                                @else
                                    <i class="bx bxs-heart"></i>
                                @endif
                            </button>
                            <h3
                                class="text-xl font-bold text-[#333] group-hover:text-blue-500 text-center transition-all">
                                {{ $coach->user->name }}</h3>
                            <div class="mt-4">
                                <p class="text-gray-400 text-center text-sm">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis
                                    turpis vitae ligula.</p>
                            </div>
                        </div>
                        <hr class="my-6" />
                        <div class="flex flex-wrap ml-5 flex flex-wrap items-center justify-center gap-3">

                            <a href="{{ route('profile', ['id' => $coach->id]) }}"
                                class="inline-block text-center px-4 py-2 bg-orange-500 hover:bg-gray-400 text-white font-semibold rounded-lg transition-colors duration-300">View
                                Profile</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @if ($coachs->hasPages())
        <div class="mt-8 flex justify-center">

            @if ($coachs->onFirstPage())
                <span class="mr-2 text-orange-500">&laquo; Previous</span>
            @else
                <a href="{{ $coachs->previousPageUrl() }}" class="mr-2">&laquo; Previous</a>
            @endif


            @if ($coachs->hasMorePages())
                <a href="{{ $coachs->nextPageUrl() }}">Next &raquo;</a>
            @else
                <span class="ml-2 text-orange-500">Next &raquo;</span>
            @endif
        </div>
    @endif
    <div class=" sm:px-6 px-4 py-10 font-[sans-serif]">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-[#333] inline-block">About Us</h2>
            </div>
            <section class="py-10 bg-white sm:py-16 lg:py-24">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-12 text-center sm:grid-cols-2 md:grid-cols-3 lg:gap-y-16">
                        <div class="shadow-lg rounded-lg p-6 bg-white"  >
                            <div class="relative flex items-center justify-center mx-auto">
                                <svg class="text-blue-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                                </svg>
                                <svg class="absolute text-blue-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                                    />
                                </svg>
                            </div>
                            <h3 class="mt-8 text-lg font-semibold text-black">Notre Engagement envers Vous</h3>
                            <p class="mt-4 text-base text-gray-600">Nous nous engageons à vous fournir les ressources, le soutien et l'inspiration dont vous avez besoin pour atteindre vos objectifs de développement personnel.</p>
                        </div>
            
                        <div class="shadow-lg rounded-lg p-6 bg-white"  >

                            <div class="relative flex items-center justify-center mx-auto">
                                <svg class="text-orange-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z" />
                                </svg>
                                <svg class="absolute text-orange-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="mt-8 text-lg font-semibold text-black">Favoriser la Croissance Personnelle</h3>
                <p class="mt-4 text-base text-gray-600">Nous visons à créer un environnement où vous pouvez explorer votre potentiel, surmonter les obstacles et évoluer en tant que personne.</p>
            </div>
            
            <div class="shadow-lg rounded-lg p-6 bg-white"  >

                            <div class="relative flex items-center justify-center mx-auto">
                                <svg class="text-green-100" width="66" height="68" viewBox="0 0 66 68" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                                </svg>
                                <svg class="absolute text-green-600 w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </div>
                            <h3 class="mt-8 text-lg font-semibold text-black">Inspiration et Émancipation</h3>
                            <p class="mt-4 text-base text-gray-600">Nous cherchons à vous inspirer, à élargir vos perspectives et à vous donner les moyens de prendre le contrôle de votre vie et de réaliser votre plein potentiel.</p>
                        </div>
            
                       
                    </div>    
                </div>     
            </div>     
        </div>     
        

            





</section>


<footer class=" shadow w-full dark:bg-gray-900 bg-gray-100 overflow-x-hidden  ">
    <div class="w-full max-w-screen-xl mx-auto  p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="/images/logo.png" alt="" width="60px" height="40px">
                <span class="self-center text-2xl  whitespace-nowrap text-gray-500">ClearMental</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Login</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Register</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Actuality</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Library</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">ClearMental™</a>. All Rights Reserved.</span>
    </div>
</footer>



<script src="./js/favorite.js"></script>
