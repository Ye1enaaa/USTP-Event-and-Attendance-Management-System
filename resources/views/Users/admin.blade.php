<!DOCTYPE html>
<input type="file" onchange="readURL(this)">
<div id="image-container">
  <img id="preview" style="display: none;" />
</div>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-jqWO+TM9G3s6jSLM9vP8cMhiUm99DLlVAlxio51S9uYqEdOhxmMLjF18Ypvbqk8L9VfsN5kZKLJ0efoNu4gIhQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Yq9K2oX/e1TrST5yJthLBmR2qzMNuy2OqPBBQzKCPNI1PbcRLacKQYUKa1vWJ8WhR+JiSjXvL8yvSTQ8R1yOWg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS styles for the navigation bar, menu, and sidebar */
        .header {
            background-color: #333;
            color: #f2f2f2;
            padding: 10px;
            text-align: center;
        }

        .navigation {
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .navigation a {
            color: #f2f2f2;
            text-decoration: none;
            margin-right: 10px;
        }

        .navbar {

            background-color: #fdc718;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1;
        }

        .navbar .sidebar-button {
            cursor: pointer;
            z-index: 2;
        }

        .sidebar {
            width: 200px;
            background-color: #f2f2f2;
            height: 100%;
            position: fixed;
            top: 0;
            left: -200px;
            transition: left 0.3s ease-in-out;
            z-index: 1;
        }

        .sidebar.show {
            left: 0;
        }

        .sidebar a {
            display: block;
            color: #333;
            padding: 8px 16px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .content {
            margin-left: 200px;
            padding: 16px;
            margin-top: 20px;
        }

        .menu {
            margin-top: 20px;
            margin-left: 800px;
            text-align: left;
        }

        .menu input[type="text"],
        .menu input[type="date"],
        .menu input[type="time"] {
            display: block;
            margin-bottom: 30px;
            width: 300px;
            border: 1px solid #ccc;
            padding: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .menu input[type="file"] {
            display: block;
            margin-bottom: 30px;
        }

        .menu button[type="submit"],
        .menu button[type="cancel"] {
            margin-top: 10px;
            margin-left: 50px;
            padding: 8px 16px;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 10px;
        }

        .menu button[type="submit"] {
            background-color: #1E2F97;
        }

        .menu button[type="cancel"] {
            background-color: #FF0000;
        }

        .menu button[type="submit"]:hover,
        .menu button[type="cancel"]:hover {
            background-color: #555;
        }
        .sidebar {
        width: 200px;
        background-color: #f2f2f2;
        height: 100%;
        position: fixed;
        top: 0;
        left: -200px;
        transition: left 0.3s ease-in-out;
        z-index: 9999; /* Update the z-index */
        }

        .sidebar.show {
            left: 0;
            z-index: 2;
        }

        .sidebar-button {
            cursor: pointer;
            z-index: 2; /* Update the z-index */
            
        }

        
        .search-bar {
        display: flex;
        align-items: center;
        }

        .search-bar input[type="text"] {
            width: 500px;
            padding: 8px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
        }

        .search-bar button[type="submit"] {
            padding: 8px;
            border: none;
            background-color: #1E2F97;
            color: #fff;
            cursor: pointer;
            border-radius: 20px;
            margin-left: 5px;
            font-size: 16px;
        }
        #preview {
            display: none;
            position: absolute;
            top: 50%;
            right:10%;
            max-width: 1000%;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 5px;
            transform: translate(-50%, -50%);
            height: 450px;
            object-position: 100% 100%;
       }


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
        .form-group input {
            border: 2px solid #201a50; /* Replace #ff0000 with your desired border color */
            border-radius: 5px; /* Adjust the border-radius value to your desired amount */
        }
        .submit-button {
            background-color: #201a50; /* Replace #201a50 with your desired background color */
            color: #ffffff; /* Replace #ffffff with your desired text color */
    /* Add any additional styles such as padding, border, etc. */
        }
        .input-container {
            position: relative;
        }
        .danger-button {
            background-color: #ff0000;
            color: #ffffff;
        }

        .danger-button:hover {
            background-color: #cc0000;
        }

    </style>
</head>
<body>
    <div class="navigation">
        <a href="#">Home</a>
        <a href="#">Events</a>
        <a href="#">Users</a>
        <a href="#">Settings</a>
    </div>

    <div class="navbar">
        <div class="sidebar-button" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
        <div class="search-bar">
        <input type="text" placeholder="Search">
        <button type="submit"><i class="fas fa-search"></i></button>
           
        </div>
        <div>
            {{ Auth::user()->email }}
        </div>
        <br><br>
        <form action="{{route('user.logout')}}" method="post">
            @csrf
            <!--This is for log out-->
        </form>
        <br><br>

        
    </div>

    <div class="sidebar">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
    </div>

    <div class="content">
        <div class="menu">
            <h2>CREATE EVENT</h2>
            <!-- Form for adding an event -->
            <form action="{{route('add.event')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="eventName" id="" placeholder="Event Name">
                <input type="date" name="eventDate" id="" placeholder="Event Date">
                <input type="time" name="eventTime" id="" placeholder="Event Time">
                <input type="text" name="eventPlace" id="" placeholder="Event Place">
                <input type="text" name="eventDesc" id="" placeholder="Event Description">
                <div>
                    <input type="file" name="eventPicture" id="" placeholder="Event Picture" onchange="readURL(this)">
                    <img id="preview" src="#" alt="Chosen Picture" style="display: none; width: 200px; margin-left: 10px;">
                </div>
                <button type="submit">SUBMIT</button>
                <button type="cancel">CANCEL</button>
            </form>
        </div>
        <div>
            <!-- Lists of events -->
            @foreach($events as $event)
                <h1>{{$event->eventName}}</h1>
                <!-- UNCOMMENT IMAGE LINE PARA MAKITA NIMO IMONG HALAGA CHAR!!-->
                <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="">
            @endforeach
        </div>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('show');
        }

        
        // Function to display the chosen picture
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var preview = document.getElementById('preview');
                    preview.style.display = 'block';
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <style>
</style>
</body>
</html>
