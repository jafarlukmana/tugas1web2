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
                    <a href="isi_dulu.php">Mulai Konsultasi</a>
                </li>
                <li>
                    <a href="#">Daftar Penyakit</a>
                </li>
                <li>
                    <a href="#">Tentang Pembuat</a>
                </li>
             
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Silahkan Isi Biodata Anda</h3>
                            <div style="margin-top:10px;">
    <form action="#" method="post" class="form-check">
        <div class="row">
            <div class="col-md-12">         
                <div class="form-group">
                    <span><small>Nama Pemilik :</small></span>
                    <input class="form-control requiered" name="nama_pemilik" placeholder="Nama Anda" type="text" autocomplete="off">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">          
                <div class="form-group">
                    <span><small>Jenis Kelamin :</small></span>
                    <select name="kelamin_sapi" class="form-control requiered" autocomplete="off">
                        <option value="" selected>--Pilih Salah Satu--</option>
                        <option value="J">Pria</option>
                        <option value="B">Wanita</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">          
                <div class="form-group">
                    <span><small>Usia : </small></span>
                    <input class="form-control requiered" name="usia" placeholder="Usia" type="text" data-type="integer" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <span><small>Alamat  :</small></span>
                    <textarea class="form-control requiered" name="lokasi_pemeliharaan" placeholder="Masukan Alamat Anda" style="resize:none;" type="text"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary form-control" value="submit">Mulai Konsultasi</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
$("form.form-check").submit(function(e) {
    e.preventDefault();
    var inputs = $(this).find('.requiered');
    var success = 0;
    for (var i = 0; i < inputs.length; i++) {
        var _in = $(inputs[i]);
        var _val = _in.val();
        if (_val == '') {
            _in.focus();
            break;
        }
        else
        {
            success = success + 1;
        }
    }
    if (success >= inputs.length) {
        var $input = $("<input type='hidden' name='session_id_valid requiered' value='<?php echo @$session_id_valid;?>'/>")
        $(this).append($input);
        $(this).unbind();

    };
});
</script>
                      
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
