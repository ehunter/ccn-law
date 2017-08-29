<?php get_template_part('parts/header'); ?>

<div class="container">
  <div class="row">
    
<div class="col-xs-12 col-sm-8">
  <div id="content" role="main">
    <?php if(have_posts()): while(have_posts()): the_post();?>
   
   <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
      <header class="page-head">
      <div class="row">
      	<div class="col-sm-9">
	        <h2><span class="blog-title"><?php the_title()?></span></h2>
      	</div>
      	<div class="col-sm-3">				  
				<div class="btn-group pull-right m-top">
				  <button class="btn btn-default btn-md dropdown-toggle attorneys" type="button" data-toggle="dropdown" aria-expanded="false">		    
				    	<?php _e( 'Select Attorney', 'ccnlaw' ); ?> <span class="caret"></span>
				  </button>
				  				  
				  <ul class="dropdown-menu attorneys" role="menu"> 
				  <?php
				    	$args = array(
								'post_type' => 'attorneys',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'taxonomy' => 'attorney-location',
								'order' => 'ASC'
							);
    			$attorney_dropdown = new WP_Query( $args );
    			
					if ( $attorney_dropdown->have_posts() ) {  while ( $attorney_dropdown->have_posts() ) { 
								$attorney_dropdown->the_post(); ?>
								
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					<?php } // end if ?>				    
				  </ul>
				  
				  <?php wp_reset_query(); ?>				  
				</div>
      	</div>
      </div>	
        <?php  if ( has_post_thumbnail() ) { ?>
       				<div class="featured-img">
       					<?php the_post_thumbnail('blog-featured', array( 'class' => 'img-responsive' )); ?>
       				</div>
       	<?php } ?>
      </header>
          
      <div class="blog-single page-content">
          
          <div class="box-trans">
	          <h4 class="title-box"><?php _e( 'Contact Information', 'ccnlaw' ); ?></h4>          
	          <?php if(get_field('office_phone')) { ?> <p> <?php _e( 'Office:', 'ccnlaw' ); ?><?php the_field('office_phone') ?></p> <?php } ?>
	          <?php if(get_field('fax_number')) { ?> <p> <?php _e( 'Fax:', 'ccnlaw' ); ?><?php the_field('fax_number') ?></p> <?php } ?>
	          <?php if(get_field('email_address')) { ?> <p><a href="<?php the_field('email_address') ?>"><?php the_field('email_address') ?></a></p> <?php } ?>
	          <?php if(get_field('download_v_card_file')) { ?> <p><a href="<?php the_field('download_v_card_file') ?>"><?php _e( 'Download vCard', 'ccnlaw' ); ?></a></p> <?php } ?>
          </div>
          
          <div class="box-trans">
	          <h4 class="title-box"><?php _e( 'Profile', 'ccnlaw' ); ?></h4>
	          <?php the_content()?> 
          </div>
          
          <?php if(get_field('other_practice_areas')) { ?>
          <div class="box-trans">
	          <h4 class="title-box"><?php _e( 'Other Practice Areas', 'ccnlaw' ); ?></h4><p><?php the_field('other_practice_areas') ?></p> 
          </div>
          <?php } ?>          
          
          <?php if(get_field('licensed_in')) { ?>
          <div class="box-trans"> 
	          <h4 class="title-box"><?php _e( 'Licensed in', 'ccnlaw' ); ?></h4>
	          <p><?php the_field('licensed_in') ?></p>
          </div>
          <?php } ?>
           
          <?php // check if the repeater field has rows of data
			if( have_rows('languages') ): ?>
			<div class="box-trans">
				<h4 class="title-box"><?php _e( 'Languages', 'ccnlaw' ); ?></h4>
				<ul>
				<?php // loop through the rows of data
				    while ( have_rows('languages') ) : the_row();
				 // display a sub field value
				 		echo '<li>';
				        the_sub_field('language');
				        echo '</li>';
				
				    endwhile; ?>
				</ul>
			</div>
		  <?php	else :  // no rows found
				
				endif; ?>
			
			
			<?php // check if the repeater field has rows of data
			if( have_rows('education') ): ?>
			<div class="box-trans">
				<h4 class="title-box"><?php _e( 'Education', 'ccnlaw' ); ?></h4>
				<ul>
				<?php // loop through the rows of data
				    while ( have_rows('education') ) : the_row();
				 // display a sub field value
				 		echo '<li>';
				        the_sub_field('education_row');
				        echo '</li>';
				
				    endwhile; ?>
				</ul>
			</div>
		<?php	else :
			
			    // no rows found
			
			endif; ?>
          
          
         <?php // check if the repeater field has rows of data
			if( have_rows('professional_memberships') ): ?>
			<div class="box-trans">
				<h4 class="title-box"><?php _e( 'Professional Memberships', 'ccnlaw' ); ?></h4>
				<ul>
				<?php // loop through the rows of data
				    while ( have_rows('professional_memberships') ) : the_row();
				 // display a sub field value
				 		echo '<li>';
				        the_sub_field('membership');
				        echo '</li>';
				
				    endwhile; ?>
				</ul>
			</div>
		<?php	else :
			
			    // no rows found
			
			endif; ?>
          
           <span class="divider"></span>
           
           <div class="box-trans">
	           <h4 class="title-box"><?php _e( 'Practice areas', 'ccnlaw' ); ?></h4>
	           
	           <?php   echo get_the_term_list_custom( $post->ID, 'attorney-practice-area', '<ul class="cpt-display-single" role="menu">', '', '</ul>' ); ?>
           </div>
           
        </div><!-- /blog-single -->
        
        </article>
        <br>
        <?php endwhile; ?>
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>  
        <?php endif;?>
      </div><!-- /#content -->
    </div><!-- /col-sm-8  -->
    
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('parts/sidebar'); ?>
    </div>
   
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
