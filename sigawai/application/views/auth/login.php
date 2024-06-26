<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <div class="img">
                                        <img src="<?= base_url('assets/img/logo/img.png') ?>" class="mx-auto d-block mb-3" width="auto" height="150px">
                                        <h2 class="h4 text-gray-900 mb-4"><a href="/datagtk/"><strong>SIGAWAI</strong></a><br> <em style="color:black">Sistem Informasi Pegawai</em></h2>
                                        
                                    </div>

                                    <?= $this->session->flashdata('message'); ?>
                                    
                                    <form class="user" method="post" action="<?= base_url('auth') ?>">
                                        <div class="form-group">
                                            Email
                                            <input type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email') ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            Password
                                            <input type="password" class="form-control form-control-user" id="passsword" placeholder="Password" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <!--<div class="text-center">
                                        <a class="small" href="<?= base_url('auth/forgotpassword') ?>">Forgot Password?</a>
                                    </div>-->
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration'); ?>">Buat Akun Baru</a><br>
                                        <p class="small" >Dikembangkan oleh Tim Media MIN 2 Kota Surabaya</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>