<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="path/to/pe-icon-7-stroke/css/helper.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/guru/dashboard.css">
    <title>Youth Manual Virtual School</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-dark sticky-top  navbar navbar-default flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0"><img src="{{ asset('/img/youthmanual-logo-3.png') }}"></a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Keluar</a>
        </li>
      </ul>
    </nav>

    <!-- SIDEBAR -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
          <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="home"></span>
                  Beranda
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/guru/mapel">
                  <span data-feather="book"></span>
                  Mata Pelajaran
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="book-open"></span>
                  Manajemen Materi
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Pengajar</h1>
            </div>

            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Biodata Guru
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                          <table>
<<<<<<< HEAD
                          @foreach ($guru as $g)
                            <tr>
                              <td>Nama : </td>
                              <td>{{ $g->name }}</td>
                            </tr>
                            <tr>
                              <td>Email : </td>
                              <td>{{ $g->email }}</td>
                            </tr>
                          @endforeach
                          </table>
=======
                          @if( Auth::check() )
                              <tr>
                                  <td>Nama Lengkap</td>
                                  <td>Current user: {{ Auth::user()->name }}</td>
                              </td>
                              <tr>
                                  <td>Email</td>
                                  <td>Current user: {{ Auth::user()->email }}</td>
                              </tr>
                      @endif
                          </table>
                          
>>>>>>> f0e840361cf1f75f951e9a13d806b0d562222b2e
                        </div>
                        <div class="col-sm-3"></div>
                      </div>
                    </div>
                </div>
            </div>

    <!-- JAVASCRIPTS -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    
    </body>
</html>
