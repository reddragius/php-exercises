<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chessboard</title>
	<style>
		table {
			border-collapse: collapse;
		}
		td {
			width: 100px;
			height: 100px;
		}
		.grey {
			background-color: #808080;
			text-align: center;
			border: 1px solid #000;
		}
		.white {
			background-color: white;
			text-align: center;
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<h1>Chessboard</h1>
	<?php
		echo "<table>";
		for ($row = 1; $row <= 8; $row++) {
			echo "<tr>";
			for ($col = 1; $col <= 8; $col++) 
			{
				$cell = $col % 2; // 0 1 0 1
				$line = $row % 2; // 1 1 1 1 / 0 0 0 0				
				
				if ($line == 1 && $cell == 1) 
				{
					$color = 'white';
				} 
				elseif ($line == 1 && $cell == 0) 
				{
					$color = 'grey';
				} 
				elseif ($line == 0 && $cell == 1) 
				{
					$color = 'grey';
				} 
				else 
				{
					$color = 'white';
				};

				echo "<td class='{$color}'></td>";
			};
			echo "</tr>";
		}
		echo "</table";
	?>
</body>
</html>