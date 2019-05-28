<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Youth Manual Virtual School</title>
  </head>
  <body>
  <!-- NAVBAR -->
  <div class="navcontainer">
    <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark bg-dark">
        <a class="logo" href="{{ url('/') }}"><img src="{{ asset('/img/youthmanual-logo-3.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/">Beranda</a>
            @if (Route::has('login'))
                    @auth
                        <a class="nav-item nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-item nav-link" href="/" data-toggle="modal" data-target="#masukModal">Masuk</a>
                        @if (Route::has('register'))
                          <a class="nav-item nav-link" href="/" data-toggle="modal" data-target="#daftarModal">Daftar</a>
                        @endif
                    @endauth
            @endif
        </div>
        </div>
    </nav>
    <div class="titlecontainer">
      <h1 class="display-3 mb-1">YOUTH MANUAL VIRTUAL SCHOOL</h1>
    </div>
    </div>

    <!-- SIGN IN MODAL -->
    <div class="modal fade" id="masukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <a type="button" class="btn btn-danger" href="{{ route('guru-login') }}">Masuk sebagai Pengajar</a>
            <a type="button" class="btn btn-info" href="{{ route('siswa-login') }}">Masuk Sebagai Siswa</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Daftar MODAL -->
    <div class="modal fade" id="daftarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Daftar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <a type="button" class="btn btn-danger" href="{{ route('guru.register') }}">Daftar sebagai Pengajar</a>
            <a type="button" class="btn btn-info" href="{{ route('siswa.register') }}">Daftar Sebagai Siswa</a>
          </div>
        </div>
      </div>
    </div>

    <!-- JAVASCRIPTS -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- Navbar changing color on scroll -->
    <script>
      $(window).scroll(function(){
       $('nav').toggleClass('scrolled', $(this).scrollTop() > 30);
      });

      $('#masukModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      });

      $('#daftarModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      });
    </script>
  </body>
</html>