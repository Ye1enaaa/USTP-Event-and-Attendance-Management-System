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
            <a class="side-link <?php if(basename($_SERVER['PHP_SELF']) == "index.php") echo "active"; ?>" href="sample.php">
              <span class="icon"> <ion-icon name="clipboard-outline"></ion-icon> </span>
              <span class="text">UPCOMING EVENTS</span>
            </a>
              <span class="tooltip"> UPCOMING EVENTS </span>
          </li>
          <li>
            <a class="side-link <?php if(basename($_SERVER['PHP_SELF']) == "transaction_log.php") echo "active"; ?>" href="sample.php">
              <span class="icon"> <ion-icon name="checkmark-done-outline"></ion-icon> </span>
              <span class="text">EVENT DETAILS</span>
            </a>
              <span class="tooltip"> EVENT DETAILS </span>
          </li>
       
      </ul>
    </aside>
  </div>
  <div class="content">
    <div class="top-navbar">
      
      <div class="bx bx-menu" id="menu-icon"></div>
      <div class="search-bar">
        <input type="text" id="search-input" placeholder="Search..." oninput="performSearch()">
        <button><i class="bx bx-search"></i></button>
      </div>
      
      <div class="profile">
        <img src="{{ asset('storage/' . Auth::user()->picture) }}" class="profile-picture">
        <span class="name">{{ Auth::user()->name }}</span>
      </div>
      
    </div>
    @yield('content') 
    
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
  
  
  
    
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="{{ asset('js/side-navbar.js') }}"></script>

  
</body>
</html>