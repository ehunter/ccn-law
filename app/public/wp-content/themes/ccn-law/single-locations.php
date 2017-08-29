<?php get_template_part('parts/header'); ?>




<section id="location-head" class="row">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				 
				 <?php $page_slug = $post->post_name; ?> 
				  
				<div class="btn-group hidden-xs hidden-sm">
				  <button class="btn btn-default btn-md dropdown-toggle attorneys" type="button" data-toggle="dropdown" aria-expanded="false">				    
				    <?php if ( ICL_LANGUAGE_CODE=='es' ) { ?>
				    	<?php _e( 'Attorneys', 'ccnlaw' ); ?> <?php the_title(); ?> 
				    <?php } else { ?>
				    	<?php the_title(); ?> <?php _e( 'Attorneys', 'ccnlaw' ); ?>
				    <?php  } ?>
				     <span class="caret"></span>
				  </button>
				  
				  
				  <ul class="dropdown-menu attorneys" role="menu">
				    
				    
				    	<?php 
				    	
				    	
				    	
				    	$args = array(
								'post_type' => 'attorneys',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'taxonomy' => 'attorney-location',
								'attorney-location'    => $page_slug,
								'order' => 'ASC'
							);
    			$attorney_dropdown = new WP_Query( $args );
    			
					if ( $attorney_dropdown->have_posts() ) {  while ( $attorney_dropdown->have_posts() ) { 
								$attorney_dropdown->the_post(); ?>
								
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					<?php } // end if ?>
				    
				  </ul>
				  <?php wp_reset_query(); ?>
				  
				</div>
			
			</div>
			
			<div class="col-md-6">
				<h2 class="title"><?php _e( 'Where <span class="blue-text">we are ></span>', 'ccnlaw' ); ?> <?php the_title(); ?></h2>
			</div>
			<div class="col-md-3">
			
				<div class="btn-group visible-sm">
				  <button class="btn btn-default btn-md dropdown-toggle attorneys" type="button" data-toggle="dropdown" aria-expanded="false">
				    <?php the_title(); ?> <?php _e( 'Attorneys', 'ccnlaw' ); ?> <span class="caret"></span>
				  </button>
				  
				  
				  <ul class="dropdown-menu attorneys" role="menu">
				    
				    
				    	<?php 
				    	
				    	
				    	
				    	$args = array(
								'post_type' => 'attorneys',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'taxonomy' => 'attorney-location',
								'attorney-location'    => $page_slug,
								'order' => 'ASC'
							);
    			$attorney_dropdown = new WP_Query( $args );
    			
					if ( $attorney_dropdown->have_posts() ) {  while ( $attorney_dropdown->have_posts() ) { 
								$attorney_dropdown->the_post(); ?>
								
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					<?php } // end if ?>
				    
				  </ul>
				  <?php wp_reset_query(); ?>
				  
				</div>
				
				<div class="btn-group  hidden-xs">
				  <button class="btn btn-default btn-md dropdown-toggle locations" type="button" data-toggle="dropdown" aria-expanded="false">
				    <?php _e( 'Select City', 'ccnlaw' ); ?> <span class="caret"></span>
				  </button>
				  
				  
				  <ul class="dropdown-menu locations" role="menu">
				    
				    
				    	<?php 
				    	
				    	
				    	
				    	$args = array(
								'post_type' => 'locations',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'order' => 'ASC'
							);
    			$location_dropdown = new WP_Query( $args );
    			
					if ( $location_dropdown->have_posts() ) {  while ( $location_dropdown->have_posts() ) { 
								$location_dropdown->the_post(); ?>
								
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					<?php } // end if ?>
				    
				  </ul>
				  <?php wp_reset_query(); ?>
				  
				  
				  
			
			</div>
		</div>
	</div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="location-sec-1" class="row">
	<div class="container">
		<div class="row">
		<div class="col-xs-12">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>
		
		
		
		<?php 

$location = get_field('map_location');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>

				
	</div>
	</div>
	</div>
</section>
<section id="location-sec-mobile" class="row">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-group visible-xs-block">
				  <button class="btn btn-default btn-md dropdown-toggle attorneys col-xs-12" type="button" data-toggle="dropdown" aria-expanded="false">
				    <?php the_title(); ?> <?php _e( 'Attorneys', 'ccnlaw' ); ?> <span class="caret"></span>
				  </button>
				  
				  
				  <ul class="dropdown-menu attorneys" role="menu">
				    
				    
				    	<?php 
				    	
				    	
				    	
				    	$args = array(
								'post_type' => 'attorneys',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'taxonomy' => 'attorney-location',
								'attorney-location'    => $page_slug,
								'order' => 'ASC'
							);
    			$attorney_dropdown = new WP_Query( $args );
    			
					if ( $attorney_dropdown->have_posts() ) {  while ( $attorney_dropdown->have_posts() ) { 
								$attorney_dropdown->the_post(); ?>
								
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					<?php } // end if ?>
				    
				  </ul>
				  <?php wp_reset_query(); ?>
				  
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-group  visible-xs-block">
				  <button class="btn btn-default btn-md dropdown-toggle locations col-xs-12" type="button" data-toggle="dropdown" aria-expanded="false">
				    <?php _e( 'Select City', 'ccnlaw' ); ?> <span class="caret"></span>
				  </button>
				  
				  
				  <ul class="dropdown-menu locations" role="menu">
				    
				    
				    	<?php 
				    	
				    	
				    	
				    	$args = array(
								'post_type' => 'locations',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'order' => 'ASC'
							);
    			$location_dropdown = new WP_Query( $args );
    			
					if ( $location_dropdown->have_posts() ) {  while ( $location_dropdown->have_posts() ) { 
								$location_dropdown->the_post(); ?>
								
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					<?php } // end if ?>
				    
				  </ul>
				  <?php wp_reset_query(); ?>
			
			</div>
			</div>
		</div>
	</div>
</section>

<section id="location-sec-2" class="row">
	<div class="container">
		<div class="row landmark-description" style="background: url(<?php the_field('landmark_bg'); ?>); background-size: cover;">
			<div class="col-md-6 col-md-offset-3">
			
		
			<?php the_field('location_description'); ?>
			</div>
		</div>
	</div>
</section>


<section id="location-sec-3" class="row">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-3">
			<?php the_field('address'); ?>
			</div>
			<div class="col-sm-4 col-md-3">
			<?php the_field('contact_details'); ?>
			</div>
			<div class="col-sm-2 col-md-3"></div>
		</div>
	</div>
</section>


<?php endwhile; ?>
				<?php else : ?> <p> HOT DAMN! The query isn't populating the loop. hmph!</p>
				<?php endif; ?>

<?php get_template_part('parts/footer'); ?>
