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
	$sql="SELECT * FROM Level6";
	echo "<ul>";

	try {
	$rows=$conn->query($sql);
	foreach ($rows as $row) {
	echo "<li>" . $row["StudName"] . " is " . $row["Age"] . " years old " . "</li>";
	}
	} catch (PDOException $e) {
	echo "Query failed: " . $e->getMessage();
	}
	echo "</ul>";
	$conn=null;
?>

