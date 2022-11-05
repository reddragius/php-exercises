<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		.hot {
			background-color: red;
		}
		.cold {
			background-color: lightblue;
		}
		.zero {
			background-color: green;
		}
	</style>
</head>
<body>
    <?php
	echo "<table border = 1>";
	echo "<tr><th>C</th><th>F</th></tr>";
    for ($C =-100; $C <= 100; $C += 10) 
	{
		$F = ($C * 1.8) + 32;
		
		// class colors for C
		if ($C == 0) 
		{
			$classC = "zero";
		} 
		else if ($C >= 0) 
		{
			$classC = "hot";
		} 
		else 
		{
			$classC = "cold";
		}
		
		// class colors for F
		if ($F == 0) 
		{
			$classF = "zero";
		} 
		else if ($F >= 0) 
		{
			$classF = "hot";
		} 
		else 
		{
			$classF = "cold";
		}

        echo "<tr><td class='{$classC}'>$C</td><td class='{$classF}'>$F</td></tr>";
    }
	echo "</table>";
    ?>
</body>
</html>