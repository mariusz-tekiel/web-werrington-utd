<?php
include_once("config.php");
if ($_POST['action'] == 'edit' && $_POST['team_id']) {	
	$updateField='';
	if(isset($_POST['team_name'])) {
		$updateField.= "name='".$_POST['team_name']."'";
	} else if(isset($_POST['played'])) {
		$updateField.= "played='".$_POST['played']."'";
	} else if(isset($_POST['lost'])) {
		$updateField.= "lost='".$_POST['lost']."'";
	}else if(isset($_POST['won'])) {
        $updateField.= "won='".$_POST['won']."'";
     }else if(isset($_POST['points'])) {
        $updateField.= "points='".$_POST['points']."'";
	if($updateField && $_POST['id']) {
		$sqlQuery = "UPDATE developers SET $updateField WHERE id='" . $_POST['id'] . "'";	
		mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
		$data = array(
			"message"	=> "Record Updated",	
			"status" => 1
		);
		echo json_encode($data);		
	}
}
if ($_POST['action'] == 'delete' && $_POST['id']) {
	$sqlQuery = "DELETE FROM developers WHERE id='" . $_POST['id'] . "'";	
	mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
	$data = array(
		"message"	=> "Record Deleted",	
		"status" => 1
	);
	echo json_encode($data);	
}
?>