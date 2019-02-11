<?php include "connection.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title>Colombian Mountains Database </title>
</head>
<body>

	<div>
		<h2> Register mountain data </h2>
		<form action="create.php" method="post">
			<input type="text" name="name" placeholder="Mountain's name"> <br/>
			<input type="text" name="altitude" placeholder="Summit altitude"> <br/>
			<input type="text" name="town" placeholder="Town"> <br/>
			<input type="text" name="department" placeholder="Department"> <br/>
			<input type="submit" value="Save">
		</form>
	</div>

	<hr/>

	<div>
		<h2> List of mountains </h2>

		<table border="1">
			<th></th>
			<th> Name </th>
			<th> Summit Altitude (masl) </th>
			<th> Town </th>
			<th> Department </th>

			<?php

				$select = $connection -> query ("SELECT * FROM mountains");
				while ($row = $select -> fetch_assoc ()) { 
			?>
			<tr>
				<td><?php echo $row["id"] ?></td>
				<td><?php echo $row["name"] ?></td>
				<td><?php echo $row["altitude"] ?></td>
				<td><?php echo $row["town"] ?></td>
				<td><?php echo $row["department"] ?></td>
				<td><a href="form.php?id=<?php echo $row['id'] ?>"> Update </a> </td>
				<td><a href="delete.php?id=<?php echo $row['id'] ?>"> Delete </a> </td>
			</tr>
		<?php } ?>

		</table>
	</div>

</body>
</html>