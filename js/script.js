function init() {
  myItems = document.getElementsByClassName("item");
  for (var i = 0; i < myItems.length; i++) {
    myItems[i].addEventListener("click", toggle);
  }
}

function toggle() {
  this.nextSibling.nextSibling.nextSibling.nextSibling.disabled =
    !this.nextSibling.nextSibling.nextSibling.nextSibling.disabled;

  if (this.nextSibling.nextSibling.nextSibling.nextSibling.disabled == true) {
    this.nextSibling.nextSibling.nextSibling.nextSibling.value = 0;
  }
}
window.addEventListener("load", init, false);
