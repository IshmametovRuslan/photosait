$( document ).ready( function () {
	var slide_width = $( '.slider__container' ).width();
	$( '.slide' ).width( slide_width );
	console.log( slide_width );

	var slider_index     = 0;
	var img              = $( '.slide' );
	var slider_container = $( '.slider__container' );
	var slider_count     = img.length;
	console.log( slider_count );

	function slideshow( new_slider_index ) {

		if ( new_slider_index < 0 || new_slider_index > (slider_count - 1) ) {
			return;
		}
		slider_index = new_slider_index;
		$( '.slider__box' ).animate( {
			"margin-left" : -slide_width * slider_index
		}, 500 );
	}
	$('.next__button').on('click', function ( ) {
		slideshow(slider_index + 1);
	})
	$('.prev__button').on('click', function ( ) {
		slideshow(slider_index - 1);
	})
} )
