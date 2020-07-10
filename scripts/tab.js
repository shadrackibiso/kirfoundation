function showTab(event, tabNum) {
  // get all tab contents
  let tabContent = document.getElementsByClassName("tabContent");
  // hide all tab contents
  for (var i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }

  if (event) {
    //   get all tab buttons
    let tabBtns = document.getElementsByClassName("tabBtn");
    //   remove the active class of all tab buttons
    for (var i = 0; i < tabBtns.length; i++) {
      tabBtns[i].classList.remove("activeTab");
    }
    //   change current tab button class to active
    event.target.classList.add("activeTab");
  }

  //   display current tab content
  document.getElementById(`tab${tabNum}`).style.display = "flex";
}
showTab(event, 1);
