<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table siswa berdasarkan nis secara Descending
$siswa = query("SELECT * FROM user ORDER BY id DESC");

// Membuat nama file
$filename = "Data GTK MIN 2 Kota Surabaya-" . date('Ymd') . ".xls";

// Kodingam untuk export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_GTK.xls");

?>
<!--untuk export excel dalam format text-->
<style> .str{ mso-number-format:\@; } </style>

<p><em style="color:red">Data dibawah ini merupakan hasil input oleh masing-masing Guru dan Tendik MIN 2 Kota Surabaya <br> <font style="color:green">Data ini diunduh tanggal : <?php echo date("Y-m-d"); ?>, Pukul : <?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i'); ?> WIB</font></font></em></p>

<table class="text-center" border="1">
    <thead class="text-center">
        
<h3 style="color:black">Data GTK MIN 2 KOTA SURABAYA TAHUN <?php echo date("Y"); ?></h3>

        <tr>
           <th>No.</th>
                            <th>NUPTK</th>
                            <th>NIP</th>
                            <th>NIK</th>
                            <th>Ponsel</th>
                            <th>eMail</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Tempat/ Tgl Lahir</th>
                            <th>Agama</th>
                            <th>Golongan Darah</th>
                            <th>Status Tmp Tinggal</th>
                            <th>Alamat Lengkap</th>
                            <th>Transportasi, Jarak dan Waktu Tempuh</th>
                            <th>Nama Ibu</th>
                            <th>Status Nikah</th>
                            <th>Nama Suami/ Istri</th>
                            <th>Status Pegawai</th>
                            <th>Gol/ Ruang</th>
                            <th>Penugasan</th>
                            <th>Jabatan</th>
                            <th>Instansi yg Menerbitkan Sk</th>
                            <th>No. SK</th>
                            <th>Tanggal SK</th>
                            <th>Jenis SK</th>
                            <th>Status Sertifikasi</th>
                            <th>Tanggal Sertifikat</th>
                            <th>No. Sertifikat</th>
                            <th>Mapel Sertifikat</th>
                            <th>Jenjang S1</th>
                            <th>Nama PT S1</th>
                            <th>Status PT S1</th>
                            <th>Fakultas PT S1</th>
                            <th>Prodi PT S1</th>
                            <th>Alamat PT S1</th>
                            <th>Tahun Masuk PT S1</th>
                            <th>Tahun Lulus PT S1</th>
                            <th>IPK S1</th>
                            <th>Tanggal Ijazah S1</th>
                            <th>No. Ijazah S1</th>
                            
                            <th>Jenjang S2</th>
                            <th>Nama PT S2</th>
                            <th>Status PT S2</th>
                            <th>Fakultas PT S2</th>
                            <th>Prodi PT S2</th>
                            <th>Alamat PT S2</th>
                            <th>Tahun Masuk PT S2</th>
                            <th>Tahun Lulus PT S2</th>
                            <th>IPK S2</th>
                            <th>Tanggal Ijazah S2</th>
                            <th>No. Ijazah S2</th>
                            
                            <th>Jenjang S3</th>
                            <th>Nama PT S3</th>
                            <th>Status PT S3</th>
                            <th>Fakultas PT S3</th>
                            <th>Prodi PT S3</th>
                            <th>Alamat PT S3</th>
                            <th>Tahun Masuk PT S3</th>
                            <th>Tahun Lulus PT S3</th>
                            <th>IPK S3</th>
                            <th>Tanggal Ijazah S3</th>
                            <th>No. Ijazah S3</th>
                            <th>Link Berkas</th>
                            
                            <!--<th>Alamat</th>-->
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $no = 1; ?>
        <?php foreach ($siswa as $row) : ?>
            <tr>
                                <td><?= $no++; ?></td>
                                <td class="str"><?= $row['nuptk']; ?></td>
                                <td class="str"><?= $row['nip']; ?></td>
                                <td class="str"><?= $row['nik1']; ?></td>
                                <td class="str"><?= $row['ponsel']; ?></td>
                                <td class="str"><?= $row['email']; ?></td>
                                <td class="str"><?= $row['nama']; ?></td>
                                <td class="str"><?= $row['gender']; ?></td>
                                <td class="str"><?= $row['tmp_lahir']; ?>/ <?= $row['tgl_lahir']; ?></td>
                                <td class="str"><?= $row['agama']; ?></td>
                                <td class="str"><?= $row['goldar']; ?></td>
                                <td class="str"><?= $row['status_tmp_tinggal']; ?></td>
                                <td class="str"><?= $row['alamat']; ?>, Kec. <?= $row['kec']; ?>, Kel. <?= $row['kel']; ?> - <?= $row['kota']; ?> <?= $row['kd_pos']; ?></td>
                                <td class="str"><?= $row['transport']; ?>, Jarak. <?= $row['jarak']; ?>, Waktu. <?= $row['waktu']; ?></td>
                                <td class="str"><?= $row['nama_ibu']; ?></td>
                                <td class="str"><?= $row['status_nikah']; ?></td>
                                <td class="str"><?= $row['sutri']; ?></td>
                                <td class="str"><?= $row['status_pgwai']; ?></td>
                                <td class="str"><?= $row['pangkat']; ?></td>
                                <td class="str"><?= $row['status_tugas']; ?></td>
                                <td class="str"><?= $row['jabatan']; ?></td>
                                <td class="str"><?= $row['instansi_sk']; ?></td>
                                <td class="str"><?= $row['no_sk']; ?></td>
                                <td class="str"><?= $row['tgl_sk']; ?></td>
                                <td class="str"><?= $row['jns_sk']; ?></td>
                                <td class="str"><?= $row['status_serti']; ?></td>
                                <td class="str"><?= $row['tgl_serti']; ?></td>
                                <td class="str"><?= $row['no_serti']; ?></td>
                                <td class="str"><?= $row['mapel_serti']; ?></td>
                                
                                <td class="str"><?= $row['jenjang']; ?></td>
                                <td class="str"><?= $row['nama_pt']; ?></td>
                                <td class="str"><?= $row['status_pt']; ?></td>
                                <td class="str"><?= $row['fakul_pt']; ?></td>
                                <td class="str"><?= $row['prodi_pt']; ?></td>
                                <td class="str"><?= $row['alamat_pt']; ?></td>
                                <td class="str"><?= $row['thn_masuk']; ?></td>
                                <td class="str"><?= $row['thn_lulus']; ?></td>
                                <td class="str"><?= $row['ipk']; ?></td>
                                <td class="str"><?= $row['tgl_ijazah']; ?></td>
                                <td class="str"><?= $row['no_ijazah']; ?></td>
                                
                                <td class="str"><?= $row['jenjang2']; ?></td>
                                <td class="str"><?= $row['nama_pt2']; ?></td>
                                <td class="str"><?= $row['status_pt2']; ?></td>
                                <td class="str"><?= $row['fakul_pt2']; ?></td>
                                <td class="str"><?= $row['prodi_pt2']; ?></td>
                                <td class="str"><?= $row['alamat_pt2']; ?></td>
                                <td class="str"><?= $row['thn_masuk2']; ?></td>
                                <td class="str"><?= $row['thn_lulus2']; ?></td>
                                <td class="str"><?= $row['ipk2']; ?></td>
                                <td class="str"><?= $row['tgl_ijazah2']; ?></td>
                                <td class="str"><?= $row['no_ijazah2']; ?></td>
                                
                                <td class="str"><?= $row['jenjang3']; ?></td>
                                <td class="str"><?= $row['nama_pt3']; ?></td>
                                <td class="str"><?= $row['status_pt3']; ?></td>
                                <td class="str"><?= $row['fakul_pt3']; ?></td>
                                <td class="str"><?= $row['prodi_pt3']; ?></td>
                                <td class="str"><?= $row['alamat_pt3']; ?></td>
                                <td class="str"><?= $row['thn_masuk3']; ?></td>
                                <td class="str"><?= $row['thn_lulus3']; ?></td>
                                <td class="str"><?= $row['ipk3']; ?></td>
                                <td class="str"><?= $row['tgl_ijazah3']; ?></td>
                                <td class="str"><?= $row['no_ijazah3']; ?></td>
                                <td class="str">https://drive.google.com/drive/folders/<?= $row['link_drv']; ?></a></td>
                                
                            </tr>
        <?php endforeach; ?>
    </tbody>
</table>