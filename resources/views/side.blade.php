<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<!-- component -->
<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
    class="block text-white bg-gray-400 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 ml-auto mt-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    type="button">
    New Book
</button>


<div class="text-center">
    <h2 class="text-3xl font-extrabold text-[#333] inline-block">Books</h2>
</div>
  

<div id="search-results" class="flex flex-wrap mx-4">
  @foreach ($bookData as $book)
      <div class="w-full sm:w-1/3 m-7 md:w-1/3 lg:w-1/3 xl:w-1/5 px-4 mb-4">
          <div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
              <div class="relative pb-48 overflow-hidden">
             
                  @if ($book->image && filter_var($book->image, FILTER_VALIDATE_URL))
                  <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset($book->image) }}">
              @elseif($book->image && !filter_var($book->image, FILTER_VALIDATE_URL))
              <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('storage/images/' . $book->image)  }} ">
              @else
                  <p>No Image Available</p>
              @endif
              </div>
              <div class="p-4">
                  <h2 class="mt-2 mb-2 font-bold">{{ $book['title'] }}</h2>
                  <p class="text-sm">{{ $book->content . substr(0, 80) }}</p>
                  <div class="mt-3 flex justify-between">
                      <span class="text-sm font-semibold"></span>&nbsp;<span class="font-bold text-xl">{{ $book['auteur'] }}</span>&nbsp;<span class="text-sm font-semibold"></span>
                  </div>
                  <div class="mt-3 flex justify-between">
                      <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" onclick="return confirm('Are you sure you want to delete this book?')" class="text-red-500">
                              <i class="fas fa-trash-alt"></i> 
                          </button> 
                      </form>
                      <button data-modal-target="update-modal" id=""
                      data-modal-toggle="update-modal"
                      data-book-id="{{ $book->id }}"
                      data-book-title="{{ $book->title }}"
                      data-book-author="{{ $book->auteur }}"
                      data-book-content="{{ $book->content }}"
                      class="update-modal  text-blue focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      type="button">
                      <i class="fas fa-edit"></i> 
                  </button>
                  <x-book-add :book="$book" />
                  </div>
              </div>
          </div>
      </div>
  @endforeach
</div>


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

{{-- <div class="flex h-screen antialiased text-gray-900  dark:bg-dark dark:text-light"> --}}
 

  <div
    x-ref="loading"
    class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white "
  >
   
  </div>

  <div
    x-transition:enter="transform transition-transform duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transform transition-transform duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    x-show="isSidebarOpen"
    class="fixed inset-y-0 z-10 flex w-80"
  >
    <svg
      class="absolute inset-0 w-full h-full text-white"
      style="filter: drop-shadow(10px 0 10px #00000030)"
      preserveAspectRatio="none"
      viewBox="0 0 309 800"
      fill="currentColor"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M268.487 0H0V800H247.32C207.957 725 207.975 492.294 268.487 367.647C329 243 314.906 53.4314 268.487 0Z"
      />
    </svg>
    <div class="z-10 flex flex-col flex-1">
      <div class="flex items-center justify-between flex-shrink-0 w-64 p-4">
        <a href="#">
          <span class="sr-only"></span>
         
        </a>
        <button @click="isSidebarOpen = false" class="p-1 rounded-lg focus:outline-none focus:ring">
          <svg
            class="w-6 h-6"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
          <span class="sr-only">Close sidebar</span>
        </button>
      </div>
      <nav class="flex flex-col mt-5 flex-1 w-64 p-4 mt-4">
        <a href="{{ route('home') }}" class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            Home
        </a>
        <a href="{{ route('books.index') }}" class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          Books
      </a>
      <a href="{{ route('publication.approuver') }}" class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        Publications
    </a>
    <a href="{{ route('reservations') }}" class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
      </svg>
     Mes Reservations
  </a>
  <a href="{{ route('meet') }}" class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
    </svg>
    Seances
</a>
<a href="/chatify" class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
  </svg>
  ChatBox
</a>
    </nav>
      <div class="flex-shrink-0 p-4">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
       
        <button type="submit" class="flex items-center space-x-2">
          <svg
            aria-hidden="true"
            class="w-6 h-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
            />
          </svg>
          <span>
            Logout</span>
        </button>
      </form>
      </div>
    </div>
  </div>
  <main class="">
    
    <button @click="isSidebarOpen = true" class="fixed p-2 text-white bg-black rounded-lg top-5 left-5">
      <svg
        class="w-6 h-6"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      
      <span class="sr-only">Open menu</span>
    </button>
    <h1 class="sr-only">Home</h1>
     
  </main>
</div>


<div id="crud-modal" tabindex="-1" aria-hidden="true"
class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
<div class="relative p-4 w-full max-w-md max-h-full">
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
           
            </h3>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="crud-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <form method="post" action="{{ route('books.store') }}" class="p-8 md:p-5"  enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 mb-7 grid-cols-2">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text"class="w-full" name="title" id="title" class="form-input" placeholder="Enter book title" required>
                </div>
                <div>
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                    <input type="text"class="w-full" name="content" id="content" class="form-input" placeholder="Enter book content" required>
                </div>
                <div>
                    <label for="numbre_of_page" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Auteur</label>
                    <input type="text" class="w-full" name="auteur" id="auteur" class="form-input" placeholder="Enter Author" required>
                </div>
              </div>
              <div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                <input type="file" name="image" id="image" class="form-input w-full" accept="image/*">
            </div>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
                Add new Book
            </button>
        </form>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>
<script>
  const setup = () => {
  return {
          isSidebarOpen: false,
      }
  }
</script>
<script src="./js/updatemodal/book.js"></script>


