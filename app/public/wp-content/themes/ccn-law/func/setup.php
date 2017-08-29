<?php

function ccnlaw_setup() {
  add_editor_style('css/editor-style.css');
  add_theme_support('post-thumbnails');
  update_option('thumbnail_size_w', 170);
  update_option('medium_size_w', 470);
  update_option('large_size_w', 970);
  add_image_size( 'page-featured', 1200, 350, true ); // (cropped)
  add_image_size( 'blog-featured', 750, 300, true ); // (cropped)
  add_image_size( 'blog-excerpt', 120, 85, true ); // (cropped)
  add_image_size( 'blog-home-featured', 350, 250, true ); // (cropped)

}
add_action('init', 'ccnlaw_setup');

if (! isset($content_width))
	$content_width = 600;

function ccnlaw_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
    <div class="form-group">
		    <input class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" />
    </div>
		<button type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> '. esc_attr__('Search') .'</button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'ccnlaw_search_form' );

/*
function ccnlaw_excerpt_readmore() {
    return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; Read more <i class="glyphicon glyphicon-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'ccnlaw_excerpt_readmore');
*/


function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('... read more', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 120;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*  Browser detection body_class() output
/* ------------------------------------  
function ccnlaw_browser_body_class( $classes ) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
 
    if($is_lynx) $classes[] = 'lynx';
    elseif($is_gecko) $classes[] = 'gecko';
    elseif($is_opera) $classes[] = 'opera';
    elseif($is_NS4) $classes[] = 'ns4';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_IE) {
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $browser = succnlawr( "$browser", 25, 8);
        if ($browser == "MSIE 7.0"  ) {
            $classes[] = 'ie7';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 6.0" ) {
            $classes[] = 'ie6';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 8.0" ) {
            $classes[] = 'ie8';
            $classes[] = 'ie';
        } elseif ($browser == "MSIE 9.0" ) {
            $classes[] = 'ie9';
            $classes[] = 'ie';
        } else {
            $classes[] = 'ie';
        }
    }
    else $classes[] = 'unknown';
 
    if( $is_iphone ) $classes[] = 'iphone';
 
    return $classes;
}
add_filter( 'body_class', 'ccnlaw_browser_body_class' ); */

add_theme_support( 'woocommerce' );

//Sweb Functions
function my_em_event_placeholder( $replace, $EM_Event, $result ){
	if ( $result == '#_EVENTLINK' ) {
		$event_link = esc_url( $EM_Event->get_permalink() );
		$event_shortname = substr($EM_Event->event_name, 0, 40 );
		if ( strlen( $EM_Event->event_name ) > 30 ) $event_shortname .= '&hellip;';
		$replace = '<a href="' . $event_link . '" title="' . esc_attr( $EM_Event->event_name ) . '">' . esc_attr( $event_shortname ) . '</a>';
	}
	return $replace;
}
add_filter( 'em_event_output_placeholder', 'my_em_event_placeholder', 1, 3 );

remove_filter( 'widget_title', 'esc_html' );

add_filter( 'widget_title', 'your_html_widget_title' );
 
/**
 * html_widget_title function.
 * 
 * @access public
 * @param mixed $title
 * @return void
 */
 
function your_html_widget_title( $title ) { //HTML tag opening/closing brackets
 
	$title = str_replace( '[', '<', $title );
	$title = str_replace( '[/', '</', $title );
	$title = str_replace( ']', '>', $title );
 
	return $title;
}





function get_the_term_list_custom( $id, $taxonomy, $before = '', $sep = '', $after = '' ) {
	$terms = get_the_terms( $id, $taxonomy );

	if ( is_wp_error( $terms ) )
		return $terms;

	if ( empty( $terms ) )
		return false;

	foreach ( $terms as $term ) {
		$link = get_term_link( $term, $taxonomy );
		if ( is_wp_error( $link ) )
			return $link;
		$term_links[] = '<li class="col-md-4"><a href="/practice-areas/' . $term->slug . '" rel="tag">' . $term->name . '</a></li>';
	}

	/**
	 * Filter the term links for a given taxonomy.
	 *
	 * The dynamic portion of the filter name, $taxonomy, refers
	 * to the taxonomy slug.
	 *
	 * @since 2.5.0
	 *
	 * @param array $term_links An array of term links.
	 */
	$term_links = apply_filters( "term_links-$taxonomy", $term_links );

	return $before . join( $sep, $term_links ) . $after;
}



// FILE UPLOAD SETTINGS
add_filter('upload_mimes','add_custom_mime_types');
function add_custom_mime_types($mimes){
  return array_merge($mimes,array (
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'png' => 'image/png',
    'gif' => 'image/gif',
    'pdf' => 'application/pdf',
    'doc' => 'application/msword',
    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'ppt' => 'application/vnd.ms-powerpointtd',
    'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    'xls' => 'application/vnd.ms-excel',
    'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'ac3' => 'audio/ac3',
    'mpa' => 'audio/MPA',
    'mp3' => 'audio/mpeg',
    'flv' => 'video/x-flv',
    'svg' => 'image/svg+xml',
    'vcf' => 'text/vcard',
    'vcard' => 'text/vcard'
  ));
}

// Add spanish class to spanish pages

add_filter('body_class', 'append_language_class');
function append_language_class($classes){
  $classes[] = ICL_LANGUAGE_CODE;  //or however you want to name your class based on the language code
  return $classes;
}


function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
            if(!$l['active']) echo '</a>';
        }
    }
}

function languages_list_footer(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        echo '<div id="footer_language_list"><ul>';
        foreach($languages as $l){
            echo '<li>';
            if($l['country_flag_url']){
                if(!$l['active']) echo '<a href="'.$l['url'].'">';
                echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
                if(!$l['active']) echo '</a>';
            }
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo icl_disp_language($l['native_name'], $l['translated_name']);
            if(!$l['active']) echo '</a>';
            echo '</li>';
        }
        echo '</ul></div>';
    }
}

function icl_post_languages(){
    $languages = icl_get_languages('skip_missing=1');
    if(1 < count($languages)){
        foreach($languages as $l)
        if(!$l['active']){
        {
            $langs[] = '<a class="language-switcher-btn btn green" href="'.$l['url'].'">'.$l['native_name'].'</a>';
        }
        
        }
     
        echo join(' ', $langs);
    }
}

/*
function icl_post_languages(){
  $languages = icl_get_languages('skip_missing=0');
  if(1 < count($languages)){
    echo __('');
    foreach($languages as $l){
    if(!$l['active']) $langs[] = '<a class="language-switcher-btn btn green" href="'.$l['url'].'">'.$l['native_name'].'</a>';
    }
    echo join($langs);
  }
} */


add_filter( 'get_pagenum_link', 'wpml_workaround_get_pagenum_link' );
function wpml_workaround_get_pagenum_link( $url ) {
    $current_language = apply_filters( 'wpml_current_language', '' );
    $pattern = '/(\?lang=' . $current_language . ')(\/.*)/';
    $url = preg_replace( $pattern, '$2', $url );
    return $url;
}
