<?php
/*
Template Name: Landing Page
*/
?>

<?php get_template_part('parts/header'); ?>
				
<section id="home-sec-1" class="row">
	<div class="container">
		<div class="row">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-8 col-md-offset-2">
				<?php the_content(); ?>
				
				<h3 class="txt-center">
				<?php _e( 'Subscribe to our monthly newsletter - <a class="read-more" href="/what-we-do">Click Here »</a>', 'ccnlaw' ); ?>
				</h3>
				
				<div class="col-md-1"></div>
				<?php endwhile; ?>
				<?php else : ?> <p>There are no posts to display.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section id="home-sec-2" class="row">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h3><?php _e( 'To view the ', 'ccnlaw' ); ?> <?php the_title(); ?> <?php _e( ' newsletter archive - ', 'ccnlaw' ); ?><a href="<?php the_field('read_now_link'); ?>"><?php _e( 'Click Here »', 'ccnlaw' ); ?></a></h3>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('parts/prefoot'); ?> 

<?php get_template_part('parts/footer'); ?>
