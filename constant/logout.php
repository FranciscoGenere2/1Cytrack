<?php  
session_start(); //Iniciar la sesion
session_destroy(); //Destruir sesion
 
?>
<script>
window.location="../login.php";
</script>
<?php
//Esto envia devuelta al "index.php" despues de hacer un logging out
  exit;
?>