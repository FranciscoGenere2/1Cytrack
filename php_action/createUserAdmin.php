<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

$unombre 		= $_POST['unombre'];
$uapellido 		= $_POST['uapellido'];
$ufechanac 		= $_POST['ufechanac'];
$uemail 		= $_POST['uemail'];
$upassword 			= md5($_POST['upassword']);
$utelefono 		= $_POST['utelefono'];
$urolUser 			= $_POST['urol'];;


            $sql = "INSERT INTO users (username, apellido, fechanac, telefono, password,email,rol) 
            VALUES ('$unombre', '$uapellido' , '$ufechanac', '$utelefono', '$upassword', '$uemail', $urolUser)";
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