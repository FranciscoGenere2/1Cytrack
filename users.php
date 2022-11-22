<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<?php include('./constant/connect.php');
//AQUI HAGO CONSULTA DE LA LISTA DE USUARIOS QUE SE MOSTRARAN EN LA PANTALLA DE USUARIOS
$sql = "SELECT * FROM users";
$result = $connect->query($sql);
//echo $sql;exit;

?>
<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Ver usuarios</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Usuarios</a></li>
                <li class="breadcrumb-item active">Ver usuarios</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">



        <div class="card">
            <div class="card-body">

                <a href="add-user.php?rol=<?php echo $_GET['rol'];;?>&id=<?php  echo $_SESSION['userId']; ?>"><button class="btn btn-primary">Agregar un nuevo usuario</button></a>

                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha de nacimiento</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Rol</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['user_id'];?></td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['apellido'];?></td>
                                    <td><?php echo $row['fechanac']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <?php $rol = $row['rol']; if ($rol==2){
                                        ?>
                                        <td style="background-color: #808080; color: black;"><?php echo "Usuario"; ?></td>
                                        <?php
                                        }else{?>
                                        <td style="background-color: #53c408; color: black;"><?php echo "Administrador"; ?></td><?php
                                            } ?>

                                    
                                    
                                    <td>

                                        <a href="edituser.php?rol=1&idSelect=<?php echo $row['user_id'] ?>"><button type="button" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button></a>



                                        <a href="php_action/removeUser.php?rol=1&idSelect=<?php echo $row['user_id'] ?>"><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Seguro que quiere eliminar a este usuario?')"><i class="fa fa-trash"></i></button></a>


                                    </td>
                                </tr>

                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                </div>
            </div>
        </div>


        <?php include('./constant/layout/footer.php'); ?>