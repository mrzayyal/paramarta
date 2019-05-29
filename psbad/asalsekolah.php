
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>

   <div class="container-fluid">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Isi Data Pribadi</h1>
          </div>
              <?php $err = isset($_GET['error']) ? $_GET['error'] : '';
                  if ($err=="1"){
                    echo "
                    <div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                      </button>
                      <strong>Warning!</strong> Tanggal Tidak Valid
                    </div>"; 
                  }elseif($err=="2"){
                    echo "
                    <div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                      </button>
                      <strong>Warning!</strong> Masih Ada Data Yang Belum Terisi
                    </div>"; 
                  }elseif($err=="3"){
                    echo "
                    <div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                      </button>
                      <strong>Warning!</strong> Masih Ada Data Yang Belum Terisi
                    </div>"; 
                  }else{
                    echo ""; 
                  }
              ?>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Asal Sekolah</h6>
      </div>
      <div class="p-5">
        <form class="user" method="post" action="?psbad=simpanasalsekolah">
          <div class="form-group">
            Nama Sekolah Asal<br/>
            <input type="text" class="form-control sekolahAsal" id="sekolahAsal" name="sekolahAsal" placeholder="Sekolah Asal" >
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-1 mb-sm-0">
              NISN<br/>
              <input type="text" class="form-control nisn" id="nisn" name="nisn" placeholder="NISN" >
            </div>
          </div>                  
          <div class="form-group row">
            <div class="col-sm-3 mb-1 mb-sm-0">
              Ijazah<br>
              <input type="text" class="form-control ijazah" name="ijazah" id="ijazah" placeholder="Ijazah">
            </div>
            <div class="col-sm-2">
              Tanggal Ijazah<br>
              <input type="date" class="form-control datepicker" name="tglIjazah">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3 mb-1 mb-sm-0">
              SKHUN<br>
              <input type="text" class="form-control skhun" name="skhun" id="skhun" placeholder="SKHUN">
            </div>
            <div class="col-sm-2">
              Tanggal SKHUN<br>
              <input type="date" class="form-control tglSkhun" name="tglSkhun">
            </div>
          </div>                  
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              Nomor Ujian
              <input type="number" name="noUjian" class="form-control noUjian" id="noUjian" min="0" data-bind="value:noUjian" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" value="0">
            </div>
            <div class="col-sm-6"><br/>
              <font color="red">*Dilewati Jika Tidak Ada</font>
            </div>
          </div>
          <input type="submit" name="simpan" class="form-control btn-primary" value="Simpan">                  
          </form>
      </div>
    </div>
</div>

