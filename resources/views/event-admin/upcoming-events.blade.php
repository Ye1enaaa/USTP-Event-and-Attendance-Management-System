<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
</head>
<body>
    @foreach($upcomingEvents as $event)
    <h1>{{$event->eventName}}</h1>
    @endforeach
</body>
</html>