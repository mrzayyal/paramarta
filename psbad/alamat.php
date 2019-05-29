
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>

<script type="text/javascript">
  $(document).ready(function () {
  //called when key is pressed in textbox
  $("#rumahTelp").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
</script>
<script src="js/jquery-1.11.3.min.js"></script>
<script >
   $(document).ready(function () {
      $('#provinsi').change(function (){
        var provinsi_nm=$(this).val();

        $.ajax({
          type: 'POST',
          url: 'kota.php',
          data: 'prov_nm='+provinsi_nm,
          success: function(response){
            $('#kota').html(response);
          }
        });
      })
   });

   $(document).ready(function () {
      $('#kota').change(function (){
        var kota_nm=$(this).val();

        $.ajax({
          type: 'POST',
          url: 'kecamatan.php',
          data: 'kota_nm='+kota_nm,
          success: function(response){
            $('#kecamatan').html(response);
          }
        });
      })
   });

   $(document).ready(function () {
      $('#kecamatan').change(function (){
        var kec_nm=$(this).val();

        $.ajax({
          type: 'POST',
          url: 'kelurahan.php',
          data: 'kec_nm='+kec_nm,
          success: function(response){
            $('#kelurahan').html(response);
          }
        });
      })
   });

   $(document).ready(function () {
      $('#kelurahan').change(function (){
        var kel_nm=$(this).val();

        $.ajax({
          type: 'POST',
          url: 'kodepos.php',
          data: 'kel_nm='+kel_nm,
          success: function(response){
            $('#kodepos').html(response);
          }
        });
      })
   });
</script>
   <div class="container-fluid">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Isi Data Pribadi</h1>
          </div>
              <?php $err = isset($_GET['error']) ? $_GET['error'] : '';
                  if ($err=="1"){
                    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
                    <strong>Warning!</strong> Masih Ada Data Yang Belum Terisi</div>"; 
                  }elseif($err=="2"){
                    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
                    <strong>Warning!</strong> Username Atau Password Tidak Boleh Kosong</div>"; 
                  }else{
                    echo ""; 
                  }
              ?>
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Alamat</h6>
                </div>
                <div class="p-5">
                <form class="user" method="post" action="?psbad=simpanalamat">               
                  <div class="form-group">
                      NIK
                      <input type="number" name="NIK" class="form-control NIK" id="NIK" min="0" data-bind="value:NIK" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" placeholder="Masukan NIK" >
                  </div>
                  <div class="form-group">
                      Alamat<br>
                      <textarea name="alamat" class="form-control alamat" id="alamat" placeholder="Masukan Alamat"></textarea>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-1 mb-sm-0">
                        Provinsi<br>
                        <?php $sql_prov=mysql_query("select * from t_provinsi group by provinsi"); 
                        
                        ?>
                        <select name="provinsi" class="form-control provinsi" id="provinsi" placeholder="Pilih Provinsi">
                        <option value="0" selected="selected">Pilih Provinsi</option>
                        <?php
                        while ($pr1=mysql_fetch_array($sql_prov)) {
                          echo "<option value='$pr1[provinsi]'>$pr1[provinsi]</option>";
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col-sm-6">
                        Kota<br>
                        <select name="kota" class="form-control kota" id="kota" placeholder="Pilih Kota">
                        <option value="0" selected="selected">Pilih Kota</option>
                        </select>  
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-1 mb-sm-0">
                        Kecamatan<br>
                        <select name="kecamatan" class="form-control kecamatan" id="kecamatan" placeholder="Pilih Kecamatan">
                        <option value="0" selected="selected">Pilih Kecamatan</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        Dusun/Kelurahan<br>
                        <select name="kelurahan" class="form-control kelurahan" id="kelurahan" placeholder="Pilih Kelurahan">
                        <option value="0" selected="selected">Pilih Kelurahan</option>
                        </select>  
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3 mb-1 mb-sm-0">
                        Kode Pos<br>
                        <select name="kodepos" class="form-control kodepos" id="kodepos" placeholder="Pilih Kode Pos">
                        <option value="0" selected="selected">Pilih Kode Pos</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        RT<br>
                        <input type="number" name="rt" class="form-control rt" id="rt" min="0" data-bind="value:rt" pattern="[0-9] {1,15}" title="Mohon Masukan Angka">
                    </div>
                    <div class="col-sm-3">
                        RW<br>
                        <input type="number" name="rw" class="form-control rw" id="rw" min="0" data-bind="value:rw" pattern="[0-9] {1,15}" title="Mohon Masukan Angka">
                    </div>
                  </div>                  
                  <div class="form-group row">
                    <div class="col-sm-6 mb-1 mb-sm-0">
                      Alat Transportasi Ke Sekolah<br>
                      <input type="checkbox" value="Jalan Kaki" name="alat[]" > Jalan Kaki<br>
                      <input type="checkbox" value="Sepeda" name="alat[]"> Sepeda<br>
                      <input type="checkbox" value="Motor" name="alat[]"> Motor<br>
                      <input type="checkbox" value="Angkutan Umum" name="alat[]"> Angkutan Umum<br>
                      <input type="checkbox" value="Mobil Pribadi" name="alat[]"> Mobil Pribadi<br>
                    </div>
                    <div class="col-sm-3">
                      Jenis Tinggal<br>
                        <select name="tinggal" class="form-control tinggal" id="tinggal" placeholder="Pilih Jenis Tinggal">
                        <option value="0" selected="selected">Pilih Jenis Tinggal</option>
                        <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                        <option value="Wali">Wali</option>
                        <option value="Asrama">Asrama</option>
                        <option value="Kost">Kost</option>
                        </select>
                    </div>
                  </div>
                  <input type="submit" name="simpan" class="form-control btn-primary" value="Simpan">                  
                </form>
              </div>
                </div>
              
      
</div>

