<?php get_header(); ?>
<?php 
if (have_posts()):
	while(have_posts()) : the_post(); ?>
	<article class="post">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p><?php the_content(); ?></p>
		<?php 
			$pathvar= $_GET["pppp"]; 
			if(empty($pathvar)){
				echo "XXXXXXXX";
			} else {
			echo $pathvar;
			}
			?>
			<p>aaaa</p>

	</article>
<?php endwhile;
	else :
		echo '<p> No post found </p>';
	endif;
get_footer();
?>
