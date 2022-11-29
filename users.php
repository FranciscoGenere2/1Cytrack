







                    <table id="myTablex" class="table table-bordered table-striped">
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
