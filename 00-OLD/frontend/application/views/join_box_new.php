<?php
$session_id = $this->session->userdata('form_isi');
if ($session_id == 1) {
    ?>
    <script>
        alert('Registration Successful');
    </script>
    <?php
    $this->session->unset_userdata('form_isi');
    $this->session->set_userdata('form_isi', 0);
} else {
    $this->session->set_userdata('form_isi', 0);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Go3Jek">
    <meta name="keywords" content="Go3Jek">
    <title>GO3JEK - Join Angkutan</title>
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/css_animasi/favicon.png">
    <link href="<?php echo base_url() ?>asset/newgo3jek/css/bootstrap.min.css" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900%7COpen+Sans:400"
          rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/newgo3jek/css/animate.css"> <!-- Resource style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/newgo3jek/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/newgo3jek/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/newgo3jek/css/ionicons.min.css"> <!-- Resource style -->
    <link href="<?php echo base_url() ?>asset/newgo3jek/css/style.css" rel="stylesheet" type="text/css" media="all"/>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css_animasi/app.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/GO3JEK.css">
</head>
<body>

<div class="wrapper">
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <div class="container container">
            <a class="logo navbar-brand" href="<?php echo base_url() ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right">
                    <li class="nav-item"><a class="nav-link text-white btn-action my-0"
                                            href="https://play.google.com/store/apps/details?id=com.go3jek.penumpang">User
                            APK</a></li>
                    <li class="nav-item"><a class="nav-link text-white btn-action my-0"
                                            href="https://play.google.com/store/apps/details?id=com.go3jek.driver">Driver
                            APK</a></li>
                    <li class="nav-item"><a class="nav-link text-white btn-action my-0"
                                            href="<?php echo base_url() ?>index.php/c_utama/join">Join
                            Driver</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main" class="container mt-5 pt-5">
        <div class="row justify-content-center mb-3 border-bottom">
            <h1 class="display-4 font-weight-bold">Registrasi Angkutan</h1>
        </div>
        <div class="row">
            <div class="col-md-4 d-none d-sm-block">
                <div class="reg-image-car"></div>
                <div class="card mt-2">
                    <div class="card-body">
                        <dl>
                            <dt class="font-weight-bold text-center mb-2">Syarat & Ketentuan</dt>
                            <dt>1. Driver harus memiliki kendaraan pribadi</dt>
                            <dt>2. Driver harus memiliki perangkat android pribadi</dt>
                            <dt>3. Driver harus memiliki SIM yang telah berjalan minimal 6 bulan</dt>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <form role="form" action="<?php echo base_url() ?>index.php/c_upload/upload"
                      enctype="multipart/form-data"
                      method="post">
                    <input name="redirect" type="hidden" value="<?php echo base_url() ?>index.php/c_utama/thankyou"/>
                    <input name="job" type="hidden" value="1"/>

                    <fieldset class="form-group column flex-wrap">
                        <legend class="col-form-legend col-sm-1-12 display-4 text-center mb-3">Data Pribadi</legend>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="nama_depan" class="font-weight-bold">Nama Depan</label>
                                <input type="text" name="nama_depan" id="nama_depan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama_belakang" class="font-weight-bold">Nama Belakang</label>
                                <input type="text" name="nama_belakang" id="nama_belakang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="email" name="email" id="email" class="form-control" ">
                            </div>
                            <div class="form-group">
                                <label for="no_telepon" class="font-weight-bold">No. Telephone</label>
                                <input type="tel" name="no_telepon" id="no_telepon" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="font-weight-bold">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir" class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="no_ktp" class="font-weight-bold">No. Identitas</label>
                                <input type="number" name="no_ktp" id="no_ktp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="foto_ktp" class="font-weight-bold">Foto Identitas</label>
                                <input type="file" name="foto_ktp" id="foto_ktp" accept="image/*" class="form-control"
                                       style="">
                            </div>
                            <div class="form-group">
                                <label for="foto_stnk" class="font-weight-bold">Foto STNK</label>
                                <input type="file" name="foto_stnk" id="foto_stnk" accept="image/*" class="form-control"
                                       style="">
                            </div>
                            <div class="form-group">
                                <label for="foto_sim" class="font-weight-bold">Foto SIM</label>
                                <input type="file" name="foto_sim" id="foto_sim" accept="image/*" class="form-control"
                                       style="">
                            </div>
                            <div class="form-group">
                                <label for="foto_diri" class="font-weight-bold">Foto Diri</label>
                                <input type="file" name="foto_diri" id="foto_diri" accept="image/*" class="form-control"
                                       style="">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group column flex-wrap">
                        <legend class="col-form-legend col-sm-1-12 display-4 text-center mb-3">Data Kendaraan</legend>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="merk" class="font-weight-bold">Merk Kendaraan</label>
                                <input type="text" name="merk" id="merk" class="form-control"
                                       placeholder="ex: Hino, Fuso Daihatsu">
                            </div>
                            <div class="form-group">
                                <label for="tipe" class="font-weight-bold">Tipe Kendaraan</label>
                                <input type="text" name="tipe" id="tipe" class="form-control"
                                       placeholder="ex: Dutro, L300">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="jenis">Kategori Kendaraan</label>
                                <select id="jenis" name="jenis" class="form-control">
                                    <?php
                                    foreach ($jenis as $j) {
                                        ?>
                                        <option value="<?php echo $j['id'] ?>"><?php echo $j['jenis_kendaraan'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="nomor_kendaraan" class="font-weight-bold">Plat Nomor Kendaraan</label>
                                <input type="text" name="nomor_kendaraan" id="nomor_kendaraan" class="form-control"
                                       placeholder="ex: BG660EG">
                            </div>
                            <div class="form-group">
                                <label for="warna" class="font-weight-bold">Warna Kendaraan</label>
                                <input type="text" name="warna" id="warna" class="form-control"
                                       placeholder="ex: Merah, Biru">
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row justify-content-center">
                        <div class="col-sm-6">
                            <button type="submit" class="btn-block btn-action">Daftar Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer-sm">
        <div class="container-m">
            <div class="row justify-content-center">
                <div class="col- text-center">
                    <ul>
                        <li><a href="<?php echo base_url() ?>">Contact Us</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/faq">FAQ </a></li>
                        <li><a href="<?php echo base_url() ?>">Terms &amp; Condition</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/c_utama/privacy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="row border-top"></div>
            <div class="row">
                <div class="col-md-4">
                    <a class="footer-logo" href="<?php echo base_url() ?>">GO3JEK</a>
                </div>
                <div class="col-md-4">
                    <h6>&copy; 2019 GO3JEK</h6>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/custom.js"></script>

</body>
</html>