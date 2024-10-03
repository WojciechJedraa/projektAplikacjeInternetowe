var isVisible = false;

function burgerclick() {
  let menu = document.getElementById("menu");

  if (isVisible) {
    isVisible = false;
    menu.style.padding = "0px";
    menu.style.height = "0px";
  } else {
    menu.style.display = "block";
    isVisible = true;
    menu.style.padding = "15px";
    menu.style.height = "auto";
  }
}
