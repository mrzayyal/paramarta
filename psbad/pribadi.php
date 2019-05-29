
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
                    <strong>Warning!</strong> Tanggal Tidak Valid</div>"; 
                  }elseif($err=="2"){
                    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
                    <strong>Warning!</strong> Masih Ada Data Yang Belum Terisi</div>"; 
                  }elseif($err=="3"){
                    echo "<div class='alert alert-success alert-dismissible' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
                    <strong>Success</strong> Data Berhasil Tersimpan</div>"; 
                  }else{
                    echo"";
                  }
              ?>
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pribadi</h6>
                </div>
                <div class="p-5">
                <form class="user" method="post" action="?psbad=simpanpribadi">
                 Pilih Program Keahlian
                  <div class="form-group row">
                      <div class="col-sm-3 mb-1 mb-sm-0">
                      <select name="idProgram" class="form-control idProgram" id="idProgram">
                        <option value="0" selected="selected">Pilih Program Keahlian</option>
                        <?php
                        $program=mysql_query("SELECT * FROM t_program");
                        while($p1=mysql_fetch_array($program)){
                          echo"
                          <option value='$p1[id]'>$p1[nm_program]</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                      Nama Lengkap<br/>
                      <input type="text" class="form-control namaMurid" id="namaMurid" name="namaMurid" placeholder="Nama Lengkap" >
                  </div>
                  Jenis Kelamin
                  <div class="form-group row">
                      <div class="col-sm-3 mb-1 mb-sm-0">
                      <select name="jekel" class="form-control jekel" id="jenisKelamin" placeholder="Jenis Kelamin">
                        <option value="-" selected="selected">Pilih Jenis Kelamin</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                  <div class="col-sm-3 mb-1 mb-sm-0">
                    Tempat Lahir<br>
                    <input type="text" class="form-control tempatlahir" name="tempatLahir" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-2">
                    Tanggal Lahir<br>
                    <input placeholder="Masukan Tanggal Lahir" type="date" class="form-control datepicker" name="tglLahir">
                  </div>
                  </div>
                  Agama
                  <div class="form-group row">
                      <div class="col-sm-3 mb-1 mb-sm-0">
                      <select name="agama" class="form-control agama" id="agama" placeholder="Pilih Agama">
                        <option value="0" selected="selected">Pilih Agama</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Katolik</option>
                        <option value="4">Hindu</option>
                        <option value="5">Budha</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        Berkebutuhan Khusus
                      <input type="text" name="kebutuhan" class="form-control kebutuhan" id="kebutuhanKhusus" value="-" >
                    </div>
                    <div class="col-sm-6"><br/>
                      <font color="red">*Dilewati Jika Tidak Ada</font>
                    </div>
                  </div>
                  <div class="form-group">
                      Email<br/>
                      <input type="text" name="email" class="form-control email" id="email" value=<?php echo"$_SESSION[email]"; ?> readonly>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      Nomor Handphone<br/>
                      <input type="number" name="noHP" class="form-control notlp" id="noHP" min="0" data-bind="value:noHP" pattern="[0-9] {1,15}" title="Mohon Masukan Angka">
                    </div>
                    <div class="col-sm-6">
                      Nomor Telepon Rumah<br/>
                    <input type="number" name="rumahTelp" class="form-control notlp" id="rumahTelp" min="0" data-bind="value:rumahTelp" pattern="[0-9] {1,15}" title="Mohon Masukan Angka">
                    </div>
                  </div>
                  <div class="form-group">
                      No KPS (Kartu Perlindungan Sosial) <font color="red">*Dilewati Jika Tidak Punya</font><br/>
                      <input type="number" name="noKPS" class="form-control noKPS" id="noKPS" min="0" data-bind="value:noKPS" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" value="0">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2 mb-3 mb-sm-0">
                      Tinggi Badan *cm<br/>
                      <input type="number" name="noTinggi" class="form-control noTinggi" id="noTinggi" min="0" data-bind="value:noTinggi" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" value="0">
                    </div>
                    
                    <div class="col-sm-2">
                    Berat Badan *kg<br/>
                    <input type="number" name="noBerat" class="form-control noBerat" id="noBerat" min="0" data-bind="value:noBerat" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" value="0">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      Jarak Ke Sekolah *km<br/>
                      <input type="number" name="jarakSekolah" class="form-control jarakSekolah" id="jarakSekolah" min="0" data-bind="value:jarakSekolah" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" value="0">
                    </div>
                    
                    <div class="col-sm-4">
                    Waktu Tempuh Ke Sekolah *menit<br/>
                    <input type="number" name="waktuSekolah" class="form-control waktuSekolah" id="waktuSekolah" min="0" data-bind="value:waktuSekolah" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" value="0">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2 mb-3 mb-sm-0">
                      Saudara kandung<br/>
                      <input type="number" name="saudara" class="form-control saudara" id="saudara" min="0" data-bind="value:saudara" pattern="[0-9] {1,15}" title="Mohon Masukan Angka" value="0">
                    </div>
                  </div>
                  <input type="submit" name="simpan" class="form-control btn-primary" value="Simpan">                  
                </form>
              </div>
                </div>
              
      
</div>


