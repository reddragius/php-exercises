<?php
	$obvod = null;
	$chyba = null;
	$polomer = null;
	if (array_key_exists("vypocitat-polomer", $_GET))
	{	
		$polomer = $_GET["polomer"];
		if ($polomer == null) // musi byt vyplneno
		{
			$chyba = "musi byt vyplněno";	
		} 
		else if ($polomer < 0) // musi byt kladne
		{
			$chyba = "musi byt kladne";
		} 
		else if (is_numeric($polomer) == false) // musi byt cislo
		{
			$chyba = "musi byt cislo";
		} 
		else 
		{
			$obvod = round($polomer * 2 * pi(), 2);
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
</head>
<body>
	<form method="get">
		<label> Polomer: <input type="text" name="polomer" value="<?php echo $polomer;?>"></label><?php echo " $chyba";?>
		<button name="vypocitat-polomer">Odeslat</button>
	</form>
	<?php
		if ($obvod != null)
		{
			echo "Obvod kruhu: $obvod";
		}
	?>
</body>
</html>