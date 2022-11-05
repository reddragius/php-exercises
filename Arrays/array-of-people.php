<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.red {
			background-color: lightcoral;
		}
		.blue {
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<?php
		$arrayPeople = [
			"muz" => [
				"Igor", 
				"Pepa"
			],
			"zena" => [
				"Nikola", 
				"Petra"
			] 
		];
		var_dump($arrayPeople);

		echo "<table border = 1>";
		echo "<tr> <th>Jmeno</th> <th>Pohlavi</th> </tr>";
		foreach ($arrayPeople as $gender => $arrayNames)
		{	
			if ($gender == "muz") 
			{
				$class = "blue"; 
			}
			else 
			{
				$class = "red"; 
			};

			foreach ($arrayNames as $name)
			{	
				echo "<tr> <td>$name</td> <td class='{$class}'>$gender</td> </tr>";
			};
		};
		echo "</table";
	?>
</body>
</html>