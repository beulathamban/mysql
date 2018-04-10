<?php
$dsn="mysql:dbname=student";
$username="root";
$password="root";
try {
	$conn= new PDO($dsn,$username,$password);
	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	echo "connection failed:" . $e->getMessage();
	}
	$sql="SELECT Studname, Module,  `Percentage` FROM Level6,  `attendance` WHERE Level6.studID = attendance.id";
	echo "<ol>";
	echo "<hr>";
	echo "<pre> \t\t\tStudent Name \t \t Module Number \t \t Percentage </pre> <br>";
	echo "<hr >";
	try {
	$rows=$conn->query($sql);
	foreach ($rows as $row) {
		echo "<li> <pre>\t\t\t$row[Studname]\t\t\t\t $row[Module] \t\t \t$row[Percentage]</pre> </li>";
	
	}
	} catch (PDOException $e) {
	echo "Query failed: " . $e->getMessage();
	}
	echo "</ol>";
	$conn=null;
?>

