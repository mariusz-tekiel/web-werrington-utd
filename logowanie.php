<?php
    if( isset($_POST['log_in'])){
         $login = $_POST['login'];
         $haslo = $_POST['haslo'];   

         if(empty($login) || empty($haslo)){
             header("Location: index-new.php?error=1");
             exit();
         }



    }else{
        header("Location: index-new.php?errror=0");
        exit;
    }
   

?>