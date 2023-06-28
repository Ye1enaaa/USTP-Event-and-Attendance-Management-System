<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Profile</title>
      <!-- Add your CSS and other script links here -->
      <link rel="stylesheet" href="admin.css">
      <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
      <link rel="stylesheet" href="{{ asset('css/side-navbar-admin.css') }}">

   </head>
   @extends('Extras.side-navbaradmin')
   @section('content-admin')
   
   <div style="padding-left: 20px;">
      <h1>PROFILE INFORMATION</h1>
   </div>

   <div class="container">
      <div class="profile-settings-box">
         <form action="/edit-profile/{{Auth::user()->id}}" method="post">
            @csrf
            @method('PATCH')

               <h4>Profile Settings</h4>
               <div class="profile-picture-container">
                  <input type="file" id="imageInput">
                  <label for="imageInput">
                     @if(Auth::user()->picture)
                     <div class="relative p-4">
                        <img id="profileImage" src="http://127.0.0.1:8000/storage/{{Auth::user()->picture}}" class="w-2 h-2 rounded-circle text-center" style="width: 10rem !important; height: 10rem !important;">
                        <span class="text-white">{{ Auth::user()->name }}</span>&nbsp;<i class="caret"></i>
                     </div>
                     @elseif(Auth::user()->picture == null)
                     <div class="profile_container">
                        <img id="profileImage" src="{{asset('logo-logo.png')}}" class="rounded-circle" style="width: 8rem !important; height: 8rem !important;">
                        <!-- <span class="text-white">{{ Auth::user()->name }}</span>&nbsp;<i class="caret"></i> -->
                     </div>
                     @endif
                     <span class="font-weight-bold">ADMIN</span> <br>
                     <span class="text-black-50">{{Auth::user()->name}}</span>
                  </label>
               </div>

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

   <script src="{{ asset('js/admin.js') }}"></script>
   <script src="{{ asset('js/side-navbar-admin.js') }}"></script>


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
   @endsection
