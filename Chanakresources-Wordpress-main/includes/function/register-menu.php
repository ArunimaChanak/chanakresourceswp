<?php 

	if ( ! file_exists( get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php' ) ) {
		return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} else {
		require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';
	}



	function register_my_menus() {
		register_nav_menus(
			array('paimary' => __( 'Header Menu' ))
		);
	}
	
	add_action( 'init', 'register_my_menus' );

?>