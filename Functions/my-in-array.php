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
		$arrayNames = ["Franta","Jana", "Marie"];
		var_dump($arrayNames);

		$nameA = "Janas";
		$nameB = "Marie";

		function myInArray($whereToSearch, $whatToSearch)
		{
			foreach ($whereToSearch as $arrayValue)
			{	
				if ($arrayValue == $whatToSearch) {
					$isThere = "Je";
					return $isThere;
				} 
			};
			$isThere = "Není";
			return $isThere;
		}

		$resultOne = myInArray($arrayNames, $nameA);
		$resultTwo = myInArray($arrayNames, $nameB);

		echo "$nameA v poli: $resultOne <br>";
		echo "$nameB v poli: $resultTwo <br>";	
	?>
</body>
</html>