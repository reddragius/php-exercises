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
		$cities = [
			"Praha" => [
				"18.9" => [
					"temperature" => "0.5 °C", 
					"description" => "zima",
				],
				"19.9" => [	
					"temperature" => "10.5 °C",
					"description" => "jasno",
				],
				"20.9" => [
					"temperature" => "30.5 °C",
					"description" => "vedro",
				],
			],
			"Brno" => [
				"18.9" => [
					"temperature" => "-10 °C",
					"description" => "snezi",
				],
				"19.9" => [
					"temperature" => "15.5 °C",
					"description" => "zamraceno",
				],
				"20.9" => [
					"temperature" => "20.5 °C",
					"description" => "teplo",
				],
			],
			"Olomouc" => [
				"18.9" => [
					"temperature" => "-5 °C",
					"description" => "snezi",
				],
				"19.9" => [
					"temperature" => "5.5 °C",
					"description" => "zima",
				],
				"20.9" => [
					"temperature" => "20.5 °C",
					"description" => "teplo",
				],
			],
		];

		foreach ($cities as $city => $arrayDates)
		{	
			if ($city == "Praha" || $city == "Brno")
			//show only Prague and Brno keys
			{	
				echo "<h2>$city</h2>";
				echo "<table border = 1>";
				echo "<tr> <th>Datum</th> <th>Teplota</th> <th>Popis</th> </tr>";
				foreach ($arrayDates as $date => $arrayValues)
				{	
					echo "<tr> <td>$date</td> <td>{$arrayValues["temperature"]}</td> <td>{$arrayValues["description"]}</td> </tr>";
				};
				echo "</table>";
			}
		};
		
		echo "<h2>Content of the Arrays</h2>";
		var_dump($cities);
	?>
</body>
</html>


