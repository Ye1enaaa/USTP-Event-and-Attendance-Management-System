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

            <!-- OLD/NO MODAL YET -->
            <!-- <div class="userprofilescontainer">
               <div class="user_profiles" id="user1">user1</div>
               <div class="user_profiles" id="user2">user2</div>
               <div class="user_profiles" id="user3">user3</div>
               <div class="numberofusers">+20 Going</div>
            </div> -->
            <!-- End of OLD/NO MODAL YET -->

            <!-- NEW/WITH MODAL -->
            <!-- CSS, HTML & JAVASCRIPT -->
  <style>
  .userprofilescontainer {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .numberofusers {
    cursor: pointer;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    margin-left: 30%;
  }

  @-webkit-keyframes animatetop {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
  }

  @keyframes animatetop {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
  }

  .modal-header {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }

  .modal-title {
    flex-grow: 1;
    font-weight: bold;
  }

  .close {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    margin-left: auto;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  /* New CSS */
  .profile-frame {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #ddd;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
  }

  .user-profile {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }

  .profile-image {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
  }
</style>

<div class="userprofilescontainer">
  <div class="user_profiles" id="user1">user1</div>
  <div class="user_profiles" id="user2">user2</div>
  <div class="user_profiles" id="user3">user3</div>
  <div class="numberofusers" onclick="openModal()">+20 Going</div>
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

<script>
  function openModal() {
    var modal = document.getElementById("myModal");
    var modalText = document.getElementById("modalText");
    modal.style.display = "block";
    modalText.innerHTML = "<div class='user-profile'><span class='profile-frame'><img src='https://www.bellanaija.com/wp-content/uploads/2023/05/98A4822F-9F38-4C59-BC15-A894E71CDF11.jpeg' class='profile-image' alt=''></span>user4</div><div class='user-profile'><span class='profile-frame'><img src='https://www.lilwaynehq.com/images/blog/metro-boomin-confirms-lil-wayne-offset-swae-lee-collaboration-spider-man-soundtrack.jpg' class='profile-image' alt=''></span>user5</div><div class='user-profile'><span class='profile-frame'><img src='https://variety.com/wp-content/uploads/2023/06/Untitled1.jpg' class='profile-image' alt=''></span>user6</div>";
  }

  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }
</script>

<!-- End of NEW/WITH MODAL -->

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