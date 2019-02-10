<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar</title>
</head>
<body>

	<?php
		$val = $_GET["number"];
		echo "<h2> Tabla de multiplicar </h2> <br/>";
		for ($i = 1; $i <= 10; $i++) {
			echo $val . "x" . $i . " = " . ($val * $i) . "<br/>";
		}
	?>

</body>
</html>