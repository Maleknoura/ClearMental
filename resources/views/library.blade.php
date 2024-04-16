<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="{{ asset('css/actuality.css') }}">

    <title>Document</title>
</head>

<body class="">
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
    <div class="flex justify-between  mb-4">
        <div class="search-bar ml-auto">
            <form method="POST" action="{{ route('search') }}">
                @csrf
                <input type="text" name="query" placeholder="Search by title or author" class="search-input">
             
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
                        <h2 class="mt-2 mb-2  font-bold">{{ $book['title'] }}</h2>
                        <p class="text-sm">{{ substr($book['content'], 0, 100) }}</p>
                        <div class="mt-3 flex items-center">
                            <span class="text-sm font-semibold"></span>&nbsp;<span
                                class="font-bold text-xl">{{ $book['auteur'] }}</span>&nbsp;<span
                                class="text-sm font-semibold"></span>
                        </div>
                    </div>
                    <div class="p-4 border-t border-b text-xs text-gray-700">
                        <span class="flex items-center mb-1">
                            <i class="far fa-clock fa-fw mr-2 text-gray-900"></i>
                        </span>



                    </div>
                </div>
            </div>
        @endforeach

        <div class="flex flex-wrap justify-center mt-4">


            @if ($bookData->previousPageUrl())
                <a href="{{ $bookData->previousPageUrl() }}"
                    class="px-3 py-1 bg-gray-200 text-gray-700 rounded mr-1">&laquo; Previous</a>
            @else
                <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded mr-1 cursor-not-allowed">&laquo;
                    Previous</span>
            @endif


            @for ($i = 1; $i <= $bookData->lastPage(); $i++)
                @if ($i == $bookData->currentPage())
                    <span class="px-3 py-1 bg-purple-500 text-white rounded mr-1">{{ $i }}</span>
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



        <script>
            let searchInput = document.querySelector('.search-input');
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            let searchResults = document.getElementById('search-results');

            searchInput.addEventListener('keyup', (event) => {
                sendRequest(event.target.value);
            });

            function sendRequest(query) {
                const url = "{{ route('search') }}";

                const data = {
                    _token: token,
                    query: query
                };

                const options = {
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': "application/json, text-plain ",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'POST',
                    body: JSON.stringify(data)
                };

                fetch(url, options)
                    .then(response => response.json())
                    .then(data => displayResults(data))
                    .catch(error => console.error(error));
            }

            function displayResults(books) {
                searchResults.innerHTML = '';

                if (books.data.length === 0) {
                    searchResults.innerHTML = '<p>No results found</p>';
                    return;
                }
                const flexContainer = document.createElement('div');
                flexContainer.classList.add('flex', 'flex-wrap', 'mx-4');

                console.log(books);
                books.data.forEach(book => {
                    const bookDiv = document.createElement('div');
                    bookDiv.classList.add('w-full', 'sm:w-1/2', 'm-7', 'md:w-1/3', 'lg:w-1/4', 'xl:w-1/5',
                        'px-4',
                        'mb-4');
                    bookDiv.innerHTML = `
            <div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                <div class="relative pb-48 overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="${book.image }">
                </div>
                <div class="p-4">
                    <h2 class="mt-2 mb-2  font-bold">${book.title}</h2>
                    <p class="text-sm">${book.content}</p>
                    <div class="mt-3 flex items-center">
                        <span class="text-sm font-semibold"></span>&nbsp;<span class="font-bold text-xl">${book.auteur}</span>&nbsp;<span class="text-sm font-semibold"></span>
                    </div>
                </div>
                <div class="p-4 border-t border-b text-xs text-gray-700">
                    <span class="flex items-center mb-1">
                        <i class="far fa-clock fa-fw mr-2 text-gray-900"></i> 
                    </span>
                </div>
            </div>
        </div>

        `;

                    searchResults.appendChild(bookDiv);
                });
                
            }
        </script>
</body>

</html>
