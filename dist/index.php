<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
<!--	<base href="/">-->

	<title>OptimizedHTML 4</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
	<script src="js/scripts.min.js"></script>
	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

	<!-- Custom HTML -->
<div class="main  align-items-center">
	<div class="container-fluid">

		<div class="row">
			
			<div class="col-lg-4 col-md-4 offset-lg-2 offset-md-1 offset-sm-0 main__shadow">
				<div class="main__left">
					<div class="main__left-head">
						Бесплатная подписка на 30 дней
					</div>
					<div class="main__left-txt">
						<p>
						Слушай<br> любимую музыку весь месяц
						</p>
					</div>
					<a href="#" class="main__left-button">
						Подписаться
					</a>
				</div>
			</div>
			<div class="col-md-6 align-items-center main__slider">
						 <div class="swiper-container">
						 <div class="swiper-wrapper">
							<!-- Slides -->
							<?php 
							include ('array.txt');
							$i=1;
							foreach ($music as $v1) {
								echo '<div class="swiper-slide" style="background: url(img/slider/slide'.$i.'.png) no-repeat;"><div class="main__slider-block">';
								$j=0;
								foreach ($v1 as $v2) {
									 if($j==0)
									 {
										echo '<div class="main__slider-artist">';
									 }
									else{
										echo '<div class="main__slider-info">';
									}
										echo $v2.'</div>';
										$j++;
								}
								$i++;
								echo '</div></div>';
							}
							?>
						</div>					 
						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
			</div>
				
		</div>

	</div>
</div>
<script>
	var mySwiper = new Swiper ('.swiper-container', {
	  // Optional parameters
     navigation: {
        nextEl:'.swiper-button-next',
        prevEl:'.swiper-button-prev',
      },	  
	  slidesPerView: 3,
      spaceBetween: 30,
    breakpoints: {
    // when window width is <= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is <= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is <= 640px
    770: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    // when window width is <= 640px
    993: {
      slidesPerView: 2,
      spaceBetween: 10
    }
  }
	});
</script>
</body>
</html>
