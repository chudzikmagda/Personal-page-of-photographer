<?php
/*Template Name: Wide layout */

get_header();?>

<div class="wrapper">

	<?php while (have_posts() ) : the_post(); ?>
	<!--post title-->
	<?php the_title( $before = '<h1>', $after = '</h1>', $echo = true ) ?>

	<!--post content-->
	<?php the_content(); ?>		
		
	<!--comments-->
	<div class="comments">
		<?php endwhile;?>
	</div>
</div>

<?php get_footer();?>