<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="wrapper">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
				<h2><span> <?php the_title(); ?></span></h2>

		
			<!-- /post title -->

			<!-- post details -->
					<div class="grid1-4 post-information">
						<div class="sub-container">	
						<!-- post details --> <strong>  </strong>
						<span class="date"><strong><?php _e( 'Published', 'html5blank' ); ?> </strong><?php the_time('F j, Y'); ?> </span>
						<br>
						<span><strong> <?php _e( 'by:', 'html5blank' );?> </strong> <?php the_author_posts_link(); ?></span>
						<p class="category"><strong> <?php _e( 'Category: ', 'html5blank' );?> </strong><?php the_category(', '); // Separated by commas ?></p>
						</div>
						<!-- Go to www.addthis.com/dashboard to customize your tools -->
						<div class="share">
								<div class="pShare"> Share: </div>
								<div class="addthis_inline_share_toolbox"></div>
						</div>
						<!-- /post details -->
					</div>
					<!-- <div class="addthis_inline_share_toolbox grid1-4" ></div> -->
			<!-- /post details -->
					<div class="grid3-4 ">
						<?php the_content(); // Dynamic Content ?>
						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
						<?php comments_template(); ?>
					</div>


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
