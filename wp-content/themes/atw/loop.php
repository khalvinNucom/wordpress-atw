

<?php if (have_posts()):
$i = 0;
?>


<?php
while (have_posts()) : the_post(); ?>

<?php if($i == 0 ){ ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('featuredBlog'); // Declare pixel size you need inside the array ?>
		</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		<div class="clear">
			<div class="grid1-3 post-information">
				<!-- post details --> <strong>  </strong>
				<span class="date"><strong><?php _e( 'Published', 'html5blank' ); ?> </strong><?php the_time('F j, Y'); ?> </span>
				<br>
				<span><strong> <?php _e( 'by:', 'html5blank' );?> </strong> <?php the_author_posts_link(); ?></span>
	
				<p class="category"><strong> <?php _e( 'Category: ', 'html5blank' );?> </strong><?php the_category(', '); // Separated by commas ?></p>
				<!-- /post details -->
			</div>
			<div class="grid2-3 post-content">
				<h3>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h3>
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				<!-- /post title -->
			</div>
			
			</div> <!-- clear -->
			 
		</article>
		<!-- /article -->

	<?php }else{ ?>

				<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- post thumbnail -->

				<div class="clear">
					<div class="grid1-3">
						<!-- post details -->
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
							</a>
							<?php endif; ?>
				<!-- /post thumbnail -->
						<!-- /post details -->
					</div>
					<div class="grid2-3">
						<h3>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h3>
						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
						<!-- /post title -->
					</div>
					
					</div> <!-- clear -->
					 
				</article>
				<!-- /article -->


	<?php } ?>


	<?php $i++?>
	<?php endwhile; ?>
	<?php else: ?>
	<!-- article -->
	<article>
		<h2> <span><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></span></h2>
	</article>
	<!-- /article -->
	<?php endif; ?>