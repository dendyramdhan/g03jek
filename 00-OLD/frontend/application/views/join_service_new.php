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
    <title>GO3JEK - Join Servis</title>
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
            <h1 class="display-4 font-weight-bold">Registrasi Servis</h1>
        </div>
        <div class="row">
            <div class="col-md-4 d-none d-sm-block">
                <div class="reg-image-servis"></div>
            </div>
            <div class="col-sm-12 col-md-8">
                <form role="form" action="<?php echo base_url() ?>frontend/index.php/c_upload/upload_mservice"
                      enctype="multipart/form-data"
                      method="post">
                    <input name="redirect" type="hidden" value="<?php echo base_url() ?>frontend/index.php/c_utama/thankyou"/>
                    <input name="job" type="hidden" value="1"/>

                    <fieldset class="form-group column flex-wrap">
                        <legend class="col-form-legend col-sm-1-12 display-4 text-center mb-3">Data Pribadi Teknisi</legend>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="nama_lengkap" class="font-weight-bold">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">No. KTP</label>
                                <input type="text" placeholder="12345xxxx" class="form-control" name="no_ktp">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Foto KTP<br>(Format File JPG Max: 1MB)</label>
                                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_ktp">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Foto Diri<br>(Format File JPG Max: 1MB)</label>
                                <input type="file" class="form-control" accept="image/*" name="foto_diri">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">No. Handphone</label>
                                <input type="tel" placeholder="+62123xxxx" class="form-control" name="no_telepon">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" placeholder="ex: taxiclone@gmail.com" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" placeholder="Address" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Kecamatan</label>
                                <input type="text" placeholder="Sub districts" class="form-control" name="kecamatan">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Kota</label>
                                <input type="text" placeholder="City" class="form-control" name="kota">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tempat Lahir</label>
                                <input type="text" placeholder="Place of Birth" class="form-control" name="tempat_lahir">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Lahir</label><br>
                                <input placeholder="Date of birth" type="text" class="tanggal form-control" name="tgl_lahir" />
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group column flex-wrap">
                        <legend class="col-form-legend col-sm-1-12 display-4 text-center mb-3">Data Lainnya</legend>
                        <div class="col-md-12 form-group">
                            <label>Perlengkapan Yang Digunakan</label>
                            <div class="col-md-12">
                                <?php
                                foreach ($jenis as $j) {
                                    ?>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" class="form-check-inline"  name="peralatan[]" value="<?php echo $j['id'] ?>"><?php echo $j['nama_peralatan'] ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Keahlian</label>
                            <div class="col-md-12">
                                <?php
                                foreach ($keahlian as $k) {
                                    ?>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="checkbox" class="form-check-inline" name="keahlian[]" value="<?php echo $k['id'] ?>"><?php echo $k['jenis_service'] ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Area Kerja</label>
                            <select name="area_kerja" class="form-control">
                                <?php foreach ($area as $a) {
                                    ?>
                                    <option value="<?php echo $a['id'] ?>"><?php echo $a['cabang_perusahaan'] ?></option>
                                    <?php
                                } ?>
                            </select>
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
                        <li><a href="https://www.facebook.com/go3jek/?modal=admin_todo_tour">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
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