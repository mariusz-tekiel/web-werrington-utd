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
        $id=$_SESSION['id'];
		$conn = @new mysqli('localhost','root','','werrington');
       
		$sqlQuery = "INSERT INTO teams (team_name, played, lost,won,points)
VALUES ($'TEAM', $'played', $'lost',$'won',$'points')";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
    }*/
?>
