<?php
	$error = null;
	$size = null;
	if (array_key_exists("send-size-table", $_GET)) 
	{
		$size = $_GET["size"];
		if ($size == null) 
		{
			$error = "It has to be entered.";
		} 
		else if ($size <= 0) 
		{
			$error = "It has to be positive.";
		} 
		else if ($size > 100) 
		{
			$error = "Max. table size 100";
		};
	};
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multiplication table</title>
	<style>
		.green {
			background-color: lightgreen;
		}

		table {
			border-collapse: collapse;
			margin: 20px 0;
		}

		th,
		td {
			width: 30px;
			height: 30px;
			text-align: center;
			border: 1px solid #000;
		}

		.error {
			color: red;
			font-weight: 700;
		}
	</style>
</head>

<body>
	<h1>Multiplication table</h1>
	<form method="get">
		<label>Table Size: <input type="number" name="size" value="<?php echo $size ?>">
			<span class="error"><?php echo " $error" ?><span>
		</label>
		<button name="send-size-table">Send</button>
	</form>
	<p>
		<a href="?size=10&send-size-table=">10x10</a>
		<a href="?size=20&send-size-table=">20x20</a>
		<a href="?size=30&send-size-table=">30x30</a>
	</p>
	<form method="get">
		<input type="hidden" name="send-size-table" value="">
		<button name="size" value="10">10x10</button>
		<button name="size" value="20">20x20</button>
		<button name="size" value="30">30x30</button>
	</form>

	<?php
	if ($size != null && $error == null) 
	{
		echo "<table>";
		echo "<tr>";
		//th cell inside tr
		echo "<th class='green'></th>";
		for ($col = 1; $col <= $size; $col++) 
		{
			echo "<th class='green'>$col</th>";
		}
		echo "</tr>";
		// table content - display rows
		for ($row = 1; $row <= $size; $row++) 
		{
			echo "<tr>";
			//display columns (th cell + td cell) inside tr
			echo "<th class='green'>$row</th>";
			for ($col = 1; $col <= $size; $col++) 
			{
				$soucin = $row * $col;
				echo "<td>$soucin</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	?>
</body>

</html>