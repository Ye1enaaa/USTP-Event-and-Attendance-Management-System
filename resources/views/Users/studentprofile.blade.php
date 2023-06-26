@extends('Extras.side-navbar')

@section('content')
<body>

    <div class="profile-container">
        <div class="profile-picture-container">
          <img src="{{ asset('storage/' . Auth::user()->picture) }}" class="student-profile-picture">
        </div>
        <div class="profile-details">
          <h1>Welcome, {{ $user->name }}</h1>
          <p>Email: {{ $user->email }}</p>
          <p>Student ID: {{ $user->studentId }}</p>
          <p>Department: {{ $user->department }}</p>
          <p>Year/Section: {{ $user->year_section }}</p>
        </div>
      </div>
      
</body>

@endsection
