<?php
include 'config/koneksi.php';
$query=mysqli_query($konek, "select * from tbl_aset"); //melakukan pengampilan data dari database
$no = 1;
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

      <div id="page-wrapper">

        <div id="page-inner">

          <div class="row">

            <div class="col-md-12">
              <h2>Admin Dashboard</h2>

            </div>

          </div>
          <table border="1">

            <tr>
              <td>No</td>
              <td>Nama</td>
              <td>Deskripsi</td>
              <td style="text-align:center">Menu</td>
            </tr>
            <?php
            // query looping database, harus ada setiap mau menampilkan data
            while($row = mysqli_fetch_array($query)){?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['deskripsi']; ?></td>
              <td> <a href="#">Update</a> <a href="#">Delete</a></td>
            </tr>
          <?php } ?>

          </table>

        </div>

      </div>

    </div>

  </body>
</html>
