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
<div class="container-wrapper">
    <div class="scroll-container">
        <div class="container" id="upcomingEventsContainer">
            @foreach($events as $event)
                @if(strtotime($event->eventDate) > strtotime(date('Y-m-d')))
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
                                    Date: {{ date('F j, Y', strtotime($event->eventDate)) }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="button-container" style="text-align: center;">
        <button class="previous" id="upcomingScrollLeftButton">&lt;</button>
        <button class="next" id="upcomingScrollRightButton">&gt;</button>
    </div>
</div>

    <br>
    <div class="divider"></div> 
    <br>

    <h1>TODAY'S EVENTS</h1>
    <div class="container-wrapper">
        <div class="scroll-container">
            <div class="container" id="todayEventsContainer">
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
                                        Date: {{ date('F j, Y', strtotime($event->eventDate)) }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="button-container" style="text-align: center;">
            <button class="previous" id="todayScrollLeftButton">&lt;</button>
            <button class="next" id="todayScrollRightButton">&gt;</button>
        </div>
    </div>
    <br>
    <div class="divider"></div>
    <br>

<h1>ENDED EVENTS</h1>
<div class="container-wrapper">
    <div class="scroll-container">
        <div class="container" id="endedEventsContainer">
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
                                    Date: {{ date('F j, Y', strtotime($event->eventDate)) }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="button-container" style="text-align: center;">
        <button class="previous" id="endedScrollLeftButton">&lt;</button>
        <button class="next" id="endedScrollRightButton">&gt;</button>
    </div>
    <br>
</div>
</body>

<script>
    // Wait for the document to load
    document.addEventListener('DOMContentLoaded', function() {
        var endedEventsContainer = document.getElementById('endedEventsContainer');
        var todayEventsContainer = document.getElementById('todayEventsContainer');
        var upComingEventsContainer = document.getElementById('upcomingEventsContainer');


        // Get the scroll distance for each scroll step
        var scrollStep = 200;

        // Function to scroll the container to the left
        function scrollLeftEnded() {
            endedEventsContainer.scrollBy({
                left: -scrollStep,
                behavior: 'smooth'
            });
        }

        // Function to scroll the container to the right
        function scrollRightEnded() {
            endedEventsContainer.scrollBy({
                left: scrollStep,
                behavior: 'smooth'
            });
        }
        function scrollLeftToday() {
            todayEventsContainer.scrollBy({
                left: -scrollStep,
                behavior: 'smooth'
            });
        }
        function scrollRightToday() {
            todayEventsContainer.scrollBy({
                left: scrollStep,
                behavior: 'smooth'
            });
        }
        function scrollLeftUpcoming() {
            upComingEventsContainer.scrollBy({
                left: -scrollStep,
                behavior: 'smooth'
            });
        }
        function scrollRightUpcoming() {
            upComingEventsContainer.scrollBy({
                left: scrollStep,
                behavior: 'smooth'
            });
        }

        // Add event listener to the left arrow button for Ended Events
        document.getElementById('endedScrollLeftButton').addEventListener('click', scrollLeftEnded);

        // Add event listener to the right arrow button for Ended Events
        document.getElementById('endedScrollRightButton').addEventListener('click', scrollRightEnded);

        // Add event listener to the left arrow button for Today's Events
        document.getElementById('todayScrollLeftButton').addEventListener('click', scrollLeftToday);

        // Add event listener to the right arrow button for Today's Events
        document.getElementById('todayScrollRightButton').addEventListener('click', scrollRightToday);
        // Add event listener to the right arrow button for Upcoming's Events

        document.getElementById('upcomingScrollLeftButton').addEventListener('click', scrollLeftUpcoming);

        // Add event listener to the right arrow button for Upcoming's Events
        document.getElementById('upcomingScrollRightButton').addEventListener('click', scrollRightUpcoming);
    });

</script>

@endsection
