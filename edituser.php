
       
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Apellido</label>
                                        <div class="col-sm-9">
                                            <input required type="text" name="editapellido" id="editapellido" class="form-control"  value="<?php
                                            
                                            echo $result['apellido'];
                                                ?>
                                            " required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-sm-9">
                                            <input required type="date" name="editfechanac" id="editfechanac" class="form-control" min='1900-01-01' max='2013-12-31' place="fecha de nacimiento "value= "<?php
                                            
                                            echo $result['fechanac'];
                                                ?>
                                            " required="" value="">
                                            
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input required type="email" name="editemail" id="editemail" class="form-control" value="<?php
                                            
                                            echo $result['email'];
                                                ?>
                                            " required="" >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Telefono</label>
                                        <div class="col-sm-9">
                                            <input required type="text" name="edittelefono" id="edittelefono" class="form-control" value="<?php
                                            
                                            echo $result['telefono'];
                                                ?>
                                            " required="" >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Contraseña</label>
                                        <div class="col-sm-9">
                                            <input required type="password" name="editcontraseña" id="editcontraseña" class="form-control" 
                                             required="" placeholder="Su clave sera encriptada">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Rol</label>
                                        <div class="col-sm-9">
                                        <select name="editrol" id="editrol">
                                        <option value=2>Usuario</option>
                                        <option value=1>Administrador</option>
                                    </select>
                                        </div>
                                    </div>

                                    
                                    </div>

                                </div>
                               

                                <button type="submit" name="create" id="edituser" class="btn btn-primary btn-flat m-b-30 m-t-30">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>
