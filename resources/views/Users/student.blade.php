@extends('Extras.side-navbar')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
</head>
<body>
    <h1>Upcoming Events</h1>

    <div class="container">
        @foreach($events as $event)
            @if(strtotime($event->eventDate) > strtotime(date('Y-m-d')))
            <div class="child">
                <a href="{{ route('event.details', ['id' => $event->id]) }}" class="clickable-container">
                    <div class="event-container">
                        <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">
                        <h3 class="event-name">{{$event->eventName}}</h3>
                        <p class="event-details">Place: {{$event->eventPlace}}</p>
                        <p class="event-details">Time: {{$event->eventTime}}</p>
                        <p class="event-details">Date: {{$event->eventDate}}</p>
                    </div>
                </a>
            </div>
            @endif
        @endforeach
    </div>
    

    <h1>Todays Events</h1>
    <div class="container">
        @foreach($events as $event)
            @if(strtotime($event->eventDate) === strtotime(date('Y-m-d')))
                <div class="child">
                    <a href="{{ route('event.details', ['id' => $event->id]) }}" class="clickable-container">
                        <div class="event-container">
                            <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">
                            <h3 class="event-name">{{$event->eventName}}</h3>
                            <p class="event-details">Place: {{$event->eventPlace}}</p>
                            <p class="event-details">Time: {{$event->eventTime}}</p>
                            <p class="event-details">Date: {{$event->eventDate}}</p>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

    
    <h1>Ended Events</h1>
    <div class="container">
        @foreach($events as $event)
                @if(strtotime($event->eventDate) < strtotime(date('Y-m-d')))
                <div class="child">
                    <a href="{{ route('event.details', ['id' => $event->id]) }}" class="clickable-container">
                        <div class="event-container">
                            <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">
                            <h3 class="event-name">{{$event->eventName}}</h3>
                            <p class="event-details">Place: {{$event->eventPlace}}</p>
                            <p class="event-details">Time: {{$event->eventTime}}</p>
                            <p class="event-details">Date: {{$event->eventDate}}</p>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</body>
@endsection

