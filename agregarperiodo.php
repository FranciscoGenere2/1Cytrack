<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<?php include('./constant/connect.php');

$idUsuario = $_SESSION['userId'];
$idRol = $_SESSION['rol'];

$sql = "SELECT * from users where  user_id='" . $idUsuario . "'";
$result = $connect->query($sql)->fetch_assoc();  ?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Agregar periodo</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Periodo</a></li>
                <li class="breadcrumb-item active">Agregar periodo</li>
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
                            <form class="form-horizontal" method="POST" id="submitUserForm" action="php_action/agregarperiod.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId'];?>" enctype="multipart/form-data">

                                

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Fecha de periodo</label>
                                        <div class="col-sm-9">
                                            <input required type="date" name="ufechanac" id="ufechanac" min='1900-01-01' 
                                            max="<?=date('Y-m-d');?>" class="form-control" placeholder="Fecha de nacimiento" required="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Dias de periodo</label>
                                        <div class="col-sm-9">
                                        <select name="uemail" id="uemail">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Dias de ciclo</label>
                                        <div class="col-sm-9">
                                           <!-- <input required type="text" name="utelefono" id="utelefono" class="form-control" required=""> -->
                                            <select name="utelefono" id="utelefono">
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  <option value="32">32</option>
  <option value="33">33</option>
  <option value="34">34</option>
  <option value="35">35</option>
</select>
                                        </div>
                                    </div>
                                </div>



                                
                                <button type="submit" name="create"  class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar periodo</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>
        <?php include('./constant/layout/footer.php'); ?>