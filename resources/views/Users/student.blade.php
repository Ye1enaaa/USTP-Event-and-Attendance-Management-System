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
@include('Extras.side-navbar')
