<?php

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table siswa berdasarkan nis secara Descending
$siswa = query("SELECT * FROM user ORDER BY nama DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
  <link href="https://layanan.min2surabaya.sch.id/assets/img/favicon.png" rel="icon">
  <link href="https://layanan.min2surabaya.sch.id/assets/img/favicon.png" rel="apple-touch-icon">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>SIGAWAI</title>
    
    <!-- blink text -->
   <style>
   
        .blink {
            animation: blinker 1.5s linear infinite;
            color: red;
            font-size: 1.0em;
            /* Larger, responsive font size */
            margin-bottom: 20px;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
    <!-- end blink -->
    
    <!-- back to top -->
    <style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #EE9322;
  color: white;
  cursor: pointer;
  padding: 5px;
  border-radius: 5px;
}
#myBtn:hover {
  background-color: #4793AF;
}
</style>
<!-- end to top -->
    
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="/datagtk"><img src="https://layanan.min2surabaya.sch.id/assets/img/favicon.png" width="50px" height="50px"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/datagtk/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datagtk/tabel">Tabel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datagtk/tabel/kondisi.php">Kondisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datagtk/#contact">Contact</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="https://layanan.min2surabaya.sch.id/">Layanan</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="btn btn-warning" href="../sigawai/" role="button"><b>Login</b></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->
    <br>
    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h4 class="text-center fw-bold text-uppercase">Tabel Guru dan Tendik</h4><br>
               
                <hr>

          <!--<p class="blink">Untuk melihat <b>DETAIL</b> data peserta didik, silahkan unduh EXCEL melalui tombol dibawah ini!</p>-->
                
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
               <!-- <a href="addData.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</a>-->
                <!--<a href="export.php" target="_blank" class="btn btn-success ms-1"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Unduh Excel</a>-->
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <div style="overflow-x:auto;">
                <table id="data" class="table table-striped text-left" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>No.</th>
                            <th>NUPTK/ Peg ID</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Tmp Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($siswa as $row) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nuptk']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['gender']; ?></td>
                                <td><?= $row['tmp_lahir']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Modal Detail Data -->
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detail" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase" id="detail">Detail Data <?= $row['siswa_nama']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-left" id="detail-siswa">
                </div>
            </div>
        </div>
    </div>
    <!-- Close Modal Detail Data -->

<button onclick="topFunction()" id="myBtn" title="Go to top"> <h4><i class="bi bi-shift-fill"></i></h4> </button>

    <!-- Footer -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-md-6 my-2" id="about">
             <!--   <h4 class="fw-bold text-uppercase">About</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolore sed porro modi mollitia quaerat? Nam, error fugit sed, maiores illum architecto, officiis voluptate nesciunt voluptatibus aut reprehenderit perspiciatis doloremque!</p>
            </div>
            <div class="col-md-6 my-2 text-center link">
                <h4 class="fw-bold text-uppercase">Account Links</h4>
                <a href="https://web.facebook.com/vikry.surya.5/" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                <a href="https://github.com/vikrysurya24" target="_blank"><i class="bi bi-github fs-3"></i></a>
                <a href="https://www.instagram.com/vikrysurya_/" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                <a href="https://twitter.com/vikrysurya_" target="_blank"><i class="bi bi-twitter fs-3"></i></a>
            </div>
        </div>-->
    </div>
    
    <footer class="bg-dark text-white text-center" style="padding: 5px;">
        <p> <font style="color: #fff;">&copy; <?php echo date("Y"); ?>
</font> Created with <i class="bi bi-suit-heart-fill" style="color: #ffffff;"></i>  Tim Media MIN 2 Kota Surabaya</p>
    </footer>
    <!-- Close Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Fungsi Table
            $('#data').DataTable();
            // Fungsi Table

            // Fungsi Detail
            $('.detail').click(function() {
                var dataSiswa = $(this).attr("data-id");
                $.ajax({
                    url: "detail.php",
                    method: "post",
                    data: {
                        dataSiswa,
                       
                    },
                    success: function(data) {
                        $('#detail-siswa').html(data);
                        $('#detail').modal("show");
                    }
                });
            });
            // Fungsi Detail
        });
    </script>
    
 <script>
// fungsi ketika user men scroll ke bawah 20 px maka tombol back to top akan muncul
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// fungsi ketika user meng klik tombol back to top maka halaman akan menscroll ke atas

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
    
</body>

</html>