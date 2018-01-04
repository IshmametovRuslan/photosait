var slideNow       = 1;
var slideCount     = $( '#slidewrapper' ).children().length;
var translateWidth = 0;
var slideInterval  = 7000;
var navBtnId       = 0;

function nextSlide() {
	if ( slideNow == slideCount || slideNow <= 0 || slideNow > slideCount ) {
		$( '#slidewrapper' ).css( 'transform', 'translate(0, 0)' );
		slideNow = 1;
	} else {
		translateWidth = -$( '#viewport' ).width() * (slideNow);
		$( '#slidewrapper' ).css( {
			'transform' : 'translate' + translateWidth + 'px, 0)',
			'-webkit-transform' : 'translate(' + translateWidth + 'px, 0)',
			'-ms-transform' : 'translate(' + translateWidth + 'px, 0)',
		} );
		slideNow++;
	}
}

function prevSlide() {
	if ( slideNow == 1 || slideNow <= 0 || slideNow > slideCount ) {
		translateWidth = -$( '#viewport' ).width() * (slideCount - 1);
		$( '#slidewrapper' ).css( {
			'transform' : 'translate(' + translateWidth + 'px, 0)',
			'-webkit-transform' : 'translate(' + translateWidth + 'px, 0)',
			'-ms-transform' : 'translate(' + translateWidth + 'px, 0)',
		} );
		slideNow = slideCount;
	} else {
		translateWidth = -$( '#viewport' ).width() * (slideNow - 2);
		$( '#slidewrapper' ).css( {
			'transform' : 'translate(' + translateWidth + 'px, 0)',
			'-webkit-transform' : 'translate(' + translateWidth + 'px, 0)',
			'-ms-transform' : 'translate(' + translateWidth + 'px, 0)',
		} );
		slideNow--;
	}
}

$( '.slide-nav-btn' ).click( function () {
	navBtnId = $( this ).index();
	if ( navBtnId + 1 != slideNow ) {
		translateWidth = -$( '#viewport' ).width() * (navBtnId);
		$( '#slidewrapper' ).css( {
			'transform' : 'translate(' + translateWidth + 'px, 0)',
			'-webkit-transform' : 'translate(' + translateWidth + 'px, 0)',
			'-ms-transform' : 'translate(' + translateWidth + 'px, 0)',
		} );
		slideNow = navBtnId + 1;
	}
} );
$( document ).ready( function () {
	var switchInterval = setInterval( nextSlide, slideInterval );

	$( '.slide-img, #next-btn, #prev-btn, .slide-nav-btn' ).hover( function () {
		clearInterval( switchInterval );
	}, function () {
		switchInterval = setInterval( nextSlide, slideInterval );
	} );

	$( '#next-btn' ).click( function () {
		nextSlide();
	} );

	$( '#prev-btn' ).click( function () {
		prevSlide();
	} );

	//Меню


	$( '.js-nav-menu-toggle' ).on( 'click', function () {
		$( this ).parents( '.navigation-menu' ).toggleClass( 'navigation-menu--open' );
	} );

	$( 'html' ).on( 'click', function ( e ) {
		if ( !$( e.target ).closest( '.js-nav-menu' ).length &&
			($( '.js-nav-menu' ).hasClass( 'navigation-menu--open' )) ) {
			$( '.js-nav-menu' ).removeClass( 'navigation-menu--open' );
		}
	} );
} );