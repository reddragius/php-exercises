<?php
	$x = null;
	$y = null;
	$result = null;
	$error = [];

	if (array_key_exists("sum-button", $_GET))
	{	
		$x = $_GET["x"];
		$y = $_GET["y"];

		// kontrola chyb
		if ($x == null)
		{	
			$error["x"] = "musí být vyplněno";
		}
		elseif (is_numeric($x) == false) 
		{
			$error["x"] = "musí být číslo";
		}
		
		if ($y == null) 
		{
			$error["y"] = "musí být vyplněno";
		}
		elseif (is_numeric($y) == false) 
		{
			$error["y"] = "musí být číslo";
		}

		if (count($error) == 0) {$result = $x + $y;}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form>
		<input type="text" name="x" value="<?php 
		if (array_key_exists("x", $error)) {
			echo $error["x"];
		} else {
			echo $x;
		};?>">
		
		<span> +</span>		
		
		<input type="text" name="y" value="<?php 
		if (array_key_exists("y", $error)) {
			echo $error["y"];
		} else {
			echo $y;
		};?>">
		
		<span> = <?php  echo $result ?></span>		
		
		<button name="sum-button">Sečíst</button>
	</form>
</body>
</html>

