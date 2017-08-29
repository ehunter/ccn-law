<?php get_template_part('parts/header'); ?>

<div class="container">
  <div class="row">
  
   
    
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <header class="page-head">
            <h2 class="row">
            
            <span class="blog-title col-sm-9"><?php the_title()?></span>
            
            
            <div class="btn-group hidden-xs col-sm-3">
				  <button class="btn btn-default btn-md dropdown-toggle attorneys pull-right" type="button" data-toggle="dropdown" aria-expanded="false"><?php _e( 'View Practice Areas', 'ccnlaw' ); ?> <span class="caret"></span>
				  </button>
				  
				  
				  <ul class="dropdown-menu dropdown-menu-right attorneys" role="menu">
				    
				    
				    	<?php 
				    	
				    	
				    	
				    	$args = array(
								'post_type' => 'practice_areas',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'taxonomy' => 'attorney-location',
								'attorney-location'    => $page_slug,
								'order' => 'ASC'
							);
    			$practice_areas_dropdown = new WP_Query( $args );
    			
					if ( $practice_areas_dropdown->have_posts() ) {  while ( $practice_areas_dropdown->have_posts() ) { 
								$practice_areas_dropdown->the_post(); ?>
								
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					<?php } // end if ?>
				    
				  </ul>
				  <?php wp_reset_query(); ?>
				  
				</div>
                        </h2>
            
            
                        <?php  if ( has_post_thumbnail() ) { ?>
           				<div class="featured-img">
           					<?php the_post_thumbnail('blog-featured', array( 'class' => 'img-responsive' )); ?>
           				</div>
           	<?php } ?>
          </header>
          <div class="blog-single page-content">
          <?php the_content()?>
           <span class="divider"></span>
           <h4 class="title-box"><?php _e( 'Attorneys covering this practice area', 'ccnlaw' ); ?></h4>
           
           
           <?php $page_slug = $post->post_name; ?> 
           
           <ul class="cpt-display-single" role="menu">
				    
				    
				    	<?php 
				    	
				    	
				    	
				    	$args = array(
								'post_type' => 'attorneys',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'taxonomy' => 'attorney-practice-area',
								'attorney-practice-area'    => $page_slug,
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
        <br>
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
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
