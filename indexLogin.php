<?php
	session_start();
	$_SESSION['zalogowany']=false;
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		header('Location: tableEditor.php');
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
			<h3>Registration only for members of club! </h3>
			<br>
			<br>
			
			<form action="zaloguj.php" method="post">
			
				<label for="">Login:</label> <br /> <input type="text" name="login" /> <br />
				<label for="">Password:</label><br /> <input type="password" name="haslo" /> <br /><br />
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