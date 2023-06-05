<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/student.css') }}">
  <link rel="stylesheet" href="{{ asset('css/side-navbar.css') }}">
  
  <title> USTP-CDO-EVENT </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body>
  <div class="dashboard-container">
    <aside class="side-navbar">
      <ul class="nav-list">
        <li>
          <a>
            <span class="icon"><ion-icon name="cube-outline"></ion-icon></i></span>
            <span class="text"><h2> USTP-EVENT </h2></span>
          </a>
          <li>
          <a class="side-link <?php if(basename($_SERVER['PHP_SELF']) == "student") echo "active"; ?>" href="student">
              <span class="icon"> <ion-icon name="clipboard-outline"></ion-icon> </span>
              <span class="text"> UPCOMING EVENTS </span>
            </a>
          </li>
          <li>
            <a class="side-link <?php if(basename($_SERVER['PHP_SELF']) == "admin") echo "active"; ?>" href="admin">
              <span class="icon"> <ion-icon name="checkmark-done-outline"></ion-icon> </span>
              <span class="text"> EVENT DETAILS </span>
            </a>
          </li>
      </ul>
    </aside>
  </div>

  <div class="content">
    <div class="top-navbar">
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
              <li style="margin-bottom: 2px;"><a href="#" onclick="handleProfileClick();"><i class="fas fa-user" style="color: #211a51;"></i> Profile</a></li>
              <li style="margin-bottom: 2px;"><a href="#" onclick="handleSettingsClick();"><i class="fas fa-cog" style="color: #211a51;"></i> Settings</a></li>
              <li><a href="#" onclick="handleLogoutClick();"><i class="fas fa-sign-out-alt" style="color: #211a51;"></i> Logout</a></li>
            </ul>
        </div>
      </div>
    <div>
      @yield('content-admin')
    </div>
  </div>
  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="{{ asset('js/side-navbar.js') }}"></script>

  <script>
    let menu = document.querySelector('#menu-icon');
    let sidenavbar = document.querySelector('.side-navbar');
    let content = document.querySelector('.content');

    menu.onclick = () => {
      sidenavbar.classList.toggle('active');
      content.classList.toggle('active');
    }

    function menuBtnChange() {
      if(sidebar.classList.contains("active")){
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
      }
    }
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
    var dropdown = document.querySelector(".user-dropdown");
    var dropdownMenu = document.querySelector(".dropdown-menu");

    dropdown.addEventListener("click", function () {
      dropdown.classList.toggle("show");
    });

    document.addEventListener("click", function (event) {
      if (!dropdown.contains(event.target)) {
        dropdown.classList.remove("show");
      }
    });
    });
  </script>

</body>
</html>