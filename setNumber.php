<?php
require_once 'database.php';
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: peterborough-volleyball-login');
		exit();
    }
    
    if(isset($_POST['id'])){
        include_once("config.php");
        $id = $_POST['id'];
        $new_id = $_POST['new_id'];
        
        echo $id;
        echo $new_id;

		$conn = @new mysqli('localhost','root','','werrington');
       
		$sqlQuery = "UPDATE teams SET team_id='$new_id' WHERE team_id=$id";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		
    } elseif(isset($_POST['match_id']) ){
			include_once("peterborough-volleyball-configuration");
			
            $match_id = $_POST['match_id'];
            $new_match_id = $_POST['new_match_id'];
            
			echo $new_match_id;
			$conn = @new mysqli('localhost','root','','werrington');
       
			$sqlQuery = "UPDATE matches SET match_id='$new_match_id' WHERE match_id = '$match_id' ";
			$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		
	} 
	header('Location: peterborough-volleyball-database'); 
?>
