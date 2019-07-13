<?php
    require_once 'database.php';
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: index-new.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Table editor</title>
</head>

<body>
 <header>
	<?php

		echo '<a href="logout.php">Logout</a>';
		echo "<p>Witaj ".$_SESSION['user'].'!</p>';
		echo 'Jesteś zalogowany. Cool!<br><br>';
	?>

</header>
<section class = "table">
	<h2>TABLE TEAMS EDITOR</h2>
	<br>

	<?php
	try {
		$con= new PDO('mysql:host=localhost;dbname=werrington', 'root', '');
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "SELECT team_id as NO, team_name as TEAM, played as PLAYED, lost as LOST, won as WON, points as POINTS FROM `teams`";
	//first pass just gets the column names
		print '<table class="table" border="2px"> ';
		$result = $con->query($query);
	//return only the first row (we only need field names)
		$row = $result->fetch(PDO::FETCH_ASSOC);
		print " <tr>";
		foreach ($row as $field => $value){
		print " <th>$field</th>";
		} // end foreach
		print " </tr>";
		//second query gets the data
		$data = $con->query($query);
		$data->setFetchMode(PDO::FETCH_ASSOC);
		foreach($data as $row){
			print " <tr>";
		foreach ($row as $name=>$value){
			print " <td>$value</td>";
		} // end field loop
		print " </tr>";
		} // end record loop
		print "</table>";
	}
	catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
	} // end try
	
	?>
</section>

<section class="table">
	<h2>TABLE MATCHES EDITOR</h2>
	<br>
	<?php
		try {
			$con= new PDO('mysql:host=localhost;dbname=werrington', 'root', '');
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "SELECT match_id as ID, match_date as MATCH_DATE,team1_name as HOME_TEAM,team2_name as GUEST_TEAM,team1_score as HT_SCORE,team2_score as GT_SCORE FROM matches";
		//first pass just gets the column names
			print '<table class="table" border="2px"> ';
			$result = $con->query($query);
		//return only the first row (we only need field names)
			$row = $result->fetch(PDO::FETCH_ASSOC);
			print " <tr>";
			foreach ($row as $field => $value){
			print " <th>$field</th>";
			} // end foreach
			print " </tr>";
			//second query gets the data
			$data = $con->query($query);
			$data->setFetchMode(PDO::FETCH_ASSOC);
			foreach($data as $row){
				print " <tr>";
			foreach ($row as $name=>$value){
				print " <td>$value</td>";
			} // end field loop
			print " </tr>";
			} // end record loop
			print "</table>";
		}
		catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
		} 		
	?>
</section>
</body>
</html>