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

$sql = "SELECT text , reg_date FROM conv; "; 
$result = $conn->query($sql);
$num_of_row = $result->num_rows ; 
$old_chat_conv = "" ;
while($row = $result->fetch_assoc())
{
    echo $row["text"] . "" . "\n";
}



?>