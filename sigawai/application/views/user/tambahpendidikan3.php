<p> &nbsp; &nbsp; &nbsp;<a class="btn btn-info" href="tambahpendidikan3" role="button">Lengkapi Data S3</a><br></p>
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