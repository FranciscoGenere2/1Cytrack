<?php 
?>
<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>




<?php




$date = date('Y-m-d');


//$connect->close();

?>

<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="page-wrapper">

    
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href='https://css.gg/drop.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <div class="container-fluid ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Tabla de datos</strong>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>ÚLTIMO PERIODO </th>
                                    <th>DURACIÓN PROMEDIO PERIODO	</th>
                                    <th>DURACIÓN PROMEDIO CICLO	</th>
                                    <th>ACCIÓN</th>

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
                                $sql = "SELECT * FROM menstrual WHERE id = $variable";
                                $result = $connect->query($sql);
                                //print_r($result);exit;
                                foreach ($result as $row) {
                                    $roledit=$_GET['rol'];
                                   
                                ?>
                                    <tr>
                                        
                                        <td><?php echo $row['ultimop']; ?></td>
                                        <td><?php echo $row['duracionp']; ?></td>
                                        <td><?php echo $row['duracionciclo']; ?></td>
<td>                              <a href="editmenst.php?rol=<?php echo $roledit;?>&id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button></a></td>

                                       

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
        <div class="row">
            <div class="col-md-6 dashboard">
                <div class="card" style="background: #2B958A ">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                            <span><i class="ti-support"></i></span>
                        </div>
                        <div class="media-body media-text-right">

                        <a href="#">
                                <p class="m-b-0">Tu fase premenstrual es</p>
                            </a>
                            <h3 class="color-white"><?php 
                            $fechacompleta =  htmlentities($row['ultimop']);
                            $fechacompleta2 = strtotime($fechacompleta);
                            $fechadia =  idate('d', $fechacompleta2);
                            $premenstrualini = $fechadia-2;
                            $premenstrualfin = $fechadia-1;
                        
                            if ($premenstrualini<1){
                                $premenstrualini = 30-1;
                                if ($premenstrualfin<1){
                                  $premenstrualfin = $premenstrualfin + $premenstrualini+1;
                                  echo 'Desde el dia', ' ', $premenstrualini, ' ', 'hasta el dia', ' ', $premenstrualfin;
                                }
                                
                              }
                              else {
                                echo 'Desde el dia', ' ', $premenstrualini, ' ', 'hasta el dia', ' ', $premenstrualfin;
                              }
                            
                            
                            ?></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] != 'x') /*OJO*/  { ?> 
                <div class="col-md-6 dashboard">
                    <div class="card" style="    background-color: #F392BC ">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="bi-droplet"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                            <a href="#">
                                    <p class="m-b-0">Fase menstrual</p>
                                </a>
                                <h3 class="color-white"><?php 
                                $fechacompleta =  htmlentities($row['ultimop']);
                                $fechacompleta2 = strtotime($fechacompleta);
                                $fechadia =  idate('d', $fechacompleta2);
                                $diaspromedio =  htmlentities($row['duracionp']);
                                echo 'Desde el dia', ' ', $fechadia, ' ', 'hasta el dia', ' ', ($fechadia+$diaspromedio)-1;
                                ?>
                             </h3>
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] != 'x') { ?>
                <div class="col-md-6 dashboard">
                    <div class="card " style="    background-color: #F392BC ">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-notepad"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                            <a href="Order.php">
                                    <p class="m-b-0">Fase post-menstrual</p>
                                </a>
                                <h3 class="color-white"><?php
                                $fechacompleta =  htmlentities($row['ultimop']);
                                $fechacompleta2 = strtotime($fechacompleta);
                                $fechadia =  idate('d', $fechacompleta2);
                                $diaspromedio =  htmlentities($row['duracionp']);
                                $iniovu = htmlentities($row['duracionciclo']/$diaspromedio-1);
                                $month = date('F');
                            
                                if (ceil(($fechadia+$diaspromedio)) > 30){
                                  $resultIniPost = 0;
                                  
                                  $finalovu1 = ceil($fechadia/($resultIniPost+$diaspromedio));
                                    echo 'Desde el dia', ' ', ceil((($resultIniPost+$diaspromedio)/$diaspromedio)), ' ', 'hasta el dia', ' ', $finalovu1 ;
                                    
                                  }
                                  else{
                                    
                                    echo 'Desde el dia', ' ', ceil((($fechadia+$diaspromedio))), ' ', 'hasta el dia', ' ', ceil((($fechadia+$diaspromedio))+($diaspromedio/$diaspromedio));
                                  
                                  }
                                  

                                ?></h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] != 'x') { ?>
                <div class="col-md-6 dashboard">
                    <div class="card" style="background:#2B958A ">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-dot-circle-o"></i></span>
                            </div>
                            <div class="media-body media-text-right">


                            <a href="brand.php">
                                    <p class="m-b-0">Fase de Ovulación</p>
                                </a>

                                <h3 class="color-white"><?php
                                $fechacompleta =  htmlentities($row['ultimop']);
                                $fechacompleta2 = strtotime($fechacompleta);
                                $fechadia =  idate('d', $fechacompleta2);
                                $diaspromedio =  htmlentities($row['duracionp']);
                                if (ceil($iniovu+(($fechadia+$diaspromedio))+1+5) > 30){
                                  $nouno=(($fechadia+$diaspromedio)/$fechadia+$diaspromedio);
                                  echo 'Desde el dia', ' ', ceil((((($fechadia+$diaspromedio)*$fechadia)/$diaspromedio-$nouno)/$diaspromedio)/$diaspromedio), ' ', 'hasta el dia', ' ', ((ceil($iniovu+(($fechadia+$diaspromedio))+1+3))-30);
                                
                                }
                                else{
                                  echo 'Desde el dia', ' ', ceil($iniovu+(($fechadia+$diaspromedio)-1+1)+2), ' ', 'hasta el dia', ' ', ceil($iniovu+(($fechadia+$diaspromedio))+1+5);
                                
                                }
                                
                                ?></h3>

                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>




        </div>


       



    </div>
</div>
</div>


<?php include('./constant/layout/footer.php'); ?>
<script>
    $(function() {
        $(".preloader").fadeOut();
    })
</script>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'], <?php echo $datavalue1; ?>
        ]);

        var options = {
            title: 'World Wide Wine Production',
            is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

        var chart = new google.visualization.BarChart(document.getElementById('myChart1'));
        chart.draw(data, options);
    }
</script>


</div>
