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
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pendaftaran Restoran | Go3Jek</title>

    <script data-require="angular.js@*" data-semver="1.2.4" src="http://code.angularjs.org/1.2.3/angular.js"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!--  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->
    <script type="text/javascript"
            src='https://maps.google.com/maps/api/js?key=AIzaSyCc6f-P5mqAhjKsca2KZefZRucUdq2xNgY&sensor=false&libraries=places'></script>


    <script src="<?php echo base_url(); ?>asset/js/locationpicker.jquery.js"></script>


    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/style_kelebihan_animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/style_fitur.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/GO3JEK.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" /> -->


    <link rel="shortcut icon" href="http://csswrap.com/wp-content/uploads/2015/03/showmenu.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<body>
<header id="header" role="banner">


    <div class="main-nav fixed-menu">
        <!--start header saat mobile version-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/asset/images/join_page/icon/header.png" width="100%"></a>
        </div><!--end header saat mobile version-->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/index.php/c_utama/join">Join</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Driver</a></li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=+6282259939674&amp;text=Please%20leave it%20your%20message.....">Call
                        Center</a></li>
            </ul>
        </div>
    </div>


</header>
<!--/#header-->

<div class="overlay"></div>

<section class="join-mangjek">

    <img class="img-responsive" src="/asset/banner/gofood.jpg">

</section>


<section id="layanan_isi-join" style="margin-top: 50px;">
    <div class="container" style="padding-bottom: 10px;">
        <div class="row">

            <div class="layanan_isi-join-judul" style="font-family:'Yanone Kaffeesatz', 'sans-serif';">
                <p>Daftarkan segera <font color='#FFCC00'>Bar, Cafe, atau Restoran kamu</font> di Go3Jek</p>
            </div>

        </div>
        <div class="layanan_isi-join-judul2-mride">
            <p style="font-family:'Yanone Kaffeesatz', 'sans-serif'; font-weight: bold; letter-spacing: 2px; margin-bottom: 10px;">
                Registrasi Restoran / Bar / Kafe

            </p>
        </div>

        <div class="col-md-12">
            <div class="line1"></div>
        </div>


        <div class="col-md-12 col-sm-12 col-xs-12 join_mmasage_form">
            <form role="form" enctype="multipart/form-data" method="post" id="form_unenter"
                  action="<?php echo base_url() ?>index.php/c_upload/upload_mfood">
                <input type="hidden" name="redirect" value="<?php echo base_url() ?>index.php/c_utama/join_food">
                <input type="hidden" name="jenis_lapak" value="1">
                <div class="datadiri">

                    <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Informasi Utama</h1>
                    <hr>

                    <div class="col-md-6 form-group">
                        <label>Nama Pemilik Restoran</label>
                        <input type="text" placeholder="First Name" class="form-control" name="nama_pemilik_restoran">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Data Identitas </label>
                        <select name="jenis_identitas" class="form-control">
                            <option default>Select type</option>
                            <option>KTP</option>
                            <option>SIM</option>
                            <option>Passport</option>
                        </select>


                    </div>

                    <div class="col-md-6 form-group">
                        <label>No. Identitas</label>
                        <input type="text" placeholder="no.identitas" name="no_identitas" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">

                        <div class="col-md-6" style="padding-left: 0px;">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password1" id="password1"
                                   placeholder="New Password" autocomplete="off">
                        </div>
                        <div class="col-md-6" style="padding: 0px;">
                            <label>Ulangi Password</label>
                            <input type="password" name="password2" class="form-control" id="password2"
                                   placeholder="Repeat Password" autocomplete="off">
                            <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>
                            Passwords Sesuai
                        </div>

                    </div>


                    <div class="col-md-6 form-group">
                        <label>Alamat Tempat Usaha</label>
                        <input type="text" placeholder="Company's address" name="alamat_pemilik" class="form-control">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Kota</label>
                        <input type="text" placeholder="Berlin" name="kota" class="form-control">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Nama Penanggung Jawab</label>
                        <input type="text" placeholder="Example: Piter" name="nama_penanggung_jawab"
                               class="form-control">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>No. Handphone</label>
                        <input type="tel" placeholder="09 678xxxx" name="telepon_penanggung_jawab" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Email Pemilik</label>
                        <input type="email" placeholder="email" name="email_penanggung_jawab" class="form-control">
                    </div>


                    <div class="col-md-6 form-group">
                        <div></div>
                    </div>
                </div>

                <div class="datakendaraan">
                    <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Informasi Restoran</h1>
                    <hr>

                    <div class="col-md-6 form-group">
                        <label>Nama Restoran</label>
                        <input type="text" placeholder="Restaurant Name" class="form-control" name="nama_restoran">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Alamat Restoran</label>
                        <input type="text" placeholder="Restaurant Address" name="alamat_restoran" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>No. Telephone Restoran</label>
                        <input type="tel" placeholder="Restaurant phone number" name="telepon_restoran"
                               class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Kategori Restoran</label>

                        <select name="kategori" class="form-control">
                            <option default>Pilih Kategori Restoran</option>
                            <?php foreach ($jenis as $j) {
                                ?>
                                <option value="<?php echo $j['id'] ?>"><?php echo $j['kategori'] ?></option>
                                <?php
                                # code...
                            } ?>
                            <!--  <option value="2">Restoran Padang</option>
                             <option value="1">Restoran Mahal</option> -->

                        </select>
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Waktu Buka</label>
                        <!--<input type="time" class="form-control" name="jam_buka">-->
                        <select class="form-control" name="jam_buka">
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

                    <div class="col-md-6 form-group">
                        <label>Waktu Tutup</label>
                        <!--<input type="time" class="form-control" name="jam_tutup">-->
                        <select class="form-control" name="jam_tutup">
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


                    <div class="col-md-6 form-group">

                        <label>Lokasi</label>
                        <input type="text" class="form-control" id="us3-address" placeholder="isi lokasi anda"/>

                    </div>

                    <div class="col-md-12 form-group">
                        <div id="us3" style="width: 100%; height: 400px;"></div>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Latitude</label>
                        <input type="text" name="latitude" class="form-control" id="us3-lat"/>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Longitude</label>
                        <input type="text" name="longitude" class="form-control" id="us3-lon"/>
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Keterangan Restoran</label>
                        <textarea placeholder="please input your description" name="deskripsi_resto" rows="6"
                                  style="resize:none;" class="form-control"></textarea>
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Foto Restoran<br>(Format File JPG Max: 1MB)</label>
                        <input type="file" placeholder="foto_restoran" class="form-control" accept="image/*"
                               name="foto_restoran">
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-6 form-group" style="text-align:center; width:100%;">
                            <button type="submit" class="btn btn-default">Kirim</button>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 form-group">
                      <div></div>
                    </div> -->
                </div>


            </form>
        </div>


    </div>

    </div>
</section><!--/#explore-->


<!--  <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script> -->
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>

<script src="<?php echo base_url() ?>asset/js/modernizr.custom.63321.js"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
<script src="<?php echo base_url() ?>asset/js/jquery.catslider.js"></script>

<script>
    $(function () {

        $('#mi-slider').catslider();

    });
</script>

<script>

    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script>
    $('#us3').locationpicker({
        location: {
            latitude: -27.9686831,
            longitude: 153.41557349999994
        },
        radius: 300,
        inputBinding: {
            latitudeInput: $('#us3-lat'),
            longitudeInput: $('#us3-lon'),
            radiusInput: $('#us3-radius'),
            locationNameInput: $('#us3-address')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });
</script>

<script type="text/javascript">
    $("input[type=password]").keyup(function () {
        var ucase = new RegExp("[A-Z]+");
        var lcase = new RegExp("[a-z]+");
        var num = new RegExp("[0-9]+");


        if ($("#password1").val() == $("#password2").val()) {
            $("#pwmatch").removeClass("glyphicon-remove");
            $("#pwmatch").addClass("glyphicon-ok");
            $("#pwmatch").css("color", "#00A41E");
        } else {
            $("#pwmatch").removeClass("glyphicon-ok");
            $("#pwmatch").addClass("glyphicon-remove");
            $("#pwmatch").css("color", "#FF0004");
        }
    });
</script>

<script type="text/javascript">
    $('#form_unenter').keypress(
        function (event) {
            if (event.which == '13') {
                event.preventDefault();
            }


        });
</script>

</body>
</html>