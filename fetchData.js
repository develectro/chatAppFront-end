//this script uses ajax object to append php's echo to the message box whome id is #messagebox
function loadMsg() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("messagebox").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "refrash.php", true);
  xhttp.send();
}
