<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
	{
		header("location: login.php");
		exit;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	Pagina de agendamento em processo.....

	<a href="sair.php">sair</a>
</body>
</html>