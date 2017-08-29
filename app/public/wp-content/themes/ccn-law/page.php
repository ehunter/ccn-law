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
         <div class="page-content"> <?php the_content(); ?></div>
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
