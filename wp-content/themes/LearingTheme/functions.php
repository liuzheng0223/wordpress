<?php 
function add_stylesheet() {
wp_register_style('bootstrap.min',get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

//Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'footer'  => __('Footer Menu'),
	));



?>
