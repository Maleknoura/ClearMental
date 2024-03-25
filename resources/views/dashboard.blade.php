<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>

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
            <div
                class="relative mt-[3px] flex h-[61px] w-[355px] flex-grow items-center justify-around gap-2 rounded-full bg-white px-2 py-2 shadow-xl shadow-shadow-500 dark:bg-gray-800 dark:shadow-none md:w-[365px] md:flex-grow-0 md:gap-1 xl:w-[365px] xl:gap-2">
                <div
                    class="flex h-full items-center rounded-full bg-lightPrimary text-navy-700 dark:bg-navy-900 dark:text-white xl:w-[225px]">
                    <p class="pl-3 pr-2 text-xl"></p><input type="text" placeholder="Search..."
                        class="block h-full w-full rounded-full bg-lightPrimary text-sm font-medium text-navy-700 outline-none placeholder:!text-gray-400 dark:bg-gray-900 dark:text-black sm:w-fit">
                </div>
                <div class="relative"><span
                        class="flex cursor-pointer text-xl text-gray-600 dark:text-white xl:hidden"></span></div>
                <div class="relative">
                    <div class="cursor-pointer text-white"><img class="h-10 w-10 rounded-full" src="/profile.jpg"
                            alt="Profile"></div>
                </div>
            </div>
        </nav>
        <div class="flex h-full w-full">
            <div
                class="fixed inset-y-0 left-0 z-50 lg:w-40 bg-gray-800 overflow-y-auto transition-all duration-300 ease-in-out w-0">
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
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">6</h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase"></h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">10</h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase"></h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">72</h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase"></h6>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative ">
                        <div class="flex-auto p-4 text-center">
                            <h4 class="my-1 font-semibold text-2xl dark:text-slate-200">24</h4>
                            <h6 class="text-gray-400 mb-0 font-medium uppercase">Total Categories</h6>
                        </div>
                    </div>
                </div>
                <div class="gap-14 ml-9 grid grid-cols-2">
                    <div class="grid lg:ml-36 w-[50rem] grid-cols-1 p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <div class=" ">
                                    <table class="w-full">
                                        <thead class="bg-[#4F46E5]">
                                            <tr class="text-white">
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                                    title</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                                    Auteur</th>

                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:ml-36 w-[35rem] grid-cols-1 p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <div class=" ">
                                    <table class="w-full">
                                        <thead class="bg-gray-700">
                                            <tr class=" text-white">
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                                    User</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Email</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Role</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left uppercase">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-white text-white border-b border-dashed dark:bg-gray-800 ">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="/src/assets/img/google.png" alt=""
                                                        class="mr-2 h-8 rounded-full inline-block">test
                                                </td>
                                                <td class="p-3 text-sm whitespace-nowrap">test@gmail.com</td>
                                                <td class="p-3 text-sm whitespace-nowrap">hhhh
                                                </td>
                                                <td class="p-3 text-sm whitespace-nowrap"><button
                                                        class="">ban</button></td>
                                            </tr>
                                            <tr
                                                class="bg-white text-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="/src/assets/img/google.png" alt=""
                                                        class="mr-2 h-8 rounded-full inline-block">Quas modi assumenda
                                                </td>
                                                <td class="p-3 text-sm whitespace-nowrap">zugysiqih@mailinator.com</td>
                                                <td class="p-3 text-sm whitespace-nowrap"><span
                                                        class="bg-indigo-600/10 text-indigo-200 text-[11px] font-medium px-2.5 py-0.5 rounded h-5"></span>
                                                </td>
                                                <td class="p-3 text-sm whitespace-nowrap"><button
                                                        class="">View</button></td>
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
                                <div class=" ">
                                    <table class="w-full">
                                        <thead class="bg-black">
                                            <tr class=" text-white">
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
                                                class="bg-black text-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="/src/assets/img/google.png" alt=""
                                                        class="mr-2 h-8 rounded-full inline-block">1
                                                </td>
                                                <td class="p-3 text-sm whitespace-nowrap">tag1</td>

                                                <td class="p-3 text-sm whitespace-nowrap"><button
                                                        class="">update</button></td>

                                                <td class="p-3 text-sm whitespace-nowrap"><button
                                                        class="">delete</button></td>
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
</body>

</html>
