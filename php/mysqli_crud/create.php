<?php

	include "connection.php"; 

	$name = $_POST["name"];
	$altitude = $_POST["altitude"];
	$town = $_POST["town"];
	$department = $_POST["department"];

	$create = $connection -> query ("INSERT INTO mountains (id, name, altitude, town, department) VALUES ('', '$name', '$altitude', '$town', '$department')");

	if ($create)
		echo "<script> alert ('Data added to the database.');";
	else
		echo "Error adding data.";
	echo "location.href = 'index.php' </script>";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php">
		<input type="submit" value="Return">
	</form>
</body>
</html>