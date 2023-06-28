<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Upcoming events</title>
      <!-- Add your CSS and other script links here -->
      <link rel="stylesheet" href="admin.css">
      <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
      <link rel="stylesheet" href="{{ asset('css/side-navbar-admin.css') }}">
      <link rel="stylesheet" href="{{ asset('css/events-admin.css') }}">
   </head>
   @extends('Extras.side-navbaradmin')
   @section('content-admin')
   <div style="padding-left: 20px;">
      <h1>UPCOMING EVENTS</h1>
   </div>
   <div class="event-name">
      <div class="maineventcontainer">
         @foreach($upcomingEvents as $event)
         <div class="eventcontainer">
            <a href="/admin/event/details/{{$event->id}}" class="event-link">
               <div class="imagecontainer">
                  <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="eventpicture">
               </div>
               <h3>{{$event->eventName}}</h3>
               <p class="event-details">
                  <ion-icon name="location-outline"></ion-icon>
                  Place: {{ $event->eventPlace }}
               </p>
               <p class="event-details">
                  <ion-icon name="time-outline"></ion-icon>
                  Time: {{ $event->eventTime }}
               </p>
               <p class="event-details">
                  <ion-icon name="calendar-outline"></ion-icon>
                  Date: {{ $event->eventDate }}
               </p>
            </a>
            <div class="delete-event">
               <form action="/admin/event/delete/{{$event->id}}" method="POST">
                  @csrf
                  @method('DELETE')
               </form>
               <button type="button" class="delete-button btn btn-danger btn-md" onclick="deleteEvent({{$event->id}})">
               <i class="fas fa-trash"></i>
               </button>
            </div>
         </div>
         @endforeach
      </div>
      <br><br><br>
   </div>
   </div>
   </div>
   <script src="{{ asset('js/side-navbar-admin.js') }}"></script>
   <script src="{{ asset('js/admin.js') }}"></script>


   <script>
      function deleteEvent(eventId) {
         if (confirm("Are you sure you want to delete this event?")) {
            // Send a DELETE request to the server using AJAX
            fetch(`/delete/${eventId}`, {
               method: 'DELETE',
               headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
               }
            })
            .then(response => response.json())
            .then(data => {
               if (data.success) {
                  // Handle successful deletion, e.g., remove the event container from the DOM
                  const eventContainer = document.getElementById(`event-${eventId}`);
                  eventContainer.remove();
                  console.log(data.success);
               } else {
                  console.error(data.error);
               }
            })
            .catch(error => {
               console.error(error);
            });
         }
      }
   </script>
   @endsection