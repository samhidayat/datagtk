<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <div class="row">
        <div class="col-lg-8">
            
                <form method="POST" action="<?php echo base_url();?>user/tambahpendidikan" enctype="multipart/form-data">
            
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
            
    <br><div class="alert alert-info" role="alert"> Data Pendidikan (S1)</div>

    
        <div class="form-row row">   
    <label for="jenjang" class="col-sm-4 col-form-label">Jenjang</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="jenjang" id="jenjang" required>
        <option value="<?= $user['jenjang']; ?>">.: <?= $user['jenjang']; ?> :.</option>
        <option value="D4/ S1">D4/ S1</option>
        </select>   
        <?= form_error('jenjang', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
            <div class="form-row row">
                <label for="nama_pt" class="col-sm-4 col-form-label">Nama Perguruan Tinggi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama_pt" name="nama_pt" value="<?= $user['nama_pt']; ?>" required>
                    <?= form_error('nama_pt', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">   
    <label for="status_pt" class="col-sm-4 col-form-label">Status Perguruan Tinggi</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="status_pt" id="status_pt" required>
        <option value="<?= $user['status_pt']; ?>">.:  <?= $user['status_pt']; ?>  :.</option>
        <option value="Negeri">Negeri</option>
        <option value="Swasta">Swasta</option>
        </select>   
        <?= form_error('status_pt', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
        <div class="form-row row">
                <label for="fakul_pt" class="col-sm-4 col-form-label">Fakultas</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="fakul_pt" name="fakul_pt" value="<?= $user['fakul_pt']; ?>" required>
                    <?= form_error('fakul_pt', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="prodi_pt" class="col-sm-4 col-form-label">Prodi/ Jurusan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="prodi_pt" name="prodi_pt" value="<?= $user['prodi_pt']; ?>" required>
                    <?= form_error('prodi_pt', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        
       <div class="form-row row">
                <label for="alamat_pt" class="col-sm-4 col-form-label">Alamat Perguruan Tinggi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat_pt" name="alamat_pt"  value="<?= $user['alamat_pt']; ?>" required>
                    <?= form_error('alamat_pt', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="thn_masuk" class="col-sm-4 col-form-label">Tahun Masuk</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="thn_masuk" name="thn_masuk"  value="<?= $user['thn_masuk']; ?>" required>
                    <?= form_error('thn_masuk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="thn_lulus" class="col-sm-4 col-form-label">Tahun Lulus</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="thn_lulus" name="thn_lulus"  value="<?= $user['thn_lulus']; ?>" required>
                    <?= form_error('thn_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="ipk" class="col-sm-4 col-form-label">IPK</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="ipk" name="ipk" value="<?= $user['ipk']; ?>"  required>
                    <?= form_error('ipk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="tgl_ijazah" class="col-sm-4 col-form-label">Tanggal Ijazah</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="tgl_ijazah" name="tgl_ijazah"  value="<?= $user['tgl_ijazah']; ?>" required>
                    <?= form_error('tgl_ijazah', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="no_ijazah" class="col-sm-4 col-form-label">Nomor Ijazah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_ijazah" name="no_ijazah"  value="<?= $user['no_ijazah']; ?>" required>
                    <?= form_error('no_ijazah', '<small class="text-danger pl-3">', '</small>'); ?>
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