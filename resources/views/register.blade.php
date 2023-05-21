<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Register</title>
</head>

<body class="bg-blue-100">
    <div class="bg-yellow-400 p-1 flex items-center">
        <div class="pl-4">
            <img src="{{ asset('assets/pictures/ustp-logo.png') }}" class="h-14 w-14 object-contain">
        </div>        
        <h1 class="pl-6 text-4xl font-bold text-blue-900">USTP-CDO EVENT</h1>
    </div>
    <br><br>


    <div class="max-w-md mx-auto mt-4 p-4 bg-white rounded-lg shadow-lg">


            <form action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
                @csrf


                <div>
                    <label for="name" class=" block mb-2 text-lg font-bold dark:text-white">name:</label>
                        <input 
                            class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-blue-500" 
                            type="text" 
                            name="name" required>
                            <!-- id="Email" 
                            placeholder="Email" -->
                </div> <br>

                <div>
                    <label for="StudentID" class=" block mb-2 text-lg font-bold dark:text-white">StudentID:</label>
                        <input 
                            class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-blue-500" 
                            type="text" 
                            name="studentId" required>
                            
                </div> <br>


                <div>
                    <label for="email" class=" block mb-2 text-lg font-bold dark:text-white">Email:</label>
                        <input 
                            class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-blue-500" 
                            type="email" 
                            name="email" required>
                           
                </div> <br>

                <div>
                    <label for="Password" class=" block mb-2 text-lg font-bold dark:text-white">Password:</label>
                        <input 
                            class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-blue-500" 
                            type="password" 
                            name="password" required>

                </div>


                <select name="department" class="mb-4">
                    <option value="CITC">CITC</option>
                    <option value="CEA">CEA</option>
                    <option value="COT">COT</option>
                    <option value="CSTE">CSTE</option>
                </select>


                <div>
                    <label for="Year_Section" class=" block mb-2 text-lg font-bold dark:text-white">Year/Section:</label>
                        <input 
                            class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none focus:border-blue-500" 
                            type="text" 
                            name="year_section" required>

                </div>

                <input type="file" name="picture" class="mb-4">

                <br><br>
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">REGISTER</button>
            </form>


        </div>



</body>
</html>