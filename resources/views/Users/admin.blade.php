<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <title> ADMIN </title>
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-jqWO+TM9G3s6jSLM9vP8cMhiUm99DLlVAlxio51S9uYqEdOhxmMLjF18Ypvbqk8L9VfsN5kZKLJ0efoNu4gIhQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Yq9K2oX/e1TrST5yJthLBmR2qzMNuy2OqPBBQzKCPNI1PbcRLacKQYUKa1vWJ8WhR+JiSjXvL8yvSTQ8R1yOWg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<!-- kaning extends og section kay mao ni ang sidebar og topbar -->
@extends('Extras.side-navbaradmin')

@section('content-admin')


<br><br> <br>


<div class="content-createevent-admin">
    <div class="menu">

    <h2 style="color: #201a50;"><i class="far fa-edit" style="color: #fdc718;"></i> CREATE EVENT</h2>

        <div class="form-container">
          
            <form action="{{route('add.event')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="eventName" id="" placeholder="Event Name">
                <input type="date" name="eventDate" id="" placeholder="Event Date">
                <input type="time" name="eventTime" id="" placeholder="Event Time">
                <input type="text" name="eventPlace" id="" placeholder="Event Place">
                <input type="text" name="eventDesc" id="" placeholder="Event Description">
                <div>
                    <input type="file" name="eventPicture" id="" placeholder="Event Picture" onchange="readURL(this)">
                    <img id="preview" src="#" alt="Chosen Picture" style="display: none; width: 200px; margin-left: 10px;">
                </div>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script src="{{ asset('js/admin.js') }}"></script>


 <script src="{{ asset('js/side-navbar-admin.js') }}"></script>


  @endsection
</body>
</html>
