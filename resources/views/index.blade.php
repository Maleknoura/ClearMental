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




<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container grid items-center justify-center gap-4 px-4 text-center md:px-6 lg:gap-10">
      <div class="space-y-3">
        <h2 class="text-3xl font-bold mb-12 tracking-tighter sm:text-4xl md:text-5xl">Meet Our Coaches</h2>
        <p class="mx-auto max-w-[700px] mb-12 text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
          Our team of experienced coaches is dedicated to helping you achieve your personal and professional goals.
        </p>
      </div>
      <div class="grid w-full grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
        @foreach ($coachs as $coach)
        <div class="flex shadow-sm flex-col items-center space-y-3">
            <a href="{{ route('profile', ['id' => $coach->id]) }}">
                <span class="relative flex-shrink-0 overflow-hidden rounded-full h-24 w-24 bg-gray-100 flex items-center justify-center">
                    <span class="text-lg font-semibold">{{ substr($coach->user->name, 0, 2) }}</span>
                </span>
            </a>
            
          <div class="space-y-1 text-center">
            <h4 class="text-lg font-semibold">{{ $coach->user->name }}</h4>
                <button type="button" class="favorite-btn" data-coach-id="{{ $coach->id }}">

                    @if ($coach->clients()->where('user_id', Auth::user()->id)->exists())
                        <i class="bx bxs-heart"></i>
                    @else
                        <i class="bx bx-heart"></i>
                    @endif
                </button>
            </p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @if ($coachs->hasPages())
    <div class="mt-24 flex justify-center">
        @if ($coachs->onFirstPage())
            <button class="mr-2 text-orange-500 cursor-not-allowed" disabled>Previous</button>
        @else
            <button onclick="window.location='{{ $coachs->previousPageUrl() }}'" class="mr-2 inline-block bg-gray-200 hover:bg-gray-300 rounded-lg px-3 py-1">Previous</button>
        @endif
    
        @if ($coachs->hasMorePages())
            <button onclick="window.location='{{ $coachs->nextPageUrl() }}'" class="inline-block bg-gray-200 hover:bg-gray-300 rounded-lg px-3 py-1">Next</button>
        @else
            <button class="ml-2 text-orange-500 cursor-not-allowed" disabled>Next</button>
        @endif
    </div>
    @endif
    
    
</section>





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








    <section class="w-full py-12 md:py-24 lg:py-32 border-t">
        <div class="container grid items-center justify-center gap-4 px-4 text-center md:px-6">
          <div class="space-y-3">
            <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">What Our Clients Say</h2>
            <p class="mx-auto max-w-[600px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">
              Hear from our satisfied clients about the transformative impact of our coaching services.
            </p>
          </div>
      
          <div class="flex justify-center mt-8 space-x-4">
            @foreach($comments as $comment)
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card" style="width: 400px;">
              <div class="p-6 space-y-4">
                <blockquote class="text-lg font-semibold leading-snug">
                  "{{ $comment->content }}"
                </blockquote>
                <div class="flex items-center space-x-3">
                  <span class="relative flex shrink-0 overflow-hidden rounded-full h-10 w-10">
                    <span class="flex h-full w-full items-center justify-center rounded-full bg-muted">{{ substr($comment->client->user->name, 0, 2) }}</span>
                  </span>
                  <div>
                    <h4 class="text-sm font-semibold">{{ $comment->client->user->name }}</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $comment->client->user->role }}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
     
      



<footer class=" shadow w-full mt-5 dark:bg-gray-900 bg-gray-100 overflow-x-hidden  ">
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
