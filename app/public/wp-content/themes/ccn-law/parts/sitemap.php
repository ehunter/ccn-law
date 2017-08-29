<div class="row">

<div class="col-sm-3">
<h2 id="pages"><?php _e( 'Pages', 'ccnlaw' ); ?></h2>
<ul>
<?php
// Add pages you'd like to exclude in the exclude here
wp_list_pages(
  array(
    'exclude' => '17, 19, 25, 21',
    'title_li' => '',
  )
);
?>
</ul>

<h2 id="posts"><?php _e( 'Publications', 'ccnlaw' ); ?></h2>


<?php wp_list_categories('title_li='); ?> 

</div>

<div class="col-sm-3">

<h2 id="practice-areas"><?php _e( 'Practice Areas', 'ccnlaw' ); ?></h2>

<?php
	$args = array(
	'post_type' => 'practice_areas',
	'posts_per_page' => -1,
	'orderby' => 'title',
	'order' => 'ASC'
	);
	$cpt_query = new WP_Query( $args );
	
	if ( $cpt_query->have_posts() ) {  while ( $cpt_query->have_posts() ) { 
	$cpt_query->the_post(); ?>
	
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	
	<?php	} // end while ?>
	<?php } // end if ?>
	
	</ul>
	<?php wp_reset_query(); ?>
</div>

<div class="col-sm-3">
<h2 id="attorneys"><?php _e( 'Our Attorneys', 'ccnlaw' ); ?></h2>
<?php
	$args = array(
	'post_type' => 'attorneys',
	'posts_per_page' => -1,
	'orderby' => 'title',
	'order' => 'ASC'
	);
	$cpt_query = new WP_Query( $args );
	
	if ( $cpt_query->have_posts() ) {  while ( $cpt_query->have_posts() ) { 
	$cpt_query->the_post(); ?>
	
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	
	<?php	} // end while ?>
	<?php } // end if ?>
	
	</ul>
	<?php wp_reset_query(); ?>
</div>

<div class="col-sm-3">



<h2 id="offices"><?php _e( 'Offices', 'ccnlaw' ); ?></h2>

<?php
	$args = array(
	'post_type' => 'locations',
	'posts_per_page' => -1,
	'orderby' => 'title',
	'order' => 'ASC'
	);
	$cpt_query = new WP_Query( $args );
	
	if ( $cpt_query->have_posts() ) {  while ( $cpt_query->have_posts() ) { 
	$cpt_query->the_post(); ?>
	
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	
	<?php	} // end while ?>
	<?php } // end if ?>
	
	</ul>
	<?php wp_reset_query(); ?>

</div>





	
	</div>
