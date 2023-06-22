<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Account</title>
 
</head>

  <!-- <link rel="stylesheet" href="{{ asset('css/profile.css') }}"> -->


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
        <span class="text-black-50">sample@mail.com.my</span>
      </div>
    </div>


        <div class="col-md-9">
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
                <label for="username" class="control-label">Username</label>
                <input type="text" class="form-control" name="username" value="">
              </div>
            </div>

              <div class="form-group clearfix">
                <button type="submit" name="update" class="btn btn-info">Update Profile</button>
              </div>
          </div>
        </div>
</div>





 <script>
      function performSearch() {
        var searchInput = document.getElementById('search-input');
        var searchText = searchInput.value.toLowerCase();
      
        var eventNames = document.getElementsByClassName('event-name');
      
        for (var i = 0; i < eventNames.length; i++) {
          var eventName = eventNames[i].innerText.toLowerCase();
      
          if (eventName.includes(searchText)) {
            eventNames[i].parentNode.style.display = 'block';
          } else {
            eventNames[i].parentNode.style.display = 'none';
          }
        }
      }
      </script>

<script>
  document.getElementById("imageInput").addEventListener("change", function(event) {
    var selectedFile = event.target.files[0];

    if (selectedFile) {
      var reader = new FileReader();
      reader.onload = function(event) {
        var profileImage = document.getElementById("profileImage");
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