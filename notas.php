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
            <h3 class="text-primary">Notas</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Notas</a></li>
                <li class="breadcrumb-item active">Notas</li>
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
                            <form class="form-horizontal" method="POST" id="submitUserForm" action="php_action/agregarnota.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId'];?>" enctype="multipart/form-data">

                                

                                
                                
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Nota:</label>
                                        <div class="col-sm-9">
                                            <input required type="text" size=40 width=200px height=15px name="uemail" id="uemail" class="form-control" placeholder="Escriba su nota aquí">
                                        </div>
                                    </div>
                                </div>


                                
                                <button type="submit" name="create"  class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar nota</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


    


   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href='https://css.gg/drop.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <div class="container-fluid ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- <strong class="card-title">Tabla de datos</strong> -->

                    <div class="table-responsive m-t-40">




                    <label for="myInput">Filtrar: </label>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="" title="Type in a name">
                    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTablex");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>







                        <table id="myTablex" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>FECHA DE LA NOTA </th>
                                    <th>DESCRIPCION NOTA   </th>
                                   

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //include('./constant/connect');
                               $variable = $_GET['id'];
                                $sql = "SELECT * FROM users WHERE user_id = $variable";
                                $result1 = $connect->query($sql);
                               /* foreach ($result1 as $row1) {
                                    $usuario = $result1['user_id'];
                                
                            }*/
                                ?>
                                <?php
                                //echo $sql;exit;
                                $sql = "SELECT * FROM notas WHERE id_usu = $variable";
                                $result = $connect->query($sql);
                                //print_r($result);exit;
                                foreach ($result as $row) {
                                    $roledit=$_GET['rol'];
                                   
                                ?>
                                    <tr>
                                        
                                        <td><?php echo $row['fecha']; ?></td>
                                        <td><?php echo $row['desnota']; ?></td>
                                        

                                       

                                    </tr>

                            </tbody>
                        <?php
                                }

                        ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
      





        <?php include('./constant/layout/footer.php'); ?>
        <?php include('./constant/layout/footer.php'); ?>