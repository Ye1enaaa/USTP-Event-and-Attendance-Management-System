
@extends('Extras.side-navbaradmin')
@section('content-admin')
<body>
 <div class="flex ml-6">
    <h1>EVENT ATTENDANCE</h1>

 </div>
 <div class="eventdetails_container">
        <div class="eventtitle_container">
            <h2> {{$event->eventName}} <i class="far fa-edit" id="editbutton" onmouseover="this.style.color='#fdc718'" onmouseout="this.style.color='black'"></i></h2>
          
        </div>

        <div class="maincontent_container">
            <div class="leftside_content">
                <div class="image_container">
                    <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="picture" class="imagecontent">
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
                        <p>{{$event->eventDesc}}</p>
                    </div>
                </div>
                <div class="abouthost_container">
                    <div class="abouthost">
                        <h4>Hosted by</h4>
                        <p>asdfsadfsadf</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>


@endsection
