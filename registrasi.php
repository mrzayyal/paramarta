<h2></h2>
    <!-- END section -->
    <br /><br />

      
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Pendaftaran Siswa Baru</h2>
              <hr></hr>
              <form action="paramarta.php?p=validasi" method="post">
              <?php if (isset($_GET['error'])) : ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                    <strong>Warning!</strong> <?php echo"$_GET[error]"; ?>
                </div>
              <?php endif;?> 
              
              Sebelum Melakukan Pengisian Formulir Untuk Pendaftaran Siswa Baru, Diharapkan Untuk Membuat Akun.
              <br /> <br /> 
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="uname">Username</label>
                      <input type="text" id="uname" name="username" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Alamat Email</label>
                      <input type="text" id="email" name="email" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="passwd1">Kata Kunci</label>
                      <input type="password" id="passwd1" name="password1" class="form-control py-2 ">
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="passwd2">Ketik Ulang Kata Kunci</label>
                      <input type="password" id="passwd2" name="password2" class="form-control py-2">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Register" class="btn btn-primary px-5 py-2">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>