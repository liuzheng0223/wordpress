<?php 
function learningWordpress_resources(){

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/bootstrap/css/bootstrap.css');

}
add_action('wp_enqueue_scripts','learningWordpress_resources');

//Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'footer'  => __('Footer Menu'),
	));


?>
