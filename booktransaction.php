<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "Connected...<br>";
// Check connection
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
} 
$sql1="select * from Transaaction where Mem_Id=12346";
$result=$conn->query($sql1);
if ($result->Ret_Date<($result->Bor_Date+10)) {
	$sql2="update Transaaction set Status='Good' where Mem_Id=12346";
	//$sql2="update Transaaction set Status='Good' where Mem_Id=12346";
}

if ($conn->query($sql2) === True ) {
	echo " record updated....<br>";
} else {
	echo "Not updated...<br>";
}
/*try {
	$rows=$conn->query($sql2);
	foreach ($rows as $row) {
		echo "<li> <pre>\t\t\t$row[Mem_Id]\t\t\t\t $row[ISBN] \t\t \t$row[Bor_Date]\t\t\t$row[Ret_Date] \t\t\t $row[Status]</pre> </li>";
	
	}
	} catch (PDOException $e) {
	echo "Query failed: " . $e->getMessage();
	}
*/
$conn->close();
?>