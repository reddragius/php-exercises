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
		$arrayNames = ["Franta","Jana", "Marie","Jana"];
		var_dump($arrayNames);

		$nameA = "SfSfesf";
		$nameB = "Jana";

		function howManyTimesInArray($whereToSearch, $whatToSearch)
		{	
			$isThere = 0;
			foreach ($whereToSearch as $arrayValue)
			{	
				if ($arrayValue == $whatToSearch) {
					$isThere++;
				} 
			};
			return $isThere;
		}

		$resultOne = howManyTimesInArray($arrayNames, $nameA);
		$resultTwo = howManyTimesInArray($arrayNames, $nameB);

		echo "$nameA v poli: $resultOne <br>";
		echo "$nameB v poli: $resultTwo <br>";
	?>
</body>
</html>