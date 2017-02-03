 <html>
      <head>
            <title>Sistem Pakar</title>
            <style type="text/css">
            .labelfrm{
                  display:block;
                  font-size:small;
                  margin-top:5px;
            }
            .error{
                  font-size:small;
                  color:red;
            }
            </style>
      </head>
      <body>
      <table align="center">
            <h1>Data user</h1>
     
            <form action="input.php" method="post" id="frm">
                  <label for="nis" class="labelfrm">Username : </label>
                  <input type="text" name="username" id="username" maxlength="10" class="required" size="15"/>
                  <label for="nis" class="labelfrm">Password: </label>
                  <input type="text" name="password" id="password" maxlength="10" class="required" size="15"/>
                  <label for="nis" class="labelfrm">Level : </label>
                  <input type="text" name="level" id="level" maxlength="10" class="required" size="15"/>
                  <label for="nama" class="labelfrm" >Nama : </label>
                  <input type="text" name="nama" id="nama" size="30" class="required"/>
                  <label for="nama" class="labelfrm" >Jenis Kelamin : </label>
                  <input type="text" name="jenis_kelamin" id="jenis_kelamin" size="30" class="required"/>
                  <label for="alamat" class="labelfrm">ALAMAT : </label>
                  <textarea name="alamat" id="alamat" cols="40" rows="4" class="required"></textarea>
                  <label for="nama" class="labelfrm" >Telepon : </label>
                  <input type="text" name="telepon" id="telepon" size="30" class="required"/>
                  <label for="submit" class="labelfrm">&nbsp;</label>
                  <input type="submit" name="input" value="Simpan" id="input"/>
                  <input type="reset" name="clear" value="clear" id="clear"/>
            </form>
      <br><br>
            <a href="datauser.php">Lihat Data</a>  
      </table>
</html>