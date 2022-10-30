<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<?php include('./constant/connect');

?>
<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> Calendario Periodo Menstrual</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Calendario</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="#"><button class="btn btn-primary">Añadir nota</button></a>

    
                <div class="table-responsive m-t-40">
                

                  
                </div>
                <head>  
 <link rel="stylesheet" type="text/css" href="calendario/get.css">
</head>
                <div class="PRUEBA">
                <div class="calendar">

	<div class="header">
		<a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
		<div class="text" data-render="month-year"></div>
		<a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
	</div>
	<div class="months" data-flow="left">
		<div class="month month-a">
			<div class="render render-a"></div>
		</div>
		<div class="month month-b">
			<div class="render render-b"></div>
		</div>
	</div>
</div>
</div>
                <script src="calendario/get.js">
                    
                </script>

</div>

            </div>
        </div>


        <?php include('./constant/layout/footer.php'); ?>