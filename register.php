<link rel="stylesheet" href="assets/css/popup_style.css">
<style>
  .footer1 {
    position: fixed;
    bottom: 0;
    width: 100%;
    color: #5c4ac7;
    text-align: center;
  }
</style>

<?php

include('./constant/layout/head.php');
include('./constant/connect.php');


session_start();

if (isset($_SESSION['userId'])) {
  //header('location:'.$store_url.'login.php');   
}

$errors = array();

if ($_POST) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
    if ($email == "") {
      $errors[] = "email is required";
    }

    if ($password == "") {
      $errors[] = "Password is required";
    }
  } else {
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $connect->query($sql);

    if ($result->num_rows == 1) {
      $password = md5($password);
      // exists
      $mainSql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $mainResult = $connect->query($mainSql);

      if ($mainResult->num_rows == 1) {
        $value = $mainResult->fetch_assoc();
        $user_id = $value['user_id']; /*AQUI ERA user_id*/ 

        // set session
        $_SESSION['userId'] = $user_id; ?>


<body>
        <div class="popup popup--icon -success js_success-popup popup--visible">
          <div class="popup__background"></div>
          <div class="popup__content">
            <h3 class="popup__content__title">
              ¡Bienvenido!
              </h1>
              <p>Registro Exitoso</p>
              <p>

                <?php echo "<script>setTimeout(\"location.href = 'dashboard.php?id=$user_id';\",1500);</script>"; ?>




                
              </p>
          </div>
        </div>
      <?php  } else {
      ?>


        <div class="popup popup--icon -error js_error-popup popup--visible">
          <div class="popup__background"></div>
          <div class="popup__content">
            <h3 class="popup__content__title">
              Error
              </h1>
              <p>Correo o Contraseña Incorrectos</p>
              <p>
                <a href="register.php"><button class="button button--error" data-for="js_error-popup">Cerrar</button></a>
              </p>
          </div>
        </div>

      <?php } // /else
    } else { ?>
      <div class="popup popup--icon -error js_error-popup popup--visible">
        <div class="popup__background"></div>
        <div class="popup__content">
          <h3 class="popup__content__title">
            Error
            </h1>
            <p>Correo no existe</p>
            <p>
              <a href="register.php"><button class="button button--error" data-for="js_error-popup">Cerrar</button></a>
            </p>
        </div>
      </div>

<?php } // /else
  } // /else not empty email // password

} // /if $_POST

?>

<div id="main-wrapper">
  <div class="unix-login" >

    <div  class="container-fluid" style="margin-top: -10%; background-image: url('assets/img/Cytrack-background-alt.png');
 background-color: #ffffff;background-size:cover;">
               

      <div class="row">
        <div class="col-md-4">
          <div class="login-content"  >
            <div class="login-form"  ><br><br><br><br><br>
            <center><img src="assets/uploadImage/Logo/CyTrack.png" style="width: 100px; margin-top: -20%;"></center><br><br><br><br>
              <div style="position: static; "> <!--SOLUCIONAR DESPUES -->
              
              <form action="php_action/createUser.php" method="post" id="loginForm" class="row">
              <div class="form-group col-md-12">
                
                  <label lass="col-sm-3 control-label">Nombre</label>
                  <input type="text" name="nombreuser" id="nombreuser" class="form-control" placeholder="" pattern="[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*" title="Nombre no permitido" required="">
                  
                </div>
                <div class="form-group col-md-12">
                  <label lass="col-sm-3 control-label">Apellido</label>
                  <input type="text" name="apellidouser" id="apellidouser" class="form-control" placeholder="" pattern="[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*" title="Apellido no permitido" required="">
                  
                </div>

                <div class="form-group col-md-12">
                  <label lass="col-sm-3 control-label">Fecha de nacimiento</label>
                  <input type="date" name="nacimientodouser" id="nacimientodouser" class="form-control" placeholder="" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Apellido no permitido" required="">
                  
                </div>
                <div class="form-group col-md-12">
                  <label lass="col-sm-3 control-label">Correo</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="" pattern="[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+([a-z]" title="Email no permitido" required="">
                  
                </div>
                <div class="form-group col-md-12">
                  <label lass="col-sm-3 control-label">Telefono</label>
                  <input type="text" name="telefono" id="telefono" class="form-control" placeholder=""  title="Telefono no permitido" required="">
                  
                </div>
                <div class="form-group col-md-12">
                  <label>Contraseña</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="contraseña" required="">
                  <p style="color: black; margin-top: 15px; text-align: center;">¿Ya tienes una cuenta? <a href="login.php">Inicia Sesión</a></p>
                </div>
               


                <div class="col-md-12">
                  <button style="background-color: #102b49; border-radius: 50px;" type="submit" name="registrar" class=" f-w-600 text-white btn  btn-flat m-b-30 m-t-30">Registrarse</button>
                </div>
</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="./assets/js/lib/jquery/jquery.min.js"></script>

<script src="./assets/js/lib/bootstrap/js/popper.min.js"></script>


<script src="./assets/js/jquery.slimscroll.js"></script>

<script src="./assets/js/sidebarmenu.js"></script>

<script src="./assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

<script src="./assets/js/custom.min.js"></script>

  
</body>

</html>