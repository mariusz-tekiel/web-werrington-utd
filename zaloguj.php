<?php
		session_start();

		if((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
			header('Location: index.php');
			exit();
		}

		require_once "connect.php";
		
		$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
		
		if($polaczenie->connect_error!=0){
			echo "Error: ".$polaczenie->connect_errno;
		} 
		else
		{
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];

			$sql = "SELECT * FROM users WHERE user='$login' AND pass='$haslo'";
			// ten if sorawdza czy zapytanie zostalo poprawnie wykonane
			if($rezultat = @$polaczenie->query($sql)){
				$ilu_userow = $rezultat->num_rows;
				if($ilu_userow>0){
					$_SESSION['zalogowany']=true;

					$wiersz = $rezultat->fetch_assoc();
					$_SESSION['id'] = $wiersz['id'];
					$_SESSION['user'] = $wiersz['user'];
					$_SESSION['drewno'] = $wiersz['drewno'];
					$_SESSION['kamien'] = $wiersz['kamien'];
					$_SESSION['zboze'] = $wiersz['zboze'];
					$_SESSION['email'] = $wiersz['email'];
					$_SESSION['dnipremium'] = $wiersz['dnipremium'];

					//Jesli udalo nam sie zalogowac to usunmy z sesji zmienna blad
					unset($_SESSION['blad']);
					
					$rezultat->free_result();
					header('Location: gra.php');

				} else {
					$_SESSION['blad'] = '<span style="color:red">Login or password is not correct!</span>';
					header('Location: index-new.php');
				}
			}

			$polaczenie->close();

		}


		
		
?>