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

@extends('Extras.side-navbar')

@section('content')

<div class="rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <input type="file" id="imageInput" style="display: none;">
                <label for="imageInput">
                    <div class="position-relative">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <i class="fas fa-camera position-absolute" style="right: -10px; bottom: -10px;"></i>
                    </div>
                </label>
                <span class="font-weight-bold">ADMIN</span>
                <span class="text-black-50">sample@mail.com.my</span>
            </div>
        </div>


        <div class="col-md-9">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-left">Profile Settings</h4>
                </div>
                
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Surname</label>
                        <input type="text" class="form-control" value="" placeholder="surname">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="enter phone number" value="">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="content-admin">
    <div class="menu">

    <h2 style="color: #201a50;"><i class="far fa-edit" style="color: #fdc718;"></i> CREATE EVENT</h2>

        <div class="form-container">
          
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
        <div class="container">
          @foreach($events as $event)
              {{-- @if(strtotime($event->eventDate) > strtotime(date('Y-m-d'))) --}}
              <div class="child">
                  <a href="#{{$event->id}}" class="clickable-container">
                      <div class="event-container">
                          <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">
                          <h3 class="event-name">{{$event->eventName}}</h3>
                          <p class="event-details">Place: {{$event->eventPlace}}</p>
                          <p class="event-details">Time: {{$event->eventTime}}</p>
                          <p class="event-details">Date: {{$event->eventDate}}</p>
                      </div>
                  </a>
              </div>
              
          @endforeach
      </div> <br>

    </div>
    <script>
      function performSearch() {
        var searchInput = document.getElementById('search-input');
        var searchText = searchInput.value.toLowerCase();
      
        var eventNames = document.getElementsByClassName('event-name');
      
        for (var i = 0; i < eventNames.length; i++) {
          var eventName = eventNames[i].innerText.toLowerCase();
      
          if (eventName.includes(searchText)) {
            eventNames[i].parentNode.style.display = 'block';
          } else {
            eventNames[i].parentNode.style.display = 'none';
          }
        }
      }
      </script>


      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script src="{{ asset('js/admin.js') }}"></script>

  

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
  <script src="{{ asset('js/side-navbar.js') }}">
  </script>


  @endsection
</body>
</html>
