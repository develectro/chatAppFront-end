//this script is used to send data to the Database
function sendMsg() {
  
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("textbox").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "dbinsert.php", true);
  xhttp.send();
}