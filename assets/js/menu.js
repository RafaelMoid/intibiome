document.addEventListener("DOMContentLoaded", function () {
  var menuIcon = document.querySelector(".menu-icon");
  menuIcon.addEventListener("click", function () {
    var menu = document.getElementById("fullscreen-menu");
    menu.classList.toggle("active");
    console.log("click")
  });
});