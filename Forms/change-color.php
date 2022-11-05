<?php
	$backgroundColor = null;
	if (array_key_exists("barva", $_GET))
	{	
		$backgroundColor = $_GET["barva"];
	};
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.box {
			height: 200px;
			width: auto;
		}
		.red {
			background-color: red;
		}
		.green {
			background-color: green;
		}
		.blue {
			background-color: blue;
		}
	</style>
</head>
<body>
	<a href="?barva=green">Green</a>
	<a href="?barva=red">Red</a>
	<a href="?barva=blue">Blue</a>
	<?php echo "<div class=\"box $backgroundColor\"></div>";?>
</body>
</html>