<?php
	$errorC = null;
	$errorF = null;
	$temperatureC = null;
	$temperatureF = null;
	if (array_key_exists("button-CnaF", $_GET))
	{	
		$temperatureC = $_GET["inputC"];
		// kontrola chyb C
		if ($temperatureC == null){	
			$errorC = "Musí být zadáno.";
		} elseif (is_numeric($temperatureC) == false){	
			$errorC = "Vlož číslo např. 8 nebo 9.5";
		} else { 
			$temperatureF = round(($temperatureC * 1.8) + 32, 2);
		};
	};
	if (array_key_exists("button-FnaC", $_GET))
	{	
		$temperatureF = $_GET["inputF"];
		// kontrola chyb F
		if ($temperatureF == null){	
			$errorF = "Musí být zadáno.";
		} elseif (is_numeric($temperatureF) == false) {	
			$errorF = "Vlož číslo např. 8 nebo 9.5";
		}
		else {	
			$temperatureC = round((($temperatureF - 32) / 1.8), 2);
		};
	};
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
	<form action="" method="get">
	<label>Celsium: <input type="text" name="inputC" value="<?php
		if ($errorC != null){
			echo $errorC;
		} else {
			echo trim($temperatureC," ");
		}?>">
	</label>
	<button name="button-CnaF">>></button>
	<button name="button-FnaC"><<</button>	
	<label><input type="text" name="inputF" value="<?php
		if ($errorF != null) {
			echo $errorF;
		} else {
			echo trim($temperatureF," ");
		}?>">
	:Fahrenheit</label>	
	</form>
</body>
</html>