<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Coach Profile</title>
</head>
<body>
    <x-nav-bar />

<div>
    <div class="md:grid grid-cols-4 grid-rows-2  bg-white gap-2 p-4 rounded-xl">
         <div class="md:col-span-1 h-48 -xl ">
                 <div class="flex   w-full h-full relative">
                     <img src="https://res.cloudinary.com/dboafhu31/image/upload/v1625318266/imagen_2021-07-03_091743_vtbkf8.png" class="w-44 h-44 m-auto" alt="">
 
                 </div>
         </div>
         <div class="md:col-span-3 h-48 -xl p-4 space-y-2 p-3">
                 <div class="flex ">
                     <span
                         class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-2 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Name:</span>
                     <input 
                         class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none -sm -ml-1 w-1/6"
                         type="text" value="{{  $coach->user->name }}"  readonly/>
                 </div>
                 <div class="flex ">
                     <span
                         class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Email:</span>
                     <input 
                         class="px-4 border-l-0 cursor-default   border-gray-300 focus:outline-none  rounded-md rounded-l-none -sm -ml-1 w-1/6"
                         type="text" value="{{  $coach->user->email }}"    readonly/>
                 </div>
                  <div class="flex ">
                     <span
                         class="text-sm border bg-blue-50 font-bold uppercase border-2 rounded-l px-4 py-2 bg-gray-50 whitespace-no-wrap w-2/6">Role:</span>
                     <input 
                         class="px-4 border-l-0 cursor-default border-gray-300 focus:outline-none  rounded-md rounded-l-none -sm -ml-1 w-1/6"
                         type="text" value="{{  $coach->user->role }}"  readonly/>
                 </div>
         </div>
         <div class="md:col-span-3 h-48 -xl p-8 space-y-2 hidden md:block">
             <h3 class="font-bold uppercase"> Profile Description</h3>
             <p class=""> 
                {{  $coach->user->description }} 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget laoreet diam, id luctus lectus. Ut consectetur nisl ipsum, et faucibus sem finibus vitae. Maecenas aliquam dolor at dignissim commodo. Etiam a aliquam tellus, et suscipit dolor. Proin auctor nisi velit, quis aliquet sapien viverra a. 
             </p>
         </div>
             
     </div>
    
     <div class="md:col-span-3 h-48 ml-12 p-4 space-y-2 p-3">
        <h3 class="font-bold mt-28 uppercase"> Take an appointment</h3>
        <form action="{{ route('reservation.store') }}" method="POST" class="space-y-4 space-x-4">
           @csrf
           <input type="hidden" name="coach_id" value="{{ $coach->id }}">
           <input type="hidden" name="appointment_date" value="{{ $appointment_date }}">
           <label for="selected_hour">Choisissez l'heure de votre rendez-vous :</label>
           <select name="selected_hour" id="selected_hour" class="w-64 px-4 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
               @foreach ($availableHours as $hour)
                   <option value="{{ $hour }}">{{ $hour }}:00</option>
               @endforeach
           </select>
           <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-lg " onclick="swal('Booked!', 'Successfully booked appointment', 'success')">Book now</button>
        </form>
    </div>
    </div>
    
    <footer class=" shadow w-full mt-24 dark:bg-gray-900 bg-gray-100 overflow-x-hidden  ">
        <div class="w-full max-w-screen-xl mx-auto  p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="/images/logo.png" alt="" width="60px" height="40px">
                    <span class="self-center text-2xl  whitespace-nowrap text-gray-500">ClearMental</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Login</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Register</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Actuality</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Library</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">ClearMental™</a>. All Rights Reserved.</span>
        </div>
    </footer>
    
</body>
</html>