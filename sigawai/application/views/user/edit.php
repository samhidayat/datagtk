<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('user/edit'); ?>
            
            <div class="form-row row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
           
           <br><div class="alert alert-primary" role="alert"> Data Diri</div>

            <div class="form-row row">
                <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['nama']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="<?= $user['tmp_lahir']; ?>" required>
                    <?= form_error('tmp_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>" required>
                    <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        
        <div class="form-row row">   
        <label for="gender" class="col-sm-4 col-form-label">Gender</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="gender" id="gender" required>
        <option value="<?= $user['gender']; ?>">.: <?= $user['gender']; ?> :.</option>
        <option value="L">L</option>
        <option value="P">P</option>
       </select>   
 <?= form_error('gender', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
        <div class="form-row row">
                <label for="nik1" class="col-sm-4 col-form-label">NIK</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="nik1" name="nik1" value="<?= $user['nik1']; ?>" required>
                    <?= form_error('nik1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="agama" name="agama" value="<?= $user['agama']; ?>" required>
                    <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="ponsel" class="col-sm-4 col-form-label">No. Ponsel</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="ponsel" name="ponsel" value="<?= $user['ponsel']; ?>" required>
                    <?= form_error('ponsel', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
         <div class="form-row row">   
    <label for="goldar" class="col-sm-4 col-form-label">Golongan Darah</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="goldar" id="goldar" required>
        <option value="<?= $user['goldar']; ?>">.: <?= $user['goldar']; ?> :.</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
       </select>   
 <?= form_error('goldar', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
       <br><div class="alert alert-primary" role="alert"> Data Domisili</div>    

            <div class="form-row row">   
    <label for="status_tmp_tinggal" class="col-sm-4 col-form-label">Status Tempat Tinggal</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="status_tmp_tinggal" id="status_tmp_tinggal" required>
        <option value="<?= $user['status_tmp_tinggal']; ?>">.: <?= $user['status_tmp_tinggal']; ?> :.</option>
        <option value="Milik Sendiri">Milik Sendiri</option>
        <option value="Rumah Orang Tua">Rumah Orang Tua</option>
        <option value="Rumah Saudara/ Kerabat">Rumah Saudara/ Kerabat</option>
        <option value="Rumah Dinas">Rumah Dinas</option>
        <option value="Sewa/ Kontrak">Sewa/ Kontrak</option>
       </select>   
 <?= form_error('status_tmp_tinggal', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
            
            <div class="form-row row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>" required>
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="kota" class="col-sm-4 col-form-label">Kota/ Kabupaten</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kota" name="kota" value="<?= $user['kota']; ?>" required>
                    <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="kec" class="col-sm-4 col-form-label">Kecamatan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kec" name="kec" value="<?= $user['kec']; ?>" required>
                    <?= form_error('kec', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="kel" class="col-sm-4 col-form-label">Kelurahan/ Desa</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kel" name="kel" value="<?= $user['kel']; ?>" required>
                    <?= form_error('kel', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">
                <label for="kd_pos" class="col-sm-4 col-form-label">Kode Pos</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="kd_pos" name="kd_pos" value="<?= $user['kd_pos']; ?>" required>
                    <?= form_error('kd_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">   
        <label for="transport" class="col-sm-4 col-form-label">Transportasi ke Madrasah</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="transport" id="transport" required>
        <option value="<?= $user['transport']; ?>">.: <?= $user['transport']; ?> :.</option>
        <option value="Sepeda">Sepeda</option>
        <option value="Sepeda Motor">Sepeda Motor</option>
        <option value="Mobil">Mobil</option>
        <option value="Antar Jemput Madrasah">Antar Jemput Madrasah</option>
        <option value="Angkutan Umum">Angkutan Umum</option>
        <option value="Ojek">Ojek</option>
        <option value="Jalan Kaki">Jalan Kaki</option>
       </select>   
 <?= form_error('transport', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
            <div class="form-row row">   
        <label for="jarak" class="col-sm-4 col-form-label">Jarak Rumah Ke Madrasah</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="jarak" id="jarak" required>
        <option value="<?= $user['jarak']; ?>">.: <?= $user['jarak']; ?> :.</option>
        <option value="Kurang dari 5 KM">Kurang dari 5 KM</option>
        <option value="5 - 10 KM">5 - 10 KM</option>
        <option value="11 - 20 KM">11 - 20 KM</option>
        <option value="21 - 30 KM">21 - 30 KM</option>
        <option value="Lebih dari 30 KM">Lebih dari 30 KM</option>
       </select>   
 <?= form_error('jarak', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
          <div class="form-row row">   
        <label for="waktu" class="col-sm-4 col-form-label">Waktu Tempuh</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="waktu" id="waktu" required>
        <option value="<?= $user['waktu']; ?>">.: <?= $user['waktu']; ?> :.</option>
        <option value="1 - 10 Menit">1 - 10 Menit</option>
        <option value="10 - 19 Menit">10 - 19 Menit</option>
        <option value="20 - 29 Menit">20 - 29 Menit</option>
        <option value="30 - 39 Menit">30 - 39 Menit</option>
        <option value="1 Jam">1 Jam</option>
       </select>   
 <?= form_error('waktu', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
        <br>
        <div class="alert alert-primary" role="alert">
  Data Keluarga
</div>

            <div class="form-row row">
                <label for="nama_ibu" class="col-sm-4 col-form-label">Nama Ibu Kandung</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?= $user['nama_ibu']; ?>" required>
                    <?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
        <div class="form-row row">   
        <label for="status_nikah" class="col-sm-4 col-form-label">Status Pernikahan</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="status_nikah" id="status_nikah" required>
        <option value="<?= $user['status_nikah']; ?>">.: <?= $user['status_nikah']; ?> :.</option>
        <option value="Belum Menikah">Belum Menikah</option>
        <option value="Menikah">Menikah</option>
        <option value="Duda/ Janda">Duda/ Janda</option>
       </select>   
 <?= form_error('status_nikah', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
        <div class="form-row row">
                <label for="sutri" class="col-sm-4 col-form-label">Nama Suami/ Istri</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="sutri" name="sutri" value="<?= $user['sutri']; ?>" required>
                    <?= form_error('sutri', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <br>
        
            <div class="form-row row">
                <div class="col-sm-4">Foto [Max. 1 Mb]</div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            
                            <!-- ditutup jika semua sudah upload foto -->
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                            <!-- ditutup jika semua sudah upload foto -->
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <br>
            <div class="form-group row justify-content-end">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-success">SIMPAN</button>
                </div>
            </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->