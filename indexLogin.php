<?php
	session_start();
	$_SESSION['zalogowany']=false;
	if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		header('Location: peterborough-volleyball-database');
		exit();
	}
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
	<link rel="stylesheet" href="css/login.css">
	<title>Login to werrington utd</title>
</head>

<body>	
	<div class="container">
		<div class="row">
          <div class="col-xm-12 col-md-10 col-xl-9 mx-auto d-block"> 
				<form action="peterborough-volleyball-werrington-utd" name="return">
					<input type="submit" value="Return" name="return"/>
				</form>	
				<div class="login-window">
					<a href="rejestracja.php" class="not-active">Registration - only for club members!</a>
					<br />												
					<form action="peterborough-volleyball-club-players" method="post">
					
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
		</div>
	</div>
</body>
</html>