
@extends('Extras.side-navbar')
@section('content')
<body>
<h1>EVENT ATTENDANCE</h1>
<div class="details-container">
    <div class="details-container @if($isAttending) attended @else missed @endif">
        <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">

        <h3 class="event-name">{{ $event->eventName }}</h3>
        <p class="event-details"> <ion-icon name="location-outline"></ion-icon> Place: {{ $event->eventPlace }}</p>
        <p class="event-details"> <ion-icon name="time-outline"></ion-icon> Time: {{ $event->eventTime }}</p>
        <p class="event-details"> <ion-icon name="calendar-outline"></ion-icon> Date: {{ $event->eventDate }}</p>

        @if($isAttending)
        <p class="attendance-label"> — ATTENDED — </p>
        @else
        <p class="attendance-label"> — MISSED — </p>
        @endif
    </div>
</div>
</body>


@endsection
