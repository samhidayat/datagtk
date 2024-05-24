<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <div class="row">
        <div class="col-lg-8">
            
                <form method="POST" action="<?php echo base_url();?>user/tambahpendidikan3" enctype="multipart/form-data">
            
            <div class="form-row row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-row row">
                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                </div>
            </div>
            
    <br><div class="alert alert-info" role="alert"> Data Pendidikan (S3)</div>

    
        <div class="form-row row">   
    <label for="jenjang3" class="col-sm-4 col-form-label">Jenjang</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="jenjang3" id="jenjang3" required>
        <option value="<?= $user['jenjang3']; ?>">.: <?= $user['jenjang3']; ?> :.</option>
        <option value="S3">S3</option>
        </select>   
        <?= form_error('jenjang3', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
            <div class="form-row row">
                <label for="nama_pt3" class="col-sm-4 col-form-label">Nama Perguruan Tinggi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama_pt3" name="nama_pt3"  value="<?= $user['nama_pt3']; ?>" required>
                    <?= form_error('nama_pt3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">   
    <label for="status_pt3" class="col-sm-4 col-form-label">Status Perguruan Tinggi</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="status_pt3" id="status_pt3" required>
        <option value="<?= $user['status_pt3']; ?>">.: <?= $user['status_pt']; ?> :.</option>
        <option value="Negeri">Negeri</option>
        <option value="Swasta">Swasta</option>
        </select>   
        <?= form_error('status_pt3', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
        <div class="form-row row">
                <label for="fakul_pt3" class="col-sm-4 col-form-label">Fakultas</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="fakul_pt3" name="fakul_pt3" value="<?= $user['fakul_pt3']; ?>" required>
                    <?= form_error('fakul_pt3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="prodi_pt3" class="col-sm-4 col-form-label">Prodi/ Jurusan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="prodi_pt3" name="prodi_pt3" value="<?= $user['prodi_pt3']; ?>" required>
                    <?= form_error('prodi_pt3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        
       <div class="form-row row">
                <label for="alamat_pt3" class="col-sm-4 col-form-label">Alamat Perguruan Tinggi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat_pt3" name="alamat_pt3" value="<?= $user['alamat_pt3']; ?>" required>
                    <?= form_error('alamat_pt3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="thn_masuk3" class="col-sm-4 col-form-label">Tahun Masuk</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="thn_masuk3" name="thn_masuk3"  value="<?= $user['thn_masuk3']; ?>"  required>
                    <?= form_error('thn_masuk3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="thn_lulus3" class="col-sm-4 col-form-label">Tahun Lulus</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="thn_lulus3" name="thn_lulus3"  value="<?= $user['thn_lulus3']; ?>" required>
                    <?= form_error('thn_lulus3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="ipk3" class="col-sm-4 col-form-label">IPK</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="ipk3" name="ipk3"  value="<?= $user['ipk3']; ?>"  required>
                    <?= form_error('ipk3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="tgl_ijazah3" class="col-sm-4 col-form-label">Tanggal Ijazah</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="tgl_ijazah3" name="tgl_ijazah3"  value="<?= $user['tgl_ijazah3']; ?>" required>
                    <?= form_error('tgl_ijazah3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="no_ijazah3" class="col-sm-4 col-form-label">Nomor Ijazah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_ijazah3" name="no_ijazah3"  value="<?= $user['no_ijazah3']; ?>" required>
                    <?= form_error('no_ijazah3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            
            <br>
            <div class="form-group row justify-content-end">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-success">SIMPAN</button> 
                    &nbsp; &nbsp; &nbsp;<a class="btn btn-danger" href="pendidikan" role="button">BATAL</a>
                </div>
            </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->