<?php

///////////////////////////////////////////////////////////

//Register Practice Area Custom Post Type
add_action('init', 'practice_area_register');  
	function practice_area_register() { 
			$labels = array(
			'name' => _x('Practice Areas', 'post type general name'),
			'singular_name' => _x('Area', 'post type singular name'),
			'add_new' => _x('Add New Area', 'portfolio item'),
			'add_new_item' => __('Add New Area'),
			'edit_item' => __('Edit Area'),
			'new_item' => __('New Area'),
			'view_item' => __('View Area'),
			'search_items' => __('Search Practice Areas'),
			'not_found' => __('No Practice Areas found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'taxonomies' => array('post_tag'),
			'parent_item_colon' => '',
			'has_archive' => 'practice-areas'
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'practice-areas'),
			'has_archive' => 'practice-areas',
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail', 'revisions')
		);
		register_post_type( 'practice_areas' , $args );  
	}   
	
// Register Project Taxonomy
	register_taxonomy("practice-area-categories", array("practice_areas"), array("hierarchical" => true, "label" => "Practice Area Categories", "singular_label" => "Practice Area Category", "rewrite" => array ('practice-area')));  

///////////////////////////////////////////////////////////

//Register Attorneys Custom Post Type
add_action('init', 'attorneys_register');  
	function attorneys_register() { 
			$labels = array(
			'name' => _x('Attorneys', 'post type general name'),
			'singular_name' => _x('Attorney', 'post type singular name'),
			'add_new' => _x('Add New Attorney', 'portfolio item'),
			'add_new_item' => __('Add New Attorney'),
			'edit_item' => __('Edit Attorney'),
			'new_item' => __('New Attorney'),
			'view_item' => __('View Attorney'),
			'search_items' => __('Search Attorneys'),
			'not_found' => __('No Attorneys found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'taxonomies' => array('post_tag'),
			'parent_item_colon' => '',
			'has_archive' => 'attorneys'
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail', 'revisions')
		);
		register_post_type( 'attorneys' , $args );  
	}   
	
	// Register Attorney Location Taxonomy
	register_taxonomy("attorney-location", array("attorneys"), array("hierarchical" => true, "label" => "Attorney Locations", "singular_label" => "Attorney Location", "rewrite" => array ('attorney-location')));  
	
		// Register Attorney Location Taxonomy
	register_taxonomy("attorney-practice-area", array("attorneys"), array("hierarchical" => true, "label" => "Attorney Practice Areas", "singular_label" => "Attorney Practice Area", "rewrite" => array ('attorney-practice-area')));  

	
///////////////////////////////////////////////////////////

//Register Attorneys Custom Post Type
add_action('init', 'locations_register');  
	function locations_register() { 
			$labels = array(
			'name' => _x('Locations', 'post type general name'),
			'singular_name' => _x('Location', 'post type singular name'),
			'add_new' => _x('Add New Location', 'portfolio item'),
			'add_new_item' => __('Add New Location'),
			'edit_item' => __('Edit Location'),
			'new_item' => __('New Location'),
			'view_item' => __('View Location'),
			'search_items' => __('Search Locations'),
			'not_found' => __('No Locations found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'taxonomies' => array('post_tag'),
			'parent_item_colon' => '',
			'has_archive' => 'locations'
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'revisions')
		);
		register_post_type( 'locations' , $args );  
	}   
	
///////////////////////////////////////////////////////////

//Register Newsletter Custom Post Type
/* add_action('init', 'newsletters_register');  
	function newsletters_register() { 
			$labels = array(
			'name' => _x('Newsletters', 'post type general name'),
			'singular_name' => _x('Newsletter Entry', 'post type singular name'),
			'add_new' => _x('Add New Entry', 'portfolio item'),
			'add_new_item' => __('Add New Entry'),
			'edit_item' => __('Edit Entry'),
			'new_item' => __('New Entry'),
			'view_item' => __('View Entry'),
			'search_items' => __('Search Newsletters'),
			'not_found' => __('No Newsletters found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'taxonomies' => array('post_tag'),
			'parent_item_colon' => '',
			'has_archive' => 'newsletters'
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'newsletters'),
			'has_archive' => 'newsletters',
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail', 'revisions')
		);
		register_post_type( 'newsletters' , $args );  
	}   
	
// Register Newsletters Taxonomy
	register_taxonomy("newsletter-categories", array("newsletters"), array("hierarchical" => true, "label" => "Newsletter Categories", "singular_label" => "Newsletter Category", "rewrite" => array ('newsletters'))); 
*/

// Resgister Custom Post Types 
//////////////////////////////////////////////////////////////////////////////
   
    
//Register Issues
/* add_action('init', 'issues_register');  
	function issues_register() { 
			$labels = array(
			'name' => _x('Issues', 'post type general name'),
			'singular_name' => _x('Issue', 'post type singular name'),
			'add_new' => _x('Add New Issue', 'portfolio item'),
			'add_new_item' => __('Add New Issue'),
			'edit_item' => __('Edit Issue'),
			'new_item' => __('New Issue'),
			'view_item' => __('View Issue'),
			'search_items' => __('Search Issues'),
			'not_found' => __('No Issues found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','thumbnail', 'editor')
		);
		register_post_type( 'issues' , $args );  
	}  
	
// Register Issue Taxonomy
	register_taxonomy("issues_type", array("issues"), array("hierarchical" => true, "label" => "Issue Categories", "singular_label" => "Issue Category", "rewrite" => true));  

// Create Issue Column Data  
	add_filter("manage_edit-issues_columns", "issues_edit_columns");  
	add_action("manage_posts_custom_column",  "issues_custom_columns"); 

 
  
	function issues_edit_columns($columns){  
			$columns = array(  
				"cb" => "<input type=\"checkbox\" />",  
				"title" => "Title"  
				
				
			);  
			return $columns;  
	}
	
	function issues_custom_columns($column){  
			global $post;  
			switch ($column)  
			{ 
									
			}  
	} 
	

	
//////////////////////////////////////////////////////////////////////////////////	*/
