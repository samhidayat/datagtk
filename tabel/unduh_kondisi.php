<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table siswa berdasarkan nis secara Descending
$siswa = query("SELECT * FROM user ORDER BY id DESC");

// Membuat nama file
$filename = "Data GTK MIN 2 Kota Surabaya-" . date('Ymd') . ".xls";

// Kodingam untuk export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Kondisi_GTK_MIN_2_Kota_Surabaya.xls");

?>
<!--untuk export excel dalam format text-->
<style> .str{ mso-number-format:\@; } </style>

<style>
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

<p><em style="color:red">Data dibawah ini merupakan hasil isi dari masing-masing Guru dan Tenaga Kependidikan MIN 2 Kota Surabaya <br> <font style="color:green">Data ini diunduh tanggal : <?php echo date("Y-m-d"); ?>, Pukul : <?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i'); ?> WIB</font></font></em></p>

 <!-- Kondisi GTK Berdasarkan Data Kepegawaian -->
   
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                 
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
  </tr>
</thead>

<tbody>
  
  <tr>
    <td>Jumlah PNS</td>
    <td><center><?php echo $PNS; ?></center></td>
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
    <th class="tg-0lax" colspan="2"><strong>Kondisi GTK Berdasarkan Data Kependidikan</strong></th>
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
  </tr>
</thead>

<tbody>
  <tr>
    <td>Kepala Madrasah</td>
    <td><center><?php echo $kamad; ?></center></td>
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
  </tr>
</thead>

<tbody>
  <tr>
    <td>Tenaga Kependidikan</td>
    <td><center><?php echo $tendik; ?></center></td>
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
  </tr>
</thead>

<tbody>
  <tr>
    <td>Jumlah GTK Laki-laki</td>
    <td><center><?php echo $L; ?></center></td>
  </tr>
  <tr>
    <td>Jumlah GTK Perempuan</td>
    <td><center><?php echo $P; ?></center></td>
  </tr>
  <tr>
    <td>Guru (PNS) Laki-laki</td>
    <td><center><?php echo $pnsgurulk; ?></center></td>
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