</div><!-- /.container-fluid -->

<div class="footer">  
	<div class="container">
		<div class="row" id="footer-content">
			<div class="col-md-8">
				<img class="footer-logo" src="<?php bloginfo('template_url'); ?>/img/footer-logo.jpg"><br>
				
				<div class="clear"><?php wp_nav_menu( array('theme_location' => 'footer-nav' )); ?></div>
				
				<p class="clear">
				<?php _e( 'Unless otherwise indicated, attorneys listed in this Website are not certified by the Texas Board of Legal Specialization. Copyright ©2015 Cacheaux, Cavazos & Newton, L.L.P. All Rights Reserved. Home Office: San Antonio, Texas.', 'ccnlaw' ); ?>
				</p>
			</div>
		  
		  <div class="col-xs-12 social visible-xs-block">
					  <a href="https://twitter.com/ccnlaw" target="_blank">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>
						
						<a href="https://www.linkedin.com/company/cacheaux-cavazos-%26-newton" target="_blank">
							<span class="fa-stack fa-lg">
							  <i class="fa fa-linkedin fa-stack-1x"></i>
							</span>
						</a>
				</div>
 		</div>
		
	</div>
</div>



	<?php wp_footer(); ?>
	
	
	</body>
</html>
