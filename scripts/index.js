var menuBtn = document.getElementById("menuBtn");
var menu = document.getElementById("menu");
var sideNav = document.getElementById("sideNav");

menuBtn.onclick = function () {
  if (sideNav.style.right == "-200px") {
    sideNav.style.right = "0";
    menu.src = "../img/common/close.png";
  } else {
    sideNav.style.right = "-200px";
    menu.src = "../img/common/menu.png";
  }
};
var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 1000,
  speedAsDuration: true,
});
