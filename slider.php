<!-- Карусель -->
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
	<!-- Индикаторы для карусели -->
	<ol class="carousel-indicators">
		<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<!-- Слайды карусели -->
	<div class="carousel-inner">
		<!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
		<div class="active item">
			<img src="images/slider-images/slide_1.jpg" >
		</div>
		<!-- Слайд №2 -->
		<div class="item">
			<img src="images/slider-images/slide_2.jpg">
		</div>
		<!-- Слайд №3 -->
		<div class="item">
			<img src="images/slider-images/slide_3.jpeg">
		</div>

		<!-- сюда добавляем еще код слайдера-->

	</div>
	<!-- Навигация для карусели -->
	<!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
	<a class="carousel-control left" href="#myCarousel" data-slide="prev">

	</a>
	<!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
	<a class="carousel-control right" href="#myCarousel" data-slide="next">

	</a>
</div>