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






<div class="p-16">
    <a href="{{route('chatify')  }}">
        <img src="https://cdn-icons-png.freepik.com/512/8943/8943377.png" width="40px" height="30px" class="ml-auto " alt="Chatbot Icon">
       </a>
    <div class="p-8 bg-white shadow mt-24"> 
         <div class="grid grid-cols-1 md:grid-cols-3">  
                   
                                                          </div>   
                                                           <div class="relative"> 
                                                                 <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">  
                                                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>    
                                                                      </div> 
                                                                       </div>  
                                                                         <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
                                                                              </div>  </div>  <div class="mt-20 text-center border-b pb-12">  
                                                                                  <h1 class="text-4xl font-medium text-gray-700">{{  $coach->user->name }} <span class="font-light text-gray-500"></span></h1> 
                                                                                     <p class="font-light text-gray-600 mt-3">{{  $coach->user->email }}</p>  
                                                                                       <p class="mt-8 text-gray-500">  {{  $coach->user->role }} </p>  
                                                                                       
                                                                                       <h3 class="mt-2 font-bold">A propos de moi</h3> 
                                                                                     </div>  <div class="mt-12 flex flex-col justify-center">   
                                                                                         <p class="text-gray-600 text-center font-light lg:px-16">  {{  $coach->user->description }} </p>   
                                                                                         </div>
                                                                                         <div class="mt-12 flex flex-col justify-center items-center"> 
                                                                                            <h3 class="font-bold uppercase">Take an appointment</h3>
                                                                                            <form action="{{ route('reservation.store') }}" method="POST" class="space-y-4 space-x-4 mt-4"> 
                                                                                                @csrf
                                                                                                <input type="hidden" name="coach_id" value="{{ $coach->id }}">
                                                                                                <input type="hidden" name="appointment_date" value="{{ $appointment_date }}">
                                                                                                <label for="selected_hour">Choisissez l'heure de votre rendez-vous :</label>
                                                                                                <select name="selected_hour" id="selected_hour" class="w-64 px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm">
                                                                                                    @foreach ($availableHours as $hour)
                                                                                                        <option value="{{ $hour }}">{{ $hour }}:00</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-lg" onclick="swal('Booked!', 'Successfully booked appointment', 'success')">Book now</button>
                                                                                            </form>
                                                                                        </div>
                                                                                        
                                                                                        </div></div>

    
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