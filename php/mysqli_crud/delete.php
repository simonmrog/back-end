<?php

	include "connection.php";

	$id = $_GET ["id"];

	$delete = $connection -> query ("DELETE FROM mountains WHERE id='$id' ");

	if ($delete)
		echo "<script> alert ('Data deleted');";
	else
		echo "Error deleting data.";
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