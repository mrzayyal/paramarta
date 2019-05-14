<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">
  
            <div class="mb-5 element-animate">
              <div class="block-17">
                <h2 class="heading text-center mb-4">Selamat Datang di SMK Paramarta</h2>
                <center><img src="images/logo1.png" ></center>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
<div class="container">
<section class="site-section" id="section-counter">
  <center>
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <div class="block-18 d-flex align-items-center">
                        <div class="icon mb-3"><span class="flaticon-teacher-at-the-blackboard"></span></div>
                        <div class="media-body ">
                          <div class="text block-16">
                            <strong class="number" data-number="5">0</strong>
                            <span>Guru dan Staff</span>
                          </div>
                        </div>
                      </div> 
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="block-18 d-flex align-items-center">
                        <div class="icon mb-3"><span class="flaticon-reading"></span></div>
                        <div class="media-body ">
                          <div class="text block-16">
                            <strong class="number" data-number="51">0</strong>
                            <span>Murid</span>
                          </div>
                        </div>
                      </div> 
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="block-18 d-flex align-items-center">
                        <div class="icon mb-3"><span class="flaticon-teacher-at-the-blackboard"></span></div>
                        <div class="media-body ">
                          <div class="text block-16">
                            <?php
                            $total_program=mysql_num_rows(mysql_query("SELECT * FROM t_program"));
                            echo"
                            <strong class='number' data-number='$total_program'>0</strong>";?>
                            <span>Program Keahlian</span>
                          </div>
                        </div>
                      </div> 
                    </div> 

                    <div class="col-md-6 col-lg-3">
                      <div class="block-18 d-flex align-items-center">
                        <div class="icon mb-3"><span class="flaticon-teacher-at-the-blackboard"></span></div>
                        <div class="media-body ">
                          <div class="text block-16">
                            <?php
                            $total_ekskul=mysql_num_rows(mysql_query("SELECT * FROM t_ekskul"));
                            echo"
                            <strong class='number' data-number='$total_ekskul'>0</strong>";?>
                            <span>Ekstrakulikuler</span>
                          </div>
                        </div>
                      </div> 
                    </div> 

                  </div>
              </div>
            </div>
          </div>
        </div>
        </center>
      </section>
    </div>
    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/logo.png" alt="Image placeholder" class="img-fluid" width="800px" height="485px">
                <a href="https://youtube.com/watch?v=tOk4OzC0V-4" class="play-button popup-vimeo"><span class="ion-ios-play"></span></a>

                <!-- <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> -->

              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2>Selamat Datang di SMK Paramarta</h2>
              </div>
              <div class="text mb-5">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quibusdam nisi eos accusantium eligendi velit 
			  deleniti nihil ad deserunt rerum incidunt nulla nemo eius molestiae architecto beatae asperiores doloribus animi.</p>
              </div>
              <p><a href="#" class="btn btn-primary reverse py-2 px-4">Read More</a></p>
              
            </div>

          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

    <section class="site-section pt-3 element-animate">
	
      <div class="container">
	  <div class="heading">
       <center><h1>Program Keahlian</h1></center>
	   </div>
	   <div class="row">
	  <?php
	  $program=mysql_query("SELECT * FROM t_program");
	  while($p1=mysql_fetch_array($program)){
	  $md5id=md5($p1['id']);
	  echo "
		<br />
        
          <div class='col-md-6 col-lg-3'>
            <div class='media block-6 d-block'>
              <div class='icon mb-3'><span class=$p1[logo]></span></div>
              <div class='media-body'>
                <h3 class='heading'>$p1[nm_program]</h3>
                <p>".substr($p1['keterangan'],0,140)."</p>
                <p><a href='?p=program&id=$md5id' class='more'>Lebih Lengkap <span class='ion-arrow-right-c'></span></a></p>
              </div>
            </div> 
          </div>
	  ";
	  }
	  ?>
        </div>
      </div>
    </section>
    <!-- END section -->

<!-- Buat Infografis -->    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Ekstrakulikuler</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
            <p><a href="#" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>Enroll Now</a></p>
          </div>
        </div>
      </div>
	  
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
		<?php
		$ekskul=mysql_query("SELECT * FROM t_ekskul");
		while($e1=mysql_fetch_array($ekskul)){
		$md5id=md5($e1['id']);
		echo "
		<div class='item'>
            <div class='block-19'>
                <figure>
                  <img src='images/$e1[gambar]' alt='Image' class='img-fluid' width='800' height='485'>
                </figure>
                <div class='text'>
                  <h2 class='heading'><a href='#'>$e1[nm_ekskul]</a></h2>
                  <p class='mb-4'>$e1[keterangan]</p>
                  <div class='meta d-flex align-items-center'>
                    <div class='number'>
                      <a href='#'>Klik Untuk Lebih Detail</a>
                    </div>
                    
                  </div>
                </div>
              </div>
          </div>
        

		";
		}
		?>
		</div>
      </div>

      
    </div>
    <!-- END section -->


    <div class="container site-section element-animate">
      <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Guru dan Staf Sekolah</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
          </div>
        </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(../images/person_3.jpg);">
                <div class="box">
                  <h2>Job Smith</h2>
                  <p>Laravel Expert</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_3.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Job Smith <span class="position">Laravel Expert</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-2 ">
            <div class="flipper">
              <div class="front" style="background-image: url(../images/person_1.jpg);">
                <div class="box">
                  <h2>Mellissa Cruz</h2>
                  <p>JavaScript Guru</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Mellissa Cruz <span class="position">JavaScript Guru</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(../images/person_2.jpg);">
                <div class="box">
                  <h2>Aldin Powell</h2>
                  <p>WordPress Ninja</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_2.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Aldin Powell <span class="position">WordPress Ninja</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>
      </div>
    </div>
    <!-- END .block-2 -->