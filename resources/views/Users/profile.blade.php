<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Upcoming events</title>
      <!-- Add your CSS and other script links here -->
      <link rel="stylesheet" href="admin.css">
      <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
      <link rel="stylesheet" href="{{ asset('css/side-navbar-admin.css') }}">
      <link rel="stylesheet" href="{{ asset('css/events-admin.css') }}">
   </head>
   @extends('Extras.side-navbaradmin')
   @section('content-admin')

   <div style="padding-left: 20px;">
      <h1>PROFILE INFORMATION</h1>
   </div>
   <div class="rounded bg-gray mt-5 mb-5">
   <div class="row">
      <div class="col-md-3">
         <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <input type="file" id="imageInput" style="display: none;">
            <label for="imageInput">
               <div class="position-relative">
                  <img class="rounded-circle mt-5" width="150px" id="profileImage" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                  <i class="fas fa-camera position-absolute" style="right: -10px; bottom: -10px;"></i>
               </div>
            </label>
            <span class="font-weight-bold">ADMIN</span>
            <span class="text-black-50">{{Auth::user()->name}}</span>
         </div>
      </div>
      <div class="col-md-9">
         <form action="/edit-profile/{{Auth::user()->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
               <h4 class="text-left">Profile Settings</h4>
            </div>
            <div class="row mt-2 ml-6">
               <div class="form-group">
                  <label for="name" class="control-label">Name</label>
                  <input type="name" class="form-control" name="name" value="">
               </div>
               <div class="form-group">
                  <label for="username" class="control-label">Password</label>
                  <input type="password" class="form-control" name="password" value="">
               </div>
            </div>
            <div class="form-group clearfix">
               <button type="submit" name="update" class="btn btn-info">Update Profile</button>
            </div>
         </div>
         </form>
      </div>
   </div>
   <script src="{{ asset('js/admin.js') }}"></script>
   <script src="{{ asset('js/side-navbar-admin.js') }}"></script>
   @endsection