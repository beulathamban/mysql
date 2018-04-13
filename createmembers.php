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

// sql to create table
$sql = "CREATE TABLE members (
Id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(30) NOT NULL,
Place VARCHAR(20) NOT NULL,
Gender VARCHAR(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Club created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>