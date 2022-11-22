<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$userid =  $_GET['idSelect'];

if($userid) { 

 $sql = "DELETE FROM users  WHERE user_id = {$userid}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";
	header('location:../users.php?rol=1');		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the user";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST