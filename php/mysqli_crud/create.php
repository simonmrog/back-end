<?php

	include "connection.php"; 

	$name = $_POST["name"];
	$altitude = $_POST["altitude"];
	$town = $_POST["town"];
	$department = $_POST["department"];

	$create = $connection -> query ("INSERT INTO mountains (id, name, altitude, town, department) VALUES ('', '$name', '$altitude', '$town', '$department')");

	if ($create)
		echo "Data saved.";
	else
		echo "Error saving data.";	

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