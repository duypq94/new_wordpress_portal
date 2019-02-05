document.querySelector("#menu-primary-menu li:last-child").getElementsByTagName('a')[0].removeAttribute("href");

var collapseButton = document.getElementById("collapse-button");
var navBar = document.getElementById("menu-primary-menu");
var collapseEnable = false;
let aTagMenu = document.querySelectorAll("#menu-primary-menu > li > a");

function onCollapse() {
  if (collapseEnable === false) {
    collapseButton.classList.add("open");
    navBar.classList.add("open-menu");
    collapseEnable = true;
  } else {
    collapseButton.classList.remove("open");
    navBar.classList.remove("open-menu");
    collapseEnable = false;
  }
}