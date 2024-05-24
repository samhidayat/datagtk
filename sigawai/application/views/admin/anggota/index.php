<h2 class="mb-4 ml-4">Data Anggota</h2>

<?php if ($this->session->flashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('message') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>


<div class="form-group row">
    <label for="sosmed" class="col-sm-1 col-form-label ml-4">Cari :</label>
    <div class="col-xs-5">
        <input type="text" class="form-control" id="Input" onkeyup="myFunction()" placeholder="Nama">
    </div>
</div>

<div style="overflow-x:auto;">
<table class="table table-bordered text-left ml-4" id="anggotaTable">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">Temp/ Tagl Lahir</th>
            <th scope="col">gender</th>
            <th scope="col">NIK</th>
            <th scope="col">Agama</th>
            <th scope="col">Ponsel</th>
            <th scope="col">GolDar</th>
            <th scope="col">Tmpt Tingl</th>
            <th scope="col">Alamat</th>
            <th scope="col">Transport, Jarak & Waktu Tempuh</th>
            <th scope="col">Nama Ibu</th>
            <th scope="col">Status Nikah</th>
            <th scope="col">Nama Suami/ Istri</th>
            <th scope="col">Status Pegawai</th>
            <th scope="col">NIP</th>
            <th scope="col">Gol/ Ruang</th>
            <th scope="col">Status Penugasan</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Instansi Menerbitkan SK</th>
            <th scope="col">Nomor SK Akhir</th>
            <th scope="col">Tanggal SK Akhir</th>
            <th scope="col">Jenis SK Akhir</th>
            <th scope="col">NUPTK</th>
            <th scope="col">Status Kelulusan</th>
            <th scope="col">Tanggal Lulus Sertifikasi</th>
            <th scope="col">Nomor Sertifikat Pendidik</th>
            <th scope="col">Mapel Sertifikasi</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $no++; ?></td>
               <td>
                    <?php if (isset($user['image'])) : ?>
                        <img src="<?= base_url('assets/img/profile/' . $user['image']) ?>" style="height:30px; widht:30px;">
                    <?php else : ?>
                        No Photo
                    <?php endif; ?>
                </td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['tmp_lahir'] ?>, <?= $user['tgl_lahir'] ?></td>
                <td><?= $user['gender'] ?></td>
                <td><?= $user['nik1'] ?></td>
                <td><?= $user['agama'] ?></td>
                <td><?= $user['ponsel'] ?></td>
                <td><?= $user['goldar'] ?></td>
                <td><?= $user['status_tmp_tinggal'] ?></td>
                <td><?= $user['alamat'] ?>, Kel. <?= $user['kel'] ?>, Kec. <?= $user['kec'] ?>, Kota <?= $user['kota'] ?> - <?= $user['kd_pos'] ?></td>
                <td><?= $user['transport'] ?>, <?= $user['jarak'] ?>, <?= $user['waktu'] ?></td>
                <td><?= $user['nama_ibu'] ?></td>
                <td><?= $user['status_nikah'] ?></td>
                <td><?= $user['sutri'] ?></td>
                <td><?= $user['status_pgwai'] ?></td>
                <td><?= $user['nip'] ?></td>
                <td><?= $user['pangkat'] ?></td>
                <td><?= $user['status_tugas'] ?></td>
                <td><?= $user['jabatan'] ?></td>
                <td><?= $user['instansi_sk'] ?></td>
                <td><?= $user['no_sk'] ?></td>
                <td><?= $user['tgl_sk'] ?></td>
                <td><?= $user['jns_sk'] ?></td>
                <td><?= $user['nuptk'] ?></td>
                <td><?= $user['status_serti'] ?></td>
                <td><?= $user['tgl_serti'] ?></td>
                <td><?= $user['no_serti'] ?></td>
                <td><?= $user['mapel_serti'] ?></td>
                
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="<?= base_url('admin/delete/' . $user['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus ini ?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("Input");
        filter = input.value.toUpperCase();
        table = document.getElementById("anggotaTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>