<?php
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: index-new.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Table editor</title>
</head>

<body>
    
<?php
		
		echo "<p>Witaj ".$_SESSION['user'].'![<a href="logout.php">Logout</a>]</p>';

		echo 'Jesteś zalogowany. Cool!<br><br>';
		echo "<b>Drewno: </b> ".$_SESSION['drewno'];
		echo "| <b>Kamien: </b> ".$_SESSION['kamien'];
		echo "| <b>Zboze: </b> ".$_SESSION['zboze'];
		echo "| <b>E-mail: </b> ".$_SESSION['email'];
		echo "| <b>Dni premium: </b> ".$_SESSION['dnipremium'];
?>

</body>
</html>