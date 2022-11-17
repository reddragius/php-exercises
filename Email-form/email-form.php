<?php
	$name = null;
	$phone = null;
	$email = null;
	$error = [];

	if (array_key_exists("send-button", $_POST))
	{	
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$message = $_POST["message"];
		$body = "jméno: $name\r\nemail: $email\r\ntelefon: $phone\r\nzpráva: $message";
		$okPhone = preg_match("/^(0{2}420|\\+420)?[1-9][0-9]{8}$/", $phone);

		if ($name == null) 
		{
			$error["name"] = "Vyplňte jméno.";
		}
		elseif (is_numeric($name) == true)
		{	
			$error["name"] = "Musí být jméno nikoliv číslo.";
		}
		elseif (mb_strlen($name) < 5)
		{	
			$error["name"] = "Musí být jméno";
		}

		if (!$okPhone)
		{	
			$error["phone"] = "Vložte platné tel. číslo ČR.";
		}

		if (!preg_match("/.+@.+\\..+/", $email))
		{
			$error["email"] = "Neplatný email";
		}
		if (mb_strlen($message) < 5)
		{
			$error["message"] = "Zpráva musí být zadána";
		}

		if (count($error) == 0)		
		{
			mb_send_mail(
				"info@example.com",
				"Zkouška odeslání z formulaře PHP",
				$body,
				["From" => "$name <$email>"]
			);
				$odeslano = "Odesláno.";
				$color = "success";
		} 
		else 
		{
			$odeslano = "Neodesláno.";
			$color = "error";
		}
	}
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
		.success {
			color: green;
			font-weight: 700;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<label>Jméno: <input type="text" name="name" value="<?php echo $name?>"></label>
		<span class="error"><?php if (array_key_exists("name", $error)) {echo $error["name"];}?></span><br>
		<label>Telefon: <input type="tel" name="phone" value="<?php echo $phone?>"></label>
		<span class="error"><?php if (array_key_exists("phone", $error)) {echo $error["phone"];}?></span><br>
		<label>Email: <input type="email" name="email" value="<?php echo $email?>"></label>
		<span class="error"><?php if (array_key_exists("email", $error)) {echo $error["email"];}?></span><br>
		<label>Zpráva: <textarea name="message" cols="30" rows="10"></textarea></label>
		<span class="error"><?php if (array_key_exists("message", $error)) {echo $error["message"];}?></span><br>
		<button name="send-button">Odeslat</button>
	</form>
	<?php
		if (isset($odeslano)) echo "<p class='$color'>$odeslano</p>"; 
	?>
</body>
</html>