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
    <div class="flex items-center justify-center " >
    <table class="w-full border-collapse border border-orange-500 max-w-xl mt-16 mx-auto">

        <thead>
          <tr class="bg-orange-500 text-white">
            <th class="py-4 px-4 text-left">Id</th>
            <th class="py-4 px-4 text-left">Title</th>
            <th class="py-4 px-4 text-left">Author</th>
            <th class="py-4 px-4 text-left">Action</th>
<th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
          <tr class="bg-white border-b border-orange-500">
            <td class="py-2 px-8">  {{ $book->id }}</td>
            <td class="py-2 px-8">{{ $book->title }}
            </td>
            <td class="py-2 px-8">{{ $book->auteur }}</td>
            <td class="px-8 py-2  text-sm whitespace-nowrap">
                <button data-modal-target="update-modal" id=""
                data-modal-toggle="update-modal"
                data-book-id="{{ $book->id }}"
                data-book-title="{{ $book->title }}"
                data-book-author="{{ $book->auteur }}"
                data-book-content="{{ $book->content }}"
                class="update-modal block text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                update
            </button>
                                               
            <x-book-add :book="$book" />
            </td>
            <td class="px-8 py-2">

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this book?')" class="text-red-500">Delete</button>
                </form>
            </td>
         
       
         </tr>

     @endforeach  
        </tbody>
      </table>  
    </div>
<div class="flex h-screen antialiased text-gray-900  dark:bg-dark dark:text-light">
 <!-- Loading screen -->
 

  <div
    x-ref="loading"
    class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white "
  >
   
  </div>

  <!-- Sidebar -->
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
    <!-- Curvy shape -->
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
    <!-- Sidebar content -->
    <div class="z-10 flex flex-col flex-1">
      <div class="flex items-center justify-between flex-shrink-0 w-64 p-4">
        <!-- Logo -->
        <a href="#">
          <span class="sr-only"></span>
         
        </a>
        <!-- Close btn -->
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
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
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
        <!-- Modal body -->
        <form method="post" action="{{ route('books.store') }}" class="p-4 md:p-5">
            @csrf
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text"class="w-full" name="title" id="title" class="form-input" placeholder="Enter book title" required>
                </div>
                <div>
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                    <input type="text"class="w-full" name="content" id="content" class="form-input" placeholder="Enter book content" required>
                </div>
                <div>
                    <label for="numbre_of_page" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of Pages</label>
                    <input type="text" class="w-full" name="auteur" id="auteur" class="form-input" placeholder="Enter number of pages" required>
                </div>
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


