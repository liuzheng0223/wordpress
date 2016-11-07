<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
<meta charset="<?php  bloginfo('charset');?>">
<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<!-- Site-header -->
		<header class="site-header">
			<h1><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5>	
			<nav class="site-nav">
			<?php 
			$args = array(
					'theme_location' => 'primary',
					'title_li' => '',
				);
			 ?>
			 <ul class='nav nav-pills' role='tablist'>
			 	<?php wp_list_pages($args); ?>
			 </ul>
				
			</nav>
		</header> <!-- /site-header -->