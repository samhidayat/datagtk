<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('user/pegawai') ?>" method="post">
            
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
            
    <br><div class="alert alert-warning" role="alert"> Data Kepegawaian</div>

         <div class="form-row row">   
    <label for="status_pgwai" class="col-sm-4 col-form-label">Status Pegawai</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="status_pgwai" id="status_pgwai" required>
        <option value="<?= $user['status_pgwai']; ?>">.: <?= $user['status_pgwai']; ?> :.</option>
        <option value="PNS">PNS</option>
        <option value="PPPK">PPPK</option>
        <option value="PTT">PTT</option>
        <option value="GTT">GTT</option>
        </select>   
        <?= form_error('status_pgwai', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
             <div class="form-row row">
                <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nip" name="nip" value="<?= $user['nip']; ?>" placeholder="isi dengan tanda - bagi yang belum ASN" required>
                    <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
            <div class="form-row row">   
    <label for="pangkat" class="col-sm-4 col-form-label">Golongan/ Ruang</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="pangkat" id="pangkat" required>
        <option value="<?= $user['pangkat']; ?>">.: <?= $user['pangkat']; ?> :.</option>
        <option value="II/A">II/A</option>
        <option value="II/B">II/B</option>
        <option value="II/C">II/C</option>
        <option value="II/D">II/D</option>
        <option value="III/A">III/A</option>
        <option value="III/B">III/B</option>
        <option value="III/C">III/C</option>
        <option value="III/D">III/D</option>
        <option value="IV/A">IV/A</option>
        <option value="IV/B">IV/B</option>
        <option value="IV/C">IV/C</option>
        <option value="IV/D">IV/D</option>
        <option value="IX">IX</option>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="Non ASN">Non ASN</option>
        </select>   
        <?= form_error('pangkat', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div> 
            
        <div class="form-row row">   
    <label for="status_tugas" class="col-sm-4 col-form-label">Status Penugasan</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="status_tugas" id="status_tugas" required>
        <option value="<?= $user['status_tugas']; ?>">.: <?= $user['status_tugas']; ?> :.</option>
        <option value="Guru">Guru</option>
        <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
        </select>   
        <?= form_error('status_tugas', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div> 
        
        <div class="form-row row">   
    <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="jabatan" id="jabatan" required>
        <option value="<?= $user['jabatan']; ?>">.: <?= $user['jabatan']; ?> :.</option>
        <option value="Kepala Madrasah">Kepala Madrasah</option>
        <option value="Wali Kelas">Wali Kelas</option>
        <option value="Tata Usaha">Tata Usaha</option>
        <option value="Bendahara Dipa">Bendahara Dipa</option>
        <option value="Tidak Menjabat">Tidak Menjabat</option>
        </select>   
        <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>  
        
        <div class="form-row row">
        <label for="instansi_sk" class="col-sm-4 col-form-label">Instansi yg Menerbitkan SK</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="instansi_sk" id="instansi_sk" required>
        <option value="<?= $user['instansi_sk']; ?>">.: <?= $user['instansi_sk']; ?> :.</option>
        <option value="Kementerian Agama">Kementerian Agama</option>
        <option value="Pemerintah Daerah">Pemerintah Daerah</option>
        <option value="Satuan Pendidikan">Satuan Pendidikan</option>
        
        </select>   
        <?= form_error('instansi_sk', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div> 
        
        <div class="form-row row">
                <label for="no_sk" class="col-sm-4 col-form-label">Nomor SK Akhir</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_sk" name="no_sk" value="<?= $user['no_sk']; ?>" required>
                    <?= form_error('no_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
        <div class="form-row row">
                <label for="tgl_sk" class="col-sm-4 col-form-label">Tanggal SK Akhir</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="tgl_sk" name="tgl_sk" value="<?= $user['tgl_sk']; ?>" required>
                    <?= form_error('tgl_sk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
             <div class="form-row row">
        <label for="jns_sk" class="col-sm-4 col-form-label">Jenis SK Akhir</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="jns_sk" id="jns_sk" required>
        <option value="<?= $user['jns_sk']; ?>">.: <?= $user['jns_sk']; ?> :.</option>
        <option value="SK Kenaikan Pangkat Reguler">SK Kenaikan Pangkat Reguler</option>
        <option value="SK PPPK">SK PPPK</option>
        <option value="SK GTT/ PTT">SK GTT/ PTT</option>
        
        </select>   
        <?= form_error('jns_sk', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div> 
        
        <br><div class="alert alert-warning" role="alert"> Data Sertifikasi</div>
        
        <div class="form-row row">
                <label for="nuptk" class="col-sm-4 col-form-label">NUPTK/ Peg ID</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="nuptk" name="nuptk" value="<?= $user['nuptk']; ?>" required>
                    <?= form_error('nuptk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
        
             <div class="form-row row">   
    <label for="status_serti" class="col-sm-4 col-form-label">Status Kelulusan</label>
        <div class="col-sm-7"> 
         <select class="form-control" name="status_serti" id="status_serti" required>
        <option value="<?= $user['status_serti']; ?>">.: <?= $user['status_serti']; ?> :.</option>
        <option value="Lulus">Lulus</option>
        <option value="Belum Sertifikasi">Belum Sertifikasi</option>
        <option value="Non Guru">Non Guru</option>
        </select>   
        <?= form_error('status_serti', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        </div>
        
        <br><code>.:Bagi yang <strong>belum sertifikasi dan/ Non Guru</strong> bisa dikosongi:.</code>
        <div class="form-row row">
                <label for="tgl_serti" class="col-sm-4 col-form-label">Tanggal Lulus Sertifikasi</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="tgl_serti" name="tgl_serti" value="<?= $user['tgl_serti']; ?>">
                    <?= form_error('tgl_serti', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
        <div class="form-row row">
                <label for="no_serti" class="col-sm-4 col-form-label">Nomor Sertifikat Pendidik</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="no_serti" name="no_serti" value="<?= $user['no_serti']; ?>">
                    <?= form_error('no_serti', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            
        <div class="form-row row">
                <label for="mapel_serti" class="col-sm-4 col-form-label">Mapel Sertifikasi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="mapel_serti" name="mapel_serti" value="<?= $user['mapel_serti']; ?>">
                    <?= form_error('mapel_serti', '<small class="text-danger pl-3">', '</small>'); ?>
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