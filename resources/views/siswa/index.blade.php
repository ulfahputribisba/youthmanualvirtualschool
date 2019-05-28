<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/siswa/style.css">
    <title>Youth Manual Virtual School</title>
  </head>
  <body>
  <!-- NAVBAR -->
    <div class="navcontainer">
        <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark bg-dark">
            <a class="logo" href="/siswa"><img src="{{ asset('/img/youthmanual-logo-3.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Keluar</a>
            </div>
            </div>
        </nav>
        <div class="titlecontainer">
        <h1 class="display-3 mb-1">YOUTH MANUAL VIRTUAL SCHOOL</h1>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <section class="allList">
            <div class="container">
                <h2>Semua Pelajaran</h2>
                <?php
                    $numOfCols = 3;
                    $rowCount = 0;
                ?>
                <div class="card-deck">
                    @foreach ($mapel as $m)
                        <div class="card">
                            <img src="" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $m->nama_pelajaran }}</h5>
                                <p class="card-text">Durasi Belajar : {{ $m->durasi_pelajaran }}</p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="text-right btn btn-success follow" href="">Ikuti Pelajaran</a>
                            </div>
                        </div>
                        <?php
                            $rowCount++;
                            if($rowCount % $numOfCols == 0){
                                echo '</div><br><div class="card-deck">';
                            }
                        ?>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="following">
        <!-- <div class="container">
                <h2>Pelajaran yang Diikuti</h2>
                <?php
                    $numOfCols = 3;
                    $rowCount = 0;
                ?>
                <div class="card-deck">
                    @foreach ($mapel as $m)
                        <div class="card">
                            <img src="" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $m->nama_pelajaran }}</h5>
                                <p class="card-text">Durasi Belajar : {{ $m->durasi_pelajaran }}</p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="text-right btn btn-success follow" href="">Ikuti Pelajaran</a>
                            </div>
                        </div>
                        <?php
                            $rowCount++;
                            if($rowCount % $numOfCols == 0){
                                echo '</div><br><div class="card-deck">';
                            }
                        ?>
                    @endforeach
                </div>
            </div> -->
        </section>
    </div>

    <!-- JAVASCRIPTS -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- Navbar changing color on scroll -->
    <script>
      $(window).scroll(function(){
       $('nav').toggleClass('scrolled', $(this).scrollTop() > 30);
      });

      $(".follow").click(function(){
		$(this).text(function(i, v){
		   return v === 'Pelajaran Diikuti' ? 'Ikuti Pelajaran' : 'Pelajaran Diikuti'
		});
        if($(this).hasClass("btn-success"))
        {
                $(this).addClass("btn-info");
                $(this).removeClass("btn-success");
        }
        else{
                $(this).addClass("btn-success");
                $(this).removeClass("btn-info");
        }
        });
    </script>
  </body>
</html>