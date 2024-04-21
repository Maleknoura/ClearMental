<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div>
        <nav
            class="sticky lg:ml-40 mb-7 top-4 z-40 flex flex-row flex-wrap items-center justify-between rounded-full  p-2 backdrop-blur-xl ]">
            <div class="ml-[6px]">
                <p class="shrink  capitalize text-navy-700 dark:text-white"><a
                        class="font-bold capitalize hover:text-navy-700 dark:hover:text-black"
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
                            class="group flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                              
                            </svg>Dashboard</a></nav>
                </div>
            </a>
         
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="px-2">
            @csrf 
            <button type="submit" class="group flex items-center px-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                <i class="fa fa-user" aria-hidden="true"> Log Out</i>
            </button>
        </form>
            </div>
            <div class="flex flex-col lg:flex-row"> 
            <div class="flex-grow flex-wrap ">
                <div class="grid lg:ml-44 px-7 grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4">
                    <div class="bg-white-600 dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $totalCoachs }}</h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Coachs</h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $totalClients }}</h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Clients</h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $totalPublications }}</h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Publications</h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $totalTags }}</h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Tags</h6>
                        </div>
                    </div>
                </div>

                <div class="gap-14 ml-9 grid grid-cols-2 overflow-x-hidden flex-wrap ">
                    <div class="grid lg:ml-36 w-[50rem] grid-cols-1 p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <div class=" ">
                                    <table class="w-full">
                                        <thead class="bg-[#f97316]">
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
                                            @foreach ($publications as $publication)
                                                <tr>
                                                    <td class="p-3">{{ $publication->Contenu }}</td>
                                                    <td class="p-3">{{ $publication->coach->user->name }}</td>
                                                    <td class="p-3">
                                                        <form method="POST"
                                                            action="{{ route('update.pub', $publication->id) }}">
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
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid lg:ml-36 w-[35rem] grid-cols-1  flex-wrap  p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <div class="">
                                    <table class="w-full">
                                        <thead class="bg-[#f97316]">
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
                                            @foreach ($users as $user)
                                                <tr class="bg-white text-black border-b border-dashed">
                                                    <td
                                                        class="p-3 text-sm text-black font-medium whitespace-nowrap dark:text-black">
                                                        <p>
                                                            {{ $user->name }}
                                                        </p>

                                                    </td>
                                                    <td class="p-3 text-black text-sm">
                                                        <p> {{ $user->email }}</p>
                                                    </td>
                                                    <td class="p-3 text-sm">
                                                        <form method="POST"
                                                            action="{{ route('users.update', $user) }}">
                                                            @csrf
                                                            @method('PATCH')

                                                            <input type="hidden" name="status"
                                                                value="{{ $user->status ? '0' : '1' }}">
                                                            <button type="submit"
                                                                class="bg-{{ $user->status ? 'green' : 'red' }}-500 text-white text-sm px-3 py-1 rounded">
                                                                {{ $user->status ? 'Unban' : 'Ban' }}
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                        <thead class="bg-[#f97316]">
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
                                            @foreach ($tags as $tag)
                                                <tr
                                                    class="bg-white text-black border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                    <td
                                                        class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <img src="/src/assets/img/google.png" alt=""
                                                            class="mr-2 h-8 rounded-full inline-block">{{ $tag->id }}
                                                    </td>
                                                    <td class="p-3 text-sm whitespace-nowrap">{{ $tag->name }}</td>
                                                    <td class="p-3 text-sm whitespace-nowrap">
                                                        <button data-modal-target="update-modal" id=""
                                                            data-modal-toggle="update-modal"
                                                            data-tag-id="{{ $tag->id }}"
                                                            data-tag-name="{{ $tag->name }}"
                                                            class="update-tag block text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                            type="button">
                                                            update
                                                        </button>
                                                    </td>
                                                    <td class="p-3 text-sm whitespace-nowrap">
                                                        <form action="{{ route('tags.destroy', $tag) }}"
                                                            method="POST" class="inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                onclick='swal({
                                                                    title: "Are you sure?",
                                                                    text: "Once deleted, you will not be able to recover this imaginary file!",
                                                                    icon: "warning",
                                                                    buttons: true,
                                                                    dangerMode: true,
                                                                  })
                                                                  .then((willDelete) => {
                                                                    if (willDelete) {
                                                                      swal("Poof! Your imaginary file has been deleted!", {
                                                                        icon: "success",
                                                                      });
                                                                    } else {
                                                                      swal("Your imaginary file is safe!");
                                                                    }
                                                                  });'>Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <x-update-tag :tag="$tag" />
                                            @endforeach
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
</div>




{{--  --}}


    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-black-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Create New Tag
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
                <form method="post" action="{{ route('tags.store') }}" class="p-4 md:p-5">
               
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


    <script>
        const updateBtn = document.querySelectorAll(".update-tag");
        console.log(updateBtn);
        updateBtn.forEach(element => {
            element.addEventListener("click", (event) => {

                const tagId = element.getAttribute("data-tag-id");

                const tagName = element.getAttribute("data-tag-name");

                ;
                const modal = document.querySelector("#update-modal form");
                modal.action = `/dashboard/tags/${tagId}`;


               
                document.querySelector("input[name='name']").value = tagName;
            });
        });
    </script>


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>

</html>
