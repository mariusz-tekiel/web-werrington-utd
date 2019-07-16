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
	<script src="bootstable.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<title>Table editor</title>

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
    var f6 = '<td><a class="button delete" href="#">Usuń wiersz</a></td>';

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
	<p><a href="#" id="dodajWiersz" class="add button">Dodaj nowy wiersz</a></p>
<?php
	
		include_once("config.php");
		$conn = @new mysqli('localhost','root','','werrington');
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
					<td><a class="delete button" href="#">Usuń wiersz</a></td>				   				   				  
					</tr>
				<?php } ?>
			</tbody>
		</table>
					
<table id="tabela">
	<thead>
		<tr>
			<th>Lp.</th>
			<th>Nazwa</th>
			<th>Typ</th>
			<th>Akcje</th>
		</tr>
	</thead>
	<tbody>
		<tr id="wiersz-1">
			<td>1</td>
			<td>Pozycja 1</td>
			<td>Typ 1</td>
			<td><a class="delete button" href="#">Usuń wiersz</a></td>
		</tr>
		<tr id="wiersz-2">
			<td>2</td>
			<td>Pozycja 2</td>
			<td>Typ 2</td>
			<td><a class="delete button" href="#">Usuń wiersz</a></td>
		</tr>
	</tbody>
</table>
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

	
	<hr>
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