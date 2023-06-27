<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN</title>
        <!-- Add your CSS and other script links here -->
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('css/events-admin.css') }}">


        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    @extends('Extras.side-navbaradmin')
    @section('content-admin')

    
    <div style="padding-left: 20px;">
        <h1>EVENT ATTENDANCE</h1>
    </div>
    <div class="eventdetails_container">
        <div class="eventtitle_container">
            <h2>
                <span class="editable" id="eventName">{{$event->eventName}}</span>
                <span class="edit_buttons">
                <i class="far fa-edit" id="editbutton" onmouseover="this.style.color='#fdc718'" onmouseout="this.style.color='black'" onclick="enableEditMode()"></i>
                <i class="far fa-save" id="savebutton" onmouseover="this.style.color='#fdc718'" onmouseout="this.style.color='black'" onclick="saveChanges({{$event->id}})" disabled></i>
                </span>
            </h2>
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
                    <div class="numberofusers" id="attendeeCount"onclick="openModal({{$event->id}})"></div>
                </div>
                <div class="modal" id="myModal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="modal-title">Attendees</span>
                            <span class="close" onclick="closeModal()">&times;</span>
                        </div>
                        <div id="modalText"></div>
                    </div>
                </div>
                <!-- End of NEW/WITH MODAL -->
                <div class="locationandtime_container">
                    <p class="event-details" id="eventPlace">
                        <ion-icon name="location-outline" style="font-weight: bold;"></ion-icon>
                        Place: {{ $event->eventPlace }}
                    </p>
                    <p class="event-details" id="eventDate" name="eventDate">
                        <ion-icon name="calendar-outline"></ion-icon>
                        Date: {{ $event->eventDate }}
                    </p>
                </div>
            </div>
            <div class="rightside_content">
                <div class="eventdiscription_container">
                    <div class="eventdiscription">
                        <h3>About the event</h3>
                        <p id="eventDesc">{{$event->eventDesc}}</p>
                    </div>
                </div>
                <div class="abouthost_container">
                    <div class="abouthost">
                        <h4>Teacher Facilitator</h4>
                        <p>Senora Josephine Taban-ud</p>
                    </div>
                </div>
            </div>
        </div>
        <p id="eventTime" name="eventTime" style="display: none;">{{$event->eventTime}}</p>

    </div>
    <script>
        function openModal(eventId) {
          var modal = document.getElementById("myModal");
          var modalText = document.getElementById("modalText");
          modal.style.display = "block";
          // modalText.innerHTML = "<div class='user-profile'><span class='profile-frame'><img src='https://www.bellanaija.com/wp-content/uploads/2023/05/98A4822F-9F38-4C59-BC15-A894E71CDF11.jpeg' class='profile-image' alt=''></span>user4</div><div class='user-profile'><span class='profile-frame'><img src='https://www.lilwaynehq.com/images/blog/metro-boomin-confirms-lil-wayne-offset-swae-lee-collaboration-spider-man-soundtrack.jpg' class='profile-image' alt=''></span>user5</div><div class='user-profile'><span class='profile-frame'><img src='https://variety.com/wp-content/uploads/2023/06/Untitled1.jpg' class='profile-image' alt=''></span>user6</div>";
          fetch('/api/adminevent/' + eventId)
          .then(response => response.json())
          .then(data => {
            var attendees = data.attendees;
            var attendeesHTML = attendees.map(attendee => {
              return `<div class='user-profile'>
                        <span class='profile-frame'>
                          <img src='${attendee.picture}' class='profile-image' alt=''>
                        </span>
                        ${attendee.name}
                      </div>`;
            }).join('');
        
            modalText.innerHTML = attendeesHTML;
          })
        }
        
        fetch('/api/adminevent/{{ $event->id }}')
        .then(response => response.json())
        .then(data => {
          var numberOfAttendees = data.numberofAttendees;
          var attendeeCountElement = document.getElementById("attendeeCount");
          attendeeCountElement.textContent = "+" + numberOfAttendees + " attended";
        })
        .catch(error => {
          console.error('Error:', error);
        });
        
        function closeModal() {
          var modal = document.getElementById("myModal");
          modal.style.display = "none";
        }
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>
        <script src="{{ asset('js/side-navbar-admin.js') }}"></script>

    @endsection