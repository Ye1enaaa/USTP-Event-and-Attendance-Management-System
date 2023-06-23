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
      <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
   </head>
   @extends('Extras.side-navbaradmin')
   @section('content-admin')

<div style="padding-left: 20px;">
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
               <p class="event-details">
                  <ion-icon name="location-outline" style="font-weight: bold;"></ion-icon>
                  Place: {{ $event->eventPlace }}
               </p>
               <p class="event-details">
                  <ion-icon name="calendar-outline"></ion-icon>
                  Date: {{ $event->eventDate }}
               </p>
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
                  <h4>Teacher Facilitator</h4>
                  <p>Senora Josephine Taban-ud</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection