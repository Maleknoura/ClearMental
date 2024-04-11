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
                        New Tag
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
            <div class="flex-grow  ">
                <div class="grid lg:ml-44 px-7 grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4">
                    <div class="bg-white-600 dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200"></h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Coachs</h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200"></h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Clients</h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200"></h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Publications</h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200"></h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Tags</h6>
                        </div>
                    </div>
                </div>
                <div class="gap-14 ml-9 grid grid-cols-2">
                    <div class="grid lg:ml-36 w-[50rem] grid-cols-1 p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <div class=" ">
                                    <table class="w-full">
                                        <thead class="bg-[#4a044e]">
                                            <tr class="text-white">
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                                    title</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                                    Coach</th>

                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                                <tr>
                                                    <td class="p-3">contenu</td>
                                                    <td class="p-3">auteur</td>
                                                    <td class="p-3">
                                                        <form method="POST"
                                                            action="">
                                                            @csrf
                                                            <input type="hidden" name="statut" value="publié">
                                                            <button type="submit"
                                                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                                                                Approuver
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:ml-36 w-[35rem] grid-cols-1 p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <div class="">
                                    <table class="w-full">
                                        <thead class="bg-[#4a044e]">
                                            <tr class="text-white">
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                                    User</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Email</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                                <tr class="bg-white text-black border-b border-dashed">
                                                    <td
                                                        class="p-3 text-sm text-black font-medium whitespace-nowrap dark:text-black">
                                                        <p>
                                                        
                                                        </p>

                                                    </td>
                                                    <td class="p-3 text-black text-sm">
                                                        <p> </p>
                                                    </td>
                                                    <td class="p-3 text-sm">
                                                        <form method="POST"
                                                            action="">
                                                            @csrf
                                                            @method('PATCH')

                                                            <input type="hidden" name="status"
                                                                value="">
                                                            <button type="submit">
                                                              
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ml-9">
                    <div class="grid lg:ml-36 w-[35rem] grid-cols-1 p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <div class="shadow-lg bg-white rounded-lg overflow-hidden">
                                    <table class="w-full">
                                        <thead class="bg-[#4a044e]">
                                            <tr class="text-white">
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                                    Id</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Name</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Action</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                                <tr
                                                    class="bg-white text-black border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                    <td
                                                        class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <img src="/src/assets/img/google.png" alt=""
                                                            class="mr-2 h-8 rounded-full inline-block">
                                                    </td>
                                                    <td class="p-3 text-sm whitespace-nowrap"></td>
                                                    <td class="p-3 text-sm whitespace-nowrap">
                                                        <button data-modal-target="update-modal"
                                                            data-modal-toggle="update-modal"
                                                            data-tag-id=""
                                                            class="block text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                            type="button">
                                                            update
                                                        </button>
                                                    </td>
                                                    <td class="p-3 text-sm whitespace-nowrap">
                                                        <form action=""
                                                            method="POST" class="inline">
                                                         
                                                            <button type="submit"
                                                                onclick="return confirm('Are you sure you want to delete this tag?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="update-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Product
                    </h3>
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
                <form method="post" action="" class="p-4 md:p-5">
                    
                    <input type="hidden" name="tag_id" value="">
                
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name" required="">
                        </div>
                    </div>
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
    
        



    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Product
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
                <form method="post" action="" class="p-4 md:p-5">

                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name" required="">
                        </div>



                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-gray-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new Tag
                    </button>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal toggle -->

    



    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>

</html>
