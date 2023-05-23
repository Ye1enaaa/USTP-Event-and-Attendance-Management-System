<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <title>Register</title>
</head>

<body class="bg-blue-100">

    <div class="bg-yellow-400 flex items-center">
        <div class="pl-4">
            <img src="{{ asset('assets/pictures/ustp-logo.png') }}" class="h-14 w-14 object-contain">
        </div>        
        <h1 class="pl-6 text-4xl font-bold text-blue-900">USTP-CDO EVENT</h1>
    </div>

    <br><br>
    
    <div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">

        <div class="flex justify-center items-center">

            <h1 class="text-4xl font-bold text-black h-16">SIGN UP</h1>
        </div>


        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/pictures/ustp-logo.png') }}" class="h-20 w-20 object-contain">
        </div> <br><br>

            <form action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
                @csrf


            <div class="mb-4">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-user text-gray-400"></i>
                    </span>
                    <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500" 
                        type="text" 
                        name="name" 
                        required
                        placeholder="Full name">
                </div>
            </div>

            <div class="mb-4">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-envelope text-gray-400"></i>
                    </span>

                    <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500" 
                        ttype="email" 
                            name="email" required
                        placeholder="Email">
                </div>
            </div>


            <div class="mb-4">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-id-card text-gray-400"></i>
                    </span>

                    <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500" 
                        type="text" 
                        name="studentId" required 
                        placeholder="Student ID">
                </div>
            </div>


            <div class="mb-4">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-lock text-gray-400"></i>

                    </span>

                    <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500" 
                        type="password" 
                        name="password" required
                        placeholder="Password">
                </div>
            </div>


            <div class="mb-4">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-calendar-alt text-gray-400"></i>

                    </span>

                    <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500" 
                        type="text" 
                            name="year_section" required
                        placeholder="Year_section">
                </div>
            </div>

<!-- 
                <div>
                    <label for="email" class=" block mb-2 text-lg font-bold dark:text-white">Email:</label>
                        <input 
                            class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-blue-500" 
                            type="email" 
                            name="email" required>
                           
                </div> <br> -->

            <div class="mb-4">
                <select name="department" class="mb-4 border border-gray-400 rounded w-full">
                    <option value="" disabled selected>Department</option>
                    <option value="CITC">CITC</option>
                    <option value="CEA">CEA</option>
                    <option value="COT">COT</option>
                    <option value="CSTE">CSTE</option>
                </select>
            </div>


                <input type="file" name="picture" class="mb-4">

                <br><br>

                 <div class="flex justify-center">
                    <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white font-bold  py-2 px-10 rounded-lg">REGISTER</button>
                 </div> 


                <p class="text-center mt-4 text-gray-500">Already have an account ? <a href="{{ route('user.login') }}" class="text-blue-500">Sign in</a></p>

                
            </form>


    </div>

    <br><br>



</body>
</html>