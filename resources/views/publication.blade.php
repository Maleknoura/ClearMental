<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div>
        <nav
            class="sticky lg:ml-40 mb-7 top-4 z-40 flex flex-row flex-wrap items-center justify-between rounded-full  p-2 backdrop-blur-xl ]">
            <div class="ml-[6px]">
                <p class="shrink  capitalize text-navy-700 dark:text-white"><a
                        class="font-bold capitalize hover:text-navy-700 dark:hover:text-white"
                        href="/dashboard">Dashboard</a></p>
            </div>
            <div>
                <div class="flex h-full items-center ">
                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white bg-gray-400 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        New Publication
                    </button>
                </div>
                <div class="relative"><span
                        class="flex cursor-pointer text-xl text-gray-600 dark:text-white xl:hidden"></span></div>
                <div class="relative">

                </div>
            </div>
        </nav>
        <div class="flex h-full w-full">
            <div
                class="fixed inset-y-0 left-0 z-50 lg:w-40 bg-gray-200 overflow-y-auto transition-all duration-300 ease-in-out w-0">
                <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center">
                        <div class="flex-shrink-0"></div>
                        <div class="ml-2"><span class="text-xl font-bold text-white">Sidebar</span></div>
                    </div>
                </div>
                <div class="pt-5 pb-4">
                    <nav class="mt-5 px-2 space-y-1"><a href="#"
                            class="group flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700"><svg
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>Dashboard</a></nav>
                </div>
            </div>
            <div class="flex h-full items-center ">
                <!-- Modal toggle -->
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="block text-white bg-gray-400 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    New Book
                </button>
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
    <form method="post" action="{{ route('publication.store') }}" class="p-4 md:p-5">
        @csrf
        <div class="grid gap-4 mb-4 grid-cols-2">
            <div>
                <label for="Contenu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" name="Contenu" id="Contenu" class="form-input" placeholder="Enter book title" required>
            </div>
            <div>
                <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
                <select name="tags[]" id="tags" class="form-multiselect" multiple>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="text" name="coach_id" value="{{ auth()->user()->coach->id }}">

        </div>
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">
            Add new Book
        </button>
    </form>
    
        
        
        
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </body>

</html>
