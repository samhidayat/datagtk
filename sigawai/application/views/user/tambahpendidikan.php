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
   
   <p> &nbsp; &nbsp; &nbsp;<a class="btn btn-info" href="tambahpendidikan" role="button">Lengkapi Data S1</a><br></p>
   
   <div style="overflow-x:auto;"> 
<table class="table table-bordered text-left ml-12" id="pendidikan">
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

<?php include 'tambahpendidikan2.php';?>
<?php include 'tambahpendidikan3.php';?>
</div>
</div>
</div>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>