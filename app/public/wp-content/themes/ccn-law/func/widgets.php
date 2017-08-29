<?php

function ccnlaw_widgets_init() {

  	/*
    Sidebar (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'ccnlaw' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'ccnlaw' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

  	/*
    Footer (three widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Footer', 'ccnlaw' ),
        'id' => 'footer-widget-area',
        'description' => __( 'The footer widget area', 'ccnlaw' ),
        'before_widget' => '<div class="%1$s footer-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="hidden">',
        'after_title' => '</h3>',
    ) );
    
       	/*
    Homepage Events Calendar Widget
     */
    register_sidebar( array(
        'name' => __( 'Events Calendar', 'ccnlaw' ),
        'id' => 'events-area',
        'description' => __( 'Homepage Events Calendar widget', 'ccnlaw' ),
        'before_widget' => '<div class="%1$s events-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    

    
      	/*
    Homepage Countdown Widget
     */
    register_sidebar( array(
        'name' => __( 'Countdown', 'ccnlaw' ),
        'id' => 'countdown-area',
        'description' => __( 'Homepage countdown widget', 'ccnlaw' ),
        'before_widget' => '<div class="%1$s countdown-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    
      	/*
    Homepage Testimonial widget
     */
    register_sidebar( array(
        'name' => __( 'Testimonial Slider', 'ccnlaw' ),
        'id' => 'testimonial-area',
        'description' => __( 'Homepage testimonial widget', 'ccnlaw' ),
        'before_widget' => '<div class="%1$s countdown-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'ccnlaw_widgets_init' );

?>
