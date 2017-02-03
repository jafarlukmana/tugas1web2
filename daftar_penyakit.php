<!DOCTYPE html>
<html lang="en">
 
<head>
                           
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Penyakit</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

                <li class="sidebar-brand">
                    <a href="index.html">
                       Halaman Utama
                    </a>
                </li>
                <li>
                    <a href="konsultasi.php">Mulai Konsultasi</a>
                </li>
                <li>
                    <a href="daftar_penyakit.php">Daftar Penyakit</a>
                </li>
                <li>
                    <a href="tentang.php">Tentang Pembuat</a>
                </li>
             
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                           


                        <div class = "table-responsive">
                           <table class = "table">
                              
                              <h3 align="center">Daftar Penyakit</h3><br>
                              
                              <thead>
                                 <tr>
                                    <th width="50%">Nama Penyakit</th>
                                    <th width="50%"></th>
                                 </tr>
                              </thead>
                              
                              <tbody>
                                <tr>
                                    <td><a class="btn btn-default" href="p1.php" style="display: block; width: 100%;"></button>Erosi Gigi</a></td>
                                    <td>
                                        <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample1">
                                          <div class="card card-block">

                                            <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p1'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>


                                          </div>
                                        </div>                                          
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p2.php" style="display: block; width: 100%;"></button>Ginggivitis</a></a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample2">
                                          <div class="card card-block">
                                          
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p2'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                          </div>
                                        </div>                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p3.php" style="display: block; width: 100%;"></button>Pulpitis</a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExamplea" aria-expanded="false" aria-controls="collapseExamplea">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExamplea">
                                          <div class="card card-block">
                                         
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p3'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                          </div>
                                        </div>                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p4.php" style="display: block; width: 100%;"></button>Abses Gigi</a></a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample3">
                                          <div class="card card-block">
                                          
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p4'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                          </div>
                                        </div>                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p5.php" style="display: block; width: 100%;"></button>Periodontitis</a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample4">
                                          <div class="card card-block">
                                          
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p5'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                          </div>
                                        </div>                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p6.php" style="display: block; width: 100%;"></button>Karies Gigi</a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample5">
                                          <div class="card card-block">
                                          
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p6'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                          </div>
                                        </div>                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p7.php" style="display: block; width: 100%;"></button>Halitosis</a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample6">
                                          <div class="card card-block">
                                          
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p7'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                          </div>
                                        </div>                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p8.php" style="display: block; width: 100%;"></button>Sindrom Gigi Retak</a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample7">
                                          <div class="card card-block">
                                          
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p8'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                          </div>
                                        </div>                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p9.php" style="display: block; width: 100%;"></button>Temporomandibular Joint</a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample8">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample8">
                                          <div class="card card-block">
                                          
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p9'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                          </div>
                                        </div>                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td><a class="btn btn-default" href="p10.php" style="display: block; width: 100%;"></button>Angina Ludwig</a></td>
                                    <td>
                                          <button class="btn btn-info" type="button" style="display: block; width: 100%;" data-toggle="collapse" data-target="#collapseExample9" aria-expanded="false" aria-controls="collapseExample9">
                                            Gejala
                                          </button>
                                        </p>
                                        <div class="collapse" id="collapseExample9">
                                          <div class="card card-block">
                                         
                                             <?php
                                            include "config.php";
                                            $query=mysql_query("select * from gejala where id_penyakit='p10'");
                                            ?>

                                            
                                            
                                                <?php
                                            while($row=mysql_fetch_array($query)){
                                            ?>
                                            <p><?php echo $row['nama'];?></p>
                                            
                                            
                                            <?php
                                            }
                                            ?>

                                         </div>
                                        </div>                                        
                                    </td>
                                </tr>




                             
                              </tbody>
                              
                           </table>
                        </div>      




                      
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
