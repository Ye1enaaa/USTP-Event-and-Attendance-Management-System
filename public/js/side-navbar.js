let menu = document.querySelector("#menu-icon");
let sidenavbar = document.querySelector(".side-navbar");
let content = document.querySelector(".content");

menu.onclick = () => {
    sidenavbar.classList.toggle("active");
    content.classList.toggle("active");
};

function menuBtnChange() {
    if (sidebar.classList.contains("active")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
}

function performSearch() {
    var searchInput = document.getElementById("search-input");
    var searchText = searchInput.value.toLowerCase();

    var eventNames = document.getElementsByClassName("event-name");

    for (var i = 0; i < eventNames.length; i++) {
        var eventName = eventNames[i].innerText.toLowerCase();

        if (eventName.includes(searchText)) {
            eventNames[i].parentNode.style.display = "block";
        } else {
            eventNames[i].parentNode.style.display = "none";
        }
    }
}

function handleLogoutClick(event){
    event.preventDefault();
    document.getElementById('log-out-form').submit();
}