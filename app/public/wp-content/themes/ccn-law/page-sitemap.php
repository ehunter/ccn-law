<?php
/*
Template Name: Sitemap
*/
?>

<?php get_template_part('parts/header'); ?>

<div class="container space-45">
  <div class="row">

    <div class="col-xs-12">
      <div id="content" role="main">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <header class="page-head">
            <h2><?php the_title(); ?></h2>
          </header>
          <?php the_content(); ?>
          
          <?php get_template_part('/parts/sitemap'); ?>
          
        </article>
        <?php endwhile; ?> 
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
      </div><!-- /#content -->
    </div>
    
    
    
  </div><!-- /.row -->
  <?php get_template_part('parts/prefoot'); ?> 
</div><!-- /.container -->



<?php get_template_part('parts/footer'); ?>


