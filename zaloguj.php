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

			//zabezpieczenie przed wstrzykiwaniem sql
			$login = htmlentities($login,ENT_QUOTES,"UTF-8");
			$haslo = htmlentities($haslo,ENT_QUOTES,"UTF-8");

			
			// ten if sprawdza czy zapytanie zostalo poprawnie wykonane
			if($rezultat = @$polaczenie->query(
				sprintf("SELECT * FROM users WHERE user='%s' AND pass='%s'",
				mysqli_real_escape_string($polaczenie,$login),
				mysqli_real_escape_string($polaczenie,$haslo)))){

					$ilu_userow = $rezultat->num_rows;
					if($ilu_userow>0){
						$_SESSION['zalogowany']=true;

						$wiersz = $rezultat->fetch_assoc();
						$_SESSION['id'] = $wiersz['id'];
						$_SESSION['user'] = $wiersz['user'];
						
						//Jesli udalo nam sie zalogowac to usunmy z sesji zmienna blad
						unset($_SESSION['blad']);
						
						$rezultat->free_result();
						header('Location: tableEditor.php');

				} else {
					$_SESSION['blad'] = '<span style="color:red;font-size:18px;" >Login or password is not correct!</span>';
					$_SESSION['zalogowany']=false;
					header('Location: indexLogin.php');
				}
			}
			$polaczenie->close();
		}	
?>