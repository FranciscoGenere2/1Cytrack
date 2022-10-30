 <?php
    require_once('./constant/connect.php');
    
$rol=$_GET['rol'];
    ?>



 <div class="left-sidebar">

     <div class="scroll-sidebar">

         <nav class="sidebar-nav">
             <ul id="sidebarnav">
                 <li class="nav-devider"></li>
                 <li class="nav-label">Menú</li>
                 <li> <a href="dashboard.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId'];?>" aria-expanded="false"><i class="fa fa-tachometer"></i> Dashboard</a>
                 </li>
                 <li> <a href="calendario.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId']; ?>" aria-expanded="false"><i class="fa fa-calendar"></i> Calendario</a>
                 <li> <a href="ciclos.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId']; ?>" aria-expanded="false"><i class="fa fa-circle-o"></i> Ciclos</a>
                 <li> <a href="grafica.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId']; ?>" aria-expanded="false"><i class="fa fa-bar-chart"></i> Grafica</a>
                 <li> <a href="#?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId']; ?>" aria-expanded="false"><i class="fa fa-wrench"></i> Ajustes</a>
                 <li> <a href="#?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId']; ?>" aria-expanded="false"><i class="fa fa-pencil"></i> Notas</a>



                 <!-- <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] != 2) { ?>
                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-truck"></i><span class="hide-menu">Opcion</span></a>
                         <ul aria-expanded="false" class="collapse">

                             <li><a href="#">Sub Opcion1</a></li>

                             <li><a href="#">Sub Opcion2</a></li>
                         </ul>
                     </li>
                 <?php } ?>
                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] != 2) { ?>
                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Opcion</span></a>
                         <ul aria-expanded="false" class="collapse">

                             <li><a href="#">Sub Opcion1</a></li>

                             <li><a href="#">Sub Opcion2</a></li>
                         </ul>
                     </li> -->



                 <!-- <?php } ?>
                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] != 2) { ?>
                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-medkit"></i><span class="hide-menu">Opcion</span></a>
                         <ul aria-expanded="false" class="collapse">

                             <li><a href="#">Sub Opcion1</a></li>

                             <li><a href="#">Sub Opcion2</a></li>
                         </ul>
                     </li>
                 <?php } ?> -->
                 <!-- <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Facturas</span></a>
                     <ul aria-expanded="false" class="collapse">

                         <li><a href="#">Sub Opcion1</a></li>

                             <li><a href="#">Sub Opcion2</a></li>
                     </ul>
                 </li> -->

                 <?php if ($_GET['rol']==1) { ?>
                     <!-- <li><a href="#" href="#" aria-expanded="false"><i class="fa fa-print"></i><span class="hide-menu">Opcion</span></a></li> 






                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">Opcion</span></a>
                         <ul aria-expanded="false" class="collapse">

                            <li><a href="#">Sub Opcion1</a></li>

                             <li><a href="#">Sub Opcion2</a></li>
                         </ul>
                     </li>-->
                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i><span class="hide-menu">Usuarios</span></a>
                     <ul aria-expanded="false" class="collapse">

                         <li><a href="add-user.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId']; ?>">Agregar usuario</a></li>

                         <li><a href="users.php?rol=<?php echo $rol;?>&id=<?php  echo $_SESSION['userId']; ?>">Ver usuarios</a></li>
                     </ul>
                 </li>
                 <?php } ?>


             </ul>
         </nav>

     </div>

 </div>