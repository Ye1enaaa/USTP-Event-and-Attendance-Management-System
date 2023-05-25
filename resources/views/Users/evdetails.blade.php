
@extends('Extras.side-navbar')
@section('content')
<body>
    <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">

    <h3 class="event-name">{{ $event->eventName }}</h3>
    <p class="event-details">Place: {{ $event->eventPlace }}</p>
    <p class="event-details">Time: {{ $event->eventTime }}</p>
    <p class="event-details">Date: {{ $event->eventDate }}</p>

    @if($isAttending)
    <p>Attended.</p>
    @else
    <p>Missed.</p>
    @endif
</body>


@endsection
