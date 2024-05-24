<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <div class="row">
        <div class="col-lg-8">
            
                <form method="POST" action="<?php echo base_url();?>user/tambahpendidikan2" enctype="multipart/form-data">
            
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
            
    <br><div class="alert alert-info" role="alert"> Data Pendidikan (S2)</div>

    
        <div class="form-row row">   
    <label for="jenjang2" class="col-sm-4 col-form-label">Jenjang</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="jenjang2" id="jenjang2" required>
        <option value="<?= $user['jenjang2']; ?>">.: <?= $user['jenjang2']; ?> :.</option>
        <option value="S2">S2</option>
        </select>   
        <?= form_error('jenjang2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
            <div class="form-row row">
                <label for="nama_pt2" class="col-sm-4 col-form-label">Nama Perguruan Tinggi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama_pt2" name="nama_pt2"  value="<?= $user['nama_pt2']; ?>" required>
                    <?= form_error('nama_pt2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">   
    <label for="status_pt2" class="col-sm-4 col-form-label">Status Perguruan Tinggi</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="status_pt2" id="status_pt2" required>
        <option value="<?= $user['status_pt2']; ?>">.:  <?= $user['status_pt2']; ?> :.</option>
        <option value="Negeri">Negeri</option>
        <option value="Swasta">Swasta</option>
        </select>   
        <?= form_error('status_pt2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
        <div class="form-row row">
                <label for="fakul_pt2" class="col-sm-4 col-form-label">Fakultas</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="fakul_pt2" name="fakul_pt2" value="<?= $user['fakul_pt2']; ?>" required>
                    <?= form_error('fakul_pt2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="prodi_pt2" class="col-sm-4 col-form-label">Prodi/ Jurusan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="prodi_pt2" name="prodi_pt2" value="<?= $user['prodi_pt2']; ?>" required>
                    <?= form_error('prodi_pt2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        
       <div class="form-row row">
                <label for="alamat_pt2" class="col-sm-4 col-form-label">Alamat Perguruan Tinggi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat_pt2" name="alamat_pt2"  value="<?= $user['alamat_pt2']; ?>"  required>
                    <?= form_error('alamat_pt2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="thn_masuk2" class="col-sm-4 col-form-label">Tahun Masuk</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="thn_masuk2" name="thn_masuk2"  value="<?= $user['thn_masuk2']; ?>" required>
                    <?= form_error('thn_masuk2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="thn_lulus2" class="col-sm-4 col-form-label">Tahun Lulus</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="thn_lulus2" name="thn_lulus2"  value="<?= $user['thn_lulus2']; ?>" required>
                    <?= form_error('thn_lulus2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="ipk2" class="col-sm-4 col-form-label">IPK</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="ipk2" name="ipk2"  value="<?= $user['ipk2']; ?>" required>
                    <?= form_error('ipk2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="tgl_ijazah2" class="col-sm-4 col-form-label">Tanggal Ijazah</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="tgl_ijazah2" name="tgl_ijazah2"  value="<?= $user['tgl_ijazah2']; ?>" required>
                    <?= form_error('tgl_ijazah2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="no_ijazah2" class="col-sm-4 col-form-label">Nomor Ijazah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_ijazah2" name="no_ijazah2"  value="<?= $user['no_ijazah2']; ?>" required>
                    <?= form_error('no_ijazah2', '<small class="text-danger pl-3">', '</small>'); ?>
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