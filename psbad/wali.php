   <div class="container-fluid">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Isi Data Orang Tua/Wali</h1>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Wali</h6>
      </div>
      <div class="p-5">
        <form class="user" method="post" action="?psbad=simpanwali">
          <div class="form-group">
            NIK Wali<br/>
            <input type="number" name="NIK" class="form-control NIK" id="NIK" min="0" data-bind="value:NIK" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" placeholder="Masukan NIK" >
          </div>
          <div class="form-group">
            Nama Wali<br/>
            <input type="text" class="form-control nama" id="nama" name="nama" placeholder="Nama Wali" >
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-1 mb-sm-0">
              Berkebutuhan Khusus<br/>
              <input type="text" class="form-control kebutuhan" id="kebutuhan" name="kebutuhan" placeholder="Kebutuhan Khusus" value="-">
            </div>
            <div class="col-sm-6 mb-1 mb-sm-0"><br>
              <font color="red">*Dilewati Jika Tidak Ada</font>
            </div>
          </div>                  
          <div class="form-group row">
            <div class="col-sm-3 mb-1 mb-sm-0">
              Pekerjaan Wali<br>
              <input type="text" class="form-control pekerjaan" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan Wali">
            </div>
            <div class="col-sm-3">
              Pendidikan Wali<br>
              <select name="pendidikan" class="form-control pendidikan">
                <option value="0">Pilih Pendidikan</option>
                <option value="Tidak Sekolah">Tidak Sekolah</option>
                <option value="SD">SD/MI</option>
                <option value="SMP">SMP/MTs</option>
                <option value="SMA">SMA/SMK</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3 mb-1 mb-sm-0">
              Penghasilan Bulanan Wali<br>
              <input type="number" name="hasil" class="form-control hasil" id="hasil" min="0" data-bind="value:hasil" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" placeholder="Penghasilan Wali" >
            </div>
          </div>                  
          <input type="submit" name="simpan" class="form-control btn-primary" value="Simpan">                  
          </form>
      </div>
    </div>
</div>

