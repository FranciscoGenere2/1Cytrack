
<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<?php include('./constant/connect.php');
require_once 'core.php';
//APARTIR DE AQUI HAGO LA CONSULTA DE LOS USUARIOS (solo para los placeholders)

$sql = "SELECT * from users where  user_id='" . $_GET['id'] . "'"; 
$result = $connect->query($sql)->fetch_assoc();  
$rola = $result['rol'];


//$valid['success'] = array('success' => false, 'messages' => array());
$elid = $_GET['id'];
//echo $userid;exit;
if($_POST) {
	$username = $_POST['editusername'];
	$apellido 		= ($_POST['editapellido']);
	$fechanac = $_POST['editfechanac'];
	$telefono = $_POST['edittelefono'];
	$editcontraseña = md5($_POST['editcontraseña']);
	$email = $_POST['editemail'];
	


	$sql = "UPDATE users SET username = '$username', apellido = '$apellido', fechanac = '$fechanac', telefono = '$telefono', password = '$editcontraseña', email = '$email', rol = '$rola' WHERE user_id = $elid ";

	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Actualizado correctamente";	
		header("Location:../ajustes.php?rol=$rola&id=$elid");

	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error mientras se actualizaba la informacion";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
?>