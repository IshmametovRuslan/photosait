$( document ).ready( function () {
	var slide_width = $( '.slider__container' ).width();
	$( '.slide' ).width( slide_width );
	var slider_index = 0;
	var img          = $( '.slide' );
	var slider_count = img.length;

	function slideshow( new_slider_index ) {
		console.log( new_slider_index );
		if ( new_slider_index < 0 || new_slider_index > (slider_count - 1) ) {
			return;
		}
		slider_index = new_slider_index;
		$( '.slider__box' ).animate( {
			"margin-left" : -slide_width * slider_index
		}, 500 );
	}

	$( '.next__button' ).on( 'click', function () {
		slideshow( slider_index + 1 );
	} )
	$( '.prev__button' ).on( 'click', function () {
		slideshow( slider_index - 1 );
	} )

	var navBtnId = 0;

	$('.slide-nav-btn').click(function() {
		navBtnId = $(this).index();

		if (navBtnId + 1 != slideNow) {
			translateWidth = -$('.slider__container').width() * (navBtnId);
			$('.slider__box').css({
				'transform': 'translate(' + translateWidth + 'px, 0)',
				'-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
				'-ms-transform': 'translate(' + translateWidth + 'px, 0)',
			});
			slideNow = navBtnId + 1;
		}
	});
	$(function(){
		/*--------- show and hide the menu  ---*/
		$('.button').on("click", function(){
			if($('body').hasClass('nav_is_visible') == true){
				$('body').removeClass('nav_is_visible');
				$('.button').removeClass('close');
			}
			else{
				$('body').addClass('nav_is_visible');
				$('.button').addClass('close');
			}
		});

		$('body').addClass('home_is_visible');


		function removeClasses() {
			$(".menu ul li").each(function() {
				var custom_class = $(this).find('a').data('class');
				$('body').removeClass(custom_class);
			});
		}

		$('.menu a').on('click',function(e){
			e.preventDefault();
			removeClasses();
			var custom_class = $(this).data('class');
			$('body').addClass(custom_class);
		});
	});
} )
