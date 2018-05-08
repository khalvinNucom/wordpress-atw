<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper">

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<h2> <?php the_title(); ?></h2>
		<!-- <hr class="hrHead"> -->
		<!-- article -->
		<div class="">
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
				<?php the_content(); ?>
				
				<br class="clear">
				<?php edit_post_link(); ?>
			</article>
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
