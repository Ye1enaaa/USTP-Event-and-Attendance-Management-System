@extends('Extras.side-navbar')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
</head>

<body>
    @php
    $user = Auth::user();
    @endphp

    <h1>UPCOMING EVENTS</h1>
    <div class="container">
        @foreach($events as $event)
            @if(strtotime($event->eventDate) > strtotime(date('Y-m-d')))
            <div class="child">
                <a href="{{ route('event.details', ['id' => $event->id,'studentId'=> $user->studentId]) }}" class="clickable-container">
                    <div class="event-container">
                        <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">
                        <h3 class="event-name">{{$event->eventName}}</h3>
                        <p class="event-details"> <ion-icon name="location-outline"></ion-icon> Place: {{$event->eventPlace}}</p>
                        <p class="event-details">
                            <ion-icon name="time-outline"></ion-icon>
                            Time: {{ date('g:i A', strtotime($event->eventTime)) }}
                        </p>
                        <p class="event-details">
                            <ion-icon name="time-outline"></ion-icon>
                            Time: {{ date('F j, Y', strtotime($event->eventDate)) }}
                        </p>                    
                    </div>
                </a>
            </div>
            @endif
        @endforeach
    </div>
    
    <div class="divider"></div> 

    <h1>TODAY'S EVENTS</h1>
    <div class="container">
        @foreach($events as $event)
            @if(strtotime($event->eventDate) === strtotime(date('Y-m-d')))
                <div class="child">
                    <a href="{{ route('event.details', ['id' => $event->id, 'studentId' => $user->studentId]) }}" class="clickable-container">
                        <div class="event-container">
                            <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">
                            <h3 class="event-name">{{$event->eventName}}</h3>
                            <p class="event-details"> <ion-icon name="location-outline"></ion-icon> Place: {{$event->eventPlace}}</p>
                            <p class="event-details">
                                <ion-icon name="time-outline"></ion-icon>
                                Time: {{ date('g:i A', strtotime($event->eventTime)) }}
                            </p>
                            <p class="event-details">
                                <ion-icon name="time-outline"></ion-icon>
                                Time: {{ date('F j, Y', strtotime($event->eventDate)) }}
                            </p>      
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

    <div class="divider"></div> 
    
    <h1>ENDED EVENTS</h1>
    <div class="container">
        @foreach($events as $event)
                @if(strtotime($event->eventDate) < strtotime(date('Y-m-d')))
                <div class="child">
                    <a href="{{ route('event.details', ['id' => $event->id, 'studentId' => $user->studentId]) }}" class="clickable-container">
                        <div class="event-container">
                            <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="" class="event-picture">
                            <h3 class="event-name">{{$event->eventName}}</h3>
                            <p class="event-details"> <ion-icon name="location-outline"></ion-icon> Place: {{$event->eventPlace}}</p>
                            <p class="event-details">
                                <ion-icon name="time-outline"></ion-icon>
                                Time: {{ date('g:i A', strtotime($event->eventTime)) }}
                            </p>

                            <p class="event-details">
                                <ion-icon name="time-outline"></ion-icon>
                                Time: {{ date('F j, Y', strtotime($event->eventDate)) }}
                            </p>      
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</body>
@endsection
