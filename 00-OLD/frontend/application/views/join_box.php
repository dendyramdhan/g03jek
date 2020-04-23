<?php 
  $session_id = $this->session->userdata('form_isi');
  if($session_id == 1){
    ?>
      <script>
          alert('Registration Successful'); 
      </script>
    <?php
    $this->session->unset_userdata('form_isi'); 
    $this->session->set_userdata('form_isi', 0); 
  }
  else{

  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JOIN Go-Box | GOTAXI</title>
   <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/style_fitur.css" rel="stylesheet">
<!-- <link href="<?php echo base_url() ?>asset/css/style_kelebihan.css" rel="stylesheet"> -->
  <link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
 <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" /> -->
     
	<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
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
                            Download                        </a>
                    </li>
                    <li>
                        <a href="/index.php/c_utama/join" class="call-to-action
                            btn-primary-o">
                            Join driver                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</nav>
    </header>


    <!--/#header-->
    <div class="overlay"></div>

 
  <section class="join-mangjek"> 

        <img class="img-responsive" src="https://mangjek.com/asset/images/join_page/header/mbox.png">

</section>




  

  

 
  <section id="layanan_isi-join" style="margin-top: 50px;">
    <div class="container" style="padding-bottom: 10px;">
      <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="layanan_isi-join-judul" style="font-family:'Yanone Kaffeesatz', 'sans-serif';">
            
          <p>JOIN <font color='#FFCC00'>GO-BOX</font></p>
        </div>
    
      </div>  
      <!-- </div>         
          
      </div> -->
        
        

          
          <div class="col-md-12" style="display: block; overflow: auto; padding-left:0;">
              <div class="col-md-2 kotak-join-mbox" style="background:#FFCC00; height: 1100px; padding-top: 30px;">  
                <h2 style="font-size: 30px; font-weight: bold;"><font color="#000">DATA DRIVER <br>CAR RENTAL</font></h2>
                <p><font color="#ffffff">Please fill one form for each registered driver</font></p>
              </div>
          


              <div class="col-md-10  col-sm-12 col-xs-12 join_mmasage_form">
          <form role="form" action="<?php echo base_url()?>index.php/c_upload/upload" enctype="multipart/form-data" method="post">
           <input name="redirect" type="hidden" value="<?php echo base_url()?>index.php/c_utama/thankyou" />
           <input name="job" type="hidden" value="4" />
          <div class="datadiri">
            
              <h1 style="font-weight:bold;font-size: 35px;letter-spacing: 2px;">Personal Data</h1>
              <hr>
            
              <div class="col-md-6 form-group">
                <label>First Name</label>
                <input type="text" placeholder="First Name" class="form-control" name="nama_depan">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Last Name</label>
                <input type="text" placeholder="Last name" class="form-control" name="nama_belakang">
              </div>

              <div class="col-md-6 form-group">
                <label>Email</label>
                <input type="email" placeholder="email" class="form-control" name="email">
              </div>

              <div class="col-md-6 form-group">
                <label>Mobile Phone</label>
                <input type="tel" placeholder="mobile phone" class="form-control" name="no_telepon">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Place of Birth</label>
                <input type="text" placeholder="Place of Birth" class="form-control" name="tempat_lahir">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Date of birth</label>
                 <input style="margin: auto;" placeholder="Date of birth" type="text" class="tanggal form-control" name="tgl_lahir" />
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Identity number</label>
                <input type="text" placeholder="123456678" class="form-control" name="no_ktp">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Photo Identity number<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_ktp">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Photo Vehivle Permit<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_stnk">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Foto SIM<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_sim">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Photo Profile<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_diri">
              </div>
            
            
            
              <div class="col-md-6 form-group">
                <div></div>
              </div>
            </div>  

             <div class="datakendaraan">
            <h1 style="font-weight:bold;font-size: 35px;letter-spacing: 2px;">Data VEHICLE DATA</h1>
            <hr>
          
              <div class="col-md-6 form-group">
                <label>Vehicle Brand</label>
                <input type="text" placeholder="example : Hino, Fuso, Daihatsu" class="form-control" name="merk">
              </div>

<div class="col-md-6 form-group">
                <label>Vehicle Type</label>
                <input type="text" placeholder="contoh : Dutro, L300" class="form-control" name="tipe">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Vehicle Category</label>
              
               <select name="jenis" class="form-control">
                <option default>Select Vehicle Category</option>
                <?php 
                  foreach ($jenis as $j) {
                    ?>
                       <option value="<?php echo $j['id'] ?>"><?php echo $j['jenis_kendaraan'] ?></option>
                    <?php
                    # code...
                  }
                 ?>  
                </select>
              </div>
            
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
                <input type="text" placeholder="12345677" class="form-control" name="nomor_kendaraan">
              </div>

              <div class="col-md-6 form-group">
                <label>Vehicle Color</label>
                <input type="text" placeholder="example : red, black, blue" class="form-control" name="warna">
              </div>


              
							<div class="col-md-12">
							   <div class="col-md-6 form-group" >
								      <button type="submit" class="call-to-action btn-primary">SUBMIT</button>
                 </div>
              </div>
            </div>
               </form>
          </div>
            
          

         
           
          </div>
                
   
  </section><!--/#explore-->
  


  <!-- javascript terbaru bro  -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script type="text/javascript" src="/asset/css_animasi/app.js"></script>
    <script type="text/javascript">


   
  
  
   <script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.js"></script>
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
      $(function() {

        $( '#mi-slider' ).catslider();

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
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
    <script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
</body>
</html>