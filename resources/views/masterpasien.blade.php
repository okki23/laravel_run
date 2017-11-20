@include('inc.header')
<div class="container">
  <div class="row"> 
  <a href="{{ url('/masterpasien/add' )}}" class="btn btn-primary"> + Add </a>
  <br>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Nomor Medical</th>
      <th>Nama Pasien</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Tempat Lahir</th>
      <th>Alamat</th>
      <th>Agama</th>
      <th>Foto</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @if(count($list_pasien) > 0)
  @foreach($list_pasien->all() as $list_pasienx)
    <tr>
      <td>{{ $list_pasienx->no_mr }}</td>
      <td>{{ $list_pasienx->nm_pasien }}</td>
      <td>{{ $list_pasienx->tgl_lahir }}</td>
      <td>{{ $list_pasienx->jenis_kelamin }}</td>
      <td>{{ $list_pasienx->t_lahir }}</td>
      <td>{{ $list_pasienx->alamat }}</td>
      <td>{{ $list_pasienx->agamaname }}</td>
      <td> <div style="width: 50px; height: 50px;"> {{ HTML::image($list_pasienx->fotopasien,'alt', array( 'width' => '100%', 'height' => '100%' )) }} </div> </td>
      <td>
        
 
      <a href='{{ url("masterpasien/edit/{$list_pasienx->no_mr}") }}' class="label label-warning"> Update </a> &nbsp; |  &nbsp;
      <a href='{{ url("masterpasien/delete/{$list_pasienx->no_mr}") }}' class="label label-danger"> Delete </a> 
   
     
      </td>
    </tr>
    @endforeach
  @endif
  </tbody>
</table> 
</div>
</div>
@include('inc.footer')