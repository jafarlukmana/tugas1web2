<!DOCTYPE html>
<html lang="en">
 
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pakar</title>

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
                        <h3 align="center">Anda tidak sakit gigi</h3><br>
                       	<p align="justify">Rajinlah merawat gigi anda dengan menyikat gigi, menggunakan kawat gigi, dan kurangilah menkonsumsi makanan/ minuman yang mengandung asam. Serta rutinlah pergi ke dokter gigi</p>
                       	<br><br><h3 align="center">Terimakasih, Sehat Selalu!</h3>
                        <br><br><p align="center"><img height='5%' width='5%'src='konsult.jpg'> <a href="konsultasi.php" class="btn btn-info">Konsultasi</a>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img height='5%' width='5%' src='list.jpg'> <a href="daftar_penyakit.php" class="btn btn-info">Daftar Penyakit</a>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img height='5%' width='5%' src='about.jpg'> <a href="tentang.php" class="btn btn-info">Tentang Pembuat</a></p>
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
