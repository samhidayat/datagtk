<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    
    <h6>SIGAWAI <em style="color:brown">(Sistem Informasi Pegawai)</em> <br>merupakan upaya MIN 2 Kota Surabaya untuk mendukung program <b style="color:green">Kementerian Agama RI</b> dalam digitalisasi Madrasah. <br>Terima kasih telah turut serta dan mendukung program digitalisasi data kepegawaian MIN 2 Kota Surabaya.</h6>

    <div class="card mb-3 col-lg-12">
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start" width="200" height="200">
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <p class="card-title">Nama : <?= $user['nama']; ?> <br>
                    <font class="card-text">eMail : <?= $user['email']; ?></font><br>
                    <font class="card-text">Status Pegawai : <?= $user['status_pgwai']; ?></font>
                    <p class="card-text"><small class="text-muted">Terdaftar sejak <?= date('d F Y', $user['date_created']) ?></small></p>
                    
                    <font class="card-text"><em style="color:blue">Lengkapi dan/ perbarui data Anda. Jika selesai, Anda dapat memeriksa data yang telah diisi melalui tautan dibawah ini.</em><br>
                    <a class="btn btn-success" href="user/cekdata" role="button">Lihat Data</a></font><br></p>
                    
                    
                </div>
            </div>
            
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->