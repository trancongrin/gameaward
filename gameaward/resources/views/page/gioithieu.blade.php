@extends('master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="source/assets/bootstrap/css/introduce.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Introduce</title>
    <link rel="stylesheet" href="source/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
</head>
<body>
	<div class="container">
		<div class="column active">
			<div class="content">
				<h1>1</h1>
				<div class="box">
					<h2 style="font-family: Lato, sans-serif;">WELCOME!!....</h2>
					<p>
						“The Game Awards” được tổ chức với mục đích tôn vinh nỗ lực của các nhà phát hành trò chơi điện tử trên thị trường game online cũng như offline trong năm, phản ánh bức tranh toàn cảnh về thế giới game, cũng như thị hiếu đông đảo các game thủ. Giải thưởng được quyết định dựa trên bình chọn từ cộng đồng trực tuyến....
					</p>
				</div>
			</div>
			<div class="bg bg1"></div>
		</div>
		<div class="column">
			<div class="content">
				<h1>2</h1>
				<div class="box">
					<h2>QUÁ TRÌNH...</h2>
					<p>
						Giải thưởng Game có một ủy ban tư vấn bao gồm đại diện của các nhà sản xuất phần cứng Microsoft, Sony, Nintendo và AMD, và các nhà xuất bản phần mềm Electronic Arts,Activision,Rockstar Games,Ubisoft, Valve vàWarner Bros. Entertainment Entertainment.Ủy ban này chọn khoảng ba mươi tổ chức tin tức trò chơi video có ảnh hưởng sẽ có thể đề cử và sau đó bỏ phiếu cho các trò chơi video trong một số hạng mục.
					</p>
				</div>
			</div>
			<div class="bg bg2"></div>
		</div>
		<div class="column">
			<div class="content">
				<h1>3</h1>
				<div class="box">
					<a class="btn btn-primary btn-xl rounded-pill mt-5" role="button" data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="750" href="binh-chon" style="font-family: Acme, sans-serif;background-color: rgb(33,37,41); border-color: #8c8c8c;">BÌNH CHỌN</a>
					<a class="btn btn-primary btn-xl rounded-pill mt-5" role="button" data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="750" href="trang-chu" style="font-family: Acme, sans-serif;background-color: rgb(33,37,41); border-color: #8c8c8c;">TRANG CHỦ</a>
					
				</div>
			</div>
			<div class="bg bg3"></div>
		</div>
	</div>
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script type="text/javascript">
		$(document).on('mouseover', '.container .column', function(){
			$(this).addClass('active').siblings().removeClass('active')
		})
	</script>
	<script src="source/assets/js/jquery.min.js"></script>
            <script src="source/assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="source/assets/js/bs-animation.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>
</html>
@endsection