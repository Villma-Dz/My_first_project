console.log("labas");

function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}


function windowClose() {
window.open('','_parent','');
window.close();
}
