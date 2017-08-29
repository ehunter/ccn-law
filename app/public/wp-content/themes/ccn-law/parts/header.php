<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"> 
<head>

	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- IOS icons -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
	<link href="<?php bloginfo('template_url'); ?>/img/76.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="<?php bloginfo('template_url'); ?>/img/152.png" rel="apple-touch-icon" sizes="152x152" />

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	 
	
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-540f17987c7777be" async></script>

 
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->    


<div class="container-fluid">
	<div class="row">
		<div class="header">
			<div class="container">
			 <?php if ( !is_page_template( 'page-landing.php' ) ) :	?>
				<div class="row">
				
				 <div class="col-md-6 hidden-xs hidden-sm">
				 	
				 	<div class="secondary-nav">    
				      <?php				
				          $args = array(
				            'theme_location' => 'top-secondary',
				            'depth' => 0,
				            'container'	=> false,
				            'fallback_cb' => false,
				            'menu_class' => 'nav navbar-nav'
				          );
				          wp_nav_menu($args);
				      ?>
				 </div>
				 </div>
				 
				  <div class="col-md-6 col-sm-12 social">
					  <a class="hidden-xs" href="https://twitter.com/MexicoReport" target="_blank">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>
						
						<a class="hidden-xs" href="https://www.linkedin.com/company/cacheaux-cavazos-%26-newton" target="_blank">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-linkedin fa-stack-1x"></i>
							</span>
						</a>
						<?php icl_post_languages(); ?>
						
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".upper-navbar">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					  </button>
						
						
				  </div>
				</div>
				 <?php endif; ?>
				<div class="row">
					<div class="col-md-12">
						<div class="separation-line"></div>
					</div>
				</div>
				
				<!-- Mobile Navigation Start -->
				
				<div class="row mobile-header">
					<div class="col-xs-12">
						<a href="<?php echo get_site_url(); ?>">
							<img class="visible-xs visible-sm hidden-lg hidden-md mobile-logo" src="<?php bloginfo('template_url'); ?>/img/ccn-logo.png">
						</a>
					</div>
					<div class="col-xs-12">
					      <nav class="mobile-nav hidden-lg hidden-md" role="navigation">	
						  <div class="collapse navbar-right navbar-collapse upper-navbar">    
					      <?php				
					          $args = array(
					            'theme_location' => 'mobile-nav',
					            'container'	=> false,
					            'fallback_cb' => false,
					            'menu_class' => 'nav navbar-nav',
					            'walker' => new BootstrapNavMenuWalker()
					          );
					          wp_nav_menu($args);
					      ?>
					
					   </div><!-- /.navbar-collapse -->
					</nav>
					</div>
				</div>
				
				<!-- /Mobile Navigation END -->
				
				<!-- Desktop Navigation Start -->
				 <?php if ( !is_page_template( 'page-landing.php' ) ) :	?>
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-default">
				   							   
						<nav class="main-nav navbar navbar-default navbar-static-top hidden-xs hidden-sm" role="navigation">	
							<div class="collapse navbar-collapse">    
						      <?php				
						          $args = array(
						            'theme_location' => 'top-nav',
						            'depth' => 0,
						            'container'	=> false,
						            'fallback_cb' => false,
						            'menu_class' => 'nav navbar-nav',
						            'walker' => new BootstrapNavMenuWalker()
						          );
						          wp_nav_menu($args);
							      ?>
						   </div><!-- /.navbar-collapse -->
						</nav>
						</div>
					</div>
				</div>
				 <?php endif; ?>
				<!-- /Desktop Navigation END -->
				
				 <?php if ( is_page_template( 'page-landing.php' ) ) :	?>
				<!-- Landing page header nav Start -->
				
			<div class="row">
				<div class="col-md-12">
					<div class="navbar-default">
			   							   
					<nav class="navbar" role="navigation">
			<ul id="menu-main-nav" class="nav navbar-nav">
				
					<li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item active menu-item-40 has-image hovernav"><a href="http://ccn-law.swebdevelopment.com/"><img width="185" height="76" src="/wp-content/uploads/2015/02/ccn-logo.png" class="attachment-full wp-post-image" alt="Home" title="Home"></a></li></ul>
						</nav>
						</div>
					</div>
				</div>

<?php endif; ?>
				<!-- / Landing page header nav END -->
				
			</div>
		</div>
			</div>
			</div>
	<?php if ( is_front_page() && (is_page_template( 'page-landing.php' ) == false) ) :	?>
	<div class="slider-container">
	
					
		<?php // check if the repeater field has rows of data
			if( have_rows('slider-image') ): $i = 0; ?>	
			
	<div class="cycle-slideshow" 
		data-cycle-fx="fade" 
		data-cycle-timeout="4000"
		data-cycle-speed="2000"
		data-cycle-slides="> div.slide"
			>
		  
	<?php 	// loop through the rows of data
	    while ( have_rows('slider-image') ) : the_row(); $i++ ?>
	    	<div class="slide">
		    	<span class="position" style="background: url(<?php the_sub_field('image'); ?>) no-repeat top center; background-size: cover;">
			    	
			    	<div class="container"><div class="row"><div class="col-md-12">
				    	<?php the_sub_field('heading'); ?>
				    	<span class="subheading"><?php the_sub_field('subheading'); ?></span>
			    	</div></div></div>
			    	
		    	</span>
	    	</div>
	  <?php  endwhile; ?>  </div>
			
			
			
			 <?php else :  // no rows found ?>
	  	<?php endif; ?>
	  	</div>
	<ul class="deco-border">
    <li></li>
    <li></li>
    <li></li>
    <li></li>  </ul>
    
	
	<?php endif; ?>
	
	<?php if ( is_page_template( 'page-landing.php' ) ) :	?>
	<div class="slider-container">
	
	<div class="landing-head-container">
		  
<?php 
if ( has_post_thumbnail() ) { $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );} ?>
	    	<div class="slide">
	    	<div class="container"><div class="row"><div class="col-md-12">
				    	<?php the_field('heading'); ?>
				    	<span class="subheading"><?php the_field('subheading'); ?></span>
				    	<span class="read-now-btn"><a href="#" class="btn btn-lg green txt-center"><?php _e( 'Read now', 'ccnlaw' ); ?></a></span>
			    	</div></div></div>

		    	<span class="position" style="background: url(<?php echo $large_image_url[0]; ?>) no-repeat top center; background-size: cover;">
			    				    	
		    	</span>
	    	</div>
	    		</div>
			

	  	</div>
	<ul class="deco-border">
    <li></li>
    <li></li>
    <li></li>
    <li></li>  </ul>
	
	<?php endif; ?>

		
	</div>
</div>


<div class="container-fluid">
