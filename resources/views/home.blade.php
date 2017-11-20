@include('inc.header')
<div class="container">
  <div class="row"> 
  <a href="{{ url('/add' )}}" class="btn btn-primary"> + Add </a>
  <br>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @if(count($articles) > 0)
  @foreach($articles->all() as $article)
  @endforeach
  @endif
    <tr>
      <td>{{ $article->id }}</td>
      <td>{{ $article->title }}</td>
      <td>{{ $article->description }}</td>
      <td>
        
        <a href="{{ url('') }}" class="label label-primary"> Read </a> &nbsp; |  &nbsp;
        <a href="{{ url('') }}" class="label label-warning"> Update </a> &nbsp; |  &nbsp;
        <a href="{{ url('') }}" class="label label-danger"> Delete </a> 
     
      </td>
    </tr>
  </tbody>
</table> 
</div>
</div>
@include('inc.footer')