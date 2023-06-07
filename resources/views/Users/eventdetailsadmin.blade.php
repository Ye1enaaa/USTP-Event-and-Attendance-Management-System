
@extends('Extras.side-navbaradmin')
@section('content-admin')
<body>
 <div class="flex ml-6">
    <h1>EVENT ATTENDANCE</h1>

 </div>   

<div class="details-container">
    <div class="details-container @if($isAttending) attended @else missed @endif">
        <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">

        <h3 class="event-name">{{ $event->eventName }}</h3>


        <button class="event-details flex items-center text-gray-500">
        <ion-icon name="location-outline" class="mr-1"></ion-icon>
        <span>plus 20 going</span>
        </button>

        <p class="event-details"> <ion-icon name="location-outline"></ion-icon> Place: {{ $event->eventPlace }}</p>
        <p class="event-details"> <ion-icon name="time-outline"></ion-icon> Time: {{ $event->eventTime }}</p>
        <p class="event-details"> <ion-icon name="calendar-outline"></ion-icon> Date: {{ $event->eventDate }}</p>


    </div>
</div>



<div class="flex justify-center items-center h-screen">
  <h3 class="text-center event-name">About the event</h3>
</div>

<div class="flex justify-center items-center h-screen">
  <h3 class="text-center event-name">Hosted by</h3>
</div>


</body>


@endsection
