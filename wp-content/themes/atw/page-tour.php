<?php get_header();
/*
* Template Name: Tours
*/
?>
<main role="main">
	<!-- section -->

	<section class="wrapper">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<h2> <span> <?php the_title(); ?></span></h2>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
				$args = array(
					'post_type' => 'our_tours',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC',
			); ?>

			<ul class="tours">
				<?php $tours = new WP_Query($args); while($tours->have_posts()): $tours-> the_post(); ?>

				<li class="grid2-4">
					<div class="featured-tour">
						<?php the_post_thumbnail('featuredTour'); ?>

						<a href="<?php the_permalink(); ?>" class="more-info"> 
							<img src="<?php echo get_template_directory_uri();?> /img/moreinfo.png">
						</a>

					</div> <!-- feature-tour -->
					
					<a href="<?php the_permalink();?> ">
					<h3> <?php the_title(); ?></h3>
					</a>

					<?php 
						//dates
						$format = ' d F, Y';
						$date = strtotime(get_field('leaving_date'));
						$leavingDate = date_i18n( $format, $date );

						$returningDate = strtotime(get_field('returning_date'));
						$returningDate = date_i18n( $format, $returningDate );

					 ?>

					 <div class="date-price clear">
					 	<p class="date"><?php  echo $leavingDate.' - '.$returningDate; ?></p>
					 	<p class="price">	<?php the_field('price') ?></p>
					 </div> <!-- date - price -->
					 <div class="tour-description">
					 		<?php the_field('small_description')	 ?>

					 	</div>

					 

				</li>

				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			
			<br class="clear">
		</article>
		<!-- /article -->
		<?php endwhile; ?>
		<?php else: ?>
		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->
		<?php endif; ?>
	</section>
	<!-- /section -->
</main>
<?php get_footer(); ?>