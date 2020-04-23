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
    <title>GO3JEK | Registrasi</title>
    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/bootstrap-datepicker.standalone.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/style_kelebihan_animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/style_fitur.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url() ?>asset/css/style_kelebihan.css" rel="stylesheet"> -->
    <link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" /> -->


    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css_animasi/app.css">


    <link rel="shortcut icon" href="/asset/css_animasi/favicon.png">


</head><!--/head-->

<body>

<header>
    <nav class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="/" class="logo"></a>
                    <button class="burger burger3"><span></span></button>
                    <ul class="menu">
                        <li>
                            <a href="/#download" class="call-to-action
                            btn-primary">
                                Download </a>
                        </li>
                        <li>
                            <a href="/index.php/c_utama/join" class="call-to-action
                            btn-primary-o">
                                Join a driver </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>


<section class="join-gotaxi">

    <img class="img-responsive" src="/asset/banner/banner_moto.jpg">
</section>


<section id="layanan_isi-join-mride">
    <div class="container" style="padding-bottom: 10px;">
        <div class="row text-center">

            <div class="layanan_isi-join-judul2-mride">
                <br><br><br>
                <h2 class="heading">Form Register Driver GO3JEK</h2>
            </div>

            <div class="layanan_isi-join-judul2"></div>
            <div class="col-md-12">
                <div class="line1"></div>
            </div>

        </div>


        <div class="col-md-4" style="height: 700px;">
            <div style="background:url('/asset/banner/moto_app.jpg') no-repeat center center / cover;
    height: 700px;
    padding: 20px;
    margin-top: 30px;
    color: #9B9B9B;
    padding-bottom: 10px;
    border-radius: 5px;">

            </div>
            <div style="
    background: #fff;
    padding: 20px;
    margin-top: 30px;
    color: #9B9B9B;
    padding-bottom: 10px;
    border-radius: 5px;">
                <p style="font-weight: bold;"><font color="#0D5C7D">Terms and Services</font></p>
                <p><font color="black">1.Driver must provide their own car</font></p>
                <p><font color="black">2.Driver must have a personal Android device</font></p>
                <p><font color="black">3.Driver must have Driver license which is still active at least 6 months
                        ahead</font></p>>


            </div>


        </div>

        <div class="col-md-8  col-sm-12 col-xs-12 join_mmasage_form">
            <form role="form" action="<?php echo base_url() ?>index.php/c_upload/upload" enctype="multipart/form-data"
                  method="post">
                <input name="redirect" type="hidden" value="<?php echo base_url() ?>index.php/c_utama/thankyou"/>
                <input name="job" type="hidden" value="1"/>
                <div class="datadiri">

                    <h1 style="font-weight:bold;font-size: 35px;letter-spacing: 2px;">Personal Data</h1>
                    <hr>

                    <div class="col-md-6 form-group">
                        <label>First Name</label>
                        <input type="text" placeholder="first name" class="form-control" name="nama_depan">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="last name" class="form-control" name="nama_belakang">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Email</label>
                        <input type="email" placeholder="email" class="form-control" name="email">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Phone Number</label>
                        <input type="tel" placeholder="Phone Number" class="form-control" name="no_telepon">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Place of Birth</label>
                        <input type="text" placeholder="Place of Birth" class="form-control" name="tempat_lahir">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Date of birth</label>
                        <input style="margin: auto;" placeholder="Date of birth" type="text"
                               class="tanggal form-control" name="tgl_lahir"/>
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Identity number</label>
                        <input type="text" placeholder="Identity number" class="form-control" name="no_ktp">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Photo Identity number<br>(Format File JPG Max: 1MB)</label>
                        <input type="file" placeholder="last_name" class="form-control" accept="image/*"
                               name="foto_ktp">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Photo Vehicle Permit<br>(Format File JPG Max: 1MB)</label>
                        <input type="file" placeholder="nama akhir" class="form-control" accept="image/*"
                               name="foto_stnk">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Photo Driver license<br>(Format File JPG Max: 1MB)</label>
                        <input type="file" placeholder="nama akhir" class="form-control" accept="image/*"
                               name="foto_sim">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Photo Profile<br>(Format File JPG Max: 1MB)</label>
                        <input type="file" placeholder="nama akhir" class="form-control" accept="image/*"
                               name="foto_diri">
                    </div>


                    <div class="col-md-6 form-group">
                        <div></div>
                    </div>
                </div>

                <div class="datakendaraan">
                    <h1 style="font-weight:bold;font-size: 35px;letter-spacing: 2px;">VEHICLE DATA</h1>
                    <hr>

                    <div class="col-md-6 form-group">
                        <label>Vehicle Brand</label>
                        <input type="text" placeholder="ex : Honda, Yamaha" class="form-control" name="merk">
                    </div>


                    <div class="col-md-6 form-group">
                        <label>Vehicle Type</label>
                        <input type="text" placeholder="ex: Beat" class="form-control" name="tipe">
                    </div>

                    <input type="hidden" name="jenis" value="1" class="form-control">
                    <!-- <div class="col-md-6 form-group">
                        <label>Jenis Kendaraan</label>

                        <select name="jenis" class="form-control">
                            <option default>Pilih Jenis Kendaraan</option>
                            <option value="2">Mobil</option>class="form-control"
                            <option value="1">Motor</option>
                        </select>
                    </div> -->

                    <div class="col-md-6 form-group">
                        <label>Vehicle Number</label>
                        <input type="text" placeholder="Vehicle Number" class="form-control" name="nomor_kendaraan">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Vehicle Color</label>
                        <input type="text" placeholder="ex: Red, Black, White" class="form-control" name="warna">
                    </div>


                    <div class="col-md-12">
                        <div class="col-md-6 form-group">
                            <button type="submit" class="call-to-action btn-primary">SUBMIT</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>

    </div>
</section>


<!-- javascript terbaru bro  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript" src="/asset/css_animasi/app.js"></script>
<script type="text/javascript">

    <
    script;
    type = "text/javascript";
    src = "<?php echo base_url() ?>asset/js/jquery.js" ></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/coundown-timer.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>

<script src="<?php echo base_url() ?>asset/js/modernizr.custom.63321.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('.tanggal').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });
    });
</script>
</body>
</html>