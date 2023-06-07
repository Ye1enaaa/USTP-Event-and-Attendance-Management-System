<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Account</title>
 
</head>

  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">


</head>
<body>
    <div id="top-navbar" class="top-navbar">
      <div class="bx bx-menu" id="menu-icon"></div>
        <div class="search-bar">
          <input type="text" id="search-input" placeholder="Search..." oninput="performSearch()" 
          {{ Request::is('users/event/details/*') ? 'disabled' : '' }}>
          <button {{ Request::is('users/event/details/*') ? 'disabled' : '' }}><i class="bx bx-search"></i></button>
        </div>

        <div class="user-dropdown">
          <div class="profile-container" style="padding: 5px;">
            <img src="{{ asset('storage/' . Auth::user()->picture) }}" class="profile-picture">
            <span class="name" style="color: #FFFFFF;">{{ Auth::user()->name }}</span>&nbsp;<i class="caret"></i>
          </div>
          <ul class="dropdown-menu" style="padding: 10px; border: 2px solid #211a51; border-radius: 5px;">

          <li>
            <a href="#profile" onclick="showEditProfile()">
              <span class="fas fa-user" style="color: #211a51;"></ion-icon></span>
              <span class="text">Profile</span>
            </a>
          </li> 


            <!-- <li style="margin-bottom: 2px;"><a href="#" id="profileButton"><i class="fas fa-user" style="color: #211a51;"></i> Profile</a></li> -->


            <li style="margin-bottom: 2px;"><a href="#" onclick="handleSettingsClick();"><i class="fas fa-cog" style="color: #211a51;"></i> Settings</a></li>
            <li><a href="#" onclick="handleLogoutClick();"><i class="fas fa-sign-out-alt" style="color: #211a51;"></i> Logout</a></li>
          </ul>
        </div>
      </div>

<br><br><br>
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-heading clearfix">
              <span class="glyphicon glyphicon-camera"></span>
              <span>PROFILE</span>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4">
                <img class="img-circle img-size-2  " src="" alt="" id="profileImage">
              </div>
              <div class="col-md-8">
                <form class="form" action="#" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="file" name="file_upload" multiple="multiple" class="btn btn-default btn-file" id="imageInput" />
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-warning">Change</button>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <span class="glyphicon glyphicon-edit"></span>
            <span>EDIT MY ACCOUNT</span>
          </div>
          <div class="panel-body">
            <form method="post" action="#" class="clearfix">
              <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <input type="name" class="form-control" name="name" value="">
              </div>
              <div class="form-group">
                <label for="username" class="control-label">Username</label>
                <input type="text" class="form-control" name="username" value="">
              </div>
              <div class="form-group clearfix">
                <button type="submit" name="update" class="btn btn-info">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script>
    document.getElementById("imageInput").addEventListener("change", function(event) {
      var selectedFile = event.target.files[0];

      if (selectedFile) {
        var reader = new FileReader();
        reader.onload = function(event) {
          var profileImage = document.querySelector("#profileImage");
          profileImage.src = event.target.result;
        };
        reader.readAsDataURL(selectedFile);
      }
    });
  </script>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script src="{{ asset('js/admin.js') }}"></script>


 <script src="{{ asset('js/side-navbar-admin.js') }}"></script>
</body>

</html>