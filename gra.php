<?php
	session_start();
	if(!isset($_SESSION['zalogowany'])){
		header('Location: indexLogin.php');
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Show user data</title>
</head>

<body>
    
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
		
		echo "<p>Witaj ".$_SESSION['user'].'![<a href="logout.php">Logout</a>]</p>';

		echo 'Jesteś zalogowany<br><br>';
		echo "<b>Drewno: </b> ".$_SESSION['drewno'];
		echo "| <b>Kamien: </b> ".$_SESSION['kamien'];
		echo "| <b>Zboze: </b> ".$_SESSION['zboze'];
		echo "| <b>E-mail: </b> ".$_SESSION['email'];
		echo "| <b>Dni premium: </b> ".$_SESSION['dnipremium'];
?>

</body>
</html>