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

<br><br> <br>

<div class="content-admin-dashboard">
    <div id="dashboard" class="container" style="display: none;">
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
        </div>
    </div>
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
  
  <script src="{{ asset('js/side-navbar-admin.js') }}">
  </script>


  @endsection
</body>
</html>
