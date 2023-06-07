<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/side-navbar-admin.css') }}">
  <!--upcoming events css-->
  <link rel="stylesheet" href="events-admin.css">
    
  <title> USTP-CDO-EVENT </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>
<body>

    <div class="top-navbar">
        <div class="bx bx-menu" id="menu-icon"></div>

            <div class="search-bar">
                <input type="text" id="search-input" placeholder="Search..." oninput="performSearch()" 
                {{ Request::is('users/event/details/*') ? 'disabled' : '' }}>
                <button {{ Request::is('users/event/details/*') ? 'disabled' : '' }}><i class="bx bx-search"></i></button>
            </div>

            <div class="user-dropdown">
                <div class="profile-container" style="padding: 5px;">
                    <img src="{{ asset('storage/' . Auth::user()->picture) }}" class="profile-picture">
                    <span class="name" style="color: #FFFFFF;">{{ Auth::user()->name }}</span>&nbsp;<i class="caret"></i>
                </div>

                <ul class="dropdown-menu" style="padding: 10px; border: 2px solid #211a51; border-radius: 5px;">
                    <li style="margin-bottom: 2px;"><a href="#" id="profileButton"><i class="fas fa-user" style="color: #211a51;"></i> Profile</a></li>
                    <li style="margin-bottom: 2px;"><a href="#" onclick="handleSettingsClick();"><i class="fas fa-cog" style="color: #211a51;"></i> Settings</a></li>
                    <li><a href="#" onclick="handleLogoutClick();"><i class="fas fa-sign-out-alt" style="color: #211a51;"></i> Logout</a></li>
                </ul>
            </div>
        </div>

        <br><br>
<<<<<<< HEAD




<div class="ml-6 pl-4 ">
    @foreach($upcomingEvents as $event)
    <button class="clickevent bg-white mb-100 mt-2 border border-yellow-300">
        <div class="main-container hover:opacity-80">
            <div class="image-container w-100">
                <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="An Image Appeared Here" class="event-picture">
            </div>
            <div class="eventdetails-container">
                <h3>{{$event->eventName}}</h3>
                <p class="event-details"> <ion-icon name="location-outline"></ion-icon> Place: {{ $event->eventPlace }}</p>
                <p class="event-details"> <ion-icon name="time-outline"></ion-icon> Time: {{ $event->eventTime }}</p>
                <p class="event-details"> <ion-icon name="calendar-outline"></ion-icon> Date: {{ $event->eventDate }}</p>
            </div>
=======
    
        <div class="ml-6">
            @foreach($upcomingEvents as $event)
            <h1>{{$event->eventName}}</h1>
            <p class="event-details"> <ion-icon name="location-outline"></ion-icon> Place: {{ $event->eventPlace }}</p>
        <p class="event-details"> <ion-icon name="time-outline"></ion-icon> Time: {{ $event->eventTime }}</p>
        <p class="event-details"> <ion-icon name="calendar-outline"></ion-icon> Date: {{ $event->eventDate }}</p>
            @endforeach

                    

>>>>>>> 9a0abee139c5f9ec5203138a549bbc418818973b
        </div>
    </button>
    @endforeach
</div>


</div>


        

</body>
</html>
