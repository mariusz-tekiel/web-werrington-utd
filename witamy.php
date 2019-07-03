<?php

	session_start();
	
	if ((!isset($_SESSION['udana_rejestracja'])))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udana_rejestracja']);
	}
	//Usuwanie zmiennych pamietajacych wartosci wpisane do formularza
	if(isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if(isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if(isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if(isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if(isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie bledow rejestracji
	if(isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if(isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if(isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if(isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if(isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>
	
	Thank you for registration in our service. You can already login to your account!<br /><br />
	
	<a href="index-new.php">Zaloguj sie na swoje konto!</a>
	<br /><br />
	

</body>
</html>