@include('inc.header')
<div class="container">
  <div class="row"> 
  <a href="{{ url('/agama/add' )}}" class="btn btn-primary"> + Add </a>
  <br>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID Agama</th>
      <th>Agama Name</th>
      
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @if(count($list_agama) > 0)
  @foreach($list_agama->all() as $list_agamax)

    <tr>
      <td>{{ $list_agamax->agamaid }}</td>
      <td>{{ $list_agamax->agamaname }}</td>
     
      <td>
        
        
        <a href='{{ url("agama/edit/{$list_agamax->agamaid}") }}' class="label label-warning"> Update </a> &nbsp; |  &nbsp;
        <a href='{{ url("agama/delete/{$list_agamax->agamaid}") }}' class="label label-danger"> Delete </a> 
     
      </td>
    </tr>
    @endforeach
  @endif
  </tbody>
</table> 
</div>
</div>
@include('inc.footer')