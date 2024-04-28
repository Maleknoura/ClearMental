<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

<html>

<body>


    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="block text-white bg-gray-400 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 ml-auto mt-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            + New Publication
        </button>
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-[#333] inline-block">Mes publications</h2>
        </div>
        <div class="mx-auto  max-w-9xl px-4 sm:px-6 lg:px-8"> 

        <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start p-8 flex flex-wrap justify-between">
            @foreach ($publications as $publication)
                <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                    <div class="order-1 sm:ml-6 xl:ml-0">
                        <h3 class="mb-1 text-slate-900 font-semibold">
                            @foreach ($publication->tags as $tag)
                            <span
                            class="mb-1 block text-sm leading-6 text-indigo-500">{{ $tag->name }}</span>
                            @endforeach
                            <div class="flex justify-end">
                                <form action="{{ route('publication.destroy', $publication->id) }}" method="POST"
                                    class="inline ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this publication?')"
                                        class="text-black-500 mt-4">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                                <button data-modal-target="update-modal" data-modal-toggle="update-modal" data-tag-id=""
                                data-publication-id="{{ $publication->id }}"
                                data-publication-title="{{ $publication->title }}"
                                data-publication-contenu="{{ $publication->contenu }}"
                                data-publication-image="{{ $publication->image }}"
                                    class="block text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    <i class="fas fa-edit"></i>
                                </button>
                        
                            </div>
                            {{ $publication->title }}
                        </h3>
                        <div class="prose prose-slate prose-sm text-slate-600">
                            <p>{{ $publication->Contenu }}</p>
                        </div>
                    </div>
                    <img src="{{ asset('storage/images/' . $publication->image) }}" alt=""
                        class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[7rem] sm:mb-0 sm:mb-5 xl:w-[29rem] h-60 "
                        width="1216" height="640">
                </li>
            @endforeach
        </ul>
    </div>


        <div x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white ">

        </div>

        <div x-transition:enter="transform transition-transform duration-300"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 z-10 flex w-80">
            <!-- Curvy shape -->
            <svg class="absolute inset-0 w-full h-full text-white" style="filter: drop-shadow(10px 0 10px #00000030)"
                preserveAspectRatio="none" viewBox="0 0 309 800" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M268.487 0H0V800H247.32C207.957 725 207.975 492.294 268.487 367.647C329 243 314.906 53.4314 268.487 0Z" />
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
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span class="sr-only">Close sidebar</span>
                    </button>
                </div>
                <nav class="flex flex-col mt-5 flex-1 w-64 p-4 mt-4">
                    <a href="{{ route('home') }}"
                        class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Home
                    </a>
                    <a href="{{ route('books.index') }}"
                        class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Books
                    </a>
                    <a href="{{ route('publication.approuver') }}"
                        class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Publications
                    </a>
                    <a href="{{ route('reservations') }}"
                        class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Mes Reservations
                    </a>
                    <a href="{{ route('meet') }}"
                        class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Seances
                    </a>
                    <a href="/chatify" class="flex items-center px-4 py-2 mt-5 text-blak-100 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
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
                            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span>
                                Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Create New publication
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5"method="post" action="{{ route('publication.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="title"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                                <input type="text" name="title" id="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="Contenu"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenu</label>
                                <input type="text" name="Contenu" id="contenu"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tag</label>
                                <select name="tags[]" id="tags"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="Image"
                                    class="block mb-2  text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <input type="file" name="image" id="image" class="form-input w-full"
                                    accept="image/*">
                            </div>
                            <div id="selected-tags"></div>
                            <input type="hidden" name="coach_id" value="{{ auth()->user()->coach->first()->id }} ">

                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Add new publication
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <main class="">
            <!-- Page content -->

            <button @click="isSidebarOpen = true" class="fixed p-2 text-white bg-black rounded-lg top-5 left-5">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <span class="sr-only">Open menu</span>
            </button>
            <h1 class="sr-only">Home</h1>

        </main>
    </div>

    <div id="update-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update Publication</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="update-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                
                    
               
                <!-- Modal body -->
                <form method="post" action="{{ route('publication.update', $publication->id) }}" class="p-4 md:p-5"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="publication_id" value="{{ $publication->id }}">

                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="content"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                            <input type="text" name="Contenu" id="content" class="form-input w-full"
                                value="{{ $publication->Contenu }}" placeholder="Enter publication content" required>
                        </div>
                        <div class="col-span-2">
                            <label for="title"
                                class="block mb-2 w-full text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" name="title" id="title" class="form-input w-full"
                                value="{{ $publication->title }}" placeholder="Enter publication title" required>

                            <div>
                                <label for="tags"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
                                <select name="tags[]" id="tags" class="form-multiselect w-full">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            {{ $publication->tags->contains($tag->id) ? 'selected' : '' }}>
                                            {{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="image"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                            <input type="file" name="image" id="image" class="form-input w-74 "
                                accept="image/*" onchange="previewImage(event)">
                            <!-- Affichage de l'image existante -->
                            {{-- @if ($publication->image)
                            <img id="imagePreview" src="{{ asset('storage/images/' . $publication->image) }}" alt="Existing Image" class="mt-2 shadow-md rounded-lg" style="max-width: 100%;">
                            @endif --}}
                        </div>
                    </div>
                    <div id="selected-tags-update" class="flex flex-wrap"></div>

                    <button type="submit"
                        class="text-white inline-flex items-center bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Update
                    </button>
                
                </form>
            </div>
        </div>
    </div>

    <script src="./js/updatemodal/publication.js"></script>
    <script>
        const setup = () => {
            return {
                isSidebarOpen: false,
            }
        }
    </script>
    
  

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.1/alpine.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
