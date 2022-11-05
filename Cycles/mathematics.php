<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		echo "<table border = 1>";
		for ($row = 1; $row <= 20; $row++) 
		{
			$variableA = rand(0,10);
			$variableB = rand(0,10);
			$mark = rand (0,1);
			if ($mark == 0) {
				$mark = "-";
			} else {
				$mark = "+";
			}
			echo "<tr> <td>$variableA $mark $variableB =</td> </tr>";
		}
		echo "</table";
	?>
</body>
</html>