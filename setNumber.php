<?php
require_once 'database.php';
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: indexLogin.php');
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
		
		 header('Location: tableEditor.php'); 

    }
?>
