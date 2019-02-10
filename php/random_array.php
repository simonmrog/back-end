<?php

	for ($i=0; $i < 10; $i++) {
		$val = rand (1, 100);
		$array[$i] = $val;
	}

	for ($i=0; $i < count($array); $i++) {
		echo $array[$i] . "<br/>";
	}

?>