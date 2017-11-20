@include('inc.header')
<div class="container">
  <div class="row"> 
<form class="form-horizontal">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
      </div>
    </div>
 
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
   
  </fieldset>
</form>
</div>
</div>
@include('inc.footer')