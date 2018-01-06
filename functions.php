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