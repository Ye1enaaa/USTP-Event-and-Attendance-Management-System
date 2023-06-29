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
            <h1 class="pl-6 text-4xl font-bold font-serif text-blue-900">USTP-CDO EVENT</h1>
        </div>
        <br>
        <div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-2xl shadow-2xl">
            <div class="flex justify-center items-center">
                <h1 class="text-4xl font-bold font-serif text-black h-16">S I G N - U P</h1>
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('assets/pictures/ustp-logo.png') }}" class="h-40 w-60 object-contain">
            </div>
            <br><br>
            <form action="{{route('user.register')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-user text-black"></i>
                        </span>
                        <span class="absolute inset-y-0 left-9 flex items-center">
                        <span class="border-l border-gray-400 h-full"></span>
                        </span>
                        <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500 font-serif shadow-md" 
                            type="text" 
                            name="name" required
                            placeholder="Full name"
                            style="text-indent: 5px;">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-id-card text-black"></i>
                        </span>
                        <span class="absolute inset-y-0 left-9 flex items-center">
                        <span class="border-l border-gray-400 h-full"></span>
                        </span>
                        <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500 font-serif shadow-md" 
                            type="text" 
                            name="studentId" required 
                            placeholder="Student ID"
                            style="text-indent: 5px;">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-envelope text-black"></i>
                        </span>
                        <span class="absolute inset-y-0 left-9 flex items-center">
                        <span class="border-l border-gray-400 h-full"></span>
                        </span>
                        <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500 font-serif shadow-md" 
                            type="email" 
                            name="email" required
                            placeholder="Email"
                            style="text-indent: 5px;">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-lock text-black"></i>
                        </span>
                        <span class="absolute inset-y-0 left-9 flex items-center">
                        <span class="border-l border-gray-400 h-full"></span>
                        </span>
                        <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500 font-serif shadow-md" 
                            type="password" 
                            name="password" required
                            placeholder="Password"
                            style="text-indent: 5px;">
                    </div>
                </div>
                <div class="mb-4">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-calendar-alt text-black"></i>
                        </span>
                        <span class="absolute inset-y-0 left-9 flex items-center">
                        <span class="border-l border-gray-400 h-full"></span>
                        </span>
                        <input class="border border-gray-400 block py-2 pl-10 pr-4 w-full rounded focus:outline-none focus:border-blue-500 font-serif shadow-md" 
                            type="text" 
                            name="year_section" required
                            placeholder="Year & Section"
                            style="text-indent: 5px;">
                    </div>
                </div>
                <div class="mb-4 relative">
                    <select name="department" class="mb-4 border border-gray-400 block py-2 pl-10 pr-4 w-full rounded w-full font-serif pl-10 pr-4 py-2 shadow-md">
                        <option value="" disabled selected>Department</option>
                        <option value="CITC">CITC</option>
                        <option value="CEA">CEA</option>
                        <option value="COT">COT</option>
                        <option value="CSTE">CSTE</option>
                    </select>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <i class="fas fa-graduation-cap text-black"></i>
                    </span>
                    <span class="absolute inset-y-0 left-9 flex items-center">
                    <span class="border-l border-gray-400 h-full"></span>
                    </span>
                </div>
                <input type="file" name="picture" class="mb-4">
                <br><br>
                <div class="flex justify-center">
                    <button type="submit" class="flex justify-center items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-10 font-serif rounded-lg">REGISTER</button>
                </div>
                <p class="text-center mt-4 text-gray-500 font-serif">Already have an account? <a href="{{ route('user.login') }}" class="text-blue-500 hover:text-blue-800 hover:underline">Sign in</a></p>
            </form>
        </div>
        <br><br>
    </body>
</html>