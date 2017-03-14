<?php
/**
 * Widget Class.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 * Widget class.
 */
class Fusion_Widget_Flickr extends WP_Widget {

	/**
	 * Constructor.
	 *
	 * @access public
	 */
	function __construct() {

		$widget_ops = array(
			'classname'   => 'flickr',
			'description' => __( 'The most recent photos from flickr.', 'Avada' ),
		);
		$control_ops = array( 'id_base' => 'flickr-widget' );

		parent::__construct( 'flickr-widget', 'Avada: Flickr', $widget_ops, $control_ops );

	}

	/**
	 * Echoes the widget content.
	 *
	 * @access public
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance The settings for the particular instance of the widget.
	 */
	function widget( $args, $instance ) {

		extract( $args );

		$title       = apply_filters( 'widget_title', isset( $instance['title'] ) ? $instance['title'] : '' );
		$screen_name = $instance['screen_name'];
		$number      = $instance['number'];
		$api         = $instance['api'];

		if ( empty( $api ) ) {
			$api = 'c9d2c2fda03a2ff487cb4769dc0781ea';
		}

		echo wp_kses_post( $before_widget );

		if ( $title ) {
			echo wp_kses_post( $before_title . $title . $after_title );
		}
		?>
		<div id="fusion-<?php echo esc_attr( $args['widget_id'] ); ?>-images"></div>

		<?php if ( $screen_name && $number && $api ) : ?>

			<script type="text/javascript">
			function jsonFlickrApi(rsp) {
				if (rsp.stat != "ok"){
					// If this executes, something broke!
					return;
				}

				//variable "s" is going to contain
				//all the markup that is generated by the loop below
				var s = "";

				//this loop runs through every item and creates HTML
				for (var i=0; i < rsp.photos.photo.length; i++) {
					photo = rsp.photos.photo[ i ];

					//notice that "t.jpg" is where you change the
					//size of the image
					t_url = "//farm" + photo.farm +
					".static.flickr.com/" + photo.server + "/" +
					photo.id + "_" + photo.secret + "_" + "s.jpg";

					p_url = "//www.flickr.com/photos/" +
					photo.owner + "/" + photo.id;

					s +=  '<div class="flickr_badge_image"><a href="' + p_url + '">' + '<img alt="'+
					photo.title + '"src="' + t_url + '"/>' + '</a></div>';
				}

				$container = document.getElementById( 'fusion-<?php echo esc_attr( $args['widget_id'] ); ?>-images' );
				$container.innerHTML = s;
			}
			</script>

			<?php // @codingStandardsIgnoreStart ?>
			<script type="text/javascript" src="https://api.flickr.com/services/rest/?format=json&amp;method=flickr.photos.search&amp;user_id=<?php echo $screen_name; ?>&amp;api_key=<?php echo $api; ?>&amp;media=photos&amp;per_page=<?php echo $number; ?>&amp;privacy_filter=1"></script>
			<script type="text/javascript" src="https://api.flickr.com/services/rest/?format=json&amp;method=flickr.photos.search&amp;group_id=<?php echo $screen_name; ?>&amp;api_key=<?php echo $api; ?>&amp;media=photos&amp;per_page=<?php echo $number; ?>&amp;privacy_filter=1"></script>
			<?php // @codingStandardsIgnoreEnd ?>

		<?php
		endif;

		echo wp_kses_post( $after_widget );

	}

	/**
	 * Updates a particular instance of a widget.
	 *
	 * This function should check that `$new_instance` is set correctly. The newly-calculated
	 * value of `$instance` should be returned. If false is returned, the instance won't be
	 * saved/updated.
	 *
	 * @access public
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Settings to save or bool false to cancel saving.
	 */
	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title']       = strip_tags( $new_instance['title'] );
		$instance['screen_name'] = $new_instance['screen_name'];
		$instance['number']      = $new_instance['number'];
		$instance['api']         = $new_instance['api'];

		return $instance;

	}

	/**
	 * Outputs the settings update form.
	 *
	 * @access public
	 * @param array $instance Current settings.
	 */
	function form( $instance ) {

		$defaults = array(
			'title'       => __( 'Photos from Flickr', 'Avada' ),
			'screen_name' => '',
			'number'      => 6,
			'api'         => 'c9d2c2fda03a2ff487cb4769dc0781ea',
		);
		$instance         = wp_parse_args( (array) $instance, $defaults );
		$flickr_getid_url = 'http://idgettr.com/';
		$flickr_apply_url = 'http://www.flickr.com/services/apps/create/apply';
		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'Avada' ); ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'screen_name' ) ); ?>"><?php echo wp_kses_post( sprintf( __( 'Flickr ID (<a href="%s">Get your flickr ID</s>):', 'Avada' ), esc_url_raw( $flickr_getid_url ) ) ); ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr( $this->get_field_id( 'screen_name' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'screen_name' ) ); ?>" value="<?php echo esc_attr( $instance['screen_name'] ); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_attr_e( 'Number of photos to show:', 'Avada' ); ?></label>
			<input class="widefat" type="text" style="width: 30px;" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" value="<?php echo esc_attr( $instance['number'] ); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'api' ) ); ?>"><?php wp_kses_post( sprintf( __( 'API key (Use default or get your own from <a href="%s">Flickr APP Garden</a>):', 'Avada' ), esc_url_raw( $flickr_apply_url ) ) ); ?></label>
			<input class="widefat" type="text" id="<?php echo esc_attr( $this->get_field_id( 'api' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'api' ) ); ?>" value="<?php echo esc_attr( $instance['api'] ); ?>" />
			<small><?php wp_kses_post( sprintf( __( 'Default key is: %s', 'Avada' ), 'c9d2c2fda03a2ff487cb4769dc0781ea' ) ); ?></small>
		</p>

	<?php
	}
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
