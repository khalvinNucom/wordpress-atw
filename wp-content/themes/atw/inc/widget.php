<?php 

/**
 * Adds UpcomingTours widget.
 */
class UpcomingTours extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'UpcomingTours', // Base ID
			esc_html__( 'Upcomming Tours', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'show 2 upcomming tours', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) { 
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
				$query = array(
					'post_type' => 'our_tours',
					'posts_per_page' => '2',
					'orderby' => 'title',
					'order' => 'ASC'

				); ?>

					<ul class="tours list-footer">
				<?php $tours = new WP_Query($query);
				while ( $tours->have_posts()): $tours-> the_post(); ?>

					<li class="clear">
						<div class="featured-tour grid2-4">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="content-tour grid2-4 omega">
							<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>

					</li>

			<?php endwhile; wp_reset_postdata(); ?>
		</ul>


<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}
 	
} // class UpcomingTours

// register UpcomingTours widget
function register_UpcomingTours() {
    register_widget( 'UpcomingTours' );
}
add_action( 'widgets_init', 'register_UpcomingTours' );



/*Blog*/

class Blog extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Blog', // Base ID
			esc_html__( 'Blog', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'show random blog', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) { 
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
				$query = array(
					'post_type' => 'post',
					'posts_per_page' => '2',
					'orderby' => 'rand',
					'order' => 'ASC'

				); ?>

					<ul class="tours list-footer">
				<?php $post = new WP_Query($query);
				while ( $post->have_posts()): $post-> the_post(); ?>

					<li class="clear">
						<div class="featured-blog grid2-4">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="content-blog grid2-4 omega">
							<h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>

					</li>

			<?php endwhile; wp_reset_postdata(); ?>
		</ul>


<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}
 	
} // class UpcomingTours

// register UpcomingTours widget
function register_Blog() {
    register_widget( 'Blog' );
}
add_action( 'widgets_init', 'register_Blog' );


/*coupons ===========================================================================================================================*/

class coupon extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'coupon', // Base ID
			esc_html__( 'coupon', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'coupon', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) { 
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
				$query = array(
					'post_type' => 'coupons',
					'posts_per_page' => '2',
					'orderby' => 'date',
					'order' => 'DESC'

				); ?>

					<ul class="coupon list-footer">
				<?php $coupons = new WP_Query($query);
				while ( $coupons->have_posts()): $coupons-> the_post(); ?>

					<li class="clear">
						<div class="featured-coupon">
							<img src="<?php the_field('image'); ?>">
						</div>
						
					</li>

			<?php endwhile; wp_reset_postdata(); ?>
		</ul>


<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}
 	
} // class UpcomingTours

// register UpcomingTours widget
function register_coupon() {
    register_widget( 'coupon' );
}
add_action( 'widgets_init', 'register_coupon' );


 ?>