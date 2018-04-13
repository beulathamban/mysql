<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "club";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$sql1 = "INSERT INTO members(Name, Place, Gender) VALUES ()";
$sql1 = "INSERT INTO members(Name, Place, Gender) VALUES ('$_POST[name]', '$_POST[place]', '$_POST[gender]')";
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/*if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
$conn->close();
?>