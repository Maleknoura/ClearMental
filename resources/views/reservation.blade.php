<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<!-- component -->
<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
  


<div class="text-center">
    <h2 class="text-3xl mt-24 font-extrabold text-[#333] inline-block">Reservations</h2>
</div>
    <div class="flex items-center justify-center " >
    <table class="w-full border-collapse border border-orange-500 max-w-xl mt-16 mx-auto">

        <thead>
          <tr class="bg-orange-500 text-white">
            <th class="py-4 px-4 text-left">Id</th>
            <th class="py-4 px-4 text-left">Client</th>
            <th class="py-4 px-4 text-left"></th>
            <th class="py-4 px-4 text-left">Action</th>
<th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
          <tr class="bg-white border-b border-orange-500">
            <td class="py-2 px-8">  {{ $reservation->id }}</td>
            <td class="py-2 px-8">{{ $reservation->coach->user->name }}
            </td>
            <td class="py-2 px-8"></td>
            <td class="px-8 py-2  text-sm whitespace-nowrap">
           
                <form action="{{ route('reservations.accept', $reservation->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="statut" value="confirmée">
                    <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-md text-xs">
                        Approuver
                    </button>
                    
                </form>                                
         
            </td>
            <td class="px-8 py-2">

                
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
    <!-- Page content -->
    
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



  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>
<script>
  const setup = () => {
  return {
          isSidebarOpen: false,
      }
  }
</script>
<script src="./js/updatemodal/book.js"></script>


