<?php
/*Template Name: Prints */

get_header();?>

<div class="wrapper">
	<?php while (have_posts() ) : the_post(); ?>
		<!--post title-->
		<?php the_title( $before = '<h1 class="prints">', $after = '</h1>', $echo = true ) ?>

	<!--post content-->
	<?php the_content(); ?>		
			
	<!--comments-->
	<div class="comments">
							
	<?php endwhile;?>
</div>

<?php get_footer();?>