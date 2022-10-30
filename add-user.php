<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<?php include('./constant/connect.php');

$rol=$_GET['rol'];

$sql = "SELECT * from users where  user_id='" . $_GET['id'] . "'";
$result = $connect->query($sql)->fetch_assoc();  ?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Agregar usuario</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Usuarios</a></li>
                <li class="breadcrumb-item active">Agregar usuario</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="row">
            <div class="col-lg-8" style=" margin-left: 10%;">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" id="submitUserForm" action="php_action/createUserAdmin.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId'];?>" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="unombre" id="unombre" class="form-control" placeholder="Nombre">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Apellido</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="uapellido" id="uapellido" class="form-control" placeholder="Apellido">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="ufechanac" id="ufechanac" class="form-control" placeholder="Fecha de nacimiento">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="uemail" id="uemail" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Telefono</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="utelefono" id="utelefono" class="form-control" placeholder="Telefono">
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Contraseña</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="upassword" placeholder="Password" name="upassword">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Rol</label>
                                        <div class="col-sm-9">
                                        <select name="urol" id="urol">
                                        <option value=2>Usuario</option>
                                        <option value=1>Administrador</option>
                                    </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="create"  class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar usuario</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>