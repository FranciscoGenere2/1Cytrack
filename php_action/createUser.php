<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$nombreuser 		= $_POST['nombreuser'];
	$apellidouser 		= $_POST['apellidouser'];
	$nacimientodouser 		= $_POST['nacimientodouser'];
	$telefono 		= $_POST['telefono'];
  $password 			= md5($_POST['password']);
  $email 		= $_POST['email'];
  $rolUser 			= 2;


				$sql = "INSERT INTO users (username, apellido, fechanac, telefono, password,email,rol) 
				VALUES ('$nombreuser', '$apellidouser' , '$nacimientodouser', '$telefono', '$password', '$email', $rolUser)";
				//echo $sql;exit;
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
					header('location:../login.php');
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}

				// /else	
		
	} // if in_array 		



	$connect->close();

	echo json_encode($valid);
 
