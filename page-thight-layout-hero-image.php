<?php
/*Template Name: Thight layout with hero image */

get_header();?>

<section id="hero-image">
	<!--hero image--> 
	<?php 
		if( has_post_thumbnail() ):
			echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-featured' ) );
		endif;?>
</section>

<div class="wrapper tight-layout hero-image-layout">
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