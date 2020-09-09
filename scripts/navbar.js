var lastScroll = 0;
var navbar = document.getElementById("navbar");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  const currentScroll = window.pageYOffset;
  if (currentScroll == 0) {
    navbar.classList.remove("scrollUp");
    return;
  }
  if (currentScroll > lastScroll) {
    // down
    navbar.classList.remove("scrollUp");
    navbar.classList.add("scrollDown");
  } else if (currentScroll < lastScroll) {
    // up
    navbar.classList.remove("scrollDown");
    navbar.classList.add("scrollUp");
  }
  lastScroll = currentScroll;
}
