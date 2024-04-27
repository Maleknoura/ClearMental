<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('css/actuality.css') }}">

    <title>Document</title>
</head>

<body>
    <x-nav-bar />
    <div class="flex justify-center mt-10">
        <div class=" flex items-center space-x-4 search-bar ">
            <form method="POST" action="{{ route('searchbook') }}">
                @csrf
                <input type="text" name="query" placeholder="Search by title or author" class="search-input">
                <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-md">Search</button>

            </form>
        </div>
    </div>



    <div id="search-results" class="flex flex-wrap mx-4">
        @foreach ($bookData as $book)
            <div class="w-full sm:w-1/2 m-7 md:w-1/3 lg:w-1/4 xl:w-1/5 px-4 mb-4">
                <div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                        <img class="absolute inset-0 h-full w-full object-cover" src="{{ $book['image'] }}">
                    </div>
                    <div class="p-4">
                        <div class="flex">

                            <h2 class="mt-2 mb-2  font-bold">{{ $book['title'] }}</h2>
                            <a href="{{ route('book.details', ['id' => $book->id]) }}">
                                <i class='bx bx-show text-xl text-gray-600'></i>
                            </a>
                        </div>
                        <p class="text-sm">{{ $book->content . substr(0, 80) }}</p>
                        <div class="mt-3 flex items-center">

                            <span class="text-sm font-semibold"></span>&nbsp;<span
                                class="font-bold text-xl">{{ $book['auteur'] }}</span>&nbsp;<span
                                class="text-sm font-semibold"></span>
                        </div>
                    </div>
                 
                </div>
            </div>
        @endforeach

        <div class="flex flex-wrap justify-end ml-auto mt-4">


            @if ($bookData->previousPageUrl())
                <a href="{{ $bookData->previousPageUrl() }}"
                    class="px-3 py-1 bg-gray-200 text-gray-700 rounded mr-1">&laquo; Previous</a>
            @else
                <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded mr-1 cursor-not-allowed">&laquo;
                    Previous</span>
            @endif


            @for ($i = 1; $i <= $bookData->lastPage(); $i++)
                @if ($i == $bookData->currentPage())
                    <span class="px-3 py-1 bg-orange-500 text-white rounded mr-1">{{ $i }}</span>
                @else
                    <a href="{{ $bookData->url($i) }}"
                        class="px-3 py-1 bg-gray-200 text-gray-700 rounded mr-1">{{ $i }}</a>
                @endif
            @endfor


            @if ($bookData->nextPageUrl())
                <a href="{{ $bookData->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded mr-1">Next
                    &raquo;</a>
            @else
                <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded mr-1 cursor-not-allowed">Next
                    &raquo;</span>
            @endif
        </div>

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
        

        <script src="./js/searchajax.js"></script>
</body>

</html>
