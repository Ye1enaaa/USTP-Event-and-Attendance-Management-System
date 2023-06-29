@extends('Extras.side-navbar')

@section('content')
<body>
  <div class="card">
    <div class="student-profile-container">
    <div class="card-profile">
      <div class="profile-picture-container">
        <img src="{{ asset('storage/' . Auth::user()->picture) }}" class="student-profile-picture">
      </div>
      <h4>{{ $user->name }}</h4>
    </div>
    </div>
    <div class="profile-details">
    <h1>Student Information</h1>
    <br>
      <table>
        <!-- <tr>
          <th>Name</th>
          <td>{{ $user->name }}</td>
        </tr> -->
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
          <th>Year & Section</th>
          <td>{{ $user->year_section }}</td>
        </tr>
      </table>
    </div>
  </div> 

<div class="card">
  <div class="card-profile">
    <h5>EDIT PROFILE INFORMATION</h5>
      <form action="/edit-profile/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH') <br>
        <div class="edit-profile-container">
          <input type="file" id="imageInput" name="profile_picture">
            <label for="imageInput">
                @if(Auth::user()->picture)
                <div class="relative p-4">
                  <img id="profileImage" src="http://127.0.0.1:8000/storage/{{Auth::user()->picture}}" class="w-2 h-2 rounded-circle text-center" style="width: 15rem !important; height: 15rem !important;">
                  <!-- <span class="text-white">{{ Auth::user()->name }}</span>&nbsp;<i class="caret"></i> -->
                </div>
                @elseif(Auth::user()->picture == null)
                <div class="update-profile_container">
                  <img id="profileImage" src="{{asset('logo-logo.png')}}" class="rounded-circle" style="width: 8rem !important; height: 8rem !important;">
                  <!-- <span class="text-white">{{ Auth::user()->name }}</span>&nbsp;<i class="caret"></i> -->
                </div>
                @endif
            </label>
        </div>
            <h3>{{ $user->name }}</h3>
            <h3>STUDENT</h3>
        <br>
        <div class="edit-profile_form">
            <div class="form-group mb-3" style="margin-bottom: 1rem;">
              <label for="name" class="control-label">Name</label>
              <input type="name" class="form-control" name="name" value="">
            </div>
            <div class="form-group mb-3" style="margin-bottom: 1rem;">
              <label for="username" class="control-label">Password</label>
              <input type="password" class="form-control" name="password" value="">
            </div>
        </div>
        <div class="form-group text-center">
          <button type="submit" name="update" class="btn btn-info">Update Profile</button>
        </div>
    </form>
  </div>
</div>
  <script>
      document
      .getElementById("imageInput")
      .addEventListener("change", function (event) {
        var reader = new FileReader();
        reader.onload = function (e) {
          document.getElementById("profileImage").src = e.target.result;
        };
        reader.readAsDataURL(event.target.files[0]);
      });
  </script>
</body>
@endsection
