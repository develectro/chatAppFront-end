<?php 
$servername = "localhost";
$username = "root";
$password = "0912922470";
$DB_name  = "myDB" ; 

// Create connection
$conn = new mysqli($servername, $username, $password , $DB_name ) ; 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql1 = "INSERT INTO conv (text)
 VALUES('".$_GET["your_text"]."')";
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$conn->close();

?>
