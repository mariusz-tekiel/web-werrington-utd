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
		$conn = @new mysqli('localhost','root','','werrington');
		$sqlQuery = "DELETE FROM teams WHERE team_id = '$id'";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
    }
	 header('Location: tableEditor.php'); 
?>