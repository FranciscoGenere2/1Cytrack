<?php 	

require_once 'core.php';

//$valid['success'] = array('success' => false, 'messages' => array());
$menstid = $_GET['id'];
//echo $userid;exit;
if($_POST) {
	$ultimop = $_POST['editultimop'];
	$duracionp 		= ($_POST['editduracionp']);
	$duracionciclo = $_POST['editduracionciclo'];
	
	$sql = "UPDATE menstrual SET ultimop = '$ultimop', duracionp = '$duracionp', duracionciclo = '$duracionciclo' WHERE id = $menstid ";

	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Update";	
		header("Location:../dashboard.php?rol=1&id=$menstid");

	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating product info";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
?>