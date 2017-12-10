<div id="testCarousel" class="carousel slide" data-ride="carousel">
	<!-- Индикаторы карусели -->
	<ol class="carousel-indicators">
		<!-- Перейти к слайду №0 с помощью соответствующего атрибута с индексом data-slide-to="0" -->
		<li data-target="#testCarousel" data-slide-to="0" class="active"></li>
		<!-- Перейти к слайду №1 с помощью соответствующего индекса data-slide-to="1" -->
		<li data-target="#testCarousel" data-slide-to="1"></li>
		<!-- Перейти к слайду №1 с помощью соответствующего индекса data-slide-to="2" -->
		<li data-target="#testCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Слайды карусели -->
	<div class="carousel-inner">
		<!-- Слайд 1 -->
		<div class="item active">
			<img src="img/carousel-bootstrap-slide1.jpg" alt="...">
			<div class="carousel-caption">
				Дополнительная информация слайда 1
			</div>
		</div>
		<!-- Слайд 2 -->
		<div class="item">
			<img src="img/carousel-bootstrap-slide2.jpg" alt="...">
			<div class="carousel-caption">
				Дополнительная информация слайда 2
			</div>
		</div>
		<!-- Слайд 3 -->
		<div class="item">
			<img src="img/carousel-bootstrap-slide3.jpg" alt="...">
			<div class="carousel-caption">
				Дополнительная информация слайда 3
			</div>
		</div>
	</div>

	<!-- Навигация карусели (следующий или предыдущий слайд) -->
	<!-- Кнопка, переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
	<a class="left carousel-control" href="#testCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<!-- Кнопка, переход на следующий слайд с помощью атрибута data-slide="next" -->
	<a class="right carousel-control" href="#testCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>