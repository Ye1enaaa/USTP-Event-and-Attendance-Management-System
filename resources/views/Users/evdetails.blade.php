
@extends('Extras.side-navbar')
@section('content')
<body>
<div class="header-container">
    <h1> {{ $event->eventName }} </h1>
    <a class="back-button" href="http://127.0.0.1:8000/student"><ion-icon name="close-circle"></ion-icon></a>
</div>
<div class="container">    
<!-- <div class="details-container"> -->
<div class="details-container @if($isAttending) attended @elseif(strtotime($event->eventDate . ' ' . $event->eventTime) < strtotime('now')) missed @else upcoming @endif">
        <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">

        <p class="event-details"> 
            <ion-icon name="location"></ion-icon> 
            {{ $event->eventPlace }}
        </p>
        <p class="event-details">
            <ion-icon name="time"></ion-icon>
            {{ date('g:i A', strtotime($event->eventTime)) }},  {{ date('F j, Y', strtotime($event->eventDate)) }}
        </p>
        <!-- <p class="event-details">
            <ion-icon name="calendar-outline"></ion-icon>
            {{ date('F j, Y', strtotime($event->eventDate)) }}
        </p>    -->

        @if($isAttending) 
            <p class="attendance-label"> — ATTENDED — </p>
        @elseif(strtotime($event->eventDate . ' ' . $event->eventTime) < strtotime('now'))
            <p class="attendance-label"> — MISSED — </p>
        @elseif(strtotime($event->eventDate . ' ' . $event->eventTime) > strtotime('now'))
            <p class="attendance-label"> — UPCOMING — </p>
        @endif
    </div>
    <div class="description-container">
    <h3> About the Event </h3>
    <p>{{ $event->eventDesc }}</p>
  </div>
</div>
</body>

@endsection
