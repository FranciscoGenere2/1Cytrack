<?php 	

require_once 'core.php';

//$valid['success'] = array('success' => false, 'messages' => array());
$elid = $_GET['idSelect'];
//echo $userid;exit;
if($_POST) {
	$username = $_POST['editusername'];
	$apellido 		= ($_POST['editapellido']);
	$fechanac = $_POST['editfechanac'];
	$telefono = $_POST['edittelefono'];
	$editcontraseña = md5($_POST['editcontraseña']);
	$email = $_POST['editemail'];
	$editrol = $_POST['editrol'];



	$sql = "UPDATE users SET username = '$username', apellido = '$apellido', fechanac = '$fechanac', telefono = '$telefono', password = '$editcontraseña', email = '$email', rol = $editrol WHERE user_id = $elid ";

	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Actualizado correctamente";	
		header("Location:../users.php?rol=1&id=$elid");

	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error mientras se actualizaba la informacion";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
?>