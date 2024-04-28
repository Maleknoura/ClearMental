
 <script src="https://cdn.tailwindcss.com"></script>: 
<div class="h-full">
	<!-- Container -->
	<div class="mx-auto">
		<div class="flex justify-center px-6 py-12">
			<!-- Row -->
			<div class="w-full shadow-lg xl:w-3/4 lg:w-11/12 flex">
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
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border  rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password" name="password"
                                    type="password"
                                    placeholder="******************"
                                />
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
                            class="uppercase block w-64 mx-auto  p-2 text-lg rounded-full bg-gray-400 hover:bg-indigo-600 focus:outline-none">
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