<?php
	if (array_key_exists("save-note", $_POST)) 
	{	
		$note = $_POST["note"];
		file_put_contents("note.txt", $note); 
	}
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
	<form action="" method="post"> 
		<textarea name="note" cols="80" rows="20"><?php 
		if (file_exists("note.txt")) { 
			$obsah = file_get_contents("note.txt"); 
			echo $obsah; 
		}
		?></textarea><br>
		<button name="save-note">Ulozit</button>
	</form>
</body>
</html>