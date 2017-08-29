<?php

/*
Google CDN jQuery with a local fallback
See http://www.wpcoke.com/load-jquery-from-cdn-with-local-fallback-for-wordpress/
*/
function ccnlaw_enqueues()
{   
   //wp_register_script('jquery-saisd-js', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null);
	//	wp_enqueue_script('jquery-saisd-js');
	
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null);
	wp_enqueue_style('bootstrap-css');

	wp_register_style('ccnlaw-css', get_template_directory_uri() . '/css/ccnlaw.css', false, null);
	wp_enqueue_style('ccnlaw-css');

  //	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', false, null, true);
  //  wp_enqueue_script('modernizr');
    
    wp_register_script('modernizr-custom', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', false, null, true);
    wp_enqueue_script('modernizr-custom');

		wp_register_script('html5shiv.js', get_template_directory_uri() . '/js/html5shiv.js', false, null, true);
    wp_enqueue_script('html5shiv.js');

  	wp_register_script('respond', get_template_directory_uri() . '/js/respond.min.js', false, null, true);
    wp_enqueue_script('respond');
    
  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', false, null, true);
    wp_enqueue_script('bootstrap-js');
    
    wp_register_script('ccnlaw-js', get_template_directory_uri() . '/js/ccnlaw.js', false, null, true);
    wp_enqueue_script('ccnlaw-js');
     
    wp_register_script('cycle2-js', get_template_directory_uri() . '/js/jquery.cycle2.min.js', false, null, true);
    wp_enqueue_script('cycle2-js');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
      }
}
add_action('wp_enqueue_scripts', 'ccnlaw_enqueues', 100);

?>
