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
			
			<form action="logowanie.php" method="post">
			
				Login: <br /> <input type="text" name="login" /> <br />
				Password: <br /> <input type="password" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj" name="log_in"/>
			
			</form>
			<br>
					
			<?php
				echo '<pre>';
				if( isset($_GET['error'])){
						switch($_GET['error']){
							case 0: echo '<span style="color:red">Log in please</span>';break;
							case 1: echo '<span style="color:red">Fill in all text fields</span>';break;
						}
				}
				echo '</pre>';
			?>
		</div>	
	</div>
<?php
	if(isset($_SESSION['blad']))
  		echo $_SESSION['blad'];
?>

</body>
</html>