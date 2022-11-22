<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<?php include('./constant/connect.php');

?>
<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> Grafica</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Grafica</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">



<link rel="stylesheet" type="text/css" href="custom\css\custom.css">
        <div class="card">
            <div class="card-body">
                    <!-- add-brand.php en el href siguiente -->
                <a href="#"><button class="btn btn-primary">+</button></a>

    
                <div class="table-responsive m-t-40">
                
                <div class="bloqueperiodo">





<label  id="resultadop">NOTA: Hay que pasar el array php al javascript, de momento solo captura el primer valor</label>

                <!DOCTYPE html>

                
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <div style="width: 300px; margin: 0 auto;">

            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <?php
        
        
        $id = $_GET['id'];
        $sql = "SELECT duracionp FROM menstrual WHERE id_usu = $id";
        $resulta = $connect->query($sql);


    while($row = mysqli_fetch_assoc($resulta)) {
        $arreglo1= $row['duracionp'];

        
   
        ?>
<!-- 
    AQUI TENGO UNA SALIDA DE LAS FECHAS REGISTRADAS
<td id="arregloid"><?php print_r($arreglo1); ?></td>  -->
<script type="text/javascript">



//  var arreglo = document.getElementById('arregloid');




  const ctx = document.getElementById('myChart');
  /*
  TIPOS DE GRAFICOS
        bar
        line
        radar
        polarArea
        pie
        doughnut
        bubble
  
  */
//   document.getElementById("resultadop").innerHTML = arreglo ;
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio','Julio'],
      datasets: [{
        label: 'Dias',
        data: [1,4,6,4,6,8,3],
        borderWidth: 2
      }]
    },
    options: {
      
    }
  });
</script>

</html>
<?php  }?>













                <!-- <img style=" width: 90%; border 1px solid #000;" src="https://preview.redd.it/y5dudby2xzh11.png?width=640&crop=smart&auto=webp&s=6a822d12c208b03996c4c32e16dd7e6f5f8b4a16"></img> -->
                </div>

                </div>
                <head>  
 
</head>
              


        <?php include('./constant/layout/footer.php'); ?>