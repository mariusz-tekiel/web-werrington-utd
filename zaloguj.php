<?php

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
					$wiersz = $rezultat->fetch_assoc();
					$user = $wiersz['user'];

					$rezultat->free_result();
					echo $user;
				} else {

				}
			}


			echo "<br/><br/>It works";
			$polaczenie->close();

		}


		
		
?>