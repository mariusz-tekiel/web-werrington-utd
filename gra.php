<?php
	session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przegladarkowa</title>
</head>

<body>
    
<?php
		echo "<p>Witaj ".$_SESSION['user']."!";
		echo "<b>Drewno: </b> ".$_SESSION['drewno'];
		echo "| <b>Kamien: </b> ".$_SESSION['kamien'];
		echo "| <b>Zboze: </b> ".$_SESSION['zboze'];
		echo "| <b>E-mail: </b> ".$_SESSION['email'];
		echo "| <b>Dni premium: </b> ".$_SESSION['dnipremium'];
?>

</body>
</html>