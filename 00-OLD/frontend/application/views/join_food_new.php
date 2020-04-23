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
    <title>GO3JEK - Join Makanan</title>
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
        <div class="row justify-content-center mb-3 text-center">
            <h3 class="display-4 font-weight-bold text-center">Registrasi Makanan</h3>
        </div>
        <div class="row justify-content-center flex-column">
            <form role="form" action="<?php echo base_url() ?>index.php/c_upload/upload_mfood"
                  enctype="multipart/form-data"
                  method="post">
                <input name="redirect" type="hidden" value="<?php echo base_url() ?>index.php/c_utama/thankyou"/>
                <input type="hidden" name="jenis_lapak" value="1">

                <div class="col">
                    <fieldset class="border p-5">
                        <legend class="col-form-legend col-sm-1-12 display-4 text-center mb-3"
                                style="font-size: xx-large">
                            Data Pribadi
                        </legend>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nama_depan" class="font-weight-bold">Nama Pemilik Restoran</label>
                                    <input type="text" name="nama_depan" id="nama_depan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pemilik_restoran" class="font-weight-bold">Nama Belakang</label>
                                    <input type="text" name="nama_pemilik_restoran" id="nama_pemilik_restoran"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_identitas" class="font-weight-bold">Data Identitas</label>
                                    <select class="form-control" name="jenis_identitas" id="jenis_identitas">
                                        <option>KTP</option>
                                        <option>SIM</option>
                                        <option>Passport</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="no_identitas" class="font-weight-bold">No. Identitas</label>
                                    <input type="number" name="no_identitas" id="no_identitas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="font-weight-bold">Password</label>
                                    <input type="password" name="password1" id="password1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="font-weight-bold">Ulangi Password</label>
                                    <input type="password" name="password2" id="password2" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="alamat_pemilik" class="font-weight-bold">Alamat Pemilik</label>
                                    <input type="text" name="alamat_pemilik" id="alamat_pemilik" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="kota" class="font-weight-bold">Kota</label>
                                    <input type="text" name="kota" id="kota"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama_penanggung_jawab" class="font-weight-bold">Nama Penanggung
                                        Jawab</label>
                                    <input type="text" name="nama_penanggung_jawab" id="nama_penanggung_jawab"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="telepon_penanggung_jawab" class="font-weight-bold">No. HP Penanggung
                                        Jawab</label>
                                    <input type="tel" name="telepon_penanggung_jawab" id="telepon_penanggung_jawab"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email_penanggung_jawab" class="font-weight-bold">Email Penanggung
                                        Jawab</label>
                                    <input type="email" name="email_penanggung_jawab" id="email_penanggung_jawab"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col mt-5">
                    <fieldset class="form-group border">
                        <legend class="col-form-legend col-sm-1-12 display-4 text-center mb-3"
                                style="font-size: xx-large">Informasi Tempat Makan
                        </legend>
                        <div class="row p-5">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="nama_restoran" class="font-weight-bold">Nama Tempat Makan</label>
                                    <input type="text" name="nama_restoran" id="nama_restoran" class="form-control"
                                           placeholder="ex: Honda, Toyota">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_restoran" class="font-weight-bold">Alamat Tempat Makan</label>
                                    <input type="text" name="alamat_restoran" id="alamat_restoran" class="form-control"
                                           placeholder="ex: Sport, Matic">
                                </div>
                                <div class="form-group">
                                    <label for="telepon_restoran" class="font-weight-bold">No. Telepon Tempat
                                        Makan</label>
                                    <input type="tel" name="telepon_restoran" id="telepon_restoran"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="kategori" class="font-weight-bold">Kategori Tempat Makan</label>
                                    <select name="kategori" id="kategori" class="form-control">
                                        <?php foreach ($jenis as $j) {
                                            ?>
                                            <option value="<?php echo $j['id'] ?>"><?php echo $j['kategori'] ?></option>
                                            <?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="jam_buka">Waktu Buka</label>
                                    <select id="jam_buka" class="form-control" name="jam_buka">
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>

                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>

                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>

                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>

                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>

                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>

                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>

                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>

                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>

                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>

                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>

                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>

                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>

                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>

                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>

                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>

                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>

                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>

                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>

                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>

                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>

                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>

                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>

                                        <option value="23:59">23:59</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="jam_tutup">Waktu Tutup</label>
                                    <select id="jam_tutup" class="form-control" name="jam_tutup">
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>

                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>

                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>

                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>

                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>

                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>

                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>

                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>

                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>

                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>

                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>

                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>

                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>

                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>

                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>

                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>

                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>

                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>

                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>

                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>

                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>

                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>

                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>

                                        <option value="23:59">23:59</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi_resto" class="font-weight-bold">Keterangan Restoran</label>
                                    <textarea id="deskripsi_resto" placeholder="please input your description"
                                              name="deskripsi_resto" rows="6"
                                              style="resize:none;" class="form-control"></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="foto_restoran" class="font-weight-bold">Foto Restoran<br>(Format File
                                        JPG Max: 1MB)</label>
                                    <input id="foto_restoran" type="file" placeholder="foto_restoran"
                                           class="form-control form-control-file" accept="image/*"
                                           name="foto_restoran">
                                </div>

                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="us3-address">Lokasi</label>
                                    <input type="text" class="form-control" id="us3-address"
                                           placeholder="isi lokasi anda"/>
                                </div>
                                <div class="form-group">
                                    <div id="us3" style="width: 100%; height: 400px;"></div>
                                </div>

                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="latitude" class="form-control" id="us3-lat"/>
                                </div>

                                <div class="form-group">
                                    <label>Longitude</label>
                                    <input type="text" name="longitude" class="form-control" id="us3-lon"/>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>


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

<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/plugins.js"></script>

<script type="text/javascript"
        src='http://maps.google.com/maps/api/js?key=AIzaSyCc6f-P5mqAhjKsca2KZefZRucUdq2xNgY&sensor=false&libraries=places'></script>
<script src="<?php echo base_url() ?>asset/js/locationpicker.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/newgo3jek/js/gmaps.js"></script>

</body>
</html>