@include('inc.header')
<div class="container">
  <div class="row"> 
<form class="form-horizontal" action="{{ url('masterpasien/save') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <fieldset>
    <legend>Form Add Pasien</legend>
     

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nomor Medical Record</label>
      <div class="col-lg-10">
        <input class="form-control" id="no_mr" name="no_mr" type="text">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nama Pasien</label>
      <div class="col-lg-10">
        <input class="form-control" id="nm_pasien" name="nm_pasien" type="text">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tanggal Lahir</label>
      <div class="col-lg-10">
        <input class="form-control" id="tgl_lahir" name="tgl_lahir" type="text" placeholder="dd/mm/yy">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Jenis Kelamin</label>
      <div class="col-lg-10">
        <input type="radio" name="j_kelamin" id="j_kelamin" value="L" > Laki-Laki <br>
        <input type="radio" name="j_kelamin" id="j_kelamin" value="P" > Perempuan <br>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tempat Lahir</label>
      <div class="col-lg-10">
        <input class="form-control" id="t_lahir" name="t_lahir" type="text"  >
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Alamat</label>
      <div class="col-lg-10">
        <input class="form-control" id="alamat" name="alamat" type="text"  >
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Agama</label>
      <div class="col-lg-10">
        <select name="agamaid"  class="form-control" id="select">
        <?php
          foreach($listing_agama as $val){
            echo "<option value= ".$val->agamaid.">  ".$val->agamaname." </option>";
          }
         ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Foto Pasien</label>
      <div class="col-lg-10">
         <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
         <br>
         <input id="inputgambar" name="fotopasien" class="form-control" type="file"  >
      </div>
    </div>


  
    <button type="submit" name="save" class="btn btn-primary"> Save </button>
    <a href="{{ url('masterpasien/data') }}" class="btn btn-danger"> Back </a>
  </fieldset>
</form>
</div>
</div>
 