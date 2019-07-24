function open_part(show) {

  if (show === "add"){
    document.getElementById("add").hidden = false;
    document.getElementById("show").hidden = true;
  }

  if (show === "show"){
    document.getElementById("add").hidden = true;
    document.getElementById("show").hidden = false;
  }
}

function close_part() {
    document.getElementById("show").hidden = true;
}

function filter_table() {
  var td_num = document.getElementById("td_num").value;
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("filter_input");
  filter = input.value.toUpperCase();
  table = document.getElementById("panel_table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[td_num];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

