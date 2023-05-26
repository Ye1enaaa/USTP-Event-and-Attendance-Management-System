<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>USTP-CDO EVENT</title>

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

        <h1 class="flex items-center justify-center text-2xl font-serif text-black text-center">EVENT MANAGEMENT SYSTEM</h1> 

        <br>

        <div class="flex justify-center items-center">
            <img src="{{ asset('assets/pictures/picture-event.png') }}" class="h-40 w-60 object-contain">  
        </div>

        <br><br> 

        <div class="flex justify-center"> 
            <form>
                <div class="flex justify-center">
                    <button type="submit"> <a href="{{ route('user.login') }}"class="flex justify-center items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-10 font-serif rounded-lg">SIGN IN<a></button>
                </div>
                <br>
                    <p class="text-center mt-0 p-4 text-gray-500">OR</p>
                <br>
                <div class="flex justify-center">
                    <button type="submit"> <a href="{{ route('user.register') }}"class="flex justify-center items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-10 font-serif rounded-lg">SIGN UP<a></button>
                </div> 
                <br><br>    
            </form>
        </div>
    </div>
    <br><br>
</body>
</html>