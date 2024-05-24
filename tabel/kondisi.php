<?php

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table siswa berdasarkan nis secara Descending
$siswa = query("SELECT * FROM user ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
  <link href="https://layanan.min2surabaya.sch.id/assets/img/favicon.png" rel="icon">
  <link href="https://layanan.min2surabaya.sch.id/assets/img/favicon.png" rel="apple-touch-icon">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>SIGAWAI</title>
    
    <!-- blink text -->
   <style>
   
        .blink {
            animation: blinker 1.0s linear infinite;
            color: red;
            font-size: 0.85em;
            /* Larger, responsive font size */
            margin-bottom: 20px;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
    <!-- end blink -->
    
    <!-- back to top -->
    <style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #EE9322;
  color: white;
  cursor: pointer;
  padding: 5px;
  border-radius: 5px;
}
#myBtn:hover {
  background-color: #4793AF;
}

.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:#c0c0c0;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:#c0c0c0;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-7r1y{background-color:#def2d9;border-color:#c0c0c0;text-align:center;vertical-align:top}
.tg .tg-kr4m{background-color:#ffffc7;border-color:#c0c0c0;text-align:left;vertical-align:top}
.tg .tg-306y{background-color:#000000;border-color:#c0c0c0;color:#ffffff;text-align:left;vertical-align:top}
.tg .tg-dr7g{background-color:#def2d9;border-color:#c0c0c0;text-align:left;vertical-align:top}
.tg .tg-l9xd{background-color:#d8f2fc;border-color:#c0c0c0;text-align:left;vertical-align:top}
</style>
<!-- end to top -->
    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="/datagtk"><img src="https://layanan.min2surabaya.sch.id/assets/img/favicon.png" width="50px" height="50px"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/datagtk/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datagtk/tabel">Tabel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datagtk/tabel/kondisi.php">Kondisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datagtk/#contact">Contact</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="https://layanan.min2surabaya.sch.id/">Layanan</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="btn btn-warning" href="../sigawai/" role="button"><b>Login</b></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->
    <br>
    <!-- Kondisi GTK Berdasarkan Data Kepegawaian -->
   
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                
                 <em style="color:blue">Disclaimer : </em><em class="blink">Data dibawah ini <strong>merupakan hasil isi dari masing-masing Guru dan Tenaga Kependidikan</strong> MIN 2 Kota Surabaya</em>
                 
                 <br><br>
    
    <a class="btn btn-success" href="https://min2surabaya.web.id/datagtk/tabel/unduh_kondisi.php" role="button">Unduh Kondisi GTK</a>
                 
<?php
$gender = mysqli_query($koneksi,"SELECT * FROM user where gender='L'");
$L = mysqli_num_rows($gender);
?>

<?php
$gender = mysqli_query($koneksi,"SELECT * FROM user where gender='P'");
$P = mysqli_num_rows($gender);
?>

<?php
$status_pgwai = mysqli_query($koneksi,"SELECT * FROM user where status_pgwai='PNS'");
$PNS = mysqli_num_rows($status_pgwai);
?>

<?php
$status_pgwai = mysqli_query($koneksi,"SELECT * FROM user where status_pgwai='PPPK'");
$PPPK = mysqli_num_rows($status_pgwai);
?>

<?php
$status_pgwai = mysqli_query($koneksi,"SELECT * FROM user where status_pgwai='GTT'");
$GTT = mysqli_num_rows($status_pgwai);
?>

<?php
$status_pgwai = mysqli_query($koneksi,"SELECT * FROM user where status_pgwai='PTT'");
$PTT = mysqli_num_rows($status_pgwai);
?>

<?php
$status_serti = mysqli_query($koneksi,"SELECT * FROM user where status_serti='Lulus'");
$lulus = mysqli_num_rows($status_serti);
?>

<?php
$status_serti = mysqli_query($koneksi,"SELECT * FROM user where status_serti='Belum Sertifikasi'");
$belum = mysqli_num_rows($status_serti);
?>

<?php
$status_serti = mysqli_query($koneksi,"SELECT * FROM user where status_serti='Non Guru'");
$nonguru = mysqli_num_rows($status_serti);
?>

            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <div style="overflow-x:auto;">
       <table id="data" class="tg" style="width:100%">
<thead>
  <tr>
    <th class="tg-0lax" colspan="2"><strong>Kondisi GTK Berdasarkan Data Kepegawaian</strong></th>
    <th class="tg-0lax" colspan="2"><strong>Total GTK</strong></th>
  </tr>
</thead>

<tbody>
  
  <tr>
    <td>Jumlah PNS</td>
    <td><center><?php echo $PNS; ?></center></td>
    <td rowspan="4"><center><?php echo $PNS+$PPPK+$PTT+$GTT; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah PPPK</td>
    <td><center><?php echo $PPPK; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah GTT (Non ASN)</td>
    <td><center><?php echo $GTT; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah PTT (Non ASN)</td>
    <td><center><?php echo $PTT; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah Guru Sertifikasi</td>
    <td><center><?php echo $lulus; ?></center></td>
    <td rowspan="3"><center><?php echo $belum+$lulus+$nonguru; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah Guru Non Sertifikasi</td>
    <td><center><?php echo $belum; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah Tendik</td>
    <td><center><?php echo $nonguru; ?></center></td>
  </tr>
</tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Kondisi GTK Berdasarkan Data Kepegawaian -->
    
        <!-- Kondisi GTK Berdasarkan Data Kependidikan -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                
<?php
$jenjang = mysqli_query($koneksi,"SELECT * FROM user where jenjang='D4/ S1'");
$s1 = mysqli_num_rows($jenjang);
?>

<?php
$jenjang2 = mysqli_query($koneksi,"SELECT * FROM user where jenjang2='S2'");
$s2 = mysqli_num_rows($jenjang2);
?>

<?php
$jenjang3 = mysqli_query($koneksi,"SELECT * FROM user where jenjang3='S3'");
$s3 = mysqli_num_rows($jenjang3);
?>

            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <div style="overflow-x:auto;">
       <table id="data" class="tg" style="width:100%">
<thead>
  <tr>
    <th class="tg-0lax"><strong>Kondisi GTK Berdasarkan Data Kependidikan</strong></th>
    <th class="tg-0lax"><strong>Total GTK</strong></th>
  </tr>
</thead>

<tbody>
    <td>Jumlah GTK D4/ S1</td>
    <td><center><?php echo $s1; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah GTK S2</td>
    <td><center><?php echo $s2; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah GTK S3</td>
    <td><center><?php echo $s3; ?></center></td>
  </tr>
</tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Kondisi GTK Berdasarkan Data Kependidikan -->
    
            <!-- Kondisi GTK Berdasarkan Jabatan -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                
<?php
$kamad1 = mysqli_query($koneksi,"SELECT * FROM user where jabatan='Kepala Madrasah'");
$kamad = mysqli_num_rows($kamad1);
?>

<?php
$walas1 = mysqli_query($koneksi,"SELECT * FROM user where jabatan='Wali Kelas'");
$walas = mysqli_num_rows($walas1);
?>

<?php
$tu1 = mysqli_query($koneksi,"SELECT * FROM user where jabatan='Tata Usaha'");
$tu = mysqli_num_rows($tu1);
?>

<?php
$bd1 = mysqli_query($koneksi,"SELECT * FROM user where jabatan='Bendahara Dipa'");
$bd = mysqli_num_rows($bd1);
?>

<?php
$tm1 = mysqli_query($koneksi,"SELECT * FROM user where jabatan='Tidak Menjabat'");
$tm = mysqli_num_rows($tm1);
?>

            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
            </div>
        </div>
        
        <div class="row my-3">
            <div class="col-md">
                <div style="overflow-x:auto;">
    <table id="data" class="tg" style="width:100%">
<thead>
  <tr>
    <th class="tg-0lax" colspan="2"><strong>Kondisi GTK Berdasarkan Data Jabatan</strong></th>
    <th class="tg-0lax" colspan="2"><strong>Total GTK</strong></th>
  </tr>
</thead>

<tbody>
  <tr>
    <td>Kepala Madrasah</td>
    <td><center><?php echo $kamad; ?></center></td>
    <td rowspan="5"><center><?php echo $kamad+$walas+$tu+$bd+$tm; ?></center></td>
  </tr>
  <tr>
    <td>Wali Kelas</td>
    <td><center><?php echo $walas; ?></center></td>
  </tr>
  <tr>
    <td>Tata Usaha</td>
    <td><center><?php echo $tu; ?></center></td>
  </tr>
  <tr>
    <td>Bendahara Dipa</td>
    <td><center><?php echo $bd; ?></center></td>
  </tr>
  <tr>
    <td>Tidak Mnejabat</td>
    <td><center><?php echo $tm; ?></center></td>
  </tr>
</tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Kondisi GTK Berdasarkan jabatan -->
    
           <!-- Kondisi GTK Berdasarkan status penugasan -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                
<?php
$tendik1 = mysqli_query($koneksi,"SELECT * FROM user where status_tugas='Tenaga Kependidikan'");
$tendik = mysqli_num_rows($tendik1);
?>

<?php
$guru1 = mysqli_query($koneksi,"SELECT * FROM user where status_tugas='Guru'");
$guru = mysqli_num_rows($guru1);
?>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
            </div>
        </div>
        
        <div class="row my-3">
            <div class="col-md">
                <div style="overflow-x:auto;">
    <table id="data" class="tg" style="width:100%">
<thead>
  <tr>
    <th class="tg-0lax" colspan="2"><strong>Kondisi GTK Berdasarkan Status Penugasan</strong></th>
    <th class="tg-0lax" colspan="2"><strong>Total GTK</strong></th>
  </tr>
</thead>

<tbody>
  <tr>
    <td>Tenaga Kependidikan</td>
    <td><center><?php echo $tendik; ?></center></td>
    <td rowspan="2"><center><?php echo $tendik+$guru; ?></center></td>
  </tr>
  <tr>
    <td>Guru</td>
    <td><center><?php echo $guru; ?></center></td>
  </tr>
</tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Kondisi GTK Berdasarkan status penugasan -->
    
         <!-- Kondisi GTK Berdasarkan Gender -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">

              <?php
$pnsgurulk1 = mysqli_query($koneksi,"SELECT * FROM user where gender='L' AND status_tugas='guru' AND status_pgwai='PNS'");
$pnsgurulk = mysqli_num_rows($pnsgurulk1);
?>

<?php
$pnsgurupr1 = mysqli_query($koneksi,"SELECT * FROM user where gender='P' AND status_tugas='guru' AND status_pgwai='PNS'");
$pnsgurupr = mysqli_num_rows($pnsgurupr1);
?>

<?php
$pppkgurulk1 = mysqli_query($koneksi,"SELECT * FROM user where gender='L' AND status_tugas='guru' AND status_pgwai='PPPK'");
$pppkgurulk = mysqli_num_rows($pppkgurulk1);
?>

<?php
$pppkgurupr1 = mysqli_query($koneksi,"SELECT * FROM user where gender='P' AND status_tugas='guru' AND status_pgwai='PPPK'");
$pppkgurupr = mysqli_num_rows($pppkgurupr1);
?>

<?php
$gttlk1 = mysqli_query($koneksi,"SELECT * FROM user where gender='L' AND status_tugas='guru' AND status_pgwai='GTT'");
$gttlk = mysqli_num_rows($gttlk1);
?>

<?php
$gttpr1 = mysqli_query($koneksi,"SELECT * FROM user where gender='P' AND status_tugas='guru' AND status_pgwai='GTT'");
$gttpr = mysqli_num_rows($gttpr1);
?>

<?php
$pnspegawailk1 = mysqli_query($koneksi,"SELECT * FROM user where gender='L' AND status_tugas='Tenaga Kependidikan' AND status_pgwai='PNS'");
$pnspegawailk = mysqli_num_rows($pnspegawailk1);
?>

<?php
$pnspegawaipr1 = mysqli_query($koneksi,"SELECT * FROM user where gender='P' AND status_tugas='Tenaga Kependidikan' AND status_pgwai='PNS'");
$pnspegawaipr = mysqli_num_rows($pnspegawaipr1);
?>




<?php
$pppkpegawailk1 = mysqli_query($koneksi,"SELECT * FROM user where gender='L' AND status_tugas='Tenaga Kependidikan' AND status_pgwai='PPPK'");
$pppkpegawailk = mysqli_num_rows($pppkpegawailk1);
?>

<?php
$pppkpegawaipr1 = mysqli_query($koneksi,"SELECT * FROM user where gender='P' AND status_tugas='Tenaga Kependidikan' AND status_pgwai='PPPK'");
$pppkpegawaipr = mysqli_num_rows($pppkpegawaipr1);
?>




<?php
$pttlk1 = mysqli_query($koneksi,"SELECT * FROM user where gender='L' AND status_tugas='Tenaga Kependidikan' AND status_pgwai='PTT'");
$pttlk = mysqli_num_rows($pttlk1);
?>

<?php
$pttpr1 = mysqli_query($koneksi,"SELECT * FROM user where gender='P' AND status_tugas='Tenaga Kependidikan' AND status_pgwai='PTT'");
$pttpr = mysqli_num_rows($pttpr1);
?>

            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
            </div>
        </div>
        
        <div class="row my-3">
            <div class="col-md">
                <div style="overflow-x:auto;">
    <table id="data" class="tg" style="width:100%">     
<thead>
  <tr>
    <th class="tg-0lax" colspan="2"><strong>Kondisi GTK Berdasarkan Gender</strong></th>
    <th class="tg-0lax" colspan="12"><strong>Total GTK</strong></th>
  </tr>
</thead>

<tbody>
  <tr>
    <td>Jumlah GTK Laki-laki</td>
    <td><center><?php echo $L; ?></center></td>
    <td rowspan="2"><center><?php echo $tendik+$guru; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah GTK Perempuan</td>
    <td><center><?php echo $P; ?></center></td>
  </tr>
  <tr>
    <td>Guru (PNS) Laki-laki</td>
    <td><center><?php echo $pnsgurulk; ?></center></td>
    <td rowspan="12"><center><?php echo $pnsgurulk+$pnsgurupr+$pppkgurulk+$pppkgurupr+$gttlk+$gttpr+$pnspegawailk+$pnspegawaipr+$pppkpegawailk+$pppkpegawaipr+$pttlk+$pttpr; ?></center></td>
  </tr>
  <tr>
    <td>Guru (PNS) Perempuan</td>
    <td><center><?php echo $pnsgurupr; ?></center></td>
  </tr>
  <tr>
    <td>Guru (PPPK) Laki-laki</td>
    <td><center><?php echo $pppkgurulk; ?></center></td>
  </tr>
  <tr>
    <td>Guru (PPPK) Perempuan</td>
    <td><center><?php echo $pppkgurupr; ?></center></td>
  </tr>
  <tr>
    <td>Guru (Non ASN) Laki-laki</td>
    <td><center><?php echo $gttlk; ?></center></td>
  </tr>
  <tr>
    <td>Guru (Non ASN) Perempuan</td>
    <td><center><?php echo $gttpr; ?></center></td>
  </tr>
  <tr>
    <td>Tendik (PNS) Laki-laki</td>
    <td><center><?php echo $pnspegawailk; ?></center></td>
  </tr>
  <tr>
    <td>Tendik (PNS) Perempuan</td>
    <td><center><?php echo $pnspegawaipr; ?></center></td>
  </tr>
  <tr>
    <td>Tendik (PPPK) Laki-laki</td>
    <td><center><?php echo $pppkpegawailk; ?></center></td>
  </tr>
  <tr>
    <td>Tendik (PPPK) Perempuan</td>
    <td><center><?php echo $pppkpegawaipr; ?></center></td>
  </tr>
  <tr>
    <td>Tendik (Non ASN) Laki-laki</td>
    <td><center><?php echo $pttlk; ?></center></td>
  </tr>
  <tr>
    <td>Tendik (Non ASN) Perempuan</td>
    <td><center><?php echo $pttpr; ?></center></td>
  </tr>
</tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Kondisi GTK Berdasarkan gender -->
    


    <!-- Modal Detail Data -->
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detail" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase" id="detail">Detail Data <?= $row['siswa_nama']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-left" id="detail-siswa">
                </div>
            </div>
        </div>
    </div>
    <!-- Close Modal Detail Data -->

<button onclick="topFunction()" id="myBtn" title="Go to top"> <h4><i class="bi bi-shift-fill"></i></h4> </button>

    <!-- Footer -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-md-6 my-2" id="about">
             <!--   <h4 class="fw-bold text-uppercase">About</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolore sed porro modi mollitia quaerat? Nam, error fugit sed, maiores illum architecto, officiis voluptate nesciunt voluptatibus aut reprehenderit perspiciatis doloremque!</p>
            </div>
            <div class="col-md-6 my-2 text-center link">
                <h4 class="fw-bold text-uppercase">Account Links</h4>
                <a href="https://web.facebook.com/vikry.surya.5/" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                <a href="https://github.com/vikrysurya24" target="_blank"><i class="bi bi-github fs-3"></i></a>
                <a href="https://www.instagram.com/vikrysurya_/" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                <a href="https://twitter.com/vikrysurya_" target="_blank"><i class="bi bi-twitter fs-3"></i></a>
            </div>
        </div>-->
    </div>
    
    <footer class="bg-dark text-white text-center" style="padding: 5px;">
        <p> <font style="color: #fff;">&copy; <?php echo date("Y"); ?>
</font> Created with <i class="bi bi-suit-heart-fill" style="color: #ffffff;"></i>  Tim Media MIN 2 Kota Surabaya</p>
    </footer>
    <!-- Close Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
 <script>
// fungsi ketika user men scroll ke bawah 20 px maka tombol back to top akan muncul
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// fungsi ketika user meng klik tombol back to top maka halaman akan menscroll ke atas

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
    
</body>

</html>