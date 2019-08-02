<?php
	require_once 'database.php';

	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: indexLogin.php');
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
	<script src="bootstable.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<title>Table editor</title>

<<<<<<< Updated upstream
<script>
	$(document).ready(function() {
  //funkcja odczytująca kliknięcie w element o id: dodajWiersz
  //i wykonująca akcję dodawania nowego wiersza do tabeli
  $("#dodajWiersz").click(function() {
    //policz ile jest wierszy w tabeli
    var liczba = $("#tabela tr").length;

    //pierwsza komórka
    var f1 = '<td><input type="text" class="medium" name="team[]"/></td>';

    //druga komórka
	var f2 = '<td><input type="text" class="medium" name="played[]"/></td>';
	
	var f3 = '<td><input type="text" class="medium" name="lost[]"/></td>';
	
	var f4 = '<td><input type="text" class="medium" name="won[]"/></td>';
	
    var f5 = '<td><input type="text" class="medium" name="points[]"/></td>';

    //szósta komórka
    var f6 = '<td><a class="button delete" href="#">Delete row</a></td>';

    //w tej zmiennej definiujemy nowy wiersz w tabeli
    var row =
      '<tr class="none" id="wiersz-' +
      liczba +
      '"><td>' +
      liczba +
      "</td>" +
      f1 +
      f2 +
      f3 +
      f4 +
      f5 +
      f6 +
	  
      "</tr>";

    //dołącz nowy wiersz na końcu tabeli
    $("#tabela")
      .find("tbody")
      .append(row);

    //usuwamy klasę: none z wiersza oraz animujemy efekt dodawania wiersza
    $("tr.none")
      .removeClass("none")
      .animate({ backgroundColor: "#66B04D", color: "#fff" }, 300, function() {
        $(this).animate({ backgroundColor: "#fff", color: "#000" }, 300);
      });
  });

  //funkcja odczytująca kliknięcie w element o klasie: delete
  //i wykonująca akcję usuwania danego wiersza z tabeli
  //oraz dokonuje przeliczenia numerów wierszy w tabeli
  $(".delete").live("click", function() {
    //znajdź najbliższy wiersz będący elementem nadrzędnym dla linka usuwającego ten wiersz
	//i wykonaj animację
	
    $(this)
      .closest("tr")
      .animate({ backgroundColor: "#EF3E23", color: "#fff" }, 300, function() {
        //usuń dany wiersz
		$(this).remove();
        		
        //aktualizuj numery pozostałych wierszy
        //dzięki temu gdy usuniemy wiersz w środku tabeli
        //to nie będzie istniała dziura w numeracji wierszy
        $("#tabela > tbody > tr").each(function(i) {
          //wpisz nowy numer wewnątrz pierwszej komórki danego wiersza
          $(this)
            .find("td:first-child")
            .text(i + 1);
        });
      });
  });
});

</script>


=======
>>>>>>> Stashed changes
</head>

<body>
 <header>
	<?php
<<<<<<< Updated upstream
		echo '<a href="logout.php"><input type="submit" value="LOGOUT" name="logout" /></a>';
		//echo '<a href="logout.php"><< LOGOUT</a>';
		echo "<h4>Welcome ".$_SESSION['user'].'! You are logged in.</h4>';
		
=======
		echo '<a href="logout.php">Logout</a>';
		echo "<p>Witaj ".$_SESSION['user'].'!</p>';
		echo 'Jesteś zalogowany. Cool!<br><br>';
>>>>>>> Stashed changes
	?>

</header>
<section class = "table">
	<h2>TABLE TEAMS EDITOR</h2>
	<br>
<<<<<<< Updated upstream
	<p><a href="#" id="dodajWiersz" class="add button">Add new row</a></p>
<?php
	
		include_once("config.php");
		$conn = new mysqli('10.16.16.17','werr-8ec-u-240701','mario71','werr-8ec-u-240701');
		$sqlQuery = "SELECT team_id as NO, team_name as TEAM, played as PLAYED, lost as LOST, won as WON, points as POINTS FROM `teams`";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		?>
<table id="tabela" class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Team</th>
					<th>Played</th>
					<th>Lost</th>	
					<th>Won</th>												
					<th>Points</th>												
					<th>Action</th>												
				</tr>
			</thead>
			<tbody>
				<?php 
				
				while( $developer = mysqli_fetch_assoc($resultSet) ) { 
					
				?>
					
					<tr id="<?php echo $developer ['NO'];										
							?>">
					<td><?php echo $developer ['NO']; ?></td>
					<td><?php echo $developer ['TEAM']; ?></td>
					<td><?php echo $developer ['PLAYED']; ?></td>
					<td><?php echo $developer ['LOST']; ?></td>
					<td><?php echo $developer ['WON']; ?></td>
					<td><?php echo $developer ['POINTS']; ?></td>  
					<td><a class="delete button" href="#">Delete row</a></td>				   				   				  
					</tr>
				<?php } ?>
			</tbody>
<<<<<<< HEAD
			<tr>
						<form action="peterborough-volleyball-add-row" method="post">
							<td> <input  type="submit" value="Add new record" name="addNew"/> </td>
							<td> <input  type="text" name="team_name" /> </td>
							<td> <input  type="text" name="played" /> </td>
							<td> <input  type="text" name="lost" /> </td>
							<td> <input  type="text" name="won" /> </td>
							<td> <input  type="text" name="points" /> </td>			
					
						</form>
			</tr>
			<tr>
				<form action="peterborough-volleyball-delete-record" method="post">
					 
					 <td><input type="submit" value="Delete Record" name="deleteButton"/></td>
					 <td><input id="id" type="text" name="id"/> </td> 
					 <td><label for="id">&larr; Input Record No To Delete</label> 	</td> 
					 <td><label for="id"></label></td>
					 <td><label for="id"></label></td>
					 <td><label for="id"></label></td>
				</form>			
			</tr>
			<tr>
				<form action="peterborough-volleyball-change-number" method="post">
					 <td><input type="submit" value="Change Record No " name="changeButton"/></td>
					 <td><input id="id" type="text" name="id"/> </td> 
					 <td><label for="id">&larr; Old Number  &nbsp;  | &nbsp;  New Number &rarr;</label> 	</td> 
					 <td><input id="new_id" type="text" name="new_id"/> </td> 					 
					 <td><label for="id"></label></td>
					 <td><label for="id"></label></td>
				</form>			
			</tr>
		</table>
	<hr>
</section>
<section class="table">
	<h2>TABLE MATCHES EDITOR</h2>
	<br>
	<?php
	
		include_once("config.php");
		$conn = new mysqli('10.16.16.17','werr-8ec-u-240701','mario71','werr-8ec-u-240701');
		$sqlQuery = "SELECT match_id as ID, match_date as MATCH_DATE,team1_name as HOME_TEAM,team2_name as GUEST_TEAM,team1_score as HT_SCORE,team2_score as GT_SCORE FROM matches";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		?>
		<table id="tabela" class="table table-bordered">
=======
		</table>
		<form action="deleteRecord.php" method="post">
				Input number of row you wanna delete: <br /> <input type="text" name="id" /> <br />
				<input type="submit" value="Delete" name="deleteButton"/>
			
		</form>			   				   				  

  <?php
	
		include_once("config.php");
		$conn = @new mysqli('localhost','root','','werrington');
		$sqlQuery = "SELECT team_id as NO, team_name as TEAM, played as PLAYED, lost as LOST, won as WON, points as POINTS FROM `teams`";
		$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
		?>
		<table id="editTable" class="table table-bordered">
>>>>>>> parent of 762b42f... Table 1 edition done. Next step table2 edit
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
<<<<<<< HEAD
			<tr>
						<form class="add" action="peterborough-volleyball-add-row" method="post">
							
							<td><input  type="submit" value="Add new record" name="addNew"/></td>
							<td> <input  type="text" name="match_date" /> </td>
							<td> <input  type="text" name="home_team" /> </td>
							<td> <input  type="text" name="guest_team" /> </td>
							<td> <input  type="text" name="ht_score" /> </td>
							<td> <input  type="text" name="gt_score" /> </td>			
						</form>
			</tr>
			<tr>
				<form action="peterborough-volleyball-delete-record" method="post">
					 
					 <td><input type="submit" value="Delete Record" name="deleteButton"/></td>
					 <td><input id="match_id" type="text" name="match_id"/> </td> 
					 <td><label for="id">&larr; Input Record No To Delete</label></td> 					 
					 <td><label for="id"></label></td>
					 <td><label for="id"></label></td>
					 <td><label for="id"></label></td>
				</form>			
			</tr>
			<tr>
				<form action="peterborough-volleyball-change-number" method="post">
					 <td><input type="submit" value="Change Record No " name="changeButton"/></td>
					 <td><input id="match_id" type="text" name="match_id"/> </td> 
					 <td><label for="match_id">&larr; Number to Change &nbsp; | &nbsp;  New No &rarr;</label> 	</td> 
					 <td><input id="new_match_id" type="text" name="new_match_id"/> </td> 					 
					 <td><label for="id"></label></td>
					 <td><label for="id"></label></td>
				</form>			
			</tr>
		</table>
		
=======
		</table>

	
>>>>>>> parent of 762b42f... Table 1 edition done. Next step table2 edit
	<hr>
=======
	<br>
	<br>
>>>>>>> Stashed changes
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