<p> &nbsp; &nbsp; &nbsp;<a class="btn btn-info" href="tambahpendidikan2" role="button">Lengkapi Data S2</a><br></p>
    <div style="overflow-x:auto;">
<table class="table table-bordered text-left ml-12" id="pendidikan2">
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
                <td><?= $user['jenjang2'] ?></td>
                <td><?= $user['nama_pt2'] ?></td>
                <td><?= $user['status_pt2'] ?></td>
                <td>Fakultas <?= $user['fakul_pt2'] ?>, Prodi <?= $user['prodi_pt2'] ?></td>
                <td><?= $user['alamat_pt2'] ?></td>
                <td><?= $user['thn_masuk2'] ?></td>
                <td><?= $user['thn_lulus2'] ?></td>
                <td><?= $user['ipk2'] ?></td>
                <td><?= $user['tgl_ijazah2'] ?></td>
                <td><?= $user['no_ijazah2'] ?></td>
            </tr>
        
    </tbody>
</table>
</div>