@include('inc.header')
<div class="container">
  <div class="row"> 
 
<form class="form-horizontal" action="{{ url('agama/save_edit') }}" method="POST">
  {{ csrf_field() }}
  <fieldset>
    <legend>Form Update Agama</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Agama ID</label>
      <div class="col-lg-10">
        <input class="form-control" readonly="readonly" id="agamaid" name="agamaid" value="<?php echo $list_agama[0]->agamaid; ?>" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Agama Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="agamaname" name="agamaname" value="<?php echo $list_agama[0]->agamaname; ?>" type="text">
      </div>
    </div>
 
  
    <button type="submit" name="save" class="btn btn-primary"> Save </button>
    <a href="{{ url('agama/data') }}" class="btn btn-danger"> Back </a>
  </fieldset>
</form>
</div>
</div>
@include('inc.footer')