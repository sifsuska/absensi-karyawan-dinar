<?php 
require_once("koneksi.php");
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Idiot-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <!-- Idiot-->
   <!-- Required meta tags-->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="au theme template">
   <meta name="author" content="Hau Nguyen">
   <meta name="keywords" content="au theme template">

   <!-- Title Page-->
   <title>Data Absen</title>

   <!-- Fontfaces CSS-->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
   <link href="css/font-face.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
   <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

   <!-- Bootstrap CSS-->
   <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

   <!-- Vendor CSS-->
   <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
   <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
   <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
   <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
   <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
   <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
   <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

   <!-- Main CSS-->
   <link href="css/theme.css" rel="stylesheet" media="all">
   <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <!-- end script-->
</head>

<body class="animsition">
   <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }else {
        $username = $_SESSION['username'];  
    }

 ?>
   <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
         <div class="header-mobile__bar">
            <div class="container-fluid">
               <div class="header-mobile-inner">
                  <a class="logo" href="index.html">
                  </a>
                  <button class="hamburger hamburger--slider" type="button">
                     <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                     </span>
                  </button>
               </div>
            </div>
         </div>
         <nav class="navbar-mobile">
            <div class="container-fluid">
               <ul class="navbar-mobile__list list-unstyled">
                  <li class="has-sub">
                     <a class="js-arrow" href="admin2.php">
                        <i class="fas fa-tachometer-alt"></i>Beranda</a>
                     <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                     </ul>
                  </li>
                  <li>
                     <a href="datakaryawan.php">
                        <i class="fas fa-chart-bar"></i>Data Pegawai</a>
                  </li>
                  <li>
                     <a href="datauser.php">
                        <i class="fas fa-table"></i>Data user</a>
                  </li>
                  <li>
                     <a href="datajabatan.php">
                        <i class="far fa-check-square"></i>Data Jabatan</a>
                  </li>
                  <li>
                     <a href="data_absen.php">
                        <i class="fas fa-calendar-alt"></i>Data Absen</a>
                  </li>
                  <li>
                     <a href="data_keterangan.php">
                        <i class="fas fa-table"></i>data Keterangan
                     </a>
                  </li>
                  <li>
                     <a href="pilih_periode.php">
                        <i class="fas fa-table"></i>Laporan Absensi
                     </a>
                  </li>

               </ul>
            </div>
         </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
         <div class="logo">
            <a href="#">
               <h1>admin</h1>
            </a>
         </div>
         <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
               <ul class="list-unstyled navbar__list">
                  <li>
                     <a class="js-arrow" href="admin2.php">
                        <i class="fas fa-tachometer-alt"></i>Beranda</a>

                  </li>
                  <li>
                     <a href="datakaryawan.php">
                        <i class="fas fa-chart-bar"></i>Data Pegawai</a>
                  </li>
                  <li>
                     <a href="datauser.php">
                        <i class="fas fa-table"></i>Data User</a>
                  </li>
                  <li>
                     <a href="datajabatan.php">
                        <i class="far fa-check-square"></i>Data Jabatan</a>
                  </li>
                  <li>
                     <a href="data_absen.php">
                        <i class="fas fa-calendar-alt"></i>Data Absen</a>
                  </li>
                  <li>
                     <a href="data_keterangan.php">
                        <i class="fas fa-table"></i>data Keterangan
                     </a>
                  </li>
                  <li class="active has-sub">
                     <a href="pilih_periode.php">
                        <i class="fas fa-table"></i>Laporan Absensi
                     </a>
                  </li>
                  <!--<li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>-->
                  <li>
                     <a href="logout.php">Logout</a>
                  </li>
               </ul>
            </nav>
         </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
         <!-- HEADER DESKTOP-->
         <header class="header-desktop">
            <div class="section__content section__content--p30">
               <div class="container-fluid">
                  <div class="header-wrap">
                     <form class="form-header" action="prospenab.php" method="POST">
                        <input autocomplete="off" class="au-input au-input--xl" type="text" name="cari"
                           placeholder="Cari ID atau Nama Pegawai" />
                        <button class="au-btn--submit" type="submit">
                           <i class="zmdi zmdi-search"></i>
                        </button>
                     </form>

                  </div>
               </div>
            </div>
         </header>
         <!-- END HEADER DESKTOP-->

         <!-- MAIN CONTENT-->
         <?php
            if (isset($_POST['simpan'])) {
               
               $bln = $_POST['bln'];
               $tahun = $_POST['tahun'];
               $id_karyawan = $_POST['id_karyawan'];


               if($bln != '' and $tahun != '' and $id_karyawan != '')
               {

                  $where = "where waktu like '%".$bln."-".$tahun."%' and id_karyawan=".$id_karyawan;
               }
               if($bln != '' and $tahun != '' and $id_karyawan == '')
               {
                  $where = "where waktu like '%".$bln."-".$tahun."%'"; 
               }
                if($bln == '' and $tahun != '' and $id_karyawan != '')
               {

                  $where = "where waktu like '%-".$tahun."%' and id_karyawan=".$id_karyawan;
               }
               
$bulan = array (
		'01' =>   'Januari',
		'02' =>'Februari',
		'03' =>'Maret',
		'04' =>'April',
		'05' =>'Mei',
		'06' =>'Juni',
		'07' =>'Juli',
		'08' =>'Agustus',
		'09' =>'September',
		'10' =>'Oktober',
		'11' =>'November',
		'12' =>'Desember'
	);
            }
            ?>

         <div class="main-content">
            <div class="section__content section__content--p30">
               <div class="container-fluid">

                  <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-primary res">
                           <!-- Default panel contents -->

                           <div class="panel-body">
                           </div>
                           <div id="printableArea" class="content">
                              <ul class="list-group">

                                 <li class="list-group-item">
                                    <b></b>
                                    <center>
                                       <h4 class="text-center mb-2 mt-2" style="color:#393085"><b> Laporan Absensi</b>
                                       </h4>
                                       <h4 class="text-center mb-2 mt-2" style="color:#393085"><b> SMPN 3 Bangkinang
                                             </b>
                                       </h4>
                                       <h4 class="text-center mb-2 mt-2" style="color:#393085"><b> Bulan
                                             <?php echo $bulan[$bln] ?> Tahun <?php echo $tahun ?>
                                          </b>
                                       </h4>
                                    </center>
                                    <table class="table table-hover" style="font-size:12px">
                                       <thead>
                                          <tr>
                                             <th>Data Pegawai</th>
                                             <th></th>


                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php 
                                            include 'koneksi.php';
                                            $sql = "SELECT * FROM tb_absen $where";
                                            $query = mysqli_query($koneksi, $sql);

                                            $no = 1;
                                            while ($row = mysqli_fetch_array($query)) {
                                                
                                            
                                         ?>
                                          <tr>
                                             <td><?php echo $row['id_karyawan']; ?> : <?php echo $row ['nama']; ?></td>
                                             <td><?php echo $row ['waktu']; ?></td>

                                          </tr>
                                          <?php 
                                           $no++;
                                       }

                                            ?>
                                       </tbody>
                                    </table>
                                 </li>


                              </ul>
                           </div>
                        </div>
                        <input type="button" value="Cetak" class="btn btn-primary mt-2 mr-2"
                           onclick="printDiv('printableArea')">
                        <!--input type="button" value="Download PDF" onclick="saveDiv('printableArea','Laporan Absensi')"
                           class="btn btn-danger mt-2 mr-2 cmd"-->
                     </div>



                  </div>




               </div>
            </div>
         </div>

      </div>

      <!-- Jquery JS-->
      <script src="vendor/jquery-3.2.1.min.js"></script>
      <!-- Bootstrap JS-->
      <script src="vendor/bootstrap-4.1/popper.min.js"></script>
      <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
      <!-- Vendor JS       -->
      <script src="vendor/slick/slick.min.js">
      </script>
      <script src="vendor/wow/wow.min.js"></script>
      <script src="vendor/animsition/animsition.min.js"></script>
      <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
      </script>
      <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
      <script src="vendor/counter-up/jquery.counterup.min.js">
      </script>
      <script src="vendor/circle-progress/circle-progress.min.js"></script>
      <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
      <script src="vendor/chartjs/Chart.bundle.min.js"></script>
      <script src="vendor/select2/select2.min.js">
      </script>

      <!-- Main JS-->
      <script src="js/main.js"></script>

      <script src="js/jspdf.min.js"></script>

      <script>
      function printDiv(divName) {
         var printContents = document.getElementById(divName).innerHTML;
         var originalContents = document.body.innerHTML;

         document.body.innerHTML = printContents;

         window.print();

         document.body.innerHTML = originalContents;
      }

      var doc = new jsPDF('p', 'pt', 'letter');

      function saveDiv(divId, title) {
         doc.canvas.height = 72 * 50;
         doc.canvas.width = 72 * 100;

         // alert(divId);
         doc.fromHTML('<html><head><title>${title}</title></head><body>' + document.getElementById(divId).innerHTML +
            '</body></html>');
         doc.setFontSize(12);
         doc.save('laporan_absensi.pdf');
      }
      </script>

</body>

</html>
<!-- end document-->