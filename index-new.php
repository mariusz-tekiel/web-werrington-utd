<?php
	session_start();

	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		header('Location: gra.php');
		exit();
	}
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/login.css">
	<title>Login to werrington utd</title>
</head>

<body>	
	<div class="container">
		<div class="login-window">
			<a href="rejestracja.php" class="not-active">Registration - create free account!</a>
			<br />
			Registration only for members of club! 
			<br>
			<br>
			
			<form action="zaloguj.php" method="post">
			
				Login: <br /> <input type="text" name="login" /> <br />
				Password: <br /> <input type="password" name="haslo" /> <br /><br />
				<input type="submit" value="Login" name="log_in"/>
			
			</form>
			<br>
			<?php
				if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
			
			?>
		</div>	
	</div>

</body>
</html>