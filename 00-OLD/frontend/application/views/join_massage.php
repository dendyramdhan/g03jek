<?php 
  $session_id = $this->session->userdata('form_isi');
  if($session_id == 1){
    ?>
      <script>
          alert('Massage Registration Successful'); 
      </script>
    <?php
    $this->session->unset_userdata('form_isi'); 
    $this->session->set_userdata('form_isi', 0); 
  }
  else{
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
    <title>JOIN MASSAGE | GOTAXI</title>
    <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/bootstrap-datepicker.standalone.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/style_kelebihan_animate.css" rel="stylesheet">	
	<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>asset/css/style_fitur.css" rel="stylesheet">
<!-- <link href="<?php echo base_url() ?>asset/css/style_kelebihan.css" rel="stylesheet"> -->
	<link href="<?php echo base_url() ?>asset/css/responsive-slider.css" rel="stylesheet">
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" /> -->
     

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css_animasi/app.css">

 <link rel="shortcut icon" href="/asset/css_animasi/favicon.png">  
  

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
                            Join a driver                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</nav>
    </header>
    

    <!--/#header-->
    <div class="overlay"></div>

 <section class="join-gotaxi"> 

        <img class="img-responsive" src="/asset/banner/banner_massage.jpg">

</section>

	



	

	

	<section id="layanan_isi-join">
    <div class="container" style="padding-bottom: 10px;">
      <div class="row">

      
        <div class="layanan_isi-join-judul-mmasssage">
          <h2>Join With Partner <font color='#0228ce'>MASSAGE</font></h2>
          
        </div>
          
      <!-- </div>
        
    </div> -->
       
            
            <div class="col-md-3 join_mmasage_judul" style="background:#FFCC00; height: 1400px; padding-top: 30px;">
            
             <h2>COMPARE WITH M-MASSAGE OR RECOMMEND YOUR CLIENT</h2>


              </div>
          
<!--           </div> -->
          
            
          <div class="col-md-9 col-sm-12 col-xs-12 join_mmasage_form">
          <form role="form" action="<?php echo base_url()?>index.php/c_upload/upload_mmassage" enctype="multipart/form-data" method="post">
           <input name="redirect" type="hidden" value="<?php echo base_url()?>index.php/c_utama/thankyou" />
           <input name="job" type="hidden" value="3" />
          <div class="datadiri">
            
              <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Personal Data</h1>
              <hr>
            
              <div class="col-md-6 form-group">
                <label>Full name</label>
                <input type="text" placeholder="Katie Wilson" class="form-control" name="nama_lengkap">
              </div>
            
            
              <div class="col-md-6 form-group">
                <label>Gender</label>
                <select class="form-control" name="jk">
                  <option default></option>
                  <option value="2">Male</option>
                  <option value="1">Female</option>
                </select>
              </div>

              <div class="col-md-6 form-group">
                <label>No. HP</label>
                <input type="tel" placeholder="no.HP" class="form-control" name="no_hp">
              </div>

              <div class="col-md-6 form-group">
                <label>Identity number</label>
                <input type="text" placeholder="123456789" class="form-control" name="no_ktp">
              </div>

              <div class="col-md-6 form-group">
                <label>Email</label>
                <input type="email" placeholder="abc@test.com" class="form-control" name="email">
              </div>

              
          
            
              <div class="col-md-6 form-group">
                <label>Tempat Lahir</label>
                <input type="text" placeholder="tempat lahir" class="form-control" name="tempat_lahir">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Place of Birth</label>
                <input style="margin: auto;" placeholder="Place of Birth" type="text" class="tanggal form-control" name="tgl_lahir" />
              </div>
            

             
            
               <div class="col-md-6 form-group">
                <label>Photo Identity number<br>(Format File JPG Max: 1MB)</label>
                <input type="file" placeholder="nama akhir" class="form-control" accept="image/*" name="foto_ktp">
              </div>
              
               <div class="col-md-6 form-group">
                <label>Photo Profile</label>
                <input type="file" class="form-control" accept="image/*" name="foto_diri">
              </div>
            </div>  

          <div class="datadiri">
            <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">ADDRESS TO STAY NOW</h1>
            <hr>
          
              <div class="col-md-6 form-group">
                <label>Home address</label>
                <input type="text" placeholder="example: jl. Kemang No.05 Malang " class="form-control" name="alamat_tinggal">
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Districts</label>
                <input type="text" placeholder="districts" class="form-control" name="kecamatan">
              </div>
            

              <div class="col-md-6 form-group">
                <label>City</label>
                <input type="text" placeholder="city" class="form-control" name="kota">
              </div>

              <div class="col-md-6 form-group">
                  <div></div>
              </div>

            </div>

            <div class="datadiri">
            <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">Additional Data</h1>
            <hr>
          
              <div class="col-md-6 form-group">
                <label>Massage Experience</label>
                <select class="form-control" name="pengalaman">
                  <option value="1"> <1 Year / None</option>
                   <option value="2">  1 - 2 Year </option>
                    <option value="3"> 2 - 3 Year</option>
                     <option value="4"> > 3 Year</option>
                </select>
              </div>
          
            
              <div class="col-md-6 form-group">
                <label>Recent Jobs Field</label>
                <input type="text" placeholder="example: Massage around, spa" class="form-control" name="pekerjaan_terakhir">
              </div>
            

              <div class="col-md-6 form-group">
                <label>Family Phone Number</label>
                <input type="tel" placeholder="+91 64527327" class="form-control" name="telepon_keluarga">
              </div>

              <div class="col-md-6 form-group">
               <div></div>
              </div>

            </div>

            <div class="datadiri">
            <h1 style="font-weight:bold; font-size:35px; letter-spacing: 2px;">MASSAGE SERVICE</h1>
            <hr>
               <div class="col-md-12 form-group">
               <div class="col-md-12">
                  <label>Service you choose (may choose more than 1)</label>
               </div>
                <?php 
                foreach ($jenis as $j) {
                  # code...?>
                    <div class="col-md-3">
                        <input type="checkbox" name="jenis_pijat[]" value="<?php echo $j['id'] ?>"><?php echo $j['layanan']; ?>
                    </div>
                  <?php
                }
                 ?>
               <div class="col-md-12 form-group">
                <label>Work Area</label>
                <select name="area_kerja" class="form-control">
                      <option value="0">select the work area</option>
                    <?php foreach ($area as $a) {
                      ?>
                        <option value="<?php echo $a['id'] ?>"><?php echo $a['cabang_perusahaan'] ?></option>
                      <?php
                    } ?>
                </select>
               
              </div>
               <!--  <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
                 <div class="col-md-3">
                  <input type="checkbox">Full Body message<br>
                  <input type="checkbox">Full Body message
                </div>
              </div> -->
              <div class="col-md-12">
                 <div class="col-md-6 form-group" style="margin-left:-28px;width:100%;">
                      <button type="submit" class="btn btn-default">Submit</button>
                 </div>
              </div>


            
            </form>
          </div>
          
      </div>
      

  </section><!--/#explore-->
	

	
<!--footer-->
  
  
  
  
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