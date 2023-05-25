<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <title> ADMIN </title>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


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

  <div class="content">
    <div class="top-navbar">
      
      <div class="bx bx-menu" id="menu-icon"></div>
      <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button><i class="bx bx-search"></i></button>
      </div>
      <div class="profile">
        <img src="{{ asset('storage/' . Auth::user()->picture) }}" class="profile-picture">
        <span class="name">{{ Auth::user()->name }}</span>
      </div>
      
    </div>

  </div>

<div class="dashboard-container">
    <aside class="side-navbar">
      <ul class="nav-list">
        <li>
          <a>
            <span class="icon"><ion-icon name="cube-outline"></ion-icon></i></span>
            <span class="text"><h2> USTP-EVENT </h2></span>
          </a>
          <li>
            <a class="side-link <?php if(basename($_SERVER['PHP_SELF']) == "index.php") echo "active"; ?>" href="sample.php">
              <span class="icon"> <ion-icon name="clipboard-outline"></ion-icon> </span>
              <span class="text">UPCOMING EVENTS</span>
            </a>
              <span class="tooltip"> UPCOMING EVENTS </span>
          </li>
          <li>
            <a class="side-link <?php if(basename($_SERVER['PHP_SELF']) == "transaction_log.php") echo "active"; ?>" href="sample.php">
              <span class="icon"> <ion-icon name="checkmark-done-outline"></ion-icon> </span>
              <span class="text">EVENT DETAILS</span>
            </a>
              <span class="tooltip"> EVENT DETAILS </span>
          </li>
       
      </ul>
    </aside>
  </div>

<div class="content-admin">
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
  

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
  <script src="{{ asset('js/side-navbar.js') }}"></script>

  
</body>
</html>