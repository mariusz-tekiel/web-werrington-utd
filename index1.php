<!DOCTYPE html>
<html class="no-js" lang="en" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="utf-8">
  <title>Werrington United</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="Content-language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="google" content="notranslate">
  <meta name="description"
    content="Voleyball sport club located in Peterborough. It is gethering half-professional players and fans of this disciplines. ">
  <meta name="keywords" content="volleyball, ball, Peterborugh, Werrington, Utd, sport, volleyball peach, club, league">
  <meta name="theme-color" content="#fff">

  <!-- Open Graph data -->
  <meta property="og:title" content="Volleyball Club" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.sporthouse.md/" />
  <meta property="og:image" content="http://www.sporthouse.md/og/example-og.png" />
  <meta property="og:description" content="Volleyball Team" />
  <meta property="og:site_name" content="Werrington Utd" />

  
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="icon" href="img/favicon/favicon-16.png" sizes="16x16" type="image/png">
  <link rel="icon" href="img/favicon/favicon-32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="img/favicon/favicon-48.png" sizes="48x48" type="image/png">
  <link rel="icon" href="img/favicon/favicon-62.png" sizes="62x62" type="image/png">
  <link rel="icon" href="img/favicon/favicon-192.png" sizes="192x192" type="image/png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/scheduleStyle.css">
  <link rel="stylesheet" href="css/galleryStyle.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112771295-1"></script>
  
</head>

<body>
    <h2>OTO DANE:</h2>
    <div>
      
 
 <?php
    echo "<table style='border: solid 1px black;'>";
		echo "<tr><th>Team_Id</th><th>Team</th><th>Played</th><th>Lost</th><th>Won</th><th>Points</th></tr>";
		class TableRows1 extends RecursiveIteratorIterator { 
		     function __construct($it) { 
		         parent::__construct($it, self::LEAVES_ONLY); 
		     }
		     function current() {
		         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
		     }
		     function beginChildren() { 
		         echo "<tr>"; 
		     } 
		     function endChildren() { 
		         echo "</tr>" . "\n";
		     } 
		 }
   try
   {
      $pdo = new PDO('mysql:host=localhost;dbname=werrington', 'root', '');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $stmt = $pdo->query('SELECT team_id as no, team_name as team, played, lost, won, points FROM `teams` ');

     echo '<TABLE class="table"  border="2">';
          
      foreach($stmt as $row)
      {
        //echo '<li>'.$row['match_date'].' '.$row['team1_name'].' '.$row['team2_name'].'</li>';
     
    echo "<tr><td>{$row['no']}&nbsp</td><td>{$row['team']}</td><td>{$row['played']}</td>
      <td>{$row['lost']}</td><td>{$row['won']}</td><td>{$row['points']}</td></tr>"; 

      }
      $stmt->closeCursor();

     echo '</TABLE>';
   }
   catch(PDOException $e)
   {
      echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
   }
?>

<?php
		echo "<table style='border: solid 1px black;'>";
		echo "<tr><th>Id</th><th>Date</th><th>Team1</th><th>Team2</th><th>Score Team1</th><th>Score Team2</th></tr>";
		class TableRows extends RecursiveIteratorIterator { 
		     function __construct($it) { 
		         parent::__construct($it, self::LEAVES_ONLY); 
		     }
		     function current() {
		         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
		     }
		     function beginChildren() { 
		         echo "<tr>"; 
		     } 
		     function endChildren() { 
		         echo "</tr>" . "\n";
		     } 
		 }
		     
			
		try {
			     
			     
			     $stmt = $pdo->prepare("SELECT * FROM matches"); 
			     $stmt->execute();
			     // set the resulting array to associative
			     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
			     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
			         echo $v;
			     }
			}
			catch(PDOException $e) {
			     echo "Error: " . $e->getMessage();
			}
			$conn = null;
			echo "</table>";
				?>


    </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDp5-_DaBgWKUbg34oVgi4QSIKXJ5YC_aI&callback=myMap"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/galleryJS.js"></script>
</body>

</html>
