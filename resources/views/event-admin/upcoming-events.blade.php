<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/side-navbar-admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/events-admin.css') }}">
  
    
  <title> USTP-CDO-EVENT </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <style>
        .hoverable {
            width: 200px;
            height: 200px;
            background-color: blue;
        }
    </style>

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
    </div>


    <div class="maineventcontainer">
    @foreach($upcomingEvents as $event)
    <a href="/admin/event/details/{{$event->id}}" class="event-link">
        <div class="eventcontainer">
            <div class="imagecontainer">
                <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="eventpicture">
            </div>
            <h3>{{$event->eventName}}</h3>
                <p class="event-details"> <ion-icon name="location-outline"></ion-icon> Place: {{ $event->eventPlace }}</p>
                <p class="event-details"> <ion-icon name="time-outline"></ion-icon> Time: {{ $event->eventTime }}</p>
                <p class="event-details"> <ion-icon name="calendar-outline"></ion-icon> Date: {{ $event->eventDate }}</p>
        </div>
    </a>
    @endforeach
    </div>

    <br><br><br>
    <!-- <div class="maineventdetails_container">
    <div class="eventdetails_container">
        <div class="eventtitle_container">
            <h2> {{$event->eventName}} <i class="far fa-edit" id="editbutton" onmouseover="this.style.color='#fdc718'" 
            onmouseout="this.style.color='black'"></i></h2>
          
        </div> -->

        

        <!-- <div class="maincontent_container">
            <div class="leftside_content">
                <div class="image_container">
                    <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="imagecontent">
                </div>
                <div class="userprofilescontainer">
                    <div class="user_profiles" id="user1">user1</div>
                    <div class="user_profiles" id="user2">user2</div>
                    <div class="user_profiles" id="user3">user3</div>
                    <div class="numberofusers">+20 Going</div>
                </div>
                <div class="locationandtime_container">
                    <p class="event-details"> <ion-icon name="location-outline" style="font-weight: bold;"></ion-icon> Place: {{ $event->eventPlace }}</p>
                    <p class="event-details"> <ion-icon name="calendar-outline"></ion-icon> Date: {{ $event->eventDate }}</p>
                </div>     
            </div>

            <div class="rightside_content">
                <div class="eventdiscription_container">
                    <div class="eventdiscription">
                        <h3>About the event</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero id dicta dolore, harum rerum quaerat pariatur numquam perferendis similique doloribus enim quibusdam aliquam minus, labore illum accusamus laborum dignissimos dolorum reprehenderit cum reiciendis iure amet aperiam omnis. Illo error obcaecati incidunt, totam ut architecto quibusdam ipsa dolorum explicabo accusantium quia qui illum cupiditate atque libero sunt repellat repellendus facere porro autem molestiae. Ducimus a cumque fuga iste nam fugiat nesciunt blanditiis nihil, asperiores, quo, perferendis consequatur animi suscipit iusto atque autem tenetur similique sapiente aliquid modi! Ex soluta omnis optio perspiciatis exercitationem dicta suscipit eos quaerat. Porro illum error dignissimos.</p>
                    </div>
                </div>
                <div class="abouthost_container">
                    <div class="abouthost">
                        <h4>Hosted by</h4>
                        <p>asdfsadfsadf</p>
                    </div>
                </div>
            </div>

        </div> -->
        

    </div>
</div>

</body>
</html>
