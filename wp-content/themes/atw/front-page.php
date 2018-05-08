<?php get_header(); ?>



<div class="wrapper">



	<section class="upcoming-tours">

		<h2><span> Upcoming Travels </span></h2>

		<?php
		$args = array(
		'post_type' => 'our_tours',
		'posts_per_page' => 3,
		'orderby' => 'menu_order',
		'order' => 'ASC',
		); ?>
		<ul>

			<?php $tours = new WP_Query($args); while($tours->have_posts()): $tours-> the_post(); ?>
			
			<li class="grid1-3">
				
				<div class="image">
					
					<a href=" <?php the_permalink() ?>">
						<img class="more" src="<?php echo get_stylesheet_directory_uri();?>/img/moreinfo.png">
					</a>
					
					<?php 	the_post_thumbnail('featuredTour'); ?>
					
				</div>
				
				<div class="content-tours">
					
					<?php
					//dates
					$format = ' d F, Y';
					$date = strtotime(get_field('leaving_date'));
					$leavingDate = date_i18n( $format, $date );
					$returningDate = strtotime(get_field('returning_date'));
					$returningDate = date_i18n( $format, $returningDate );
					?>
					
					<div class="date-price clear">
						
						<h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						
						<p class="date"><?php  echo $leavingDate.' - '.$returningDate; ?></p>
						
						</div> <!-- date - price -->
						
					</div>
					
				</li>
				
				<?php endwhile; wp_reset_postdata(); ?>
				
			</ul>
			
		</section>
	
		<div class="bottom-content">
			
			<section class="latest-entries grid2-3">
				<h2><span>Travel Trips From Our Blog </span></h2>
				<!-- <div class="lineUnder"></div>  --> 	<!--  trial version of line in title-->
				
				<ul>
					
					<?php
					$args =array(
					'post_type' => 'post',
					'posts_per_page' => '2'
					);
					
					$tips = new WP_Query($args);
					while ( $tips-> have_posts()): $tips-> the_post();
					?>
					
					<li class="clear">
						
						<div class="imageTips grid1-3">
							<?php the_post_thumbnail('medium'); ?>
						</div>
						
						<div class="contenTip grid2-3 omega">
							<h3><?php the_title(); ?></h3>
							<?php html5wp_excerpt('html5_index') ?>
						</div>
						
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
					
				</ul>
				
				
				</section> <!-- latest-entries -->
				
				
				<section class="latest-Testimonials grid1-3 ">
					
					<h2><span>Testimonials</span></h2>
					
					<?php
					$args = array(
					'post_type' => 'our_testimonial',
					'posts_per_page' => 2,
					'orderby' => 'date',
					'order' => 'DESC',
					); ?>
					
					<ul class="">
						
						<?php $testimonials = new WP_Query($args);
						 while($testimonials->have_posts()): $testimonials-> the_post(); ?>
						
						<li>
							<div class="testimonial-content quote ">
								
								<?php html5wp_excerpt('html5wp_custom_post') ?>
								
								<div class="from-testimonial ">
									
									<?php $name = get_field('name') ?>
									<?php $from = get_field('from') ?>
									<p><strong><?php echo $name . ', '. $from ?></strong></p>
									
								</div>
								
							</div>
						</li>
						
						<?php endwhile; wp_reset_postdata(); ?>
						<a class="viewAll" href="<?php echo get_permalink(20) ?>">View All</a>
					</ul>
				</section>
			</div>
			<?php get_footer(); ?>