@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="source/assets/bootstrap/css/navbar.css">
    <link rel="stylesheet" href="source/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" type="text/css" href="source/assets/bootstrap/css/style.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
     <style>
       .pagination{
         float: right;
       }
     </style>
</head>
<body>

    <div class="page">
        
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
  <ul class="menu_items">
    <li><a href="#"> GAMEPLAY</a></li>
    <li><a href="#">GRAPHICS</a></li>
    <li><a href="#">CONTENT</a></li>
  </ul>
  <main class="content" >
    <div class="content_inner" style="overflow: hidden;">
      <h1 style="text-align: center; margin-bottom: 100px; margin-top: 50px">GRAPHICS</h1>
            <div class="container">
                <div class="row" class="row align-items-center">
                    @foreach($games as $game)
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid5" class="p-5" data-aos="zoom-in-up" data-aos-duration="1000">
                            <div class="product-image5" style="width: 200px; height: 200px; background-color: #3e3e3e; background-image: none; background-repeat: no-repeat; background-position: center center; background-size: cover;">
                                <a href="#">
                                    <img src="source/img_game/{{$game->IMG}}">
                                </a>
                                <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Vote </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">{{$game->NAME_GAME}}</a></h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
                  {{ $games->links() }}
            </div>
    </div>
  </main>
</div>
    <script src="source/assets/js/jquery.min.js"></script>
    <script src="source/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="source/assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    // elements
var $page = $('.page');

$('.menu_toggle').on('click', function(){
  $page.toggleClass('shazam');
});
$('.content').on('click', function(){
  $page.removeClass('shazam');
});
    
</script>

</body>
</html>
@endsection