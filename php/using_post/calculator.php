<?php

	function calculate ($var1, $var2, $var3) {

		switch ($var3) {
			case 0:
				$result = ($var1 + $var2);
				break;
			case 1:
				$result = ($var1 - $var2);
				break;
			case 2:
				$result = ($var1 * $var2);
				break;
			case 3:
				$result = ($var1 / $var2);
				break;
		}
		return ($result);

	}

	$var1 = $_POST["value1"];
	$var2 = $_POST["value2"];
	
	if (isset ($_POST["operation"]) and is_numeric ($_POST["operation"]))
		$var3 = $_POST["operation"];
	else
		$var3 = -1;

	$array = array ("sum", "difference", "multiplication", "division");
	echo "The result of the " . $array [$var3] . " is " . calculate ($var1, $var2, $var3);
	
?>