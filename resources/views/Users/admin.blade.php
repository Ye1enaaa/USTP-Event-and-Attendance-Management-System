<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div>{{ Auth::user()->email}}</div><br><br><!--Name of account-->
    <form action="{{route('user.logout')}}" method="post">
        @csrf
        <!--This is for log out-->
    </form><br><br>
    <div>
        <!--form for adding event-->
        <form action="{{route('add.event')}}" method="post">
            @csrf
            <input type="text" name="eventName" id="">
            <input type="date" name="eventDate" id="">
            <input type="text" name="eventPlace" id="">
            <input type="text" name="eventDesc" id="">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
    <div>
        <!--lists of events-->
        @foreach($events as $event)
            <h1>{{$event->eventName}}</h1>
        @endforeach
    </div>
</body>
</html>