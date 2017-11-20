@include('inc.header')
<div class="container">
  <div class="row"> 
<form class="form-horizontal" action="{{ url('masterpasien/save_edit') }}" method="POST">
  {{ csrf_field() }}
  <fieldset>
    <legend>Form Update Pasien</legend>
     

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nomor Medical Record</label>
      <div class="col-lg-10">
        <input class="form-control" id="no_mr" readonly="readonly" name="no_mr" type="text"  value="<?php echo $list_masterpasien[0]->no_mr; ?>" >
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nama Pasien</label>
      <div class="col-lg-10">
        <input class="form-control" id="nm_pasien" name="nm_pasien" type="text"  value="<?php echo $list_masterpasien[0]->nm_pasien; ?>"> 
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tanggal Lahir</label>
      <div class="col-lg-10">
        <input class="form-control" id="tgl_lahir" name="tgl_lahir" type="text"  value="<?php echo date('d/m/Y', strtotime($list_masterpasien[0]->tgl_lahir)); ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Jenis Kelamin</label>
      <div class="col-lg-10">
        <input type="radio" name="j_kelamin" id="j_kelamin" value="L" <?php if($list_masterpasien[0]->j_kelamin == 'L') { echo "checked"; } ?> > Laki-Laki <br>
        <input type="radio" name="j_kelamin" id="j_kelamin" value="P" <?php if($list_masterpasien[0]->j_kelamin == 'P') { echo "checked"; } ?> > Perempuan <br>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tempat Lahir</label>
      <div class="col-lg-10">
        <input class="form-control" id="t_lahir" name="t_lahir" type="text" value="<?php echo $list_masterpasien[0]->t_lahir; ?>"  >
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Alamat</label>
      <div class="col-lg-10">
        <input class="form-control" id="alamat" name="alamat" type="text" value="<?php echo $list_masterpasien[0]->alamat; ?>"  >
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Agama <?php echo $list_masterpasien[0]->agamaid; ?></label>
      <div class="col-lg-10">
        <select name="agamaid"  class="form-control" id="select">
        <?php
          foreach($listing_agama as $val){
            if($val->agamaid == $list_masterpasien[0]->agamaid){
              echo "<option value= ".$val->agamaid." selected='selected'>  ".$val->agamaname." </option>";
            }else{
              echo "<option value= ".$val->agamaid.">  ".$val->agamaname." </option>";
            }
           
          }
         ?>
        </select>
      </div>
    </div>


  
    <button type="submit" name="save" class="btn btn-primary"> Save </button>
    <a href="{{ url('masterpasien/data') }}" class="btn btn-danger"> Back </a>
  </fieldset>
</form>
</div>
</div>
@include('inc.footer')