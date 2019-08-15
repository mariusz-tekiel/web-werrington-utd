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
   <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
    crossorigin="anonymous">
	<link rel="stylesheet" href="css/tableEditor.css">
	<script src="bootstable.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<title>Table editor</title>

</head>

<body>
<main> 
<div class="container" id="tableEditor">
      <div  class="row">    
         <div class="col-sm-12" id="welcome">
            <header>
               <?php
                  echo '<a href="logout.php"><input type="submit" value="LOGOUT" name="logout" /></a>';
                  //echo '<a href="logout.php"><< LOGOUT</a>';
                  //echo "<h4>Welcome ".$_SESSION['user'].'! You are logged in.</h4>';
               ?>
            </header>
         </div> 
      </div>      
   <section>
      	
      <div class="row">
                
         <div class="col-sm-12 col-md-12 mx-auto d-block">
            
               <h2>TABLE TEAMS EDITOR</h2>
               <br>
            
               <?php
                  
                     include_once("config.php");
                     $conn = new mysqli('10.16.16.17','werr-8ec-u-240701','mario71','werr-8ec-u-240701');
                     $sqlQuery = "SELECT team_id as NO, team_name as TEAM, played as PLAYED, won as WON, lost as LOST, points as POINTS FROM `teams`";
                     $resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
                     ?>
               <table id="tabela" class="table table-responsive table-bordered">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Team</th>
                              <th>Played</th>                              	
                              <th>Won</th>	
                              <th>Lost</th>											
                              <th>Points</th>						
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
                              <td><?php echo $developer ['WON']; ?></td>
                              <td><?php echo $developer ['LOST']; ?></td>
                              <td><?php echo $developer ['POINTS']; ?></td>  
                                                                        
                              </tr>
                              
                           <?php } ?>
                        </tbody>
                        <tr>
                                 <form action="peterborough-volleyball-add-row" method="post">
                                    <td> <input  type="submit" value="Add new record" name="addNew"/> </td>
                                    <td> <input  type="text" name="team_name" /> </td>
                                    <td> <input  type="text" name="played" /> </td>                                    
                                    <td> <input  type="text" name="won" /> </td>
                                    <td> <input  type="text" name="lost" /> </td>
                                    <td> <input  type="text" name="points" /> </td>			
                              
                                 </form>
                        </tr>
                        <tr>
                           <form action="peterborough-volleyball-delete-record" method="post">
                              
                              <td><input type="submit" value="Delete Record" name="deleteButton"/></td>
                              <td><input id="id" type="text" name="id"/> </td> 
                              <td><label for="id">&larr; Input No To Delete</label> 	</td> 
                              <td><label for="id"></label></td>
                              <td><label for="id"></label></td>
                              <td><label for="id"></label></td>
                           </form>			
                        </tr>
                        <tr>
                           <form action="peterborough-volleyball-change-number" method="post">
                              <td><input type="submit" value="Change Record No " name="changeButton"/></td>
                              <td><input id="id" type="text" name="id"/> </td> 
                              <td><label for="id">&larr; Old ID  &nbsp;  | &nbsp;  New ID &rarr;</label> 	</td> 
                              <td><input id="new_id" type="text" name="new_id"/> </td> 					 
                              <td><label for="id"></label></td>
                              <td><label for="id"></label></td>
                           </form>			
                        </tr>
                     </table>
                  <hr>
                           </div>     
         </div>
         <div class="row">            
            <div class="col-sm-12 col-md-12 mx-auto d-block">
               <h2>TABLE MATCHES EDITOR</h2>
            <br>
               <?php
                include_once("config.php");
                $conn = new mysqli('10.16.16.17','werr-8ec-u-240701','mario71','werr-8ec-u-240701');
                $sqlQuery = "SELECT match_id as ID, match_date as MATCH_DATE,team1_name as HOME_TEAM,team2_name as GUEST_TEAM,team1_score as HT_SCORE,team2_score as GT_SCORE FROM matches";
                $resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
               ?>
               <table id="tabela" class="table table-responsive table-bordered">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>MATCH_DATE</th>
                        <th>HOME_TEAM</th>
                        <th>GUEST_TEAM</th>	
                        <th>HT_SCORE</th>												
                        <th>GT_SCORE</th>						
                     </tr>
                     
                  </thead>
                  <tbody>
                     <?php 
                     
                     while( $developer = mysqli_fetch_assoc($resultSet) ) { 
                        
                     ?>
                        
                        <tr id="<?php echo $developer ['ID'];										
                              ?>">
                        <td><?php echo $developer ['ID']; ?></td>
                        <td><?php echo $developer ['MATCH_DATE']; ?></td>
                        <td><?php echo $developer ['HOME_TEAM']; ?></td>
                        <td><?php echo $developer ['GUEST_TEAM']; ?></td>
                        <td><?php echo $developer ['HT_SCORE']; ?></td>
                        <td><?php echo $developer ['GT_SCORE']; ?></td>  
                                                                  
                        </tr>
                        
                     <?php } ?>
                  </tbody>
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
                        <td><label for="id">&larr; ID To Delete</label></td> 					 
                        <td><label for="id"></label></td>
                        <td><label for="id"></label></td>
                        <td><label for="id"></label></td>
                     </form>			
                  </tr>
                  <tr>
                     <form action="peterborough-volleyball-change-number" method="post">
                        <td><input type="submit" value="Change Record No " name="changeButton"/></td>
                        <td><input id="match_id" type="text" name="match_id"/> </td> 
                        <td><label for="match_id">&larr; Old ID &nbsp; | &nbsp;  New ID &rarr;</label> 	</td> 
                        <td><input id="new_match_id" type="text" name="new_match_id"/> </td> 					 
                        <td><label for="id"></label></td>
                        <td><label for="id"></label></td>
                     </form>			
                  </tr>
               </table>
               
               <hr>
            </div>   
         </div>
      
   </section>
   </div>
 </main>

</body>
</html>