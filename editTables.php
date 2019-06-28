<?php
	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Edit tables</title>
</head>

<body>
	
<?php
		echo "<p>Witaj ".$_SESSION['user'].'![<a href="logout.php">Wyloguj sie!</a>]<p>';   	
		
		echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];	
		echo "|  <b>Kamien</b>: ".$_SESSION['kamien'];	
		echo "|  <b>Zboze</b>: ".$_SESSION['zboze'];	
		
		echo "<p><b>E-mail</b>: ".$_SESSION['email'];	
		echo "<br /><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";	
		
		$dataczas = new DateTime('2150-05-01 09:33:59');
		echo "Data i czas serwera: ".$dataczas->format('Y-m-d H:i:s')."<br>";
		
		$koniec = DateTime::createFromFormat('Y-m-d H:i:s', $_SESSION['dnipremium']);
		
		$roznica = $dataczas->diff($koniec);
		
		
		
		if($dataczas<$koniec)
		{
		echo "Pozostalo premium: ".$roznica->format('%y lat, %m mies,%d dni, %h godz %i min, %s sek');
		}
		else
		{
			echo "Premium nieaktywne od: ".$roznica->format('%y lat, %m mies,%d dni, %h godz %i min, %s sek');
		}
?>

</body>
</html>