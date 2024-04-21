<script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<!-- component -->
<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
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
      <nav class="flex flex-col flex-1 w-64 p-4 mt-4">
        <a href="#" class="flex items-center space-x-2">
       
          <span>Home</span>  <a href="#" class="flex items-center space-x-2">
        
            <span>Publication</span>
          </a>
          <a href="#" class="flex items-center space-x-2">
             
              <span>Books</span>
            </a>
            <a href="#" class="flex items-center space-x-2">
             
              <span>Reservation</span>
            </a>
            <a href="#" class="flex items-center space-x-2">
             
              <span>Seance</span>
            </a>
            <a href="#" class="flex items-center space-x-2">
             
              <span>ChatBox</span>
            </a>
        </a>
      </nav>
      <div class="flex-shrink-0 p-4">
        <button class="flex items-center space-x-2">
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
          <span>Logout</span>
        </button>
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
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>
<script>
  const setup = () => {
  return {
          isSidebarOpen: false,
      }
  }
</script>