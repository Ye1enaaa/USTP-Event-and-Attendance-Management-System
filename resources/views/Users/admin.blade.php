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

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">


</head>
<body>


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
    <div>
        <!--lists of events-->
        @foreach($events as $event)
            <h1>{{$event->eventName}}</h1>
            <!--UNCOMMENT IMAGE LINE PARA MAKITA NIMO IMONG HALAGA CHAR!!-->
            <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="">
        @endforeach
    </div>

    <div class="content">
    <div class="menu">
    <h2 style="color: #201a50;"><i class="far fa-edit" style="color: #fdc718;"></i> CREATE EVENT</h2>
        <!-- Form container -->
        <div class="form-container">
            <!-- Form for adding an event -->
            <form action="{{route('add.event')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="eventName" style="color: #201a50;">Event Name:</label>
                    <input type="text" name="eventName" id="eventName" placeholder="Event Name">
                </div>
                <div class="form-group">
                    <label for="eventDate" style="color: #201a50;">Event Date:</label>
                    <input type="date" name="eventDate" id="eventDate" placeholder="Event Date">
                </div>
                <div class="form-group">
                    <label for="eventTime" style="color: #201a50;">Event Time:</label>
                    <input type="time" name="eventTime" id="eventTime" placeholder="Event Time">
                </div>
                <div class="form-group">
                    <label for="eventPlace" style="color: #201a50;">Event Place:</label>
                    <input type="text" name="eventPlace" id="eventPlace" placeholder="Event Place">
                </div>
                <div class="form-group">
                    <label for="eventDesc" style="color: #201a50;">Event Description:</label>
                    <input type="text" name="eventDesc" id="eventDesc" placeholder="Event Description">
                </div>
                <div class="form-group">
                    <label for="eventPicture" style="color: #201a50;">Event Picture:</label>
                    <input type="file" name="eventPicture" id="eventPicture" placeholder="Event Picture" onchange="readURL(this)">
                    <img id="preview" src="#" alt="Chosen Picture" style="display: none; width: 250px; margin-left: 10px;">
                </div>
                <div class="form-buttons">
                    <button type="submit" class="flex justify-center items-center bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-10 rounded-lg">Submit</button>
                    <button type="cancel" class="flex justify-center items-center danger-button font-bold py-2 px-10 rounded-lg">Cancel</button>
            </form>
        </div>
    </div>
            <!-- Lists of events -->
            @foreach($events as $event)
                <h1>{{$event->eventName}}</h1>
                <!-- UNCOMMENT IMAGE LINE PARA MAKITA NIMO IMONG HALAGA CHAR!!-->
                <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="">
            @endforeach
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script src="{{ asset('js/admin.js') }}"></script>

</body>
</html>