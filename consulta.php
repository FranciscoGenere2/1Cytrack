<?php
require("constant/connect.php");
$sql = "SELECT * from users";
$result = $connect->query($sql);
foreach($result as $row){
    print $row["user_id"].";".$row["username"].";".$row["apellido"].";".$row["email"]."\n";}
    # code...
?>