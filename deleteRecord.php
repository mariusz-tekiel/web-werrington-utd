<?php

require_once 'database.php';
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: indexLogin.php');
		exit();
    }
    
    
    echo $_POST['id'];
    
    
    if(isset($_POST['id'])){
        include_once("config.php");
        $id=$_POST['id'];
		$conn = new mysqli('10.16.16.17','werr-8ec-u-240701','mario71','werr-8ec-u-240701');
		$sqlQuery = "DELETE FROM teams WHERE team_id = '$id'";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
<<<<<<< HEAD
	}  elseif(isset($_POST['match_id']) ){
			include_once("config.php");
			//SELECT match_id as ID, match_date as MATCH_DATE,team1_name as HOME_TEAM,team2_name as GUEST_TEAM,team1_score as HT_SCORE,team2_score as GT_SCORE FROM matches";
			$match_id = $_POST['match_id'];
			
			$conn = new mysqli('10.16.16.17','werr-8ec-u-240701','mario71','werr-8ec-u-240701');
       
			$sqlQuery = "DELETE FROM matches WHERE match_id='$match_id' ";
			$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		
	} 
	header('Location: tableEditor.php'); 
	
=======
    }

>>>>>>> parent of 762b42f... Table 1 edition done. Next step table2 edit
?>