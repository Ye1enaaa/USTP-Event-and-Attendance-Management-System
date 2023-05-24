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
        <form action="{{route('add.event')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="eventName" id="">
            <input type="date" name="eventDate" id="">
            <input type="time" name="eventTime" id="">
            <input type="text" name="eventPlace" id="">
            <input type="text" name="eventDesc" id="">
            <input type="file" name="eventPicture" id="">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
    <div>
        <!--lists of events-->
        @foreach($events as $event)
            <h1>{{$event->eventName}}</h1>
            <!--UNCOMMENT IMAGE LINE PARA MAKITA NIMO IMONG HALAGA CHAR!!-->
            <img src="http://127.0.0.1:8000/storage/{{$event->eventPicture}}" alt="">
        @endforeach
    </div>
</body>
</html>