<?php
		session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location:index-new.php');
		exit();	
		
	}
	
	require_once"connect.php";
	
	mysqli_report(MYSQLI_REPORT_STRICT);
	
	try
	{
		$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
	
		if ($polaczenie->connect_errno != 0)
		{
			throw new Exception(mysqli_connect_errno());		
			
			//Stary komentarz ."Opis:".$polaczenie->connect_error;
			//Ta czesc kodu dopisujemy tylko kiedy piszemy strone
			//Przed umieszczenie strony na serwerze nalezy go usunac oraz dodac malpe przed new mysqli()
		}
		else
		{
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			
			//$login = htmlentities($login,ENT_QUOTES,"UTF-8");
			$rezultat = $polaczenie->query("SELECT * FROM users WHERE user='%s'");
			
			if(!$rezultat) throw new Exception($polaczenie->error);				
			
			if ($rezultat = @$polaczenie->query(
				sprintf("SELECT * FROM users WHERE user='%s'",
				mysqli_real_escape_string($polaczenie,$login))))
			{
				$ilu_userow = $rezultat->num_rows;
				if($ilu_userow>0)
				{
					$wiersz = $rezultat->fetch_assoc();//tablica ze slownym indexem
					if(password_verify($haslo,$wiersz['pass']))
					{
						
						$_SESSION['zalogowany'] = true;
								
						
						$_SESSION['id'] = $wiersz['id'];
						
						$_SESSION['user'] = $wiersz['user'];
						$_SESSION['drewno'] = $wiersz['drewno'];
						$_SESSION['kamien'] = $wiersz['kamien'];
						$_SESSION['zboze'] = $wiersz['zboze'];
						$_SESSION['email'] = $wiersz['email'];
						$_SESSION['dnipremium'] = $wiersz['dnipremium'];
						
						unset($_SESSION['blad']);
						
						$rezultat->free_result();//lub close() lub free_result() 
						
						header('Location:gra.php');
					}
					else
					{
						$_SESSION['blad'] = '<span style="color:red">Nie prawidlowy login lub haslo!</span>';
						header("Location:index-new.php");
					}

					
					//echo $user;
					//pozbywamy sie z pamieci juz nie potrzebnych rezultatow zapytania - jesli nie zrobimy umiera maly kotek
				}
				else
				{
					$_SESSION['blad'] = '<span style="color:red">Nie prawidlowy login lub haslo!</span>';
					header("Location:index-new.php");
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
	
		

?>