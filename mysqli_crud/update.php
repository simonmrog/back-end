<?php

	include "connection.php";

	$id = $_POST ["id"];
	$name = $_POST ["name"];
	$altitude = $_POST ["altitude"];
	$town = $_POST ["town"];
	$department = $_POST ["department"];

	$update = $connection -> query ("UPDATE mountains SET name = '$name', altitude = '$altitude', town = '$town', department = '$department' WHERE id = '$id' ");

	if ($update)
		echo "<script> alert ('Data updated');";
	else
		echo "Error updating data.";
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