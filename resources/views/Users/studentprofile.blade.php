@extends('Extras.side-navbar')

@section('content')
<body>
    
    <?php echo "studentprofile ni"?>
    <h1>Welcome, {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p><img src="{{ asset('storage/' . Auth::user()->picture) }}" class="profile-picture"></p>
    <p>Student ID: {{ $user->studentId }}</p>
    <p>Department: {{ $user->department }}</p>
    <p>Year/Section: {{ $user->year_section }}</p>

</body>

@endsection
