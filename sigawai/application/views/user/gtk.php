<div class="container">

    <!-- Page Heading -->
    <h4 class="h3 mb-12 text-gray-800"><?= $title; ?></h4>
    
    <div class="row">
        <div class="col-lg-12">

<?php if ($this->session->flashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('message') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<td>
    <div class="section-body">
        <p class="section-lead">
            <kbd>Berkas yang di Upload SCAN PDF</kbd>
        </p>
</td>
<hr>
<h6>Dokumen yang diperlukan untuk pemuktakhiran data induk pada satminkal : <br>
<ol>
<li>Scan Ijazah S1</li>
<li>Scan Ijazah S2 (jika ada)</li>
<li>Scan Ijazah S3 (jika ada)</li>
<li>Scan Sertifikat Pendidik (jika sudah sertifikasi)</li>
<li>Scan SK Akhir</li>
<li>Gunakan Form <mark>BERKAS LAINNYA</mark> jika ingin unggah/ menyimpan dokumen selain yang diatas (No. 1 - 5), seperti NPWP, scan buku rekening, dll</li></ol></h6>


 </div>
 
 </div>
 </div>
<hr>

<!-- BATAS TABLE -->

<h6><strong>Klik tombol dibawah untuk mulai <b style="color:green">mengunggah berkas</b> Anda!</strong></h6>

<!--<a class="btn btn-dark" href="gtk<?php echo $user['id']; ?>">UNGGAH BERKAS </a>-->

<a class="btn btn-dark" href="gtk<?php echo $user['id']; ?>" role="button"  onclick="window.open(this.href,&quot;popupwindow&quot;,&quot;status=0, height=900, width=900, scrollbars=yes, resizable=0, top=0, left=0&quot;); return false;" target="_blank">UNGGAH BERKAS </a> <br><br>

<a class="btn btn-info" href="https://drive.google.com/drive/folders/<?= $user['link_drv'] ?>" target="_balnk" role="button">Lihat Berkas</a>


 