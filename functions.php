<?php
/**
 * Page name allocation function
 *
 * @return string
 */
function get_page_name() {
	if ( ! empty( $_GET['p'] ) ) {
		$page = $_GET['p'];
	} else {
		$page = 'main_page';
	}

	return $page;

}

/**
 * Function checks if a file exists
 */

function file_presence( $filename ) {
	if ( file_exists( $filename ) ) {
		include $filename;
	} else {
		include '404.php';
	}
}

/**
 *
 * Function of connecting a specific page
 *
 */

function get_page() {

	$page = get_page_name();
	switch ( $page ) {
		case 'main_page':
			file_presence( 'main_page.php' );
			break;
		case 'about_me':
			file_presence( 'about_me.php' );
			break;
		case 'gallery':
			file_presence( 'gallery.php' );
			break;
		case 'blog':
			file_presence( 'blog.php' );
			break;
		case 'contacts':
			file_presence( 'contacts.php' );
			break;
	}
}

/**
 * Upload images function
 *
 */
function upload_img() {
	$dir_img = './images/images-gallery';
	$image   = scandir( $dir_img );
	foreach ( $image as $index => $img ) {
		if ( $img == '.' || $img == '..'  ) {
			unset ( $image [ $index ] );
		}
	}

	$image = array_values( $image );
	$image_pattern = '<div class="col-md-4 col-sm-6 col-xs-12"><div class="img-block"  style="background-image: url('.$dir_img.'/%image%); ">' . '</div></div>';

	$image_html = [];
	foreach ( $image as $img ) {
		$image_html[] = str_replace( '%image%', $img, $image_pattern );
	}

	$image_html = implode( $image_html );
	echo $image_html;
}