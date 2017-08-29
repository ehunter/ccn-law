<?php /* Template Name: Locations - Interactive Map */ ?>

<?php get_template_part('parts/header'); ?>
				
<section id="locations-map" class="row">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="map-container">
			
				<img class="map-bg" src="<?php bloginfo('template_url'); ?>/img/map-bg.jpg">
				<a class="map-point austin" href="<?php echo get_permalink(icl_object_id(114, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point ciudad-juarez" href="<?php echo get_permalink(icl_object_id(361, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point guadalajara" href="<?php echo get_permalink(icl_object_id(2107, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point matamoros" href="<?php echo get_permalink(icl_object_id(366, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point mcallen" href="<?php echo get_permalink(icl_object_id(189, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point mexico-city" href="<?php echo get_permalink(icl_object_id(354, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point monterrey" href="<?php echo get_permalink(icl_object_id(359, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point queretaro" href="<?php echo get_permalink(icl_object_id(351, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point reynosa" href="<?php echo get_permalink(icl_object_id(364, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point san-antonio" href="<?php echo get_permalink(icl_object_id(105, 'locations', false) ); ?>"><div></div></a>
				<a class="map-point tijuana" href="<?php echo get_permalink(icl_object_id(357, 'locations', false) ); ?>"><div></div></a>
				
				
				<ul>
				<li class="austin"><a href="<?php echo get_permalink(icl_object_id(114, 'locations', false) ); ?>"><?php _e( 'Austin', 'ccnlaw' ); ?></a></li>
				<li class="ciudad-juarez"><a href="<?php echo get_permalink(icl_object_id(361, 'locations', false) ); ?>"><?php _e( 'Ciudad Juarez', 'ccnlaw' ); ?></a></li>
				<li class="guadalajara"><a href="<?php echo get_permalink(icl_object_id(2107, 'locations', false) ); ?>"><?php _e( 'Guadalajara', 'ccnlaw' ); ?></a></li>
				<li class="matamoros"><a href="<?php echo get_permalink(icl_object_id(366, 'locations', false) ); ?>"><?php _e( 'Matamoros', 'ccnlaw' ); ?></a></li>
				<li class="mcallen"><a href="<?php echo get_permalink(icl_object_id(189, 'locations', false) ); ?>"><?php _e( 'McAllen', 'ccnlaw' ); ?></a></li>
				<li class="mexico-city"><a href="<?php echo get_permalink(icl_object_id(354, 'locations', false) ); ?>"><?php _e( 'Mexico City', 'ccnlaw' ); ?></a></li>
				<li class="monterrey"><a href="<?php echo get_permalink(icl_object_id(359, 'locations', false) ); ?>"><?php _e( 'Monterrey', 'ccnlaw' ); ?></a></li>
				<li class="queretaro"><a href="<?php echo get_permalink(icl_object_id(351, 'locations', false) ); ?>"><?php _e( 'Queretaro', 'ccnlaw' ); ?></a></li>
				<li class="reynosa"><a href="<?php echo get_permalink(icl_object_id(364, 'locations', false) ); ?>"><?php _e( 'Reynosa', 'ccnlaw' ); ?></a></li>
				<li class="san-antonio"><a href="<?php echo get_permalink(icl_object_id(105, 'locations', false) ); ?>"><?php _e( 'San Antonio', 'ccnlaw' ); ?></a></li>
				<li class="tijuana"><a href="<?php echo get_permalink(icl_object_id(357, 'locations', false) ); ?>"><?php _e( 'Tijuana', 'ccnlaw' ); ?></a></li>
				

			</ul>
			</div>
			</div>
		</div>
	</div>
</section>


  <?php get_template_part('parts/prefoot'); ?> 

<?php get_template_part('parts/footer'); ?>
