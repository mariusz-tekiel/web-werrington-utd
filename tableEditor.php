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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
    crossorigin="anonymous">
	<link rel="stylesheet" href="css/tableEditor.css">
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
<section class = "table" id="table1">
	<h2>TABLE TEAMS EDITOR</h2>
	<br>
	<form action="/tableEditor.php" class="form-inline">
		<label for="teamName">Team name:</label><br>
		<input type="text" id="teamName" class="input-w" name="teamName" value=""><br>
		Matches played:<br>
		<input type="text" name="played" value=""><br>
		Matches lost:<br>
		<input type="text" name="lost" value=""><br>
		Matches won:<br>
		<input type="text" name="won" value=""><br>
		Points:<br>
		<input type="text" name="points" value=""><br>
		
		<br>
		<input type="submit" value="Add new team">
		<br>
		<br>
		
	</form>
  <?php
	
		include_once("config.php");
		$conn = @new mysqli('localhost','root','','werrington');
		$sqlQuery = "SELECT team_id as NO, team_name as TEAM, played as PLAYED, lost as LOST, won as WON, points as POINTS FROM `teams`";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		?>
		<table id="editableTable" class="table table-bordered">
			<thead>
				<tr>
					<th>NO</th>
					<th>Team</th>
					<th>Played</th>
					<th>Lost</th>	
					<th>Won</th>												
					<th>Points</th>												
				</tr>
			</thead>
			<tbody>
				<?php while( $developer = mysqli_fetch_assoc($resultSet) ) { ?>
				<tr id="<?php echo $developer ['NO']; ?>">
				<td><?php echo $developer ['NO']; ?></td>
				<td><?php echo $developer ['TEAM']; ?></td>
				<td><?php echo $developer ['PLAYED']; ?></td>
				<td><?php echo $developer ['LOST']; ?></td>
				<td><?php echo $developer ['WON']; ?></td>
				<td><?php echo $developer ['POINTS']; ?></td>  				   				   				  
				</tr>
				<?php } ?>
			</tbody>
		</table>




/*	try {
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
	} // end try */
	
	?>
	<hr>
</section>

<section class="table" id="table2">
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