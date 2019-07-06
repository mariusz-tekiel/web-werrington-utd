<?php
    if( isset($_POST['log_in'])){
         $login = $_POST['login'];
         $haslo = $_POST['haslo'];   

         if(empty($login) || empty($haslo)){
             header("Location: index-new.php?error=1");
             exit();
         }
        
         require_once"connect.php";
	     
        $polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
       /* $db = mysql_connect('localhost','root','') or die ("Database connection denied!") ;
        mysql_select_db('programowanie');
        $wynik = mysql_query("SELECT * FROM users WHERE login*$login") or die("Downloading data not successful!");

        $rows = mysql_fetch_array($wynik);
        echo $rows['login'];*/

    }else{
        header("Location: index-new.php?errror=0");
        exit;
    }
   

?>