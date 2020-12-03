var show_main_nav_button = document.getElementById("show-nav")
var main_nav = document.getElementById("main_nav")



function toggle_main_nav() {
    if (main_nav.style.display == "flex") {
        main_nav.style.display = "none";
    } else {
        main_nav.style.display = "flex";
    }
}

function toggle_rotate_main_nav_button() {
    if (show_main_nav_button.style.transform == "rotate(90deg)") { //transform: rotate(90deg);
        show_main_nav_button.style.transform = "none";
    } else {
        show_main_nav_button.style.transform = "rotate(90deg)";
    }
}

show_main_nav_button.addEventListener("click", function() {
    toggle_main_nav();
    toggle_rotate_main_nav_button();
})