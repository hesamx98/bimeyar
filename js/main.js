function open_part(show) {

  if (show === "add"){
    document.getElementById("add").hidden = true;
    document.getElementById("show").hidden = false;
  }

  if (show === "show"){
    document.getElementById("add").hidden = false;
    document.getElementById("show").hidden = true;
  }
}

function close_part() {
    document.getElementById("show").hidden = true;
    document.getElementById("add").hidden = true;
}
