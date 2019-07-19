<?php
require_once 'database.php';
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: indexLogin.php');
		exit();
    }
       
  
    if(isset($_POST['points'])){
        include_once("config.php");
        $team_name=$_POST['team_name'];
        $played=$_POST['played'];
        $lost=$_POST['lost'];
		$won=$_POST['won'];
		$points=$_POST['points'];
		

		$conn = @new mysqli('localhost','root','','werrington');
       
		$sqlQuery = "INSERT INTO teams (team_name, played, lost,won,points)
					VALUES ('$team_name', '$played', '$lost','$won','$points')";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		
		 
    } elseif(isset($_POST['match_date']) ){
			include_once("config.php");
			//SELECT match_id as ID, match_date as MATCH_DATE,team1_name as HOME_TEAM,team2_name as GUEST_TEAM,team1_score as HT_SCORE,team2_score as GT_SCORE FROM matches";
			$match_date = $_POST['match_date'];
			$home_team = $_POST['home_team'];
			$guest_team = $_POST['guest_team'];
			$ht_score = $_POST['ht_score'];
			$gt_score = $_POST['gt_score'];

			$conn = @new mysqli('localhost','root','','werrington');
       
			$sqlQuery = "INSERT INTO matches (match_date, team1_name, team2_name,team1_score,team2_score)
					VALUES ('$match_date', '$home_team', '$guest_team','$ht_score','$gt_score')";
			$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		
	} 
	header('Location: tableEditor.php'); 
	
?>
