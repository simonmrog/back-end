<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="calculator.php" method="post">
		<div>
			<input type="text" name="value1" placeholder="value 1">
			<input type="text" name="value2" placeholder="value 2">
		</div>	
		<input type="radio" name="operation" value="0"> Sum <br/>
		<input type="radio" name="operation" value="1"> Difference <br/>
		<input type="radio" name="operation" value="2"> Multiplication <br/>
		<input type="radio" name="operation" value="3"> Division <br/>
		
		<input type="submit" value="calculate">
	</form>
</body>
</html>