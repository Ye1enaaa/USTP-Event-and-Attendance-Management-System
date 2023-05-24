{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    {{Auth::user()->email}}
    {{Auth::user()->picture}}
    @foreach($events as $event)
        <h3>{{$event->eventName}}</h3>
    @endforeach
</body>
</html> --}}

<!-- component -->

@extends('Extras.side-navbar')

@section('content')
<style>
    html {
        scroll-behavior: smooth;
    }
    body {
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        overflow-x: auto;
        white-space: nowrap;
    }

    .child {
        flex: 0 0 auto;
        padding: 20px;
        box-sizing: border-box;
    }

    .clickable-container {
        display: block;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-decoration: none;
        color: #333;
    }

    .event-details {
        display: flex;
        align-items: center;
    }

    .event-picture {
  flex: 0 0 200px;
  margin-right: 10px;
  width: 200px; 
  height: 200px; 
  object-fit: cover; 
}

    }

    .event-info {
        flex: 1;
    }

    .event-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border: 1px solid #ccc;
        margin-bottom: 10px;
    }

    .event-name {
        margin-top: 10px;
    }

    .event-details {
        margin-top: 5px;
    }
</style>

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

