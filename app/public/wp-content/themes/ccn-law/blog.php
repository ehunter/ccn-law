<?php
/*
Template Name: Blog
*/
?>

<?php get_template_part('parts/header'); ?>

  <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
      <?php get_template_part('parts/sidebar'); ?>
    </div>

<div class="container space-45">
  <div class="row">
    <div class="col-xs-12 col-sm-8">
	      <div id="content" role="main">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <header class="page-head">
            <h2><?php the_title(); ?></h2>
          </header>
          <?php the_content(); ?>
        </article>
        <?php endwhile; ?> 
        <?php endif; ?>
        
        <?php 
       // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
       $args = array(
						'post_type' => 'post'
						/*'posts_per_page' => 5,
						'orderby' => 'date',
						'order' => 'DESC',
						'paged' => $paged	*/
					);
		$blog_query = new WP_Query( $args );
		
			if ( $blog_query->have_posts() ) {
				while ( $blog_query->have_posts() ) {
					$blog_query->the_post(); ?>
					
		<article role="article" id="post_<?php the_ID()?>">
		<div class="excerpt-container"> 
 
          <div class="col-sm-4">
          <?php the_post_thumbnail('blog-featured', array( 'class' => 'img-responsive attachment-post-thumbnail blog-featured' )); ?>
          </div>
          <div class="col-sm-8">
           <header class="blog-head">
            <a href="<?php echo get_permalink(); ?>"><h3><span class="blog-title"><?php the_title()?></span></h3></a>
            <h5>
              <em>
                <!-- <span class="text-muted" class="author">By <?php the_author() ?>,</span> -->
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h5>
          </header>
          
         <?php the_excerpt( __( '&hellip; Continue reading <i class="glyphicon glyphicon-arrow-right"></i>', 'ccnlaw' ) ); ?>
          <p class="text-muted">
            <span class="category"><i class="glyphicon glyphicon-folder-open"></i>&nbsp; Category: <?php _e(''); ?> <?php the_category(', ') ?><br/> 
<!--  <i class="glyphicon glyphicon-comment"></i>&nbsp; Comments: <?php comments_popup_link('None', '1', '%'); ?>-->
            </span></p> </div>
          <hr/>
         
		</div>
        </article>
	
					
				<?php	} // end while ?>
				
        <ul class="pagination">
          <li class="older"><?php next_posts_link('&laquo; Older') ?></li>
          <li class="newer"><?php previous_posts_link('Newer &raquo;') ?></li>
        </ul>
				
		<?php	} // end if ?>

      </div><!-- /#content -->
    </div>
  </div>
</div>
        
  </div><!-- /.row -->
  <?php get_template_part('parts/prefoot'); ?> 
</div><!-- /.container -->



<?php get_template_part('parts/footer'); ?>
