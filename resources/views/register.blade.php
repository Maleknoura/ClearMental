{{-- <script src="https://cdn.tailwindcss.com"></script>

<body class="card">
<section class=" flex items-stretch text-white ">
    <div class="lg:flex  hidden  bg-center bg-cover relative items-center"
         style="background-image: url(https://i.pinimg.com/564x/46/05/41/46054169dc397b1ab3e02846e8fa1f06.jpg);">
       
    </div>
    <div class="lg:w-2/3 flex items-center justify-center text-center md:px-16 px-0 z-0"
    >
    <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center"
    style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
    <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
</div>
<div class="w-full py-6 z-20">
  
        
        <form enctype="multipart/form-data" method="post" action="/register"
        class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
        @csrf
        <div class="pb-2 ">
           
            <h1 class="text-4xl font-bold mb-5 text-left tracking-wide">Bienvenue sur ClearMental !</h1>
                
                    <div class="pb-2  pt-2">
                        <input class="block w-full p-2 text-lg rounded-sm bg-black" type="text" name="name" id="name"
                               placeholder="Username">
                    </div>
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email"
                               class="block w-full p-2 text-lg rounded-sm bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-2 text-lg rounded-sm bg-black" type="password" name="password"
                               id="password" placeholder="Password">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-2 text-lg rounded-sm bg-black" type="password"
                               name="password_confirmation" id="password_confirmation"
                               placeholder="password_confirmation">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-2 text-lg rounded-sm bg-black" type="text" name="description"
                               id="description" placeholder="Description (optional)" aria-describedby="description-description">
                        <p id="description-description" class="text-sm text-gray-500">Optional description about yourself.</p>
                    </div>
                    <div class=" pt-2">
                        <label class="mb-3 block text-base font-medium">
                            Would you like to sign up as an Coach or a Client?
                        </label>
                        <div class="flex items-center space-x-6 px-24">
                            <div class="flex items-center">
                                <input type="radio" name="role" value="coach" id="radioButton1"
                                       class="h-5 w-5"/>
                                <label for="radioButton1" class="pl-3 text-base font-medium">
                                    Coach
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="role" value="client" id="radioButton2"
                                       class="h-5 w-5"/>
                                <label for="radioButton2" class="pl-3 text-base font-medium">
                                    Client
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button
                            class="uppercase block w-full p-2 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">
                            Register
                        </button>
                    </div>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="/login"
                                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                            here</a>
                    </p>

                    <div class="p-4 text-center right-0 left-0 flex justify-center space-x-4 mt-16 lg:hidden ">
                        <a href="#">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
            </form>
        </div>
    </div>
</section>
</body> --}}
<!-- source: https://gist.github.com/nraloux/bce10c4148380061781b928cdab9b193 -->
<!-- I have added support for dark mode and improved UI -->
 <script src="https://cdn.tailwindcss.com"></script>: 
<div class="h-full bg-gray-400 dark:bg-gray-900">
	<!-- Container -->
	<div class="mx-auto">
		<div class="flex justify-center px-6 py-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 bg-center dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
					style="background-image: url(https://i.pinimg.com/736x/57/d9/4e/57d94eefc6c004088a5b51dccb009444.jpg)"></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
					<h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Create an Account!</h3>
					<form class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded"enctype="multipart/form-data" method="post" action="/register">
                       @csrf

						<div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 ">
                                <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="fullName">
                                    Full Name
                                </label>
                                <input
                                    class="block px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="name" id="name"
                                    type="text"
                                    placeholder="Full Name"
                                />
                            </div>
                            
							{{-- <div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="lastName">
                                    Last Name
                                </label>
								<input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    type="text"
                                    placeholder="Last Name"
                                />
							</div> --}}
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                Email
                            </label>
							<input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name="email" id="email"
                                type="email"
                                placeholder="Email"
                            />
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">
                                    Password
                                </label>
								<input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password" name="password"
                                    type="password"
                                    placeholder="******************"
                                />
								<p class="text-xs italic text-red-500">Please choose a password.</p>
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="c_password">
                                    Confirm Password
                                </label>
								<input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="password_confirmation" id="password_confirmation"
                                    type="password"
                                    placeholder="******************"
                                />
							</div>
						</div>
                        <div class=" pt-2">
                            <label class="mb-3 block text-base font-medium">
                                Would you like to sign up as an Coach or a Client?
                            </label>
                            <div class="flex items-center space-x-6 px-24">
                                <div class="flex items-center">
                                    <input type="radio" name="role" value="coach" id="radioButton1"
                                           class="h-5 w-5"/>
                                    <label for="radioButton1" class="pl-3 text-base font-medium">
                                        Coach
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="role" value="client" id="radioButton2"
                                           class="h-5 w-5"/>
                                    <label for="radioButton2" class="pl-3 text-base font-medium">
                                        Client
                                    </label>
                                </div>
                            </div>
                        </div>
    
						<div class="mt-9 text-center">
							<button
                            class="uppercase block w-full  p-2 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none">
                            Register
                        </button>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							
						</div>
						<div class="text-center">
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Already have an account? <a href="/login"
                                                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                                    here</a>
                            </p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>