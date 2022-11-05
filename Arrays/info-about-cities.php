<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table {
            border-collapse: collapse;
        }

        th, td {
            width: 230px;
            height: 23px;
            text-align: center;
			border: 1px solid #000;
        }

		th {
			background-color: lightgreen;
		}
	</style>
</head>
<body>
	<?php
		$arrayCitiesA = [
			"Praha" => [
				"rozloha" => 496,
            	"pocetDomu" => 99949,
			],
			"Brno" => [
				"rozloha" => 230,
            	"pocetDomu" => 40676,
			],
			"Olomouc" => [
				"rozloha" => null,
				"pocetDomu" => 10676,
			]
		];
		$arrayCitiesB = [
			"Praha" => [
				"rozloha" => 496,
            	"nadmorskaVyska" => 235,
            	"pocetDomu" => 99949,
            	"pocetUlic" => 7767,
			],
			"Brno" => [
				"rozloha" => 230,
            	"nadmorskaVyska" => 237,
            	"pocetDomu" => 40676,
            	"pocetUlic" => 1886,
			],
			"Olomouc" => [
				"rozloha" => null,
				"pocetDomu" => 10676,
				"nadmorskaVyska" => 237,
				"pocetUlic" => 1886,
			]
		];

		var_dump($arrayCitiesA);
		
		echo "<table>";
		echo "<tr> <th>Mesto</th> <th>Rozloha</th> <th>Pocet domů</th> </tr>";
		foreach ($arrayCitiesA as $city => $arrayProperities)
		{	
			echo "<tr> <td>$city</td>";
			foreach ($arrayProperities as $properity => $value)
			{	
				echo "<td>$value</td>";
			}
			echo "</tr>";
		};
		echo "</table>";

		echo "<br>";
		echo "<hr>";
		echo "<br>";

		var_dump($arrayCitiesB);

		echo "<table>";
		echo "<tr> <th>Mesto</th> <th>Vyska</th> <th>Pocet ulic</th> </tr>";
		foreach ($arrayCitiesB as $city => $value)
		{
			echo "<tr> <td>$city</td> <td>{$value['nadmorskaVyska']}</td> <td>{$value['pocetUlic']}</td> </tr>";
		}
		echo "</table>";
	?>
</body>
</html>