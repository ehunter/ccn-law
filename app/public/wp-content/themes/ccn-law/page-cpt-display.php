<?php /* Template Name: CPT Display */ ?>

<?php get_template_part('parts/header'); ?>

<div class="container">
  <div class="row">
  
 

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <header class="page-head">
            <h2><?php the_title(); ?></h2>
            
           <?php  if ( has_post_thumbnail() ) { ?>
           				<div class="featured-img">
           					<?php the_post_thumbnail('blog-featured', array( 'class' => 'img-responsive' )); ?>
           				</div>
           	<?php } ?>
            
          </header>
         <div class="page-content"> <?php the_content(); ?>
         
         <span class="divider"></span>
         
          <?php if (is_page( 13 ) or is_page( 652 )) {   $cpt_display = 'attorneys';
           
           ?> 
           
           <h4 class="title-box"><?php _e( 'Our Attorneys', 'ccnlaw' ); ?></h4>
           <?php } 
           
            else if (is_page( 11 ) or is_page( 659 )) {
          
           $cpt_display = 'practice_areas'; 
           
           ?> 
           
           <h4 class="title-box"><?php _e( 'Our Practice Areas', 'ccnlaw' ); ?></h4>
           <?php } ?> 
           
           <ul class="cpt-display-single" role="menu">
				    
				    
				    	<?php 
				    	
				    	
				    	
				    	$args = array(
								'post_type' => $cpt_display,
								'posts_per_page' => -1,
								'orderby' => 'title',
								'order' => 'ASC'
							);
    			$cpt_query = new WP_Query( $args );
    			
					if ( $cpt_query->have_posts() ) {  while ( $cpt_query->have_posts() ) { 
								$cpt_query->the_post(); ?>
								
							<li class="col-md-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					<?php } // end if ?>
				    
				  </ul>
				  <?php wp_reset_query(); ?>
         </div>
        </article>
        <?php endwhile; ?> 
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
      </div><!-- /#content -->
    </div>
    
     <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
      <?php get_template_part('parts/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
  <?php get_template_part('parts/prefoot'); ?> 
</div><!-- /.container -->



<?php get_template_part('parts/footer'); ?>
