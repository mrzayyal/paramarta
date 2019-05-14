<!doctype html>
<html lang="en">
  <head>
    <title>SMK Paramarta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
<?php include "koneksi.php";?>
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

          <div class="container">
          <ul class="navbar-nav absolute-right">
              <li>
                <span class="flaticon-mortarboard"></span><a href="paramarta.php?p=login">Masuk</a> / 
                <span class="flaticon-reading"></span><a href="paramarta.php?p=register">Daftar baru</a>
              </li>
            </ul>
          
        </div>
        
    <header role="banner">
     
            
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html"> <img src="images/logo.png">SMK Paramarta</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="paramarta.php?p=home">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.html">Sejarah</a>
                  <a class="dropdown-item" href="courses.html">Visi dan Misi</a>
                  <a class="dropdown-item" href="courses.html">Struktur Organisasi</a>
                  <a class="dropdown-item" href="courses.html">Profil Guru</a>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program Keahlian</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">Administrasi Perkantoran</a>
                  <a class="dropdown-item" href="#">Akuntansi</a>
                  <a class="dropdown-item" href="#">Multimedia</a>
                  <a class="dropdown-item" href="#">Tekhnik Sepeda Motor</a>
                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ekstrakulikuler</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">Administrasi Perkantoran</a>
                  <a class="dropdown-item" href="#">Akuntansi</a>
                  <a class="dropdown-item" href="#">Multimedia</a>
                  <a class="dropdown-item" href="#">Tekhnik Sepeda Motor</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Hubungi Kami</a>
              </li>
            </ul>

            
          </div>
        </div>
      </nav>
	  
    </header>
    <!-- END header -->

    <!-- END section -->
		<?php
			$p=$_GET['p'];
			if($p=="home"){
        include "awal.php";
			}else if($p=="register"){
        include "registrasi.php";
			}else if($p=="validasi"){
        include "validasi.php";
      }else if($p=="login"){
        include "login.php";
      }else{
        echo "far from home";
      }

		?>
    <footer class="site-footer">
       <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3>SMK Paramarta</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="#">Sejarah</a></li>
                  <li><a href="#">Visi Misi</a></li>
                  <li><a href="#">Struktur Organisasi</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Tentang Kami</a></li>
                  <li><a href="#">Pendaftaran Siswa Baru</a></li>
                  <li><a href="#">Hubungi Kami</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading"></h3>
            <div class="block-21 d-flex mb-4">
              <div class="text">

                <div class="meta">

                </div>
              </div>
            </div>  
            <div class="block-21 d-flex mb-4">
              <div class="text">

                <div class="meta">

                </div>
              </div>
            </div>  
            <div class="block-21 d-flex mb-4">
              <div class="text">

                <div class="meta">

                </div>
              </div>
            </div>  
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Informasi SMK Paramarta</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Jln Raya Jombang Gg Taqwa No 70 Depan Komplek Villa Jombang Baru, Jombang Ciputat-Tangerang Selatan</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">021 74634750</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@smk-paramarta.com</span></a></li>
              </ul>
            </div>
          </div>

        </div>
        
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>