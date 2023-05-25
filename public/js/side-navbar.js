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
