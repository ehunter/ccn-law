<?php get_template_part('parts/header'); ?>

<div class="container">
  <div class="row">
  
  
    
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <div class="alert alert-warning">
          <h1><i class="glyphicon glyphicon-warning-sign"></i> Error 404</h1>
          <p><?php _e( 'The page you were looking for does not exist.', 'ccnlaw' ); ?></p>
          <?php _e( 'Try one of our other pages listed below:', 'ccnlaw' ); ?>          
          
        </div>
        
        <?php get_template_part('/parts/sitemap'); ?>
        
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
       <?php get_template_part('parts/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
