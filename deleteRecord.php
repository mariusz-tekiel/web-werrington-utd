<?php

require_once 'database.php';
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: indexLogin.php');
		exit();
    }
    
    
    echo $_SESSION['id'];
    if(isset($_SESSION['id'])){
        include_once("config.php");
        $id=$_SESSION['id'];
		$conn = @new mysqli('localhost','root','','werrington');
		$sqlQuery = "DELETE FROM teams WHERE team_id = '$id'";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
    }

?>