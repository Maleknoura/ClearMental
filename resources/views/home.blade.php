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
                        Le voyage le plus important que vous pouvez entreprendre est celui de la découverte de vous-même. Cette quête intérieure représente bien plus qu'une simple exploration géographique ou une aventure extérieure.</p>

                    <div class="mt-10 sm:flex sm:items-center sm:space-x-8">

                       
                    </div>
                </div>

                <div class="ml-24" >
                    <img style=" width: 500px; height: 500px;border-radius: 5%; box-shadow: 0 10px 20px rgb(166, 163, 163)" src="https://i.pinimg.com/564x/2f/aa/af/2faaafb0eb3e8ccf2f9ff42935b73717.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-gray-50 sm:px-6 px-4 py-10 font-[sans-serif]">
            <div class="max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-[#333] inline-block">Our Coachs</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-16 max-md:max-w-lg mx-auto">
                    @foreach ($coachs as $coach)
                    <div class=" h-64 shadow-lg rounded group">
                        <div>
                            <h3 class="text-xl font-bold text-[#333] group-hover:text-blue-500 text-center transition-all">{{ $coach->user->name }}</h3>
                            <div class="mt-4">
                                <p class="text-gray-400 text-center text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                            </div>
                        </div>
                        <button type="button" class="favorite-btn" data-coach-id="{{ $coach->id }}">
                            <i class="bx bx-heart"></i>
                        </button>
                        <hr class="my-6" />
                        <div class="flex flex-wrap ml-5 flex flex-wrap items-center justify-center gap-3">
                          
                            <a href="{{ route('profile', ['id' => $coach->id]) }}" class="inline-block text-center px-4 py-2 bg-orange-500 hover:bg-gray-400 text-white font-semibold rounded-lg transition-colors duration-300">View Profile</a>
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
    <div class="bg-gray-50 sm:px-6 px-4 py-10 font-[sans-serif]">
        <div class="max-w-7xl mx-auto">
    <div class="text-center">
        <h2 class="text-3xl font-extrabold text-[#333] inline-block">About Us</h2>
    </div>






    </section>
    <script src="./js/favorite.js"></script>
