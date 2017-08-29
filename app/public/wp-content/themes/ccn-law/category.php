<?php get_template_part('parts/header'); ?>
<div class="header-image">
  <div class="title">
    <h2>CCN Mexico Report&#8482;</h2>
    <p>Expert news and opinions in Mexican law.</p>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <!-- <div class="header-image">
      <img class="center-cropped" src="/wp-content/uploads/2017/08/ccn-mexico-report-header-image-1.jpg" alt=""/>
      <h2>CCN Mexico Report</h2>
    </div> -->
    <div>
      <div class="col-md-8 col-md-offset-2" id="content" role="main">
        <header class="archive-header">
          <h2><?php _e('Publication Category: '); ?><?php single_cat_title(''); ?></h2>
        </header>
        <hr class="short-line"/>
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>">
          <div class="featured-img">
            <?php the_post_thumbnail('', array( 'class' => 'img-responsive attachment-post-thumbnail')); ?>
          </div>
          <header>
            <?php $subtitle = get_post_meta($post->ID, 'article_subtitle', true);
                  if ($subtitle) { ?>
                    <div class="subtitle"><? echo $subtitle; ?></div>
                <?php } else  { 

                }?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
            <h4>
                <!-- <span class="text-muted" class="author">By <?php the_author() ?>,</span> -->
<!--                 <time class="text-muted" datetime="<?php the_time('m-Y'); ?>">
                	<?php the_time('F Y'); ?>
                </time> -->
                <?php $author = get_post_meta($post->ID, 'ccn_author', true);
                  if ($author) { ?>
                    <em>By <? echo $author; ?></em>
                <?php } else  { 

                }?>
            </h4>
          </header>
          
          <div class="page-content">
            <?php the_excerpt(); ?>
<!--           <p class="text-muted" style="margin-bottom: 20px;">
            <i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Filed under: '); ?> <?php the_category(', ') ?><br/>
          </p> -->
          </div>
          <hr class="article-divider"/>
        </article>
        <?php endwhile; ?>
        <ul class="pagination">
          <li class="older"><?php next_posts_link(__('&laquo; Older', 'ccnlaw' )); ?></li>
          <li class="newer"><?php previous_posts_link(__('Newer &raquo;', 'ccnlaw' )); ?></li>
        </ul>
        <?php else: ?>
        
        <p> <?php _e('Publications coming soon!'); ?></p>
        
        <?php // wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
      </div><!-- /#content -->
    </div>
    
<!--      <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
       <?php get_template_part('parts/sidebar'); ?>
    </div> -->
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
