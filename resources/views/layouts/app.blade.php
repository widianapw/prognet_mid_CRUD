<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('tittle')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('fa/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <style type="text/css">
      body{
        background-color: white;
      }
      body{
        font: bold 14px/30px Georgia, serif;
      }
    </style>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href=" {{asset('ti.png')}}">

</head>
<body>
<div class="container" style="border: 1px;">
  
  <br>

  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link"  href="\home" style="color: black;"><h3><i class="fa fa-home"></i> Home</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="\mahasiswa" style="color: black;"><h3><i class="fa fa-user"></i> Data Diri</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="\prodi" style="color: black;"><h3><i class="fa fa-list"></i> Program Studi</h3></a>
    </li>
  </ul>
  <div class="jumbotron">
        <div class="container">
            <a href="https://it.unud.ac.id/" target="_blank"><img src="https://3.bp.blogspot.com/-IUyIJZ9hT_Y/WLtq_FlHT4I/AAAAAAAAF8o/EWrqnNUTWBQ_H2Jxv9MRv-zPVLv1r26mgCLcB/s1600/logo-teknologi-informasi-universitas-udayana-ti-unud-jhonarendra.png" height="80" width="80"></a><h1>Praktikum Pemrograman Internet</h1>
        </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        @yield('content')
      </div>
      
    </div>
  </div>
  

  <footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
    

    <strong>Copyright &copy; <?php echo date("Y") ?> I Made Widiana Putra Winarta </strong>
    
  </footer>
</div>
</body>
    
</html>