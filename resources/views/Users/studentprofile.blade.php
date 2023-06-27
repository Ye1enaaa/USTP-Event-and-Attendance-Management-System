@extends('Extras.side-navbar')

@section('content')
<body>
  <div class="profile-container">
    <div class="profile-picture-container">
      <img src="{{ asset('storage/' . Auth::user()->picture) }}" class="student-profile-picture">
      <h1>{{ $user->name }}</h1>
    </div>
    <div class="profile-details">
      <table>
        <tr>
          <th>Name</th>
          <td>{{ $user->name }}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{ $user->email }}</td>
        </tr>
        <tr>
          <th>Student ID</th>
          <td>{{ $user->studentId }}</td>
        </tr>
        <tr>
          <th>Department</th>
          <td>{{ $user->department }}</td>
        </tr>
        <tr>
          <th>Year/Section</th>
          <td>{{ $user->year_section }}</td>
        </tr>
      </table>
    </div>
  </div> 
</body>

@endsection
