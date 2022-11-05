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
		$arrayCities = [
			"praha" => ["Tony", "Hanka"],
        	"brno" => ["Kuba", "Klarka", "Andrea"],
        	"plzen" => ["David", "Pepa", "Tom"]
		];

		echo "<table border = 1>";
		echo "<tr> <th>Město</th> <th>Lidi</th> </tr>";
		foreach ($arrayCities as $city => $listOfPeople)
		{	
			echo "<tr> <td>$city</td> <td>";
				echo "<ul>";
					foreach ($listOfPeople as $human)
					{	
						echo "<li>$human</li>";
					};			
				echo "</ul>";
			echo "</td></tr>";
		};
		echo "</table";	
	?>
</body>
</html>