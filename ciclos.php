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
            <h3 class="text-primary"> Ciclos</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Ciclos</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">



<link rel="stylesheet" type="text/css" href="custom\css\custom.css">
        <div class="card">
            <div class="card-body">

                <a href="agregarperiodo.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId']; ?>"><button class="btn btn-primary" >Añadir Período</button></a>

    
                <div class="table-responsive m-t-40">
                
                <div class="bloqueperiodo">

                <p>Valor Período</p>
                <ul>
                    <li >
                                                              <div class="col-sm-9">
                                            <input type="date" class="form-control" id="editduracionp" value="<?php
                                           $result = $connect->query($sql)->fetch_assoc();  
                                            echo $result['duracionp'];
                                                ?>
                                            " name="editduracionp"><a></a>
                                        </div>
                    </li>
                    <li>
                      --  Duracion del ciclo ----------------------<p style="color: red; display: inline;">\Dia</p>
                    </li>
                </ul>
                </div>


                </div>
                <head>  
 
</head>
              


        <?php include('./constant/layout/footer.php'); ?>