<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="source/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" type="text/css" href="source/assets/bootstrap/css/topmenu.css">
</head>

<body>
  <div class='menu'>
    <span class='toggle'>
      <i></i>
      <i></i>
      <i></i>
    </span>
    <div class='menuContent'>
      <ul>
        <li><a href="trang-chu">TRANG CHỦ</a></li>
        <li><a href="gioi-thieu">GIỚI THIỆU</a></li>
        <li><a href="binh-chon">BÌNH CHỌN</a></li>
        <li><a href="xep-hang">XẾP HẠNG</a></li>
        <li><a href="dang-nhap">ĐĂNG NHẬP</a></li>
      </ul>
    </div>
  </div>
@yield('content') 
  <script src="source/assets/js/jquery.min.js"></script>
  <script src="source/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="source/assets/js/bs-animation.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script>
    $('.toggle').on('click', function() {
      $('.menu').toggleClass('active');
    });
    
  </script>
  </body>

</html>
