<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar</title>
</head>
<body>

	<?php
		if (isset($_GET["number"]) and is_numeric($_GET["number"]))
			$val = $_GET["number"];
		else
			$val = 0;

		echo "<h2> Tabla de multiplicar </h2> <br/>";
		for ($i = 1; $i <= 10; $i++) {
			echo $val . "x" . $i . " = " . ($val * $i) . "<br/>";
		}
	?>

</body>
</html>