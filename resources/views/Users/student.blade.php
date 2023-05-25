
@extends('Extras.side-navbar')


@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">

</head>
<body>
    <div>
        {{Auth::user()->email}}
        {{Auth::user()->picture}}
        @foreach($events as $event)
            <h3>{{$event->eventName}}</h3>
        @endforeach


    </div>
    
</body>
</html> --}}

<!-- component -->

@extends('Extras.side-navbar')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
</head>
<body>
    <h1>Upcoming Events</h1>

    <div class="container">
        @foreach($events as $event)
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

    <h1>Todays Events</h1>
    <div class="container">
        @foreach($events as $event)
            @if($event->eventDate === date('Y-m-d'))
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
            @endif
        @endforeach
    </div>
</body>
@endsection

