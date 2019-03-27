<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Api Documention</title>
  <link href="{{ url('api/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('api/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <link href="{{ url('api/css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  @include('api/docs/navigation')

  <div class="content-wrapper">
    <div class="container-fluid">
        
          @include('api/sections/export')
          @include('api/sections/import')

    </div>

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center"></div>
      </div>
    </footer>
    

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>

    <script src="{{ url('api/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('api/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('api/js/sb-admin.min.js') }}"></script>
    <script src="{{ url('api/js/smooth.js') }}"></script>
    <script>
      $(function(){
          $(".hasLi").click(function(){
             $(".hasLi").removeClass('active');
             $(this).addClass('active');
          });
      });
    </script>
</body>
</html>
