<?php
	session_start();
	
	if(isset($_POST['email']))
	{
		//udana walidacja? Zalozmy, ze tak - ustawiamy flage
		$wszystko_OK=true;
		
		//Sprawdz poprawnosc nickname'abs
		$nick = $_POST['nick'];	
		
		//Sprawdzenie dlugosci nicka
		if((strlen($nick)<3) || (strlen($nick)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick must contain 3 to 20 characters!";
		}	
		
		if (ctype_alnum($nick) == false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nickname can contain only proper alphanumeric characters!";
		}
		
		// Sprawdz poprawnosc adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Input correct email address!"; 
		}
		//sprawdz poprawnosc hasla
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK = false;
			$_SESSION['e_haslo'] ="Password must contain 8 to 20 characters!"; 
		}
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK = false;
			$_SESSION['e_haslo'] ="Given passwords are not identical!"; 
		}
		
		$haslo_hash = password_hash($haslo1,PASSWORD_DEFAULT);
		//echo $haslo_hash;exit();
		
		//czy zaakceptowano regulamin?
		if(!isset($_POST['regulamin']))
		{
			$wszystko_OK = false;
			$_SESSION['e_regulamin'] ="Accept rules and conditions! "; 
		}
		
		// BOT OR NOT? Oto jest pytanie.
		$sekret="6Le1_lkUAAAAAKMjAWPvZ_05VWjEjpbWtdnyKAWi";
		
		$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);
		
		$odpowiedz = json_decode($sprawdz);
		
		if ($odpowiedz->success == false)
		{
			$wszystko_OK = false;
			$_SESSION['e_bot'] ="Confirm that you are not a bot."; 
		}
		
		//Zapamietaj wprowadzone dane
		$_SESSSION['fr_nick']=$nick;
		$_SESSSION['fr_email']=$nick;
		$_SESSSION['fr_haslo1']=$nick;
		$_SESSSION['fr_haslo2']=$nick;
		if(isset($_POST['regulamin'])) $_SESSION['regulamin']=true;
		
		
		
		require_once "connect.php";
		
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try
		{
			$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
			if ($polaczenie->connect_errno != 0)
			{
				throw new Exception(mysqli_connect_errno());			
			}
			else
			{
				//czy email juz istnieje
				$rezultat = $polaczenie->query("SELECT id FROM users WHERE email='$email'");
				
				if(!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK = false;
					$_SESSION['e_email'] ="Account with this email already exists!"; 
				}
				
				//czy nick jest juz zarezerwowany
				$rezultat = $polaczenie->query("SELECT id FROM users WHERE user='$nick'");
				
				if(!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK = false;
					$_SESSION['e_nick'] ="Player having this nickname already exists! Choose different one!"; 
				}	
				
				
				if($wszystko_OK==true)
				{
					//Hura wszystkie testy zaliczone, dodajemy gracza do bazy
					if($polaczenie->query("INSERT INTO users VALUES(NULL,'$nick','$haslo_hash','$email',100,100,100,now( )+ INTERVAL 14 DAY)"))
					{
						$_SESSION['udana_rejestracja']=true;
						header('Location:witamy.php');
					}	
					else					
					{
						throw new Exception($polaczenie->error);
						
					}	
				}
				
				$polaczenie->close();
			}
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Server error! We apologize for inconvenience. Please try to registrate later!</span>';
			
			//dziala na czas tworzenia aplikacji, a w wersji developerskiej w komentarz
			echo '<br/>Informacja developerska: '.$e;
		}
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przegladarkowa</title>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	<style>
		.error
		{
			color:red;
			margin-top:10px;
			margin-bottom:10px;			
		}
	</style>
</head>

<body>
	<form method="post">
	
		Nickname: <br/><input type="text" value="<?php 
		if (isset($_SESSION['fr_nick']))
		{
			echo $_SESSION['fr_nick'];
			unset($_SESSION['fr_nick']);
		}
		?>" name="nick" /><br/>
		
		<?php
			
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';	
				unset($_SESSION['e_nick']);				
			}				
		?>		
		
		
		Email: <br/><input type="text"  value="<?php 
		if (isset($_SESSION['fr_email']))
		{
			echo $_SESSION['fr_email'];
			unset($_SESSION['fr_email']);
		}
		?>" name="email" /><br/>
		
		<?php	
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';	
				unset($_SESSION['e_email']);		
			}		
		?>

		
		Your password: <br/><input type="password"  value="<?php 
		if (isset($_SESSION['fr_haslo1']))
		{
			echo $_SESSION['fr_haslo1'];
			unset($_SESSION['fr_haslo1']);
		}
		?>" name="haslo1" /><br/>
		
		<?php	
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';	
				unset($_SESSION['e_haslo']);		
			}		
		?>	
		
		Confirm password: <br/><input type="password"  value="<?php 
		if (isset($_SESSION['fr_haslo2']))
		{
			echo $_SESSION['fr_haslo2'];
			unset($_SESSION['fr_haslo2']);
		}
		?>" name="haslo2" /><br/><br/>
		
		<label> <input type="checkbox" name="regulamin" <?php
		if(isset($_SESSION['fr_regulamin']))
		{
			echo "checked";
			unset($_SESSION['fr_regulamin']);
		}
			
		?>/>I accept rules and conditions
		</label>
		
		<?php	
			if (isset($_SESSION['e_regulamin']))
			{
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';	
				unset($_SESSION['e_regulamin']);		
			}		
		?>
		
		<div class="g-recaptcha" data-sitekey="6Le1_lkUAAAAAFdWBJxylvW47JjCgqSD68wulnwd"></div>
		<?php	
			if (isset($_SESSION['e_bot']))
			{
				echo '<div class="error">'.$_SESSION['e_bot'].'</div>';	
				unset($_SESSION['e_bot']);		
			}		
		?>
		
		<br/><input type="Submit" value="Registrate" />	
	
	</form>
  </body>
</html>