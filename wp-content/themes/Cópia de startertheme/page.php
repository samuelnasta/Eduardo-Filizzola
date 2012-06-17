<?php get_header(); ?>



		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		
		<div class="post" id="<?php the_ID(); ?>">
		
			<h1><?php the_title(); ?></h1>
		
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		</div> <!-- .post -->

		<?php endwhile; endif; ?>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>