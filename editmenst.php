<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<?php include('./constant/connect.php');

$sql = "SELECT * from menstrual where  id='" . $_GET['id'] . "'"; 
$result = $connect->query($sql)->fetch_assoc();  

?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Editar datos de periodo</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Editar datos</li>
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
                            
                            <form class="form-horizontal" method="POST" id="submitUserForm" action="php_action/editMenst.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Ultimo periodo</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="editultimop" id="editultimop" class="form-control" placeholder="<?php
                                            
                                            echo $result['ultimop'];
                                                ?>
                                            " required="" value="<?php echo $result['username'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Duracion periodo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="editduracionp" placeholder="<?php
                                           $result = $connect->query($sql)->fetch_assoc();  
                                            echo $result['duracionp'];
                                                ?>
                                            " name="editduracionp">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Duracion ciclo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="editduracionciclo" placeholder="<?php
                                            $result = $connect->query($sql)->fetch_assoc();  
                                            echo $result['duracionciclo'];
                                                ?>
                                            " name="editduracionciclo">
                                        </div>
                                    </div>
                                </div>
                               

                                <button type="submit" name="create" id="editmenstrual" class="btn btn-primary btn-flat m-b-30 m-t-30">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>