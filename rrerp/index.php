<?php
include 'config/koneksi.php';
$querykat=mysqli_query($konek, "select * from kategori"); //melakukan pengampilan data dari database
$querylok=mysqli_query($konek, "select * from lokasi"); //melakukan pengampilan data dari database
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <title></title>
  </head>
  <body>
    <div id="wrapper">
    <?php include "config/menu.php"; ?>

      <div id="page-wrapper" >
          <div id="page-inner">
              <div class="row">
                  <div class="col-md-12">
                           <h2>Admin Dashboard</h2>
                  </div>
              </div>
              <form class="" action="kontrol/simpanaset.php" method="post">
                <!-- //imput nama -->
                <input type="text" name="nama" value="" placeholder="Nama Aset"> <br> <br>
                <!-- //input textarea  -->
                <textarea name="deskripsi" rows="3" cols="30" placeholder="Deskripsi aset"></textarea> <br><br>
                <!-- input kategori -->
               Pilih kategori :
                <select class="" name="kategori">
                  <?php
                  // query looping database, harus ada setiap mau menampilkan data
                  while($row = mysqli_fetch_array($querykat)){?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
                <?php } ?>
                </select> <br> <br>
                <!-- input lokasi -->
                 Piihan Lokasi :
                <select class="" name="lokasi">
                  <?php
                  // query looping database, harus ada setiap mau menampilkan data
                  while($row = mysqli_fetch_array($querylok)){?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></option>
                <?php } ?>
              </select> <br><br>

                <input type="submit" name="simpan" value="SIMPAN">

              </form>


          </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
       </div>
  </body>
</html>
