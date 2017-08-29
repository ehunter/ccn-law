<?php
/*
Template Name: Home
*/
?>

<?php get_template_part('parts/header'); ?>
				
<section id="home-sec-1" class="row">
	<div class="container">
		<div class="row">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h3 class="title-box"><?php the_field('about_us_title'); ?></h3>
				<div class="col-md-10 col-md-offset-1">
				<?php the_field('about_us_description'); ?></div>
				<div class="col-md-1"></div>
				<?php endwhile; ?>
				<?php else : ?> <p> HOT DAMN! The query isn't populating the loop. hmph!</p>
				<?php endif; ?>
			</div>
		</div>
</section>

<section id="home-sec-2" class="row">
	<div class="container">
		<div class="row hidden-sm hidden-xs">
			<div class="col-md-4">
				
				<?php $args = array(
								'post_type' => 'practice_areas',
								'posts_per_page' => 6,
								'orderby' => 'title',
								'taxonomy' => 'practice-area-categories',
								'practice-area-categories'    => 'home-featured-left',
								'order' => 'ASC'
							);
    			$left_practice_area_query = new WP_Query( $args );
    			
					if ( $left_practice_area_query->have_posts() ) { ?> <ul>
						<?php	 while ( $left_practice_area_query->have_posts() ) { 
								$left_practice_area_query->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					</ul>
					<?php } // end if ?>

				
			</div>
			<div class="col-md-4">
			<?php if(have_posts()): while(have_posts()): the_post();?>
				<h3 class="title-box"><?php the_field('center_column_title'); ?></h3>
				<a class="read-more" href="<?php _e( '/what-we-do', 'ccnlaw' ); ?>"><?php the_field('read_more_text'); ?></a>
				<?php the_field('center_column_description'); ?>
				<?php endwhile; ?>
		        <?php else: ?> 
		        <?php endif;?>
			</div>
			<div class="col-md-4 practice-areas-left">
				
				<?php $args = array(
								'post_type' => 'practice_areas',
								'posts_per_page' => 6,
								'orderby' => 'title',
								'taxonomy' => 'practice-area-categories',
								'practice-area-categories'    => 'home-featured-right',
								'order' => 'ASC'
							);
    			$right_practice_area_query = new WP_Query( $args );
    			
					if ( $right_practice_area_query->have_posts() ) { ?> <ul>
						<?php	 while ( $right_practice_area_query->have_posts() ) { 
								$right_practice_area_query->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					</ul>
					<?php } // end if ?>
				
			</div>
		</div>
		<div class="row hidden-lg hidden-md">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<?php if(have_posts()): while(have_posts()): the_post();?>
				<div class="panel-group" role="tablist">
				    <div class="panel panel-default">
				      <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
				        <h4 class="panel-title">
				          <a class="collapsed" data-toggle="collapse" href="#practiceAreasMobileGroup" aria-expanded="false" aria-controls="practiceAreasMobileGroup">
				           <h3 class="title-box"><?php the_field('center_column_title'); ?><b class="caret"></b></h3>
				          </a>
				        </h4>
				      </div>
				      <div id="practiceAreasMobileGroup" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
      
      <?php $args = array(
								'post_type' => 'practice_areas',
								'posts_per_page' => -1,
								'orderby' => 'title',
								'order' => 'ASC'
							);
    			$right_practice_area_query = new WP_Query( $args );
    			
					if ( $right_practice_area_query->have_posts() ) { ?> <ul class="list-group">
						<?php	 while ( $right_practice_area_query->have_posts() ) { 
								$right_practice_area_query->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							
					<?php	} // end while ?>
					</ul>
					<?php } // end if ?>
					
					<?php wp_reset_query(); ?>
      </div>
    </div>
				</div>
  
  			<a class="read-more" href="<?php _e( '/what-we-do ', 'ccnlaw' ); ?>"><?php the_field('read_more_text'); ?></a>
  
				<div class="col-sm-8 col-sm-offset-2 col-xs-12"><?php the_field('center_column_description'); ?></div>
				<?php endwhile; ?>
		        <?php else: ?> 
		        <?php endif;?>
			</div>
		</div>
	</div>
</section>

<section id="home-sec-3" class="row">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
		<?php $feed = simplexml_load_file('http://www.banxico.org.mx/rsscb/rss?BMXC_canal=fix&BMXC_idioma=en');
		
		
				foreach ($feed->item as $item) {
				  $ns_dc = $item->children('http://purl.org/dc/elements/1.1/');
				  $ns_cb = $item->children('http://staging.bis.org/rss-cb/1.0/');
				  
				  $date = date('D. d M Y G:i:s e', strtotime($ns_dc->date));
				  $current_rate = $ns_cb->statistics->exchangeRate->value;
				  echo '<div class="exchange-rate"><span class="light-green-txt">Exchange Rate: </span>' .$date. ': 1 United States Dollar = ' .$current_rate. ' Mexican Peso</div>' ;
				  
				} 
				
				?>	
		
		
		
		<?php
		
		// define the namespaces that we are interested in
		$ns = array
		(
		        'content' => 'http://purl.org/rss/1.0/modules/content/',
		        'wfw' => 'http://wellformedweb.org/CommentAPI/',
		        'dc' => 'http://purl.org/dc/elements/1.1/'
		);
		 
		// obtain the articles in the feeds, and construct an array of articles
		 
		$articles = array();
		 
		// step 1: get the feed
		$blog_url = 'http://www.banxico.org.mx/rsscb/rss?BMXC_canal=fix&BMXC_idioma=en';
		 
		$rawFeed = file_get_contents($blog_url);
		$xml = new SimpleXmlElement($rawFeed);
		 
		// step 2: extract the channel metadata
		 
		$channel = array();
		$channel['title']       = $xml->channel->title;
		$channel['link']        = $xml->channel->link;
		$channel['description'] = $xml->channel->description;
		$channel['pubDate']     = $xml->pubDate;
		$channel['timestamp']   = strtotime($xml->pubDate);
		$channel['generator']   = $xml->generator;
		$channel['language']    = $xml->language;
		 
		// step 3: extract the articles
		 
		foreach ($xml->channel->item as $item)
		{
		        $article = array();
		        $article['channel'] = $blog;
		        $article['title'] = $item->title;
		        $article['link'] = $item->link;
		        $article['comments'] = $item->comments;
		        $article['pubDate'] = $item->pubDate;
		        $article['timestamp'] = strtotime($item->pubDate);
		        $article['description'] = (string) trim($item->description);
		        $article['isPermaLink'] = $item->guid['isPermaLink'];
		 
		        // get data held in namespaces
		        $content = $item->children($ns['content']);
		        $dc      = $item->children($ns['dc']);
		        $wfw     = $item->children($ns['wfw']);
		 
		        $article['creator'] = (string) $dc->creator;
		        foreach ($dc->subject as $subject)
		                $article['subject'][] = (string)$subject;
		 
		        $article['content'] = (string)trim($content->encoded);
		        $article['commentRss'] = $wfw->commentRss;
		 
		        // add this article to the list
		        $articles[$article['timestamp']] = $article;
		        
		       
		        
		        
		}
		 
		 $limit = 1;
			for($x=0;$x<$limit;$x++) {
				
				 echo $article['title'];
			}

		// at this point, $channel contains all the metadata about the RSS feed,
		// and $articles contains an array of articles for us to repurpose\
	
		
		?>
				
		</div>
		
		<div class="col-md-4 blog">
			<div class="blog-container">
			 <?php $args = array(
								'post_type' => 'post',
								'posts_per_page' => 1,
								'orderby' => 'date',
								'order' => 'DESC'
							);
    			$right_practice_area_query = new WP_Query( $args );
    			
					if ( $right_practice_area_query->have_posts() ) { ?> 
						<?php	 while ( $right_practice_area_query->have_posts() ) { 
								$right_practice_area_query->the_post(); ?>
							<?php  if ( has_post_thumbnail() ) { ?>
		           				<div>
		           					<?php the_post_thumbnail('blog-home-featured', array( 'class' => 'img-responsive' )); ?>
		           				</div>
				           	<?php } ?>
				           	<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
				           	
				           	<?php the_excerpt(); ?>
							
					<?php	} // end while ?>
					
					<?php } // end if ?>
					
					<?php wp_reset_query(); ?>
			
			</div>
		</div>
		
		<div class="col-md-6 col-md-offset-2 blog">
			
			 <?php $args = array(
								'post_type' => 'post',
								'posts_per_page' => 3,
								'offset'=> 1,
								'orderby' => 'date',
								'order' => 'DESC'
							);
    			$right_practice_area_query = new WP_Query( $args );
    			
					if ( $right_practice_area_query->have_posts() ) { ?> 
						<?php	 while ( $right_practice_area_query->have_posts() ) { 
								$right_practice_area_query->the_post(); ?> 
								<div class="excerpt">
								<div class="col-xs-6 col-sm-4">
							<?php  if ( has_post_thumbnail() ) { ?>
		           				
		           					<?php the_post_thumbnail('blog-excerpt', array( 'class' => 'img-responsive' )); ?>
		           				
				           	<?php } else { ?> 
				           	
				           	<img width="120" height="85" src="<?php bloginfo('template_url'); ?>/img/ccn-blog-filler.png" class="img-responsive wp-post-image" alt="<?php the_title(); ?>" />
				           	<?php } ?>
				           	</div>
				           	<div class="col-xs-6 col-sm-8">
				           	<span class="light-green-txt entry-date"><?php echo get_the_date('M-Y'); ?></span>
				           	<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
				           	</div>
				           	</div>
				           	
					<?php	} // end while ?>
								
					<?php } // end if ?>
					
					<?php wp_reset_query(); ?>
			
			
		</div>

			
		</div>
	</div>
</section>


  <?php get_template_part('parts/prefoot'); ?> 




<?php get_template_part('parts/footer'); ?>
