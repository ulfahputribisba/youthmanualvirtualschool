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
                @foreach ($mapels as $m)
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $m->judul_mapel }}</h3>
                            <p class="card-text">Materi Belajar : {{ $m->materi }}</p>
                            <p class="card-text">Deskripsi : {{ $m->deskripsi_mapel }}</p>
                            <p class="card-text">Durasi Belajar : {{ $m->durasi }}</p>
                        </div>
                        <div class="card-footer">
                            <?php
                                if(is_null()){
                            ?>
                            <a href="{{ route('mapel'), $mapels->id }}" class="btn btn-succes">Ikuti Pelajaran</a>
                            <?php    }
                                else{ ?>
                                <a href="" class="btn btn-default">Following</a>
                                <?php }?>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section>
            <div class="card">
                <div class="card-header">
                    Komentar
                </div>
                @include('commentsDisplay', ['comments' => $mapels->comments, 'mapel_id' => $mapels->id])
                <div class="card-body">
                    <form method="post" action="{{ route('comments.store') }}">
                    @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
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