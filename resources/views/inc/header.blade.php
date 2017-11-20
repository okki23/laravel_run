<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Bootstrap Laravel Crud</title>
 
    <script src="{{ url('js/jquery.min.js') }}"></script>

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ url('css/main.css') }}" >
     
    <script src="{{ url('js/bootstrap.min.js') }}" ></script>

    <script type="text/javascript">
    $(document).ready(function(){
function readURL(input){
          if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
              $("#showgambar").attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#inputgambar").change(function(){
          readURL(this);
        });
    });
        
    </script>    
   </head>
  <body>
  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LARAVEL CRUD</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      
    <ul class="nav navbar-nav">
        <li class><a href="{{ url('agama/data') }}">Agama <span class="sr-only">(current)</span></a></li>
        <li class><a href="{{ url('masterpasien/data') }}">Master Pasien <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Welcome, User!</a></li>
      </ul>
    </div>
  </div>
</nav>
