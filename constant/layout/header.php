<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<?php

include('./constant/check.php');
require_once('./constant/connect.php');
?>

<div id="main-wrapper">

    <div class="header">
        <marquee class="d-lg-none d-block">
        
 
        <text> 
            <?php 
            
            
            date_default_timezone_set('America/New_York');    
            $fecha = date('m-d-Y', time());  
            $hora = date('h:i a', time());  
            echo "Fecha: $fecha";
            echo " | Hora: $hora";
            echo " - Republica Dominicana ";
            $rol=$_GET['rol'];
        
        ?><text style="font-size:15px">	&#x1F1E9;&#x1F1F4;</text></text>


            </div>
        </marquee>
        <nav class="navbar top-navbar navbar-expand-md navbar-light">

            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId'];?>">


                    <b><img src="./assets/uploadImage/Logo/CyTrack.png" style="width: 30%;" alt="homepage" class="dark-logo" style="width:100%;height:auto;" /></b>
                    
                  
                    <b> <a href="./constant/logout.php"> <img src="assets\uploadImage\Logo\logout.png" alt="Usuario" style="width:30px;height:auto;position:absolute;margin-top:1%;margin-left:80%" /></b>
</b>
                </a>
            </div>

            <div class="navbar-collapse">

                <ul class="navbar-nav  mt-md-0">

                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>



                </ul>

                <ul class="navbar-nav my-lg-0 ml-auto">


                    <li class="nav-item dropdown">
                        <div class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        <!-- <img src="./assets/uploadImage/Profile/usuario-admin.png" alt="user" class="profile-pic" /></div> -->
                        
                        
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">
                                <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                                <?php } ?>

                               <!-- <li><a href="./constant/logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>-->
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
    <script language="javascript">
        var today = new Date();
        document.getElementById('ti').innerHTML = today;

        var today = new Date();
        document.getElementById('time').innerHTML = today;
    </script>
    </html>