<?php
	$name = null;
	$age = null;
	$gender = null;
	$arrayError = [];
	$noError = false;
	$genderList = [
		"man" => "Muž",
		"woman" => "Žena",
		"other" => "Jiné",
	];

	if (array_key_exists("button-registration", $_POST))
	{	
		$name = $_POST["name"];
		$age = $_POST["age"];
		$gender = $_POST["gender"];
		
		// validace jmena
		// musi byt vyplneno
		// jmeno musi byt delsi nez 3 znaky a nesmi byt numeric
		if ($name == null)
		{	
			$arrayError["name"] = "Musí být vyplněno!";
		}
		elseif (is_numeric($name) == true)
		{	
			$arrayError["name"] = "Musí být jméno nikoliv číslo!";
		}
		elseif (mb_strlen($name) < 3 || mb_strlen($name) > 60)
		{	
			$arrayError["name"] = "Musí být jméno!";
		}
	
		// validace veku
		// musi byt vyplneno
		// musi byt ve veku 18 az 120
		if ($age == null) 
		{
			$arrayError["age"] = "Musí být vyplněno!";
		}
		elseif ($age < 18) 
		{
			$arrayError["age"] = "Registrace jen pro dospělé!";
		}
		elseif ($age > 120) 
		{
			$arrayError["age"] = "Neplatný věk!";
		}

		if ($gender == "")
		{
			$arrayError["gender"] = "Musíte zvolit pohlaví";
		}

		// kontrola zda-li je vse v poradku
		if (count($arrayError) == 0)
		{
			$noError = true;
		}
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
		.error {
			color: red;
			font-weight: 700;
		}
	</style>
</head>
</head>
<body>
	<?php
		if ($noError == true) 
		{
			echo "<h2>Členská sekce</h2>";
			echo "<table border=1>";
			echo "<tr> <th>Jméno</th> <td>$name</td> </tr>";
			echo "<tr> <th>Věk</th> <td>$age</td> </tr>";
			echo "<tr> <th>Pohlaví</th> <td>{$genderList[$gender]}</td> </tr>";
			echo "</table>";
			
			echo "<form><button>Zpět</button></form>";
		} 
		else 
		{
			?>
			<section>
			<h1>Registrační formulář</h1>
			<form method="POST">
				<label>Jméno <input type="text" name="name" value="<?php echo $name; ?>"></label>
				<span class="error"><?php if (array_key_exists("name", $arrayError)) {echo $arrayError["name"];} ?></span><br>
				<label>Věk <input type="number" name="age" value="<?php echo $age; ?>"></label>
				<span class="error"><?php if (array_key_exists("age", $arrayError)) {echo $arrayError["age"];} ?></span><br>
				<label>Pohlaví 
					<select id="" name="gender">
						<option value="">-- Vyberte --</option>

						<?php
							foreach ($genderList as $genderID => $genderName)
							{	
								$selected = '';
								if ($genderID == $gender)
								{
									$selected = 'selected';
								}
								echo "<option value='$genderID' $selected>$genderName</option>";
							};
						?>
					</select>
					<span class="error"><?php if (array_key_exists("gender", $arrayError)) {echo $arrayError["gender"];} ?></span><br>
				</label>
				<button name="button-registration">Zaregistrovat</button>
			</form>
			<section>
			<?php
		}
	?>
	
</body>
</html>