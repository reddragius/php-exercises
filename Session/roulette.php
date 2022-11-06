<?php
	session_start();
	$bet = null;
	$error = [];
	$noError = false;
	$selectList = [
		"evenNumber" => "Sudé",
		"oddNumber" => "Liché",
	];

	if (array_key_exists("account", $_SESSION) == false) 
	{	
		// if there is no session, set the session account to 100
		$_SESSION["account"] = 100;
	} 
	else 
	{	// if session does not exist
		if (array_key_exists("roll-button", $_POST))
		{	
			$bet = $_POST["bet"];
			$betSelection = $_POST["betSelection"];

			// validation
			if (is_numeric($bet) == false || $bet < 1 || $bet == null) 
			{
				$error["betError"] = "Musíte zadat platnou hodnotu sázky.";
			} 
			
			if ($betSelection == null) 
			{
				$error["selectError"] = "Vyberte sudé nebo liché.";
			} 
			
			// No error
			if (count($error) == 0)
			{
				$noError = true;
			}
		};
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ruleta</title>
	<style>
		.error {
			color: red;
			font-weight: 700;
		}
		.green {
			color: green;
		}
		.number {
			color: orange;
		}
	</style>
</head>
<body>
	<h1>Ruleta</h1>
	<?php
		if ($noError == true) 
		{	
			$number = rand (1, 100);
			echo "<h2>Padlo číslo: <span class='number'>$number</span></h2>";
			
			if ($betSelection == "evenNumber" && $number %2 == 0  || $betSelection == "oddNumber" && $number %2 == 1) 
			{
				echo "<h2 class='green'>Výhra!!!</h2>";
				$_SESSION["account"] = $_SESSION["account"] + $bet; // credit the win
			} 
			elseif ($betSelection != "evenNumber" && $number %2 == 0) 
			{
				echo "<h2 class='error'>Pohra :-(</h2>";
				$_SESSION["account"] = $_SESSION["account"] - $bet; // subtract the bet from the account
			} 
			else {
				echo "<h2 class='error'>Pohra :-(</h2>";
				$_SESSION["account"] = $_SESSION["account"] - $bet; // subtract the bet from the account
			}
		}
		
		if ($_SESSION["account"] < 0) // if there is a negative value in the session, reset it and display it
		{	
			$_SESSION["account"] = 0;
			echo "<h2>Stav konta: {$_SESSION["account"]} Kč</h2>";	
		} 
		else  // view current account status
		{
			echo "<h2>Stav konta: {$_SESSION["account"]} Kč</h2>";
		}
	?>
	<form action="" method="post">
		<label>Sázka: <input type="text" name="bet" value="<?php echo $bet ?>"></label> Kč 
		<span class="error">
			<?php if (array_key_exists("betError", $error)) {echo $error["betError"];} ?>
		</span><br> 
		<label>
			Sudé / Liché: 
			<select name="betSelection"><br>
				<option value="">Vyberte</option>
				<?php
					foreach ($selectList as $selecID => $selectName)
					{	
						$selected = '';
						if ($betSelection == $selecID) 
						{
							$selected = 'selected';
						}
						echo "<option value='$selecID' $selected>$selectName</option>";
					};
				?>
			</select>
		</label>
		<span class="error"><?php if (array_key_exists("selectError", $error)) {echo $error["selectError"];} ?></span><br>
		<button name="roll-button">Zatočit ruletou</button>
	</form>
</body>
</html>