<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	


$ufechanac 		= date('y/m/d');
$uemail 		= $_POST['uemail'];

$utelefono 		= $_POST['utelefono'];
$urolUser 		=	$_GET['id'];


            $sql = "INSERT INTO notas (id_usu, fecha, desnota) 
            VALUES ($urolUser, '$ufechanac', '$uemail')";
            //echo $sql;exit;
            if($connect->query($sql) === TRUE) {
                $valid['success'] = true;
                $valid['messages'] = "Successfully Added";	
                header('location:fetchUser.php');

            } else {
                $valid['success'] = false;
                $valid['messages'] = "Error while adding the members";
            }

            // /else	
    
} 




$connect->close();

echo json_encode($valid);