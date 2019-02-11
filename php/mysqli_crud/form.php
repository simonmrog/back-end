<?php
	
	include "connection.php";

	$id = $_GET["id"];
	$select = $connection -> query ("SELECT * from mountains WHERE id='$id'");
	if ($row = $select -> fetch_assoc()) {
?>

<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
	<input type="text" name="name" placeholder="Mountain's name" value="<?php echo $row['name'] ?>" /> <br/>
	<input type="text" name="altitude" placeholder="Summit altitude" value="<?php echo $row['altitude'] ?>"> <br/>
	<input type="text" name="town" placeholder="Town" value="<?php echo $row['town'] ?>" /> <br/>
	<input type="text" name="department" placeholder="Department" value="<?php echo $row['department'] ?>" /> <br/>
		<input type="submit" value="Save" />
</form>

<?php } ?>
