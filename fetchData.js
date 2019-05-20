//this script is used to fetch data from the Database.

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
