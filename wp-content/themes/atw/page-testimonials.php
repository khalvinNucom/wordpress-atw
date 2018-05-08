<?php
/*
	* 	Template Name: Testimonials
*/
get_header(); ?>
<main role="main ">
	<!-- section -->
	<section class="">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- <hr class="hrHead"> -->
		<!-- article -->
		<div class="">
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
				<h3><?php the_content(); ?></h3>
				
				<br class="clear">
			
			</article>
		</div>

				<div class="testimonial-section">
						<?php
							$args = array(
								'post_type' => 'our_testimonial',
								'posts_per_page' => -1,
								'orderby' => 'date',
								'order' => 'DESC',
						); ?>
						
						<ul class="testimonial-list">
							<?php $testimonials = new WP_Query($args); while($testimonials->have_posts()): $testimonials-> the_post(); ?>
							<div class="spacer">
									<li>

										<h3> <?php the_title(); ?></h3>
										<div class="testimonial-content">
										<?php the_content(); ?>
										</div>
										<div class="from-testimonial">
											<p><?php the_field('name') ?></p>
											<p><?php the_field('from') ?></p>

										</div>

									</li>
								</div>
															
							
							<?php endwhile; wp_reset_postdata(); ?>
						</ul>
				</div>
				
		<!-- con -->
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