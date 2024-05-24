<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h4 class="h3 mb-12 text-gray-800"><?= $title; ?></h4>
    
    <div class="row">
        <div class="col-lg-12">

<?php if ($this->session->flashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('message') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>
  <em>Jika terdapat data yang salah dan/ kosong silahkan untuk di perbarui, terima kasih.</em><br>
  <!--tabel personal mulai-->
 <br><div class="alert alert-primary" role="alert"> Data Personal &nbsp; &nbsp;<a class="btn btn-primary" href="edit" role="button">Perbaiki Data</a></div>  
   <div style="overflow-x:auto;"> 
<table class="table table-bordered text-left ml-12">
    <thead>
      <tr>
          
    <tr>
    <td>Nama Lengkap</td>
    <td><?= $user['nama'] ?></td>
  </tr>
  
</thead>
<tbody>
    
  <tr>
    <td>Tempat/ Tanggal Lahir</td>
    <td><?= $user['tmp_lahir'] ?>, <?= $user['tgl_lahir'] ?></td>
  </tr>
  
  <tr>
    <td>Gender</td>
    <td><?= $user['gender'] ?></td>
  </tr>
  
  <tr>
    <td>NIK</td>
    <td><?= $user['nik1'] ?></td>
  </tr>
  
  <tr>
    <td>Agama</td>
    <td><?= $user['agama'] ?></td>
  </tr>
  
  <tr>
    <td>Golongan Darah</td>
    <td><?= $user['goldar'] ?></td>
  </tr>
  
  <tr>
    <td>Status Tempat Tinggal</td>
    <td><?= $user['status_tmp_tinggal'] ?></td>
  </tr>
  
  <tr>
    <td>Alamat</td>
    <td><b><?= $user['alamat'] ?></b>, Kelurahan <b><?= $user['kel'] ?></b>, Kecamatan <b><?= $user['kec'] ?></b>, Kota <b><?= $user['kota'] ?></b> - <b><?= $user['kd_pos'] ?></b></td>
  </tr>
  
  <tr>
    <td>Transportasi, Jarak dan Waktu Tempuh ke Madrasah</td>
    <td>Menggunakan <b><?= $user['transport'] ?></b>, dengan jarak <b><?= $user['jarak'] ?></b> dan waktu tempuh <b><?= $user['waktu'] ?></b></td>
  </tr>
  
  <tr>
    <td>eMail</td>
    <td><?= $user['email'] ?></td>
  </tr>
  
  <tr>
    <td>No. Ponsel</td>
    <td><?= $user['ponsel'] ?></td>
  </tr>
  
  <tr>
    <td>Nama Ibu</td>
    <td><?= $user['nama_ibu'] ?></td>
  </tr>
  
  <tr>
    <td>Status Nikah</td>
    <td><?= $user['status_nikah'] ?></td>
  </tr>
  
  <tr>
    <td>Nama Suami/ Istri</td>
    <td><?= $user['sutri'] ?></td>
  </tr>
  
  </tr>
        
    </tbody>
</table>
</div>
<!--tabel personal akhir-->

<!--tabel pegawai mulai-->
 <br><div class="alert alert-warning" role="alert"> Data Kepegawaian  &nbsp; &nbsp;<a class="btn btn-warning" href="pegawai" role="button">Perbaiki Data</a></div>  
   <div style="overflow-x:auto;"> 
<table class="table table-bordered text-left ml-12">
    <thead>
      <tr>
          
    <tr>
    <td>Status Pegawai</td>
    <td><?= $user['status_pgwai'] ?></td>
  </tr>
  
</thead>
<tbody>
    
  <tr>
    <td>NIP</td>
    <td><?= $user['nip'] ?></td>
  </tr>
  
  <tr>
    <td>Gol/ Ruang</td>
    <td><?= $user['pangkat'] ?></td>
  </tr>
  
  <tr>
    <td>Status Tugas</td>
    <td><?= $user['status_tugas'] ?></td>
  </tr>
  
  <tr>
    <td>Jabatan</td>
    <td><?= $user['jabatan'] ?></td>
  </tr>
  
  <tr>
    <td>Instansi yang Menerbitkan SK</td>
    <td><?= $user['instansi_sk'] ?></td>
  </tr>
  
  <tr>
    <td>Nomor SK</td>
    <td><?= $user['no_sk'] ?></td>
  </tr>
  
  <tr>
    <td>Tanggal SK</td>
    <td><?= $user['tgl_sk'] ?></td>
  </tr>
  
  <tr>
    <td>Jenis SK</td>
    <td><?= $user['jns_sk'] ?></td>
  </tr>
  
  <tr>
    <td>NUPTK/ Peg ID</td>
    <td><?= $user['nuptk'] ?></td>
  </tr>
  
  <tr>
    <td>Status Sertifikasi</td>
    <td><?= $user['status_serti'] ?></td>
  </tr>
  
  <tr>
    <td>Tanggal Lulus Sertifikasi</td>
    <td><?= $user['tgl_serti'] ?></td>
  </tr>
  
  <tr>
    <td>Nomor Sertifikat Pendidik</td>
    <td><?= $user['no_serti'] ?></td>
  </tr>
  
  <tr>
    <td>Mapel Sertifikasi</td>
    <td><?= $user['mapel_serti'] ?></td>
  </tr>
  
  </tr>
        
    </tbody>
</table>
</div>
<!--tabel pegawai akhir-->

<!--tabel pendidikan mulai-->
 <br><div class="alert alert-info" role="alert"> Data Pendidikan   &nbsp; &nbsp;<a class="btn btn-info" href="pendidikan" role="button">Perbaiki Data</a></div>  
 <font color="#F97300"> <b>DATA S1</b> </font>
 <div style="overflow-x:auto;"> 
<table class="table table-bordered text-left ml-12">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Jenjang</th>
            <th scope="col">Nama PT</th>
            <th scope="col">Status PT</th>
            <th scope="col">Fak/ Prodi</th>
            <th scope="col">Alamat PT</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Tahun Lulus</th>
            <th scope="col">IPK</th>
            <th scope="col">Tanggal Ijazah</th>
            <th scope="col">Nomor Ijazah</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td><?= $user['jenjang'] ?></td>
                <td><?= $user['nama_pt'] ?></td>
                <td><?= $user['status_pt'] ?></td>
                <td>Fakultas <?= $user['fakul_pt'] ?>, Prodi <?= $user['prodi_pt'] ?></td>
                <td><?= $user['alamat_pt'] ?></td>
                <td><?= $user['thn_masuk'] ?></td>
                <td><?= $user['thn_lulus'] ?></td>
                <td><?= $user['ipk'] ?></td>
                <td><?= $user['tgl_ijazah'] ?></td>
                <td><?= $user['no_ijazah'] ?></td>
                
            </tr>
        
    </tbody>
</table>
</div>
<!--tabel pendidikan akhir-->

<!--tabel pendidikan2 mulai-->
<font color="#803D3B"> <b>DATA S2</b> </font>
 <div style="overflow-x:auto;"> 
<table class="table table-bordered text-left ml-12">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Jenjang</th>
            <th scope="col">Nama PT</th>
            <th scope="col">Status PT</th>
            <th scope="col">Fak/ Prodi</th>
            <th scope="col">Alamat PT</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Tahun Lulus</th>
            <th scope="col">IPK</th>
            <th scope="col">Tanggal Ijazah</th>
            <th scope="col">Nomor Ijazah</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td><?= $user['jenjang2'] ?></td>
                <td><?= $user['nama_pt2'] ?></td>
                <td><?= $user['status_pt2'] ?></td>
                <td>Fakultas <?= $user['fakul_pt2'] ?>, Prodi <?= $user['prodi_pt2'] ?></td>
                <td><?= $user['alamat_pt2'] ?></td>
                <td><?= $user['thn_masuk2'] ?></td>
                <td><?= $user['thn_lulus2'] ?></td>
                <td><?= $user['ipk2'] ?></td>
                <td><?= $user['tgl_ijazah2'] ?></td>
                <td><?= $user['no_ijazah2'] ?></td>
                
            </tr>
        
    </tbody>
</table>
</div>
<!--tabel pendidikan2 akhir-->

<!--tabel pendidikan3 mulai-->
<font color="#43766C"> <b>DATA S3</b> </font>
 <div style="overflow-x:auto;"> 
<table class="table table-bordered text-left ml-12">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Jenjang</th>
            <th scope="col">Nama PT</th>
            <th scope="col">Status PT</th>
            <th scope="col">Fak/ Prodi</th>
            <th scope="col">Alamat PT</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Tahun Lulus</th>
            <th scope="col">IPK</th>
            <th scope="col">Tanggal Ijazah</th>
            <th scope="col">Nomor Ijazah</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td><?= $user['jenjang3'] ?></td>
                <td><?= $user['nama_pt3'] ?></td>
                <td><?= $user['status_pt3'] ?></td>
                <td>Fakultas <?= $user['fakul_pt3'] ?>, Prodi <?= $user['prodi_pt3'] ?></td>
                <td><?= $user['alamat_pt3'] ?></td>
                <td><?= $user['thn_masuk3'] ?></td>
                <td><?= $user['thn_lulus3'] ?></td>
                <td><?= $user['ipk3'] ?></td>
                <td><?= $user['tgl_ijazah3'] ?></td>
                <td><?= $user['no_ijazah3'] ?></td>
                
            </tr>
        
    </tbody>
</table>
</div>
<!--tabel pendidikan3 akhir-->

<!--tabel Drive mulai-->
<br><div class="alert alert-danger" role="alert"> Berkas    &nbsp; &nbsp;<a class="btn btn-danger" href="gtk" role="button">Kirim Berkas</a></div>
 <div style="overflow-x:auto;"> 
<table class="table table-bordered text-left ml-12">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Lihat Berkas Anda</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td><?= $user['nama'] ?></td>
                <td><a class="btn btn-info" href="https://drive.google.com/drive/folders/<?= $user['link_drv'] ?>" target="_balnk" role="button">Lihat Berkas</a></td>
                
                
            </tr>
        
    </tbody>
</table>
</div>
<!--tabel Drive akhir-->
</div>
</div>
</div>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>