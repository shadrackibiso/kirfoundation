window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.backgroundColor = "#009231";
    document.getElementById("navbar").style.boxShadow =
      "0px 1px 10px rgba(0,0,0,0.5)";
  } else {
    document.getElementById("navbar").style.backgroundColor = "#00000000";
    document.getElementById("navbar").style.boxShadow = "none";
  }
}
