<?php
/*
Template Name: Blog
 */

get_header(''); ?>

<div class="wrapper">	
	<article>
		<section class="image-hero">
			<!--hero image--> 
			<picture style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			</picture>

			<!--bg hero image-->
			<div class="img-hero-bg"></div>
			
			<!--div with content on image-->
			<div class="hero-txt">
				<?php while (have_posts() ) : the_post(); ?>
				<!--post title-->
				<?php the_title( $before = '<h1>', $after = '</h1>', $echo = true ) ?>

				<!--post date-->
				<span class="date">Opublikowano: <?php the_time('d F Y') ?></span>
				<i class="icon-arrow1-down"></i>
			</div>
		</section>
		<!--post content-->
		<?php the_content(); ?>
	</article>
			
	<section class="comments">
		<!--comments-->
		<div class="comments">
			<?php if ( comments_open() || get_comments_number() ) : comments_template();
				endif; ?>
			<?php endwhile;?>
	</section>
	
	<section class="pagination">
		<!--post content-->
		<?php the_post();?>
		
		<!--pagination with featured image-->
		<div class="previous"> 
			<?php
			$prevPost = get_previous_post();
			$prevthumbnail = get_the_post_thumbnail($prevPost->ID);
			previous_post_link('%link', '<div><i class="icon-arrow1-right"></i>Sprawdź wcześniejszy wpis</div>');
			previous_post_link('%link',''.$prevthumbnail.'', FALSE );
			previous_post_link('%link','<h5>%title</h5>', FALSE);	
			?>  
		</div>

		<div class="next">
			<?php
			$nextPost = get_next_post();
			$nextthumbnail = get_the_post_thumbnail($nextPost->ID);
			next_post_link('%link', '<div>Sprawdź następny wpis <i class="icon-arrow1-left"></i></div>');	
			next_post_link('%link',''.$nextthumbnail.'', FALSE);
			next_post_link('%link','<h5>%title</h5>', FALSE); 
			?> 
		</div>
	</section>
</div>	

<?php get_footer('');?>