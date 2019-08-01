<?php
require_once 'database.php';
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: indexLogin.php');
		exit();
    }
        
    echo $_SESSION['id'];
    /*if(isset($_SESSION['id'])){
        include_once("config.php");
<<<<<<< HEAD
        $team_name=$_POST['team_name'];
        $played=$_POST['played'];
        $lost=$_POST['lost'];
		$won=$_POST['won'];
		$points=$_POST['points'];
		

		$conn = new mysqli('10.16.16.17','werr-8ec-u-240701','mario71','werr-8ec-u-240701');
=======
        $id=$_SESSION['id'];
		$conn = @new mysqli('localhost','root','','werrington');
>>>>>>> parent of 762b42f... Table 1 edition done. Next step table2 edit
       
		$sqlQuery = "INSERT INTO teams (team_name, played, lost,won,points)
VALUES ($'TEAM', $'played', $'lost',$'won',$'points')";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
<<<<<<< HEAD
		
		 
    } elseif(isset($_POST['match_date']) ){
			include_once("config.php");
			//SELECT match_id as ID, match_date as MATCH_DATE,team1_name as HOME_TEAM,team2_name as GUEST_TEAM,team1_score as HT_SCORE,team2_score as GT_SCORE FROM matches";
			$match_date = $_POST['match_date'];
			$home_team = $_POST['home_team'];
			$guest_team = $_POST['guest_team'];
			$ht_score = $_POST['ht_score'];
			$gt_score = $_POST['gt_score'];

			$conn = new mysqli('10.16.16.17','werr-8ec-u-240701','mario71','werr-8ec-u-240701');
       
			$sqlQuery = "INSERT INTO matches (match_date, team1_name, team2_name,team1_score,team2_score)
					VALUES ('$match_date', '$home_team', '$guest_team','$ht_score','$gt_score')";
			$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		
	} 
	header('Location: tableEditor.php'); 
	
=======
    }*/
>>>>>>> parent of 762b42f... Table 1 edition done. Next step table2 edit
?>
