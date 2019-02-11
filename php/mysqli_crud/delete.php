<?php

	include "connection.php";

	$id = $_GET ["id"];

	$delete = $connection -> query ("DELETE FROM mountains WHERE id='$id' ");

	if ($delete)
		echo "Data deleted.";
	else
		echo "Error deleting data.";
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